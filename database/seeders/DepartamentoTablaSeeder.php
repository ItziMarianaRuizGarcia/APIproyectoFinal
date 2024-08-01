<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentoTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departamento1 = new Departamento();
        $departamento1->nombre="Departamento de actividades extraescolares";
        $departamento1-> save();

        $departamento2 = new Departamento();
        $departamento2->nombre="Departamento de ingeniería electrónica";
        $departamento2-> save();

        $departamento3 = new Departamento();
        $departamento3->nombre="Departamento de sistemas y computacion";
        $departamento3-> save();

        $departamento4 = new Departamento();
        $departamento4->nombre="Departamento de ingeniería química y bioquímica";
        $departamento4-> save();

        $departamento5 = new Departamento();
        $departamento5->nombre="Centro de informacióm";
        $departamento5-> save();

        $departamento6 = new Departamento();
        $departamento6->nombre="Departamento de ingeniería eléctrica";
        $departamento6-> save();

        $departamento7 = new Departamento();
        $departamento7->nombre="Departamento de ciencias económico administrativas";
        $departamento7-> save();

        $departamento8 = new Departamento();
        $departamento8->nombre="Departamento de metal mecánica";
        $departamento8-> save();

        $departamento9 = new Departamento();
        $departamento9->nombre="Departamento de ingeniería industrial";
        $departamento9-> save();

        $departamento10 = new Departamento();
        $departamento10->nombre="Departamento de ciencias de la tierra";
        $departamento10-> save();

        $departamento11 = new Departamento();
        $departamento11->nombre="Departamento de ciencias básicas";
        $departamento11-> save();

    }
}
