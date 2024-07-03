<?php

namespace Database\Seeders;

use App\Models\EquipeUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembreEquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //equipe 1
        $membre_1 = [
            "user_id" => 6,
            "equipe_id" => 1,
            "role_equipe_id" => 1
        ];

        $membre_2 = [
            "user_id" => 7,
            "equipe_id" => 1,
            "role_equipe_id" => 1
        ];

        $membre_3 = [
            "user_id" => 8,
            "equipe_id" => 1,
            "role_equipe_id" => 1
        ];

        $membre_4 = [
            "user_id" => 9,
            "equipe_id" => 1,
            "role_equipe_id" => 1
        ];

        $membre_5 = [
            "user_id" => 10,
            "equipe_id" => 1,
            "role_equipe_id" => 1
        ];

        $membre_6 = [
            "user_id" => 11,
            "equipe_id" => 1,
            "role_equipe_id" => 1
        ];

        $membre_7 = [
            "user_id" => 12,
            "equipe_id" => 1,
            "role_equipe_id" => 1
        ];

        $membre_8 = [
            "user_id" => 13,
            "equipe_id" => 1,
            "role_equipe_id" => 1
        ];

        $membre_9 = [
            "user_id" => 14,
            "equipe_id" => 1,
            "role_equipe_id" => 1
        ];

        $membre_10 = [
            "user_id" => 15,
            "equipe_id" => 1,
            "role_equipe_id" => 1
        ];


        //Equipe 2 (RAS)
        //Equipe 3 (RAS)

        $membre_11 = [
            "user_id" => 23,
            "equipe_id" => 3,
            "role_equipe_id" => 1
        ];

        $membre_12 = [
            "user_id" => 25,
            "equipe_id" => 3,
            "role_equipe_id" => 1
        ];

        $membre_13 = [
            "user_id" => 26,
            "equipe_id" => 3,
            "role_equipe_id" => 1
        ];

        $membre_14 = [
            "user_id" => 27,
            "equipe_id" => 3,
            "role_equipe_id" => 1
        ];

        EquipeUser::create($membre_1);
        EquipeUser::create($membre_2);
        EquipeUser::create($membre_3);
        EquipeUser::create($membre_4);
        EquipeUser::create($membre_5);
        EquipeUser::create($membre_6);
        EquipeUser::create($membre_7);
        EquipeUser::create($membre_8);
        EquipeUser::create($membre_9);
        EquipeUser::create($membre_10);
        EquipeUser::create($membre_11);
        EquipeUser::create($membre_12);
        EquipeUser::create($membre_13);
        EquipeUser::create($membre_14);


    }
}
