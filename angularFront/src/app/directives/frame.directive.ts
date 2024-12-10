import { Directive, ElementRef } from '@angular/core';

@Directive({
  selector: '[appFrame]'
})
export class FrameDirective {

  constructor(el: ElementRef) {
    el.nativeElement.style.boxShadow = '5px 5px 20px grey';
   }

}
