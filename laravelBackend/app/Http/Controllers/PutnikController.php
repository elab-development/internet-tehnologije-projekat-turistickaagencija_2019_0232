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

    public function dodajPutnika()
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

    public function obrisiPutnika(Putnik $putnik)
    {
        $success = $putnik->delete();

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
    public function show(Putnik $putnik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Putnik $putnik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Putnik $putnik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Putnik $putnik)
    {
        //
    }
}
