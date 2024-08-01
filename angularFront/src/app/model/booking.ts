import { Accommodation } from "./accommodation";

export interface Booking {
    id: number;
    numberOfPersons: number;
    dateFrom: Date;
    dateTo: Date;
    price: number;

    accommodation: Accommodation;
}