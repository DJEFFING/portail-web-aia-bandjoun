<?php

namespace Database\Seeders;

use App\Models\Slide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slide = [
            "titre" => "Welcome to UR-AIA BANDJOUN",
            "desription" => "(Unite de Recherche d'Automatique et d'Informatique Appliqée) Au cours de la période 2006-2022, l’Unité de Recherche UR-AIA a beaucoup contribué à l’augmentation des capacités d’encadrements de ses membres et a contribué au rayonnement scientifique sur le plan national et international.",
        ];

        Slide::create($slide);
    }

}
