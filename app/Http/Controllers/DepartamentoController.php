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
        try {
            // Tu lógica aquí
            Departamento::create($request->all());
            return response()->json([
                'res' => true,
                'msg' => 'departamento registrado correctamente'
            ], 200);
        } catch (\Exception $e) {
            // Manejo de errores
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show(Departamento $departamento)
    {
        return response()->json([
            'res' => true,
            'departamento' => $departamento
        ]);
    }

    public function update(Request $request, Departamento $departamento)
    {
        try {
            // Tu lógica aquí
            $departamento->update($request->all());
            return response()->json([
                'res' => true,
                'msg' => 'Departamento actualizado correctamente'
            ], 200);
        } catch (\Exception $e) {
            // Manejo de errores
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy(Departamento $departamento)
    {
        $departamento->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Departamento eliminado correctamente'
        ], 200);   
    }
}
