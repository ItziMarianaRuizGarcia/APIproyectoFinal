<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\InscripcionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('alumnos',AlumnoController::class);
Route::apiResource('departamento',DepartamentoController::class);
Route::apiResource('docente',DocenteController::class);
Route::apiResource('actividad',ActividadController::class);
Route::apiResource('inscripcion',InscripcionController::class);
