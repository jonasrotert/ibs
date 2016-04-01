export class Dialog {
    private backgroundElement:HTMLElement;
    private dialogElement:HTMLElement;

    constructor(src:string, caption) {
        this.backgroundElement = <HTMLElement>document.querySelector(".dialogwrapper>.background");
        this.dialogElement = <HTMLElement>document.querySelector(".dialogwrapper>.dialog");
        this.backgroundElement.addEventListener("click", () => this.close());

        this.clear();

        var imgElem = document.createElement("img");
        var captionElement = document.createElement("p");
        captionElement.classList.add("caption");
        captionElement.innerText = caption;

        imgElem.setAttribute("src", src);

        this.dialogElement.appendChild(imgElem);
        this.dialogElement.appendChild(captionElement);
    }

    private clear():void {
        while (this.dialogElement.hasChildNodes()) {
            this.dialogElement.removeChild(this.dialogElement.lastChild);
        }
    }

    public close():void {
        this.clear();
        this.backgroundElement.classList.remove("show");
        this.dialogElement.classList.remove("show");
    }

    public open():void {
        this.backgroundElement.classList.add("show");
        this.dialogElement.classList.add("show");
    }
}