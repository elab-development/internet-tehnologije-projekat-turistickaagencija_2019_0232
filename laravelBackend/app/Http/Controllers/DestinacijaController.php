<?php

namespace App\Http\Controllers;

use App\Http\Resources\DestinacijaResource;
use App\Models\Destinacija;
use Illuminate\Http\Request;

class DestinacijaController extends Controller
{
    public function getAllDestinacijas()
    {
        $destinacijas = Destinacija::all();

        return DestinacijaResource::collection($destinacijas);
    }

    public function addDestinacija()
    {
        request()->validate([
            'Naziv' => 'required',
            'GeoSirina' => 'required',
            'GeoDuzina' => 'required',
            'Opis' => 'required',
            'Klima' => 'required',
            'Atrakcije' => 'required'
        ]);

        return Destinacija::create([
            'Naziv' => request('Naziv'),
            'GeoSirina' => request('GeoSirina'),
            'GeoDuzina' => request('GeoDuzina'),
            'Opis' => request('Opis'),
            'Klima' => request('Klima'),
            'Atrakcije' => request('Atrakcije')
        ]);
    }

    public function editDestinacija(Destinacija $destinacija)
    {
        request()->validate([
            'Naziv' => 'required',
            'GeoSirina' => 'required',
            'GeoDuzina' => 'required',
            'Opis' => 'required',
            'Klima' => 'required',
            'Atrakcije' => 'required'
        ]);

        $success = $destinacija->update([
            'Naziv' => request('Naziv'),
            'GeoSirina' => request('GeoSirina'),
            'GeoDuzina' => request('GeoDuzina'),
            'Opis' => request('Opis'),
            'Klima' => request('Klima'),
            'Atrakcije' => request('Atrakcije')
        ]);

        return [
            'success' => $success
        ];
    }

    public function deleteDestinacija(Destinacija $destinacija)
    {
        $success = $destinacija->delete();

        return [
            'success' => $success
        ];

    }
}
