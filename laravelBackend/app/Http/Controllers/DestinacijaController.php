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

    public function dodajDestinacije()
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

    public function obrisiDestinacije(Destinacija $destinacija)
    {
        $success = $destinacija->delete();

        return [
            'success' => $success
        ];

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinacija = Destinacija::latest()->paginate(4);
 
        return view('destinacija',compact('destinacija'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Destinacija $destinacija)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destinacija $destinacija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destinacija $destinacija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destinacija $destinacija)
    {
        //
    }
}
