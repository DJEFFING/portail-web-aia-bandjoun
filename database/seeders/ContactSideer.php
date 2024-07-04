<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSideer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contact = [
            "adress" => "IUT Fotso Victor, 123, Bandjoun",
            "email" => "iut.fotsovictor@univ-dschang.org",
            "telephone" => "237 677 59 52 19",
            "twitter_link" => "twitter.com",
            "facebook_link" => "https://facebook.com",
            "instagram_link" => "https://instagram.com",
            "linkedin_link" => "https://linkedin.com",
        ];

        Contact::create($contact);
    }
}
