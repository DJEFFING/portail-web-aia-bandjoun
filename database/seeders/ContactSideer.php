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
            "adress" => "A108 Adam Street, New York, NY 535022",
            "email" => "contact@example.com",
            "telephone" => "+1 5589 55488 55",
            "twitter_link" => "twitter.com",
            "facebook_link" => "https://facebook.com",
            "instagram_link" => "https://instagram.com",
            "linkedin_link" => "https://linkedin.com",
        ];

        Contact::create($contact);
    }
}
