<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class ActividadController extends Controller
{
    public function index()
    {
        return Actividad::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'nombre'=> 'required',
            'dia' => 'required',
            'hora' => 'required',
            'id_docente' => 'required',
        ]);
        $actividad = new Actividad;
        $actividad->id=$request->id;
        $actividad->nombre=$request->nombre;
        $actividad->dia=$request->dia;
        $actividad->hora=$request->hora;
        $actividad->id_docente=$request->id_docente;
        $actividad->save();
        return $actividad;
    }

    public function show(Actividad $actividad)
    {
        return $actividad;
    }

    public function update(Request $request, Actividad $actividad)
    {
        $request->validate([
            'id'=>'required',
            'nombre'=> 'required',
            'dia' => 'required',
            'hora' => 'required',
            'id_docente' => 'required',
        ]);
        $actividad = new Actividad;
        $actividad->id=$request->id;
        $actividad->nombre=$request->nombre;
        $actividad->dia=$request->dia;
        $actividad->hora=$request->hora;
        $actividad->id_docente=$request->id_docente;
        $actividad->update();
        return $actividad;
    }

    public function destroy($id)
    {
        $actividad = Actividad::find($id);
        if(is_Null($actividad)){
            return response()->json('No se encontró actividad con ese identificador',404);
        }
        $actividad->delete();
        return response()->noContent();
    }
}
