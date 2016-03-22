export class Slide {
    private baseUrl = "img/banner/";
    private elem:HTMLElement;
    private imgElement:HTMLElement;

    constructor(uri:String) {
        this.elem = document.createElement("section");
        this.elem.classList.add("slide");
        this.imgElement = document.createElement("img");
        this.imgElement.setAttribute("lightbox", "");
        this.imgElement.setAttribute("src", this.baseUrl + uri);
        this.elem.appendChild(this.imgElement);
    }

    public getElement():HTMLElement {
        return this.elem;
    };

    public setMarginLeft(marginLeft:number) {
        this.elem.style.marginLeft = marginLeft + "px";
    }

    public setImageWidth(width:number):void {
        this.imgElement.style.width = width + "px";
    }
}