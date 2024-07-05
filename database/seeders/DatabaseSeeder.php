<?php

namespace Database\Seeders;

use App\Models\Apropos;
use App\Models\Axe;
use App\Models\RoleEquipe;
use App\Models\TypeEvernement;
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
        $this->call(UserRoleSeeder::class);

        $this->call(PoleRechercheSeeder::class);
        $this->call(EquipeSeeder::class);
        $this->call(AxeSeeder::class);

        $this->call(RoleEquipeSeeder::class);
        $this->call(MembreEquipeSeeder::class);

        $this->call(TypeEvenementSeeder::class);
        $this->call(RoleEvenementSeeder::class);

        $this->call(RoleProjetSeeder::class);
        $this->call(ProjetSeeder::class);

        $this->call(AnneePublicationSeeder::class);
        $this->call(TypePublicationSeeder::class);
        $this->call(PublicationSeeder::class);

        $this->call(SlideSeeder::class);
        $this->call(AproposSeeder::class);
        $this->call(ContactSideer::class);


    }
}
