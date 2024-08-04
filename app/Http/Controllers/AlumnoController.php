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
        try {
            // Tu lógica aquí
            Alumno::create($request->all());
            return response()->json([
                'res' => true,
                'msg' => 'Alumno registrado correctamente'
            ], 200);
        } catch (\Exception $e) {
            // Manejo de errores
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show(Alumno $alumno)
    {
        // return response()->json([
        //     'res' => true,
        //     'alumno' => $alumno
        // ]);
        return  $alumno;
    }

    public function update(Request $request, Alumno $alumno)
    {
        try {
            // Tu lógica aquí
            $alumno->update($request->all());
            return response()->json([
                'res' => true,
                'msg' => 'Alumno actualizado correctamente'
            ], 200);
        } catch (\Exception $e) {
            // Manejo de errores
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Alumno eliminado correctamente'
        ], 200);
    }
}
