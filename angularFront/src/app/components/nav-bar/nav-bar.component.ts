import { Component, OnInit } from '@angular/core';
import { BookingService } from 'src/app/services/booking.service';

@Component({
  selector: 'app-nav-bar',
  templateUrl: './nav-bar.component.html',
  styleUrls: ['./nav-bar.component.scss']
})
export class NavBarComponent implements OnInit {
  totalPrice: number = 0;

  constructor(private bookingService: BookingService) {

  }

  ngOnInit(): void {
    this.bookingService.bookingsUpdated.subscribe((updatedBookingList) => {
      this.totalPrice = updatedBookingList.reduce((previousValue, currentValue) => previousValue + (currentValue.price + currentValue.price * 0.2), 0);
    })
  }
}
