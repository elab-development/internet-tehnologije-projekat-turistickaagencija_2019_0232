import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'tax'
})
export class TaxPipe implements PipeTransform {

  transform(value: number): string {
    return value + '$ + Uracunat porez: ' + (0.2 * value).toFixed(2) + '$';
  }

}
