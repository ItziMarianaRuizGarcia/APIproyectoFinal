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
        try {
            // Tu lógica aquí
            Actividad::create($request->all());
            return response()->json([
                'res' => true,
                'msg' => 'Actividad registrada correctamente'
            ], 200);
        } catch (\Exception $e) {
            // Manejo de errores
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show(Actividad $actividad)
    {
        return response()->json([
            'res' => true,
            'alumno' => $actividad
        ]);
    }

    public function update(Request $request, Actividad $actividad)
    {
        try {
            // Tu lógica aquí
            $actividad->update($request->all());
            return response()->json([
                'res' => true,
                'msg' => 'Actividad actualizada correctamente'
            ], 200);
        } catch (\Exception $e) {
            // Manejo de errores
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Actividad eliminada correctamente'
        ], 200);
    }
}
