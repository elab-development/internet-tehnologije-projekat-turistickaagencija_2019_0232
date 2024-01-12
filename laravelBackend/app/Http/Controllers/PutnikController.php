<?php

namespace App\Http\Controllers;

use App\Http\Resources\PutnikResource;
use App\Models\Putnik;
use Illuminate\Http\Request;

class PutnikController extends Controller
{
    
    public function getAllPutniks()
    {
        $putniks = Putnik::all();

        return PutnikResource::collection($putniks);
    }

    public function addPutnik()
    {
        request()->validate([
            'Ime' => 'required',
            'Prezime' => 'required',
            'Godine' => 'required',
            'Interesovanja' => 'required'
        ]);

        return Putnik::create([
            'Ime' => request('Ime'),
            'Prezime' => request('Prezime'),
            'Godine' => request('Godine'),
            'Interesovanja' => request('Interesovanja')
        ]);
    }

    public function editPutnik(Putnik $putnik)
    {
        request()->validate([
            'Ime' => 'required',
            'Prezime' => 'required',
            'Godine' => 'required',
            'Interesovanja' => 'required'
        ]);

        $success = $putnik->update([
            'Ime' => request('Ime'),
            'Prezime' => request('Prezime'),
            'Godine' => request('Godine'),
            'Interesovanja' => request('Interesovanja')
        ]);

        return [
            'success' => $success
        ];
    }

    public function deletePutnik(Putnik $putnik)
    {
        $success = $putnik->delete();

        return [
            'success' => $success
        ];

    }
}
