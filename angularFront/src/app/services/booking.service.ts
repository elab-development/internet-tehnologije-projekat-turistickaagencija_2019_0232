import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs';
import { Booking } from '../model/booking';

@Injectable({
  providedIn: 'root'
})
export class BookingService {
  bookings: Booking[] = [];

  bookingsUpdated = new BehaviorSubject<Booking[]>([]);

  constructor() { }

  addBooking(booking: Booking): void {
    this.bookings.push(booking);
    this.bookingsUpdated.next(this.bookings);
  }
}
