<?php

namespace Database\Seeders;

use App\Models\Apropos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AproposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apropos = [
            "titre" =>"Consequatur eius et magnam",
            "desription" => "EST 1988 Our Story Inventore aliquam beatae at et id alias. Ipsa dolores amet consequuntur minima quia maxime autem. Quidem id sed ratione. Tenetur provident autem in reiciendis rerum at dolor. Aliquam consectetur laudantium temporibus dicta minus dolor. Ullamco laboris nisi ut aliquip ex ea commo Duis aute irure dolor in reprehenderit in Ullamco laboris nisi ut aliquip ex ea Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in quo eveniet. Molestias in maxime doloremque."
        ];

        Apropos::create($apropos);
    }
}
