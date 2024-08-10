import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AccommodationsComponent } from './components/accommodations/accommodations.component';
import { NavBarComponent } from './components/nav-bar/nav-bar.component';
import { TableModule } from 'primeng/table';
import { AccommodationCardComponent } from './components/accommodation-card/accommodation-card.component';
import { FrameDirective } from './directives/frame.directive'; 


@NgModule({
  declarations: [
    AppComponent,
    AccommodationsComponent,
    NavBarComponent,
    AccommodationCardComponent,
    FrameDirective,

  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    TableModule    
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
