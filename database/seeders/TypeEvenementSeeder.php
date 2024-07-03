<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\TypeEvernement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeEvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $evenement_1 = [
            "nom" => "Réunion"
        ];

        $evenement_2 = [
            "nom" => "Séminaire"
        ];

        $evenement_3 = [
            "nom" => "Manifestation scientifique"
        ];

        Type::create($evenement_1);
        Type::create($evenement_2);
        Type::create($evenement_3);
    }
}
