<?php

namespace Database\Seeders;

use App\Models\RoleProjet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_1 = [
            "nom" => "participant",
            "description" => "c'est juste un participant au projet",

        ];
        RoleProjet::create($role_1 );
    }
}
