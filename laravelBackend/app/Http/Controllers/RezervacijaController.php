<?php

namespace App\Http\Controllers;

use App\Http\Resources\RezervacijaResource;
use App\Models\Rezervacija;
use Illuminate\Http\Request;

class RezervacijaController extends Controller
{

    //moji kontroleri
    public function getAllRezervacijas()
    {
        $rezervacijas = Rezervacija::all();

        return RezervacijaResource::collection($rezervacijas);
    }

    public function addRezervacija()
    {
        request()->validate([
            'Ime' => 'required',
            'Prezime' => 'required',
            'Godine' => 'required',
            'HronicneBolesti' => 'required'
        ]);
        return Pacijent::create([
            'Ime' => request('Ime'),
            'Prezime' => request('Prezime'),
            'Godine' => request('Godine'),
            'HronicneBolesti' => request('HronicneBolesti')
        ]);
    }

    public function editPacijent(Pacijent $pacijent)
    {
        request()->validate([
            'Ime' => 'required',
            'Prezime' => 'required',
            'Godine' => 'required',
            'HronicneBolesti' => 'required'
        ]);

        $success = $pacijent->update([
            'Ime' => request('Ime'),
            'Prezime' => request('Prezime'),
            'Godine' => request('Godine'),
            'HronicneBolesti' => request('HronicneBolesti')
        ]);

        return [
            'success' => $success
        ];
    }

    public function deletePacijent(Pacijent $pacijent)
    {
        $success = $pacijent->delete();

        return [
            'success' => $success
        ];

    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Pacijent $pacijent)
    {
        return new PacijentResource($pacijent);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pacijent $pacijent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pacijent $pacijent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pacijent $pacijent)
    {
        //
    }
}