<?php

namespace Database\Seeders;

use App\Models\RoleEquipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleEquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_1 = [
            "nom" => "membre",
            "description" => "c'est juste un membre de l'Équipe"
        ];

        RoleEquipe::create($role_1);
    }
}
