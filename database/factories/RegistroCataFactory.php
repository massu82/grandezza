<?php
// RegistroCataFactory.php

namespace Database\Factories;

use App\Models\RegistroCata;
use App\Models\Cata;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroCataFactory extends Factory
{
    protected $model = RegistroCata::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'correo' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->optional()->phoneNumber,
            'cata_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
