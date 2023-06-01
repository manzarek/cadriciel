<?php

namespace Database\Factories;
use App\Models\Etudiant;
use App\Models\Ville;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'adresse' => $this->faker->address(),
            'telephone' => $this->faker->phoneNumber(),
            'date_naissance' => $this->faker->date($format = 'Y-m-d', $max = '2004-01-01'),
            'ville_id' => Ville::all()->random()->id
        ];
    }
}
