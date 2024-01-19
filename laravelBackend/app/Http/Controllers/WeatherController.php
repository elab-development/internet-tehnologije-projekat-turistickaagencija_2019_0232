<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function getCurrentWeather($city)
    {
        $apiKey = 'f51d7a1fd20ff50f010d727e1b63a4ef';
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q='$city'&appid='$apiKey'");

        $weatherData = $response->json();

        return response()->json($weatherData);
    }
}
