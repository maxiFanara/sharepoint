<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Canal;
use App\Models\Carpeta;
use Illuminate\Http\Request;


class CarpetaController extends Controller
{
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
        return view('crearCarpeta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carpeta = Carpeta::create($request->all());
        $carpeta->save();
        return redirect()->route('inicio');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $archivos = Archivo::where('carpeta', (int)$id)->get();
        return view('archivos', compact('archivos', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carpeta $carpeta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carpeta $carpeta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carpeta $carpeta)
    {
        //
    }
}
