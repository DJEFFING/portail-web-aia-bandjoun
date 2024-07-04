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
            "name" => "KENNE",
            "email" => "godpromesse@gmail.com",
            "telephone" => "237 677595219",
            "prenom" => "Godpromesse",
            "grade" => "Professeur",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "KENNE Godpromesse",
            "sexe" => "M",
            "fonction_id"=>1,
            "adress" => "iut-fv",
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "godpromesse.kenne@univ-dschang.org/",
            "password" => bcrypt("KENNE123")

        ];

        $user_2 = [
            "name" => "TCHIOTSOP",
            "email" => "daniel2002@gmail.com",
            "telephone" => "675869331",
            "prenom" => "Daniel",
            "grade" => "Professeur",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "TCHIOTSOP Daniel",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "https://www.facebook.com/daniel.tchiotsop/",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "",
            "password" => bcrypt("daniel123")

        ];

        $user_3 = [
            "name" => "KENGNE",
            "email" => "jacques2002@gmail.com",
            "telephone" => "675869351",
            "prenom" => "jacques",
            "grade" => "Professeur",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "KENGNE jacques",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>1,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Kengne-Jacques/3",
            "password" => bcrypt("jacques123")

        ];

        // $user_4 = [
        //     'name',
        //     'email',
        //     'password',
        //     "prenom",
        //     "telephone",
        //     "description",
        //     "sexe",
        //     "lieu_travail",
        //     "grade",
        //     "adress",
        //     "profil_url",
        //     "facebook_url",
        //     "instagram_url",
        //     "linkdin_url",
        //     "twiter_url",
        //     "web_url",
        //     "fonction_id"
        // ];

        $user_4 = [
            "name" => "KAPCHE TAGNE",
            "email" => "François2002@gmail.com",
            "telephone" => "675869352",
            "prenom" => "François",
            "grade" => " Maître de Conférences",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "KAPCHE TAGNE François",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/scientific-contributions/Francois-Kapche-Tagne-2139334787",
            "password" => bcrypt("François123")
        ];



        $user_5 = [
            "name" => "KOM",
            "email" => "guillaume2002@gmail.com",
            "telephone" => "675869353",
            "prenom" => "Guillaume Honoré",
            "grade" => " Maître de Conférences",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "KOM Guillaume Honoré",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://dergipark.org.tr/en/pub/@kom-guillaume-honore",
            "password" => bcrypt("Guillaume123")
        ];


        $user_6 = [
            "name" => " MBOUPDA PONE",
            "email" => "Justin2002@gmail.com",
            "telephone" => "675869354",
            "prenom" => "Justin Roger",
            "grade" => " Maître de Conférences",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "MBOUPDA PONE Justin Roger",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Justin-Mboupda-Pone",
            "password" => bcrypt("Justin123")
        ];

        $user_7 = [
            "name" => "TALA TEBUE",
            "email" => "eric2002@gmail.com",
            "telephone" => "675869355",
            "prenom" => "Eric",
            "grade" => " Maître de Conférences",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "TALA TEBUE Eric",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Justin-Mboupda-Pone",
            "password" => bcrypt("eric123")
        ];

        $user_8 = [
            "name" => "DJOUFACK",
            "email" => "zacharie2002@gmail.com",
            "telephone" => "675869356",
            "prenom" => "Zacharie",
            "grade" => " Maître de Conférences",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "DJOUFACK Zacharie",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Zacharie-Djoufack",
            "password" => bcrypt("Zacharie123")
        ];


        $user_9 = [
            "name" => "CHIME",
            "email" => "alex2002@gmail.com",
            "telephone" => "675869357",
            "prenom" => "Alex",
            "grade" => "Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "CHIME Alex",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Alex-Chime",
            "password" => bcrypt("Alex123")
        ];

        $user_10 = [
            "name" => "DJIMELI",
            "email" => "alain2002@gmail.com",
            "telephone" => "675869358",
            "prenom" => "Alain",
            "grade" => "Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "DJIMELI Alain",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Djimeli-Tsajio-Alain-Bernard",
            "password" => bcrypt("Alain123")
        ];

        $user_11 = [
            "name" => " KAMDOUM TAMBA",
            "email" => "victor2002@gmail.com",
            "telephone" => "675869359",
            "prenom" => "Victor",
            "grade" => "Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => " KAMDOUM TAMBA Victor",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Victor-Kamdoum-Tamba",
            "password" => bcrypt("victor123")
        ];

        $user_12 = [
            "name" => " SANJONG",
            "email" => "thierry2002@gmail.com",
            "telephone" => "675869350",
            "prenom" => "Thierry",
            "grade" => "Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => " SANJONG Thierry",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Thierry-Sanjong",
            "password" => bcrypt("Thierry123")
        ];

        $user_13 = [
            "name" => "SAHA TCHINDA",
            "email" => "beaudelaire2002@gmail.com",
            "telephone" => "675869311",
            "prenom" => "Beaudelaire",
            "grade" => "Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "SAHA TCHINDA Beaudelaire",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Beaudelaire-Beaudelaire",
            "password" => bcrypt("Beaudelaire123")
        ];

        $user_14 = [
            "name" => "GOUNE",
            "email" => "russel2002@gmail.com",
            "telephone" => "675864331",
            "prenom" => "Russel",
            "grade" => "Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => " GOUNE Russel",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "",
            "password" => bcrypt("Russel123")
        ];

        $user_15 = [
            "name" => "KUATE Réné",
            "email" => "fochie2002@gmail.com",
            "telephone" => "675819331",
            "prenom" => "Fochié",
            "grade" => "Assistant",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "KUATE Réné Fochié",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Rene-Kuate-Fochie",
            "password" => bcrypt("fochie123")
        ];


        $user_16 = [
            "name" => "NFAH MBAKA",
            "email" => "eustace2002@gmail.com",
            "telephone" => "675869341",
            "prenom" => "Eustace",
            "grade" => "Maître de Conférences",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => " NFAH MBAKA Eustace",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/scientific-contributions/Eustace-Mbaka-Nfah-73440165",
            "password" => bcrypt("eustace123")
        ];

        $user_17 = [
            "name" => "CHEUKEM",
            "email" => "andre2002@gmail.com",
            "telephone" => "675869301",
            "prenom" => "André",
            "grade" => "Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => " CHEUKEM André",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Andre-Cheukem",
            "password" => bcrypt("andre123")
        ];

        $user_18 = [
            "name" => "SANJONG",
            "email" => "sanjong2002@gmail.com",
            "telephone" => "675869361",
            "prenom" => "Thierry",
            "grade" => "Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => " CHEUKEM Thierry",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Thierry-Sanjong",
            "password" => bcrypt("sanjong123")
        ];

        $user_19 = [
            "name" => " KUATE Réné",
            "email" => "kuate2002@gmail.com",
            "telephone" => "675869371",
            "prenom" => "Fochié",
            "grade" => "Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => " CHEUKEM Fochié",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Rene-Kuate-Fochie",
            "password" => bcrypt("kuate123")
        ];

        $user_20 = [
            "name" => "NKENLIFACK",
            "email" => "julius2002@gmail.com",
            "telephone" => "675869381",
            "prenom" => " Marcellin Julius",
            "grade" => " Maître de Conférences",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "NKENLIFACK  Marcellin Julius",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Marcellin-Nkenlifack",
            "password" => bcrypt("julius123")
        ];

        $user_21 = [
            "name" => "MPAME",
            "email" => "guilene2002@gmail.com",
            "telephone" => "675869391",
            "prenom" => " Guilène",
            "grade" => " Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "MPAME  Guilène",
            "sexe" => "F",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Guilene-Mpame",
            "password" => bcrypt("guilene123")
        ];

        $user_22 = [
            "name" => " LIENOU TCHAWE ",
            "email" => "jean2002@gmail.com",
            "telephone" => "237 673956798",
            "prenom" => " Jean pierre",
            "grade" => " Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => " LIENOU TCHAWE Jean pierre",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Lienou-Jean-Pierre",
            "password" => bcrypt("jean123")
        ];

        $user_23 = [
            "name" => " NOULAMO ",
            "email" => "noulamo2002@gmail.com",
            "telephone" => "237 677580394",
            "prenom" => " Thierry",
            "grade" => " Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => " NOULAMO Thierry",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/scientific-contributions/Thierry-Noulamo-69870785",
            "password" => bcrypt("thierry123")
        ];

        $user_24 = [
            "name" => "TALLA",
            "email" => "narcisse2002@gmail.com",
            "telephone" => "237 676962414",
            "prenom" => " Narcisse",
            "grade" => " Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "TALLA Narcisse",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Narcisse-Tankam",
            "password" => bcrypt("narcisse123")
        ];

        $user_25 = [
            "name" => "FOTSING TALLA",
            "email" => "bernard2002@gmail.com",
            "telephone" => "237 677861876",
            "prenom" => " Bernard",
            "grade" => " Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "FOTSING TALLA Bernard",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Bernard-Fotsing",
            "password" => bcrypt("bernard123")
        ];

        $user_26 = [
            "name" => "FOTSING",
            "email" => "foting2002@gmail.com",
            "telephone" => "237 699860655",
            "prenom" => " Eric",
            "grade" => " Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "FOTSING Eric",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "",
            "password" => bcrypt("Jefferson123")
        ];

        $user_27 = [
            "name" => "FOKO",
            "email" => "miguel2002@gmail.com",
            "telephone" => "237 699688614",
            "prenom" => " Miguel",
            "grade" => " Chargé de Cours",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "FOKO Miguel",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Foko-Sindjoung-Miguel-Landry",
            "password" => bcrypt("miguel123")
        ];

        $user_28 = [
            "name" => "Tsafack",
            "email" => "tsafackjefferson2001@gmail.com",
            "telephone" => "237 675869321",
            "prenom" => " Jefferson",
            "grade" => "Etudiant",
            "lieu_travail" => "IUT-FV Bandjoun",
            "description" => "Tsafack jefferson licence CDRI",
            "sexe" => "M",
            "adress" => "bandjoun 1234",
            "fonction_id"=>2,
            "facebook_url" => "",
            "instagram_url" => "",
            "twiter_url" => "",
            "web_url" => "https://www.researchgate.net/profile/Foko-Sindjoung-Miguel-Landry",
            "password" => bcrypt("miguel123")
        ];

        User::create($user_1);
        User::create($user_2);
        User::create($user_3);
        User::create($user_4);
        User::create($user_5);
        User::create($user_6);
        User::create($user_7);
        User::create($user_8);
        User::create($user_9);
        User::create($user_10);
        User::create($user_11);
        User::create($user_12);
        User::create($user_13);
        User::create($user_14);
        User::create($user_15);
        User::create($user_16);
        User::create($user_17);
        User::create($user_18);
        User::create($user_19);
        User::create($user_20);
        User::create($user_21);
        User::create($user_22);
        User::create($user_23);
        User::create($user_24);
        User::create($user_25);
        User::create($user_26);
        User::create($user_27);
        User::create($user_28);
    }
}
