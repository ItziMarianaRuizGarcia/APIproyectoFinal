<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class DepartamentoController extends Controller
{
    public function index()
    {
        return Departamento::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'nombre'=> 'required'
        ]);
        $departamento = new departamento;
        $departamento->id=$request->id;
        $departamento->nombre=$request->nombre;
        $departamento->save();
        return $departamento;
    }

    public function show(Departamento $departamento)
    {
        return $departamento;
    }

    public function update(Request $request, Departamento $departamento)
    {
        $request->validate([
            'id'=>'required',
            'nombre'=> 'required'
        ]);
        $departamento = new departamento;
        $departamento->id=$request->id;
        $departamento->nombre=$request->nombre;
        $departamento->update();
        return $departamento;
    }

    public function destroy($id)
    {
        $departamento = Departamento::find($id);
        if(is_Null($departamento)){
            return response()->json('No se encontró departamento con ese identificador',404);
        }
        $departamento->delete();
        return response()->noContent();   
    }
}
