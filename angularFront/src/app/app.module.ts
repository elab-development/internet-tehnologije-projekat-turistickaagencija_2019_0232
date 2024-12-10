import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NavBarComponent } from './components/nav-bar/nav-bar.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { AccommodationsComponent } from './components/accommodations/accommodations.component';
import { BookingsComponent } from './components/bookings/bookings.component';
import { AccommodationCardComponent } from './components/accommodation-card/accommodation-card.component';
import { FrameDirective } from './directives/frame.directive';
import {TableModule} from 'primeng/table';
import { TaxPipe } from './pipes/tax.pipe';
import { WeatherComponent } from './components/weather/weather.component';
import { HttpClientModule } from '@angular/common/http';
import { RoundPipe } from './pipes/round.pipe';
import { ContactComponent } from './components/contact/contact.component';


@NgModule({
  declarations: [
    AppComponent,
    NavBarComponent,
    AccommodationsComponent,
    BookingsComponent,
    AccommodationCardComponent,
    FrameDirective,
    TaxPipe,
    WeatherComponent,
    RoundPipe,
    ContactComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    TableModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
