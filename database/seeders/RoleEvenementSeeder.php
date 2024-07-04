<?php

namespace Database\Seeders;

use App\Models\RoleEvernement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleEvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_1 = [
            "nom" => "rôle",
            "description" => "un simple rôle",
        ];

        RoleEvernement::create($role_1);
    }
}
