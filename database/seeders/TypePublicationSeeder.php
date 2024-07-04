<?php

namespace Database\Seeders;

use App\Models\TypePublication;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypePublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type_1 = [
            "nom" => "Thèses de Doctorat encadrées et soutenues"
        ];

        $type_2 = [
            "nom" => "Mémoires de niveau Bac+5 encadrés et soutenus"
        ];

        $type_3 = [
            "nom" => "ouvrage"
        ];

        $type_4 = [
            "nom" => "Article"
        ];

        $type_5 = [
            "nom" => "Brevets"
        ];

        $type_6 = [
            "nom" => "Brevets"
        ];

        $type_7 = [
            "nom" => "Livres/Chapitres d'ouvrage"
        ];

        $type_8 = [
            "nom" => "Articles publiés dans les revues indexées"
        ];

        $type_9 = [
            "nom" => "Communications de Conférences"
        ];

        $type_10 = [
            "nom" => "Autre"
        ];

        TypePublication::create($type_1);
        TypePublication::create($type_2);
        TypePublication::create($type_3);
        TypePublication::create($type_4);
        TypePublication::create($type_5);
        TypePublication::create($type_6);
        TypePublication::create($type_7);
        TypePublication::create($type_8);
        TypePublication::create($type_9);
        TypePublication::create($type_10);
    }
}
