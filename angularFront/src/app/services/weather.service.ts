import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
@Injectable({
 providedIn: 'root'
})
export class WeatherService {
 constructor(private http: HttpClient) {}
 loadWeather(): Observable<any> {
 return this.http.get("https://api.openweathermap.org/data/2.5/weather?lat=37.4453&lon=25.3541&appid=e1b89cea7c2d456d8959b36edbfa9e0b");
 }
}
