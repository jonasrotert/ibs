import {Slider} from "./Slider";

export class SlideProcess {
    private static slider:Slider;
    private static currentProcessId:number = 0;
    private static duration:number = 5000;

    private direction:number;
    private ownProcessId:number;

    constructor(slider:Slider, direction:number) {
        SlideProcess.slider = (SlideProcess.slider == null) ? slider : SlideProcess.slider;

        // Switch current process.
        this.ownProcessId = SlideProcess.currentProcessId + 1;
        SlideProcess.currentProcessId = this.ownProcessId;

        this.direction = direction;

        setTimeout(()=> this.body(), SlideProcess.duration);
    }

    private body() {
        if (this.ownProcessId == SlideProcess.currentProcessId) {
            if (this.direction == 1) {
                // switch forward, if available. if not, switch backward.
                if (SlideProcess.slider.getCurrentIndex() < SlideProcess.slider.getLength() - 1) {
                    SlideProcess.slider.switchToNext();
                } else {
                    SlideProcess.slider.switchToPrevious();
                    this.direction = -1;
                }
            } else {
                // switch backward, if available. if not, switch forward.
                if (SlideProcess.slider.getCurrentIndex() > 0) {
                    SlideProcess.slider.switchToPrevious();
                } else {
                    SlideProcess.slider.switchToNext();
                    this.direction = 1;
                }
            }

            setTimeout(()=> this.body(), SlideProcess.duration);
        }
    }
}