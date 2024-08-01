<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres' => $this->faker->firstName(),
            'apellidoP'=>$this->faker->lastName(),
            'apellidoM'=>$this->faker->lastName(),
            'id_departamento'=> $this->faker->numberBetween(1, 11), 
            'correo'=>$this->faker->safeEmail(),
            'contraseña'=>$this->faker->password(($minLength = 6),($maxLength = 15)),
        ];
    }
}
