<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actividad>
 */
class ActividadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $listaActividades= [
            'Formación de geles utilizando Biopolímeros',
            'Ahorro de la energía eléctrica',
            'Administración Para Ingenieros',
            'Club de semiconductores',
            'El arte de los 0 y 1',
            'Soldadura eléctrica autogena básica',
            'Análisis de datos con excel',
            'Herramientas Tecnológicas Para el Aprendizaje',
            'Tópicos de protección civil',
            'Curso 2 Circuitos Electricos en CD',
            'Historia de la construcción',
            'Fomento a la lectura',
            'Taller de Liderazgo',
            'Herramientas TIC Para el Aprendizaje',
            'Gamificacion',
            'Divulgación de las matemáticas',
            'Divulgación de las matemáticas',
            'Elaboración de documentos profesionales',
            'Estrategias de Aprendizaje',
            'Programa de educación ambiental',
            'Construcción de ferrocemento',
            'Fundamentos de higiene y seguridad',
            'Nudos Salvavidas',
            'Fundamentos de liderazgo y trabajo en equipo',
            'Lectura recreativa',
            'Alimentos en conserva',
            'Matemáticas financieras para ingerieros',
            'Manejo de personal',
            'Los clásicos de la literatura, el cine y la música',
            'Gestion de residuos orgánicos para la producción de hongos comestibles',
            'Club de Programación Competitiva',
            'Diseño, simulación y desarrollo de fuentes de poder',
            'Productividad laboral',
            'Productividad laboral',
            'Productividad laboral',
            'Productividad laboral',
            'Productividad laboral',
            'Productividad laboral',
            'Introducción al uso del programat profesional análisi',
            'Redacción de textos académicos con estilo APA-IEEE',
            'Soldadura Acetilénica',
            'Excel básico',
            'Introducción al uso del software educativo para análisis de estructuras planas',
            'Taller de preparación para exposición para concurso de innovación',
            'Taller de confiteria',
            'Talento Emprendedor',
            'Tópicos de la investigacion para el Ing. Industrial',
            'Dominación de origen',
            'Taller de oratoria',
            'Mediciones Básicas en CD',
            'Vigas y armaduras para la asignatura de estática',
            'Vocabulario técnico para la redacción de artículos de ingeniería civil',
            'Excel como herramienta para análisis y toma de decisiones'
        ];

        $dayOfWeek = $this->faker->numberBetween(1, 5); // 1 = Monday, 5 = Friday
        $days = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'];

        $startTime = strtotime('08:00:00');
        $endTime = strtotime('15:00:00');
        $randomTime = rand($startTime, $endTime);
        $formattedTime = date('H:i:s', $randomTime);
        
        return [
            'nombre' => $this->faker->randomElement($listaActividades),
            'dia' => $days[$dayOfWeek-1],
            'hora' => $formattedTime,
            'id_docente' => $this->faker->numberBetween(1, 50),
            
        ];
    }
}
