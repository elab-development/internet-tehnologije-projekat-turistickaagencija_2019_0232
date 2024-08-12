import { Component, EventEmitter, Input, Output } from '@angular/core';
import { Accommodation } from 'src/app/model/accommodation';

@Component({
  selector: 'app-accommodation-card',
  templateUrl: './accommodation-card.component.html',
  styleUrls: ['./accommodation-card.component.scss']
})
export class AccommodationCardComponent {
  @Input() accommodation: Accommodation;

  @Output() accommodationBooked = new EventEmitter<void>();

  handleBook(): void {
    this.accommodationBooked.emit();
  }
}
