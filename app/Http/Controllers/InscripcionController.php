<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    public function index()
    {
        return Inscripcion::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'numeroControl'=>'required',
            'id_actividad'=> 'required'
        ]);
        $inscripcion = new Inscripcion;
        $inscripcion->numeroControl=$request->numeroControl;
        $inscripcion->id_actividad=$request->id_actividad;
        $inscripcion->save();
        return $inscripcion;
    }

    public function show(Inscripcion $inscripcion)
    {
        return $inscripcion;
    }

    public function update(Request $request, Inscripcion $inscripcion)
    {
        $request->validate([
            'numeroControl'=>'required',
            'id_actividad'=> 'required'
        ]);
        $inscripcion = new Inscripcion;
        $inscripcion->numeroControl=$request->numeroControl;
        $inscripcion->id_actividad=$request->id_actividad;
        $inscripcion->update();
        return $inscripcion;
    }

    public function destroy($id)
    {
        $inscripcion = Inscripcion::find($id);
        if(is_Null($inscripcion)){
            return response()->json('No se encontró inscripcion con ese identificador',404);
        }
        $inscripcion->delete();
        return response()->noContent();
    }
}
