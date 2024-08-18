import { Component, OnInit } from '@angular/core';
import { Accommodation } from 'src/app/model/accommodation';
import { Booking } from 'src/app/model/booking';
import { AccommodationService } from 'src/app/services/accommodation.service';
import { BookingService } from 'src/app/services/booking.service';

@Component({
  selector: 'app-accommodations',
  templateUrl: './accommodations.component.html',
  styleUrls: ['./accommodations.component.scss']
})
export class AccommodationsComponent implements OnInit {
  accommodations: Accommodation[] = [];

  constructor(private accommodationService: AccommodationService,
              private bookingService: BookingService) {
  }

  ngOnInit(): void {
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
