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

    public function addRezervacija()
    {
        request()->validate([
            'putnikId' => 'required',
            'destinacijaId' => 'required',
            'datumOd' => 'required',
            'datumDo' => 'required',
            'avans' => 'required',
            'smestaj' => 'required',
            'status' => 'required',
            'brojOsoba' => 'required'
        ]);
        return Rezervacija::create([
            'putnikId' => intval(request('putnikId')),
            'destinacijaId' => intval(request('destinacijaId')),
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
            'putnikId' => 'required',
            'destinacijaId' => 'required',
            'datumOd' => 'required',
            'datumDo' => 'required',
            'avans' => 'required',
            'smestaj' => 'required',
            'status' => 'required',
            'brojOsoba' => 'required'
        ]);

        $success = $rezervacija->update([
            'putnikId' => intval(request('putnikId')),
            'destinacijaId' => intval(request('destinacijaId')),
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

    public function deleteRezervacija(Rezervacija $rezervacija)
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
        return new RezervacijaResource($rezervacija);
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
