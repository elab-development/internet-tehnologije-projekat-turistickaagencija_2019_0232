<?php

use App\Http\Controllers\DestinacijaController;
use App\Http\Controllers\PutnikController;
use App\Http\Controllers\RezervacijaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('putniks', PutnikController::class);
Route::get('/putniks', [PutnikController::class, 'getAllPutniks']);
Route::post('/putniks', [PutnikController::class, 'dodajPutnika']);
Route::delete('/putniks/{putnik}', [PutnikController::class, 'obrisiPutnika']);

Route::resource('rezervacijas', RezervacijaController::class);
Route::get('/rezervacijas', [RezervacijaController::class, 'getAllRezervacijas']);
Route::post('/rezervacijas', [RezervacijaController::class, 'dodajRezervaciju']);
Route::delete('/rezervacijas/{rezervacija}', [RezervacijaController::class, 'obrisiRezervaciju']);

Route::resource('destinacijas', DestinacijaController::class);
Route::get('/destinacijas', [DestinacijaController::class, 'getAllDestinacijas']);
Route::post('/destinacijas', [DestinacijaController::class, 'dodajDestinacije']);
Route::delete('/destinacijas/{destinacija}', [DestinacijaController::class, 'obrisiDestinacije']);
