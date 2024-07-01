<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'title' => json_encode(['ar' => 'title 1', 'en' => 'title 2']),
            'description' => json_encode(['ar' => 'desc 1', 'en' => 'desc 2']),
            'image' => 'imag-1',
            'address' => json_encode(['ar' => 'Your address here', 'en' => 'Your address here']),
            'phone_1' => '1234567',
            'phone_2' => '123456789',
            'email' => 'test@email.com',
            'website' => 'https://website.com',
            'social_links' => json_encode([
                'facbooke' => 'facebook.com',
                'twitter' => 'twitter.com',
                'instagram' => 'instagram.com',
                'snapchat' => 'snapchat.com'
            ]),
            'updated_at' => now(),
            'created_at' => now(),
        ]);
    }
}
