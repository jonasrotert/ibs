import {SlideProcess} from "./SlideProcess";
import {Slide} from "./Slide";

export class Slider {
    private rootElement:HTMLElement;
    private currentProcess:SlideProcess;
    private slides:Array<Slide> = [];
    private currentSlideIndex:number = 0;

    constructor() {
        // Get img uris and create slides of them.
        this.getURIs((uris:[String])=> this.createSlides(uris, () => {
            // detect root elem.
            this.rootElement = <HTMLElement>document.querySelector("#slider");

            if (!this.rootElement) return;

            this.slides.forEach((slide:Slide) => {
                this.rootElement.appendChild(slide.getElement());
            });

            this.currentProcess = new SlideProcess(this, 1);

            this.setWidthOfSlideImages(this.rootElement.offsetWidth);

            window.addEventListener("resize", () => {
                this.setWidthOfSlideImages(this.rootElement.offsetWidth);
                this.switchToCurrent();
            });

            // Set Eventhandler.
            var previousButton = document.querySelector("#slider>button#prev");
            var nextButton = document.querySelector("#slider>button#next");
            previousButton.addEventListener("click", () => this.handlePreviousButtonClicked());
            nextButton.addEventListener("click", () => this.handleNextButtonClicked());
        }));
    }

    private handlePreviousButtonClicked():void {
        if (this.currentSlideIndex > 0) {
            // Switch
            this.switchToPrevious();

            // Create new process.
            this.currentProcess = new SlideProcess(this, -1);
        }
    }

    private handleNextButtonClicked():void {
        if (this.currentSlideIndex < this.getLength() - 1) {
            // Switch
            this.switchToNext();

            // Create new process.
            this.currentProcess = new SlideProcess(this, 1);
        }
    }

    public getLength():number {
        return this.slides.length;
    }

    public getCurrentIndex():number {
        return this.currentSlideIndex;
    }

    public switchToPrevious() {
        this.currentSlideIndex = (this.currentSlideIndex == 0) ? this.currentSlideIndex : this.currentSlideIndex - 1;
        this.switchToCurrent();
    }

    public switchToNext() {
        this.currentSlideIndex = (this.currentSlideIndex + 1 == this.slides.length) ? this.currentSlideIndex : this.currentSlideIndex + 1;
        this.switchToCurrent();
    }

    private switchToCurrent() {
        this.slides[0].setMarginLeft(this.currentSlideIndex * -this.rootElement.offsetWidth);
    }

    private getURIs(callback:(uris:[String])=>void) {
        // Init HTTP-Request.
        var xmlHttp = new XMLHttpRequest();

        // Define Callback.
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                callback(JSON.parse(xmlHttp.responseText));
            }
        };

        // Execute Request.
        xmlHttp.open("GET", "http://ibs.jonasrotert.de/wp-content/themes/ibs/img/all.php", true);
        xmlHttp.send(null);
    }

    private createSlides(uris:[String], callback:()=>void):void {
        uris.forEach((uri) => {
            this.slides.push(new Slide(uri));
        });

        callback();
    }

    private setWidthOfSlideImages(width:number):void {
        this.slides.forEach((slide:Slide) => {
            slide.setImageWidth(width);
        });
    }
}