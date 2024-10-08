<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRole_1 = [
            "user_id" => 1,
            "role_id" => 1
        ];

        $userRole_2 = [
            "user_id" => 2,
            "role_id" => 1
        ];

        $userRole_3 = [
            "user_id" => 3,
            "role_id" => 1
        ];

        UserRole::create($userRole_1);
        // UserRole::create($userRole_2);
        // UserRole::create($userRole_3);
    }
}
