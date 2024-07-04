<?php

namespace Database\Seeders;

use App\Models\Apropos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AproposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apropos = [
            "titre" =>"Missions du laboratoire",

            "desription" => "L’UR.A.I.A. entend apporter sa contribution, en laissant bien sûr sa marque, au
            développement de la science en général et de notre pays, le Cameroun, dans le
            domaine des sciences de l’ingénieur. L’expertise de ce laboratoire s’étend, de
            l’Automatique à l’Informatique, en passant par l’analyse et traitement des signaux
            biomédicaux et les énergies renouvelables. Dans l’optique d’augmenter en
            quantité et en qualité ses membres, l’UR.A.I.A. entend, par l’organisation
            régulière de séminaires ou de journées scientifiques, encourager la recherche en
            son sein et produire des résultats scientifiques publiés dans des journaux
            scientifiques de renommée internationale et des résultats de recherchedéveloppement"
        ];

        Apropos::create($apropos);
    }
}
