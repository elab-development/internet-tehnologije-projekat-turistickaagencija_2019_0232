import { Component, OnInit } from '@angular/core';
import { Accommodation } from 'src/app/model/accommodation';
import { Booking } from 'src/app/model/booking';
import { AccommodationService } from 'src/app/services/accommodation.service';
import { BookingService } from 'src/app/services/booking.service';

@Component({
  selector: 'app-bookings',
  templateUrl: './bookings.component.html',
  styleUrls: ['./bookings.component.scss']
})
export class BookingsComponent implements OnInit {
  bookings: Booking[] = [];
  accommodations: Accommodation[] = [];

  constructor(private bookingService: BookingService,
              private accommodationService: AccommodationService) {
  }

  ngOnInit(): void {
    this.bookings = this.bookingService.bookings;
    this.accommodations = this.accommodationService.accommodations;
  }

  handleAccommodationBooked(accommodation: Accommodation): void {
    const booking: Booking = {
      id: this.bookingService.bookings.length + 1,
      dateFrom: new Date(),
      dateTo: new Date(),
      numberOfPersons: 3,
      price: accommodation.pricePerPerson * 3,
      accommodation: accommodation
    };
    this.bookingService.addBooking(booking);
  }
  
}
