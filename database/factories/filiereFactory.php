<?php

namespace Database\Factories;

use App\Models\etudient;
use App\Models\formateur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\filiere>
 */
class filiereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [


           



            'id_formateur' => formateur::factory()->create()->id_formateur,
            'id_etudient' => etudient::factory()->create()->id_etudient,





            "nom_filiere"=>fake()->name(),

        ];
    }
}
