<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $publication_1 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 22,
            
            "titre" => "Thèse de Doctorat/PhD de: TEGUIA Jean Blaise, Matricule: CM-UDs-15SCI-12378- sujet:
            Contribution à la détection et l'isolation des anomalies dans les machines asynchrones. ",
            
            "description_1" => "Thèse de Doctorat/PhD préparée à l'UR-MACETS et à l'UR-AIA, Faculté des Sciences, 
            Unité de Formation et Recherche de la « Dschang School of Science and Technology », 
            Université de Dschang, soutenue le 5 février 2022.",
            
            "description_2" => "Thèse de Doctorat/PhD préparée à l'UR-MACETS et à l'UR-AIA, Faculté des Sciences, 
            Unité de Formation et Recherche de la « Dschang School of Science and Technology », 
            Université de Dschang, soutenue le 5 février 2022.",
        ];


        $publication_2 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 9,
            
            "titre" => "Mémoire de Master : SIMO Rostand Sorel - sujet : Méthodes d'identification des états et 
            paramètres d'une classe de systèmes non linéaires.",
            
            "description_1" => "Mémoire de Master : SIMO Rostand Sorel - sujet : Méthodes d'identification des états et 
            paramètres d'une classe de systèmes non linéaires, 
            Université de Dschang, soutenue le 5 février 2022.",
            
            "description_2" => "Mémoire de Master : SIMO Rostand Sorel - sujet : Méthodes d'identification des états et 
            paramètres d'une classe de systèmes non linéaires, 
            Université de Dschang, soutenue le 5 février 2022.",
        ];

        Publication::create($publication_1);
        Publication::create($publication_2);


    }
}
