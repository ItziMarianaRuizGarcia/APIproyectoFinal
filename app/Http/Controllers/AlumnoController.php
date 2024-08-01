<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class AlumnoController extends Controller
{
    public function index()
    {
        return Alumno::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'numeroControl'=>'required',
            'nombres'=> 'required',
            'apellidoP' => 'required',
            'apellidoM' => 'required',
            'correo' => 'required',
            'contraseña' => 'required',
        ]);
        $alumno = new Alumno;
        $alumno->numeroControl=$request->numeroControl;
        $alumno->nombres=$request->nombres;
        $alumno->apellidoP=$request->apellidoP;
        $alumno->apellidoM=$request->apellidoM;
        $alumno->correo=$request->correo;
        $alumno->contraseña=$request->contraseña;
        $alumno->inscrito=false;
        $alumno->save();
        return $alumno;
    }

    public function show(Alumno $alumno)
    {
        return $alumno;
    }

    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'numeroControl'=>'required',
            'nombres'=> 'required',
            'apellidoP' => 'required',
            'apellidoM' => 'required',
            'correo' => 'required',
            'contraseña' => 'required',
            'inscrito' => 'required'
        ]);
        $alumno->numeroControl=$request->numeroControl;
        $alumno->nombres=$request->nombres;
        $alumno->apellidoP=$request->apellidoP;
        $alumno->apellidoM=$request->apellidoM;
        $alumno->correo=$request->correo;
        $alumno->contraseña=$request->contraseña;
        $alumno->inscrito=$request->inscrito;
        $alumno->update();
        return $alumno;
    }

    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        if(is_Null($alumno)){
            return response()->json('No se encontró alumno con ese identificador',404);
        }
        $alumno->delete();
        return response()->noContent();
    }
}
