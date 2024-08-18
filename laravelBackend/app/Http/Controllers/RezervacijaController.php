<?php

namespace App\Http\Controllers;

use App\Http\Resources\RezervacijaResource;
use App\Models\Rezervacija;
use Illuminate\Http\Request;

class RezervacijaController extends Controller
{
    public function getAllRezervacijas()
    {
        $rezervacijas = Rezervacija::all();

        return RezervacijaResource::collection($rezervacijas);
    }

    public function dodajRezervaciju()
    {
        request()->validate([
            'putnik_id' => 'required',
            'destinacija_id' => 'required',
            'datumOd' => 'required',
            'datumDo' => 'required',
            'avans' => 'required',
            'smestaj' => 'required',
            'status' => 'required',
            'brojOsoba' => 'required'
        ]);
        return Rezervacija::create([
            'putnik_id' => intval(request('putnik_id')),
            'destinacija_id' => intval(request('destinacija_id')),
            'datumOd' => request('datumOd'),
            'datumDo' => request('datumDo'),
            'avans' => intval(request('avans')),
            'smestaj' => request('smestaj'),
            'status' => request('status'),
            'brojOsoba' => intval(request('brojOsoba'))
        ]);
    }

    public function editRezervacija(Rezervacija $rezervacija)
    {
        request()->validate([
            'putnik_id' => 'required',
            'destinacija_id' => 'required',
            'datumOd' => 'required',
            'datumDo' => 'required',
            'avans' => 'required',
            'smestaj' => 'required',
            'status' => 'required',
            'brojOsoba' => 'required'
        ]);

        $success = $rezervacija->update([
            'putnik_id' => intval(request('putnik_id')),
            'destinacija_id' => intval(request('destinacija_id')),
            'datumOd' => request('datumOd'),
            'datumDo' => request('datumDo'),
            'avans' => intval(request('avans')),
            'smestaj' => request('smestaj'),
            'status' => request('status'),
            'brojOsoba' => intval(request('brojOsoba'))
        ]);

        return [
            'success' => $success
        ];
    }

    public function obrisiRezervaciju(Rezervacija $rezervacija)
    {
        $success = $rezervacija->delete();

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
    public function show(Rezervacija $rezervacija)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rezervacija $rezervacija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rezervacija $rezervacija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rezervacija $rezervacija)
    {
        //
    }
}
