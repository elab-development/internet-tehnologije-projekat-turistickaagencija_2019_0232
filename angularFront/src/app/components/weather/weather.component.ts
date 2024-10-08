import { Component, OnInit } from '@angular/core';
import { WeatherService } from '../../services/weather.service';
@Component({
 selector: 'app-weather',
 templateUrl: './weather.component.html',
 styleUrls: ['./weather.component.scss']
})
export class WeatherComponent implements OnInit {
 weatherInformation: any;
 constructor(private weatherService: WeatherService) {}
 ngOnInit(): void {
 this.weatherService.loadWeather().subscribe(data => {
 this.weatherInformation = data;
 });
 }
}