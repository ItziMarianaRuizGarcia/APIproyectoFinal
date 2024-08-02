<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombres = $this->faker->firstName();
        $apellidoP = $this->faker->lastName();
        $apellidoM = $this->faker->lastName();
        
        return [
            'numeroControl' => $this->faker->numberBetween(200000, 240000), 
            'nombres' => $nombres,
            'apellidoP' => $apellidoP,
            'apellidoM' => $apellidoM,
            'correo' => strtolower("$nombres.$apellidoP@gmail.com"),
            'contraseña' => $this->faker->password($minLength = 6, $maxLength = 15),
            'inscrito' => false,
        ];
    }
}
