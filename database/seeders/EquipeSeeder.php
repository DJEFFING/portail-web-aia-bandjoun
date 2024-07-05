<?php

namespace Database\Seeders;

use App\Models\Equipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $equipe_1 = [
            "titre" => "Automatique et Traitement du Signal",

            "description_1" => "Nos recherches sont axées sur des problèmes de recherche et développement
            couvrant les domaines de l’Automatique des Systèmes non Linéaires et de Génie
            Biomédical et Instrumentation Industrielle.",

            "description_2" => "Nos recherches sont axées sur des problèmes de recherche et développement
            couvrant les domaines de l’Automatique des Systèmes non Linéaires et de Génie
            Biomédical et Instrumentation Industrielle.",

            "media_url" => "media.png",
            "code_equipe" => "ATS",
            "user_id" => 1,
            "pole_recherche_id" => 1,
            "status" => true
        ];

        $equipe_2 = [
            "titre" => "Planification et Développement des Énergies Renouvelables",
            "description_1" => "Nos recherches sont axées sur des problèmes de développement couvrant les domaines de
            Production de l’Énergie Électrique (méthodes de production optimale dans un
            environnement hydro dominant), du Contrôle du Réseau Électrique et Stabilité",

            "description_2" => "Nos recherches sont axées sur des problèmes de développement couvrant les domaines de
            Production de l’Énergie Électrique (méthodes de production optimale dans un
            environnement hydro dominant), du Contrôle du Réseau Électrique et Stabilité",

            "media_url" => "media.png",
            "code_equipe" => "PDER",
            "user_id" => 16,
            "pole_recherche_id" => 1,
            "status" => true
        ];

        $equipe_3 = [
            "titre" => "Sciences et Technologies de l’Information et de la Communication",

            "description_1" => "Nos recherches sont axées sur des problèmes de développement couvrant les domaines du
            Génie logiciel (Meta modélisation, modélisation opérationnelle des systèmes), de
            l’Automatique des systèmes Hybrides (analyse et simulation de Systèmes Dynamiques
            Hybrides), du Développement TICE et des techniques de « Elearning », des Systèmes
            d’Information Géographiques, des technologies mobiles, et des Web-Services,",

            "description_2" => "Nos recherches sont axées sur des problèmes de développement couvrant les domaines du
            Génie logiciel (Meta modélisation, modélisation opérationnelle des systèmes), de
            l’Automatique des systèmes Hybrides (analyse et simulation de Systèmes Dynamiques
            Hybrides), du Développement TICE et des techniques de « Elearning », des Systèmes
            d’Information Géographiques, des technologies mobiles, et des Web-Services,",

            "media_url" => "media.png",
            "code_equipe" => "STIC",
            "user_id" => 20,
            "pole_recherche_id" => 1,
            "status" => true
        ];

        Equipe::create($equipe_1);
        Equipe::create($equipe_2);
        Equipe::create($equipe_3);
    }
}
