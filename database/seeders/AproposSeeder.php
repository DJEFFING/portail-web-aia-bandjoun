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
            "titre" =>"Présentation et Missions du Laboratoire",

            "desription" => "L’Unité de Recherche d’Automatique et d’Informatique Appliquée (UR.A.I.A) de
            l’Institut Universitaire de Technologie Fotso Victor (IUT-FV) de l’Université de
            Dschang à Bandjoun, est l’une des deux structures de recherche de l’IUT-FV.
            Initialement composé de 17 membres, tous enseignants à l’IUT Fotso Victor (plus
            particulièrement les enseignants des départements de Génie Electrique, Génie
            Informatique et Génie des Télécommunications et Réseaux), dont les grades
            académiques étaient les suivants : 1 Maître de Conférences, 3 Chargés de Cours et
            13 Assistants, l’URAIA compte aujourd’hui plus de 25 membres permanents. Les
            grades académiques ont évolué qualitativement de la façon suivante : 03
            Professeurs titulaires ; 08 Maîtres de Conférences, 14 Chargés de Cours, 01
            Assistant. Par ailleurs, à ce jour, l’UR-AIA compte 26 thèses de Doctorat/PhD
            encadrées et soutenues et 114 Mémoires de Masters de Recherche encadrés et
            soutenus."
        ];

        Apropos::create($apropos);
    }
}
