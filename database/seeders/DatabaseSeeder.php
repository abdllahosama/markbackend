<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Modules\Auth\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'company@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        // $this->call([
        //     SettingsSeeder::class,
        // ]);


    }
}
