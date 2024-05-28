<?php

namespace Database\Seeders;

use App\Models\Fonction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FonctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fonction_1 = [
            "nom" => "directeur Genral",
            "description" => "il charger de gérée la drection général"
        ];

        $fonction_2 = [
            "nom" => "direteur des resouce humaine",
            "description" => "responssable de la gestion des resources hummain et du personnel"
        ];

        $fonction_3 = [
            "nom" => "dercteur financier",
            "description" => "il est responssable de la gestion des resouces financière de l'unté de recherche"
        ];

        Fonction::create($fonction_1);
        Fonction::create($fonction_2);
        Fonction::create($fonction_3);
    }
}
