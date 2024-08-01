import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AccommodationsComponent } from './components/accommodations/accommodations.component';
import { BookingsComponent } from './components/bookings/bookings.component';

const routes: Routes = [
  {path: 'accommodations', component: AccommodationsComponent},
  {path: 'bookings', component: BookingsComponent},
  {path: '' , redirectTo: 'accommodations', pathMatch: 'full'},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
