<?php

namespace App\Http\Controllers;

use App\Models\Canal;
use App\Models\Comentario;
use Illuminate\Http\Request;

class CanalController extends Controller
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
       return view('crearCanal');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $canal = Canal::create($request->all());
        $canal->save();
        return redirect()->route('inicio');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $comentarios = Comentario::where('canal', (int)$id)->get();
        return view('canal', compact('comentarios', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Canal $canal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Canal $canal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Canal $canal)
    {
        //
    }
}
