<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'first_name' => 'Cesar',
            'last_name' => 'Ramirez',
            'middle_name' => 'Magtagnob',
            'mobile_no' => '09123456789',
            'birth_date' => '1990-01-01',
            'age' => 33,
            'sex' => 'Male',
            'email' => 'pingzr022@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('51622313'),
        ]);
    }
}
