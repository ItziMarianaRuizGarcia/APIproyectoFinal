<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\InscripcionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::apiResource('alumnos',AlumnoController::class);
// Route::apiResource('departamento',DepartamentoController::class);
// Route::apiResource('docente',DocenteController::class);
// Route::apiResource('actividad',ActividadController::class);
// Route::apiResource('inscripcion',InscripcionController::class);

Route::get('alumnos',[AlumnoController::class,'index']);
Route::post('alumnos',[AlumnoController::class,'store']);
Route::get('alumnos/{alumno}',[AlumnoController::class,'show']);
Route::put('alumnos/{alumno}',[AlumnoController::class,'update']);
Route::delete('alumnos/{alumno}',[AlumnoController::class,'destroy']);

Route::get('docentes',[DocenteController::class,'index']);
Route::post('docentes',[DocenteController::class,'store']);
Route::get('docentes/{docente}',[DocenteController::class,'show']);
Route::put('docentes/{docente}',[DocenteController::class,'update']);
Route::delete('docentes/{docente}',[DocenteController::class,'destroy']);

Route::get('departamentos',[DepartamentoController::class,'index']);
Route::post('departamentos',[DepartamentoController::class,'store']);
Route::get('departamentos/{departamento}',[DepartamentoController::class,'show']);
Route::put('departamentos/{departamento}',[DepartamentoController::class,'update']);
Route::delete('departamentos/{departamento}',[DepartamentoController::class,'destroy']);

Route::get('actividades',[ActividadController::class,'index']);
Route::post('actividades',[ActividadController::class,'store']);
Route::get('actividades/{actividad}',[ActividadController::class,'show']);
Route::put('actividades/{actividad}',[ActividadController::class,'update']);
Route::delete('actividades/{actividad}',[ActividadController::class,'destroy']);

Route::get('inscripciones',[InscripcionController::class,'index']);
Route::post('inscripciones',[InscripcionController::class,'store']);
Route::get('inscripciones/{inscripcion}',[InscripcionController::class,'show']);
Route::put('inscripciones/{inscripcion}',[InscripcionController::class,'update']);
Route::delete('inscripciones/{inscripcion}',[InscripcionController::class,'destroy']);
