<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('archivos');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function descargarArchivio($ruta)
    {
        $rutaArchivo = storage_path('app/private/archivos/' . $ruta);

    return response()->download($rutaArchivo);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $archivo = $request->file('archivo');
        $nombreArchivo = $archivo->getClientOriginalName();
        $ruta = $archivo->storeAs('/archivos', $nombreArchivo);
        

        Archivo::create([
            'nombre' => $nombreArchivo,
            'ruta' => 'app/private/archivos/' . $nombreArchivo,
            'carpeta' => $id
        ]);
    
        return redirect()->back()->with('success', 'Archivo subido correctamente.');
    
    }

    public function eliminarArchivo($id){
        $archivo = Archivo::find($id);
        $rutaArchivo = storage_path('app/private/archivos/' . $archivo->nombre);
        unlink($rutaArchivo);
        $archivo->delete();
        return redirect()->back()->with('success', 'Archivo eliminado correctamente.');

    }
    /**
     * Display the specified resource.
     */
    public function show(Archivo $archivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Archivo $archivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Archivo $archivo)
    {
        //
    }

}
