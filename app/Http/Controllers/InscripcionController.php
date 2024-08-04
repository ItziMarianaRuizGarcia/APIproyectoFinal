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
        try {
            // Tu lógica aquí
            Inscripcion::create($request->all());
            return response()->json([
                'res' => true,
                'msg' => 'Inscripción registrada correctamente'
            ], 200);
        } catch (\Exception $e) {
            // Manejo de errores
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show(Inscripcion $inscripcion)
    {
        return response()->json([
            'res' => true,
            'alumno' => $inscripcion
        ]);
    }

    public function update(Request $request, Inscripcion $inscripcion)
    {
        try {
            // Tu lógica aquí
            $inscripcion->update($request->all());
            return response()->json([
                'res' => true,
                'msg' => 'Inscripción actualizada correctamente'
            ], 200);
        } catch (\Exception $e) {
            // Manejo de errores
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy(Inscripcion $inscripcion)
    {
        $inscripcion->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Inscripción eliminada correctamente'
        ], 200);
    }
}
