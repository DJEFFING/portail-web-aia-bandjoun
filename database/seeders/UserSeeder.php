<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_1 = [
            "name" => "Dr Tsafack",
            "email" => "djefferson2001@gmail.com",
            "telephone" => "675869321",
            "prenom" => "Djefferson",
            "grade" => "Professeur",
            "lieu_travail" => "univercité de dschang",
            "description" => "djefferson tsafack est un developpeur spécialer dans le web et le mobile qui fait partie de notre unité de recherche",
            "sexe" => "M",
            "fonction_id"=>1,
            "adress" => "youndé 1234",
            "facebook_url" => "https://djeff.com",
            "instagram_url" => "https://djeff.com",
            "twiter_url" => "https://djeff.com",
            "web_url" => "https://djeff.com",
            "password" => bcrypt("djeff123")

        ];

        $user_2 = [
            "name" => "Dr Tadia",
            "email" => "david2002@gmail.com",
            "telephone" => "675869331",
            "prenom" => "david",
            "grade" => "docteur",
            "lieu_travail" => "univercité de yaounde",
            "description" => "david Tadia est un ingenieur spécialer dans la conception réseau qui fait partie de notre unité de recherche",
            "sexe" => "M",
            "adress" => "bandjour 1234",
            "fonction_id"=>1,
            "facebook_url" => "https://david.com",
            "instagram_url" => "https://david.com",
            "twiter_url" => "https://david.com",
            "web_url" => "https://david.com",
            "password" => bcrypt("david123")

        ];

        $user_3 = [
            "name" => "Dr djadjoum",
            "email" => "stella2002@gmail.com",
            "telephone" => "675869351",
            "prenom" => "stella",
            "grade" => "maitre de conférence",
            "lieu_travail" => "univercité de douala",
            "description" => "stella djadjoum est un ingenieur spécialer dans la conception réseau qui fait partie de notre unité de recherche",
            "sexe" => "M",
            "adress" => "bafoussam 1234",
            "fonction_id"=>1,
            "facebook_url" => "https://stella.com",
            "instagram_url" => "https://stella.com",
            "twiter_url" => "https://stella.com",
            "web_url" => "https://stella.com",
            "password" => bcrypt("stella123")

        ];

        User::create($user_1);
        User::create($user_2);
        User::create($user_3);
    }
}
