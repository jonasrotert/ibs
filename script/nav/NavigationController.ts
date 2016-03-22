export class NavigationController {
    private elem:HTMLElement;
    private nav:HTMLElement;

    constructor() {
        this.elem = <HTMLElement>document.querySelector("nav.mobile .toggle");
        this.nav = <HTMLElement>document.querySelector("nav.mobile ul.menu");

        this.elem.addEventListener("click", () => {
            this.toggleNavigation();
        });
    }

    private toggleNavigation() {
        this.nav.classList.toggle("show");
    }
}