<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_1 = [
            "nom" => "Admin"
        ];

        $role_2 = [
            "nom" => "Membre"
        ];

        $role_3 = [
            "nom" => "User"
        ];

        Role::create($role_1);
        Role::create($role_2);
        Role::create($role_3);
    }
}
