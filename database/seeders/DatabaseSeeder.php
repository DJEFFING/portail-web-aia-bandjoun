<?php

namespace Database\Seeders;

use App\Models\Apropos;
use App\Models\Axe;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(FonctionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        User::factory(16)->create();

        $this->call(PoleRechercheSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(SlideSeeder::class);
        $this->call(AproposSeeder::class);
        $this->call(ContactSideer::class);


        $this->call(AnneePublicationSeeder::class);
        $this->call(TypePublicationSeeder::class);
        $this->call(PublicationSeeder::class);
        $this->call(EquipeSeeder::class);
        $this->call(AxeSeeder::class);

    }
}
