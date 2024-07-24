<?php

namespace Database\Seeders;

use App\Models\Projet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projet_1 = [
            "titre" => "Etude de faisabilité et d’opportunité d’implantation des moteurs à cogénération dans les villages camerounais",
            "description_1" => "Etude de faisabilité et d’opportunité d’implantation des moteurs à cogénération dans les villages camerounais",
            "description_2" => "Etude de faisabilité et d’opportunité d’implantation des moteurs à cogénération dans les villages camerounais",
            "date_debut" => "2011-04-12",
            "date_fin" => "2013-04-12",
            
            "user_id" => 16,
            "status" => true

        ];

        $projet_2 = [
            "titre" => "Télédiagnostic en cardiologie dans l’environnement tropical",
            "description_1" => "Télédiagnostic en cardiologie dans l’environnement tropical",
            "description_2" => "Télédiagnostic en cardiologie dans l’environnement tropical",
            "date_debut" => "2006-01-05",
            "date_fin" => "2008-01-05",

            "user_id" => 2,
            "status" => true


        ];

        $projet_3 = [
            "titre" => "« ICT for Education » : Développement et déploiement d’une Plateforme de Modernisation d’Enseignement de l’Informatique à l’aide des TIC dans les Lycées",
            "description_1" => "« ICT for Education » : Développement et déploiement d’une Plateforme de Modernisation d’Enseignement de l’Informatique à l’aide des TIC dans les Lycées",
            "description_2" => "« ICT for Education » : Développement et déploiement d’une Plateforme de Modernisation d’Enseignement de l’Informatique à l’aide des TIC dans les Lycées",
            "date_debut" => "2016-01-05",
            "date_fin" => "2016-12-05",

            "user_id" => 20,
            "status" => true
        ];

        $projet_4 = [
            "titre" => "Les Tic au Service au Développement : Traduction Automatique des Appels Téléphoniques Inter Linguistiques Pour l’Essor des Langues et Cultures Nationales",
            "description_1" => "Les Tic au Service au Développement : Traduction Automatique des Appels Téléphoniques Inter Linguistiques Pour l’Essor des Langues et Cultures Nationales",
            "description_2" => "Les Tic au Service au Développement : Traduction Automatique des Appels Téléphoniques Inter Linguistiques Pour l’Essor des Langues et Cultures Nationales",
            "date_debut" => "2016-01-05",
            "date_fin" => "2020-12-05",

            "user_id" => 20,
            "status" => true
        ];

        $projet_5 = [
            "titre" => "Plateforme de partage de ressources pédagogiques (cours, documents multimédia, outils de travaux pratiques, salle de formation, etc.) afin de pallier à la faiblesse des offres de formation.",
            "description_1" => "Plateforme de partage de ressources pédagogiques (cours, documents multimédia, outils de travaux pratiques, salle de formation, etc.) afin de pallier à la faiblesse des offres de formation.",
            "description_2" => "Plateforme de partage de ressources pédagogiques (cours, documents multimédia, outils de travaux pratiques, salle de formation, etc.) afin de pallier à la faiblesse des offres de formation.",
            "date_debut" => "2016-01-05",
            "date_fin" => "2017-12-05",

            "user_id" => 24,
            "status" => true
        ];

        $projet_6 = [
            "titre" => "Modèle Générique de Plateforme d’Automatisation de la Gestion des Examens (PAGES) : algorithmes de Gestion Sécurisés par biométrie des Evaluations en Ligne.",
            "description_1" => "Modèle Générique de Plateforme d’Automatisation de la Gestion des Examens (PAGES) : algorithmes de Gestion Sécurisés par biométrie des Evaluations en Ligne.",
            "description_2" => "Modèle Générique de Plateforme d’Automatisation de la Gestion des Examens (PAGES) : algorithmes de Gestion Sécurisés par biométrie des Evaluations en Ligne.",
            "date_debut" => "2019-01-05",
            "date_fin" => "2021-01-05",

            "user_id" => 20,
            "status" => true
        ];

        $projet_7 = [
            "titre" => "ICT for Education : ITE integration in Schools",
            "description_1" => "ICT for Education : ITE integration in Schools",
            "description_2" => "ICT for Education : ITE integration in Schools",
            "date_debut" => "2019-01-05",
            "date_fin" => "2021-01-05",

            "user_id" => 20,
            "status" => true
        ];

        Projet::create($projet_1);
        Projet::create($projet_2);
        Projet::create($projet_3);
        Projet::create($projet_4);
        Projet::create($projet_5);
        Projet::create($projet_6);
        Projet::create($projet_7);
    }
}
