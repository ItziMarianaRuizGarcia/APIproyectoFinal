<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alumno;
use App\Models\Actividad;
use App\Models\Docente;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            DepartamentoTablaSeeder::class
        ]);
        Docente::factory(50)->create();
        Alumno::factory(100)->create();
        Actividad::factory(25)->create();
        
    }
}
