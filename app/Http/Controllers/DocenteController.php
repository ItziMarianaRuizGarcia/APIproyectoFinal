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
        try {
            // Tu lógica aquí
            Docente::create($request->all());
            return response()->json([
                'res' => true,
                'msg' => 'Docente registrado correctamente'
            ], 200);
        } catch (\Exception $e) {
            // Manejo de errores
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show(Docente $docente)
    {
        return response()->json([
            'res' => true,
            'alumno' => $docente
        ]);
    }

    public function update(Request $request, Docente $docente)
    {
        try {
            // Tu lógica aquí
            $docente->update($request->all());
            return response()->json([
                'res' => true,
                'msg' => 'Docente actualizado correctamente'
            ], 200);
        } catch (\Exception $e) {
            // Manejo de errores
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy($docente)
    {
        $docente->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Docente eliminado correctamente'
        ], 200);
    }
}
