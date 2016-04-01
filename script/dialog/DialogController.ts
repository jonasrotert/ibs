import {Dialog} from "./Dialog";

export class DialogController {
    private currentDialog:Dialog;

    constructor() {
        this.setEventListeners(this.catchAllImages());
    }

    private setEventListeners(imgElems:[HTMLDivElement]):void {
        imgElems.forEach((imgElem) => {
            imgElem.addEventListener("click", () => this.openDialog(imgElem.getAttribute("src"), imgElem.getAttribute("caption")));
        });
    }

    private openDialog(src:string, caption:string) {
        this.currentDialog = new Dialog(src, caption);
        this.currentDialog.open();
    }

    private catchAllImages():[HTMLDivElement] {
        var imgElems = document.querySelectorAll(".gallery .gallery-item .gallery-icon");
        var returnList:[HTMLDivElement] = <[HTMLDivElement]>[];

        for (var i = 0; imgElems.length > i; i++) {
            var dtElement = <HTMLDTElement>imgElems.item(i);
            var aElement = <HTMLAnchorElement>dtElement.childNodes.item(1);
            var imgElem = <HTMLImageElement>aElement.firstChild;

            var divElem = <HTMLDivElement>document.createElement("div");
            divElem.style.backgroundImage = "url('" + imgElem.src + "')";
            divElem.classList.add("thumbnail");
            divElem.setAttribute("src", imgElem.src);

            var caption:string = null;
            divElem.setAttribute("caption", "");
            if (dtElement.nextElementSibling) {
                if ((<HTMLElement>dtElement.nextElementSibling).tagName == "P") {
                    caption = (<HTMLElement>dtElement.nextElementSibling).innerText;
                    divElem.setAttribute("caption", caption.trim());
                }
            }

            dtElement.appendChild(divElem);
            aElement.remove();

            returnList.push(divElem);
        }

        return returnList;
    }
}