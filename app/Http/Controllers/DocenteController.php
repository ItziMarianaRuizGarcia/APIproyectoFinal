<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class DocenteController extends Controller
{
    public function index()
    {
        return Docente::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'nombres'=> 'required',
            'apellidoP' => 'required',
            'apellidoM' => 'required',
            'id_departamento'=> 'required',
            'correo' => 'required',
            'contraseña' => 'required'
        ]);
        $docente = new Docente;
        $docente->id=$request->id;
        $docente->nombres=$request->nombres;
        $docente->apellidoP=$request->apellidoP;
        $docente->apellidoM=$request->apellidoM;
        $docente->id_departamento=$request->id_departamento;
        $docente->correo=$request->correo;
        $docente->contraseña=$request->contraseña;
        $docente->save();
        return $docente;
    }

    public function show(Docente $docente)
    {
        return $docente;
    }

    public function update(Request $request, Docente $docente)
    {
        $request->validate([
            'id'=>'required',
            'nombres'=> 'required',
            'apellidoP' => 'required',
            'apellidoM' => 'required',
            'id_departamento'=> 'required',
            'correo' => 'required',
            'contraseña' => 'required'
        ]);
        $docente = new Docente;
        $docente->id=$request->id;
        $docente->nombres=$request->nombres;
        $docente->apellidoP=$request->apellidoP;
        $docente->apellidoM=$request->apellidoM;
        $docente->id_departamento=$request->id_departamento;
        $docente->correo=$request->correo;
        $docente->contraseña=$request->contraseña;
        $docente->update();
        return $docente;
    }

    public function destroy($id)
    {
        $docente = Docente::find($id);
        if(is_Null($docente)){
            return response()->json('No se encontró docente con ese identificador',404);
        }
        $docente->delete();
        return response()->noContent();
    }
}
