import { Injectable } from '@angular/core';
import { Accommodation } from '../model/accommodation';

@Injectable({
  providedIn: 'root'
})
export class AccommodationService {

  //Kreirani unosi za smestaje:
  accommodations: Accommodation[] = [
    {
      id: 1,
      name: 'Niriides, za 3 osobe',
      capacity: 15,
      type: 'Apartmani',
      location: 'Lefkada',
      pricePerPerson: 70.00,
      image: 'https://cf.bstatic.com/xdata/images/hotel/max1280x900/66175952.jpg?k=839bd8cfce232c8c329eb7b4f951d5cce06dab3e5b7f47f54b516bfc0d12777d&o=&hp=1'
    },
    {
      id: 2,
      name: 'Villa Verde, za 3 osobe',
      capacity: 45,
      type: 'Apartmani',
      location: 'Lefkada',
      pricePerPerson: 110.00,
      image: 'https://cf.bstatic.com/xdata/images/hotel/max1280x900/70948754.jpg?k=544253c22bfddd3e57116fa50655a65ee57795afb99405dd40e6ec40c7431553&o=&hp=1'
    },
    {
      id: 3,
      name: 'Villa Varnali Small Boutique, za 3 osobe',
      capacity: 15,
      type: 'Villa',
      location: 'Mykonos',
      pricePerPerson: 120.00,
      image: 'https://cf.bstatic.com/xdata/images/hotel/max1280x900/97225119.jpg?k=747d636d6df4ae46bdd4a970d8b4de120db2ea1860c898104b23ff19ba3f85bb&o=&hp=1'
    },
    {
      id: 4,
      name: 'Bluetopia Suites, za 3 osobe',
      capacity: 5,
      type: 'Apartmani',
      location: 'Mykonos',
      pricePerPerson: 30.00,
      image: 'https://cf.bstatic.com/xdata/images/hotel/max1280x900/98562791.jpg?k=583fbdb535b1a8091307c64aa93a494f75e1a8998092bdc25faabcf818256af7&o=&hp=1'
    },
    {
      id: 5,
      name: 'Queen Boutique Suites, za 3 osobe',
      capacity: 15,
      type: 'Apartmani',
      location: 'Mykonos',
      pricePerPerson: 70.00,
      image: 'https://cf.bstatic.com/xdata/images/hotel/max1280x900/148670049.jpg?k=5af446a3afce4819cd59e60842fd8333cb0bbcfc6c9b5f677cb956489317ded4&o=&hp=1'
    },
    {
      id: 6,
      name: 'Ifestos Villa, za 3 osobe',
      capacity: 45,
      type: 'Apartmani',
      location: 'Santorini',
      pricePerPerson: 110.00,
      image: 'https://cf.bstatic.com/xdata/images/hotel/max1280x900/173672322.jpg?k=4ac8da27017fa7d9c5e8100776c736197adfd067f420ab7931204202ab625804&o=&hp=1'
    },
    {
      id: 7,
      name: 'Roula Villa Studios & Apartments',
      capacity: 15,
      type: 'Apartmani i Studio',
      location: 'Santorini',
      pricePerPerson: 120.00,
      image: 'https://cf.bstatic.com/xdata/images/hotel/max1280x900/203864457.jpg?k=2190e731517dd7d899ba6e4cae7250ff8b98d738c8530f668a1943576f1dd085&o=&hp=1'
    },
    {
      id: 8,
      name: 'Alaso Design Suites',
      capacity: 5,
      type: 'Apartmani',
      location: 'Santorini',
      pricePerPerson: 330.00,
      image: 'https://cf.bstatic.com/xdata/images/hotel/max1280x900/477896041.jpg?k=0b666d78089307f6be3a16e63e37eb6f677e726978e562e9ea6a25ad5b7581dc&o=&hp=1'
    },
    {
      id: 9,
      name: 'Kamares Apartments',
      capacity: 5,
      type: 'Apartmani',
      location: 'Santorini',
      pricePerPerson: 30.00,
      image: 'https://cf.bstatic.com/xdata/images/hotel/max1280x900/54689063.jpg?k=ebafd1fa4c157e121f62b69378c0a482d14294070a78ac5196f100a158f8243a&o=&hp=1'
    }
  ];

  constructor() { }
}
