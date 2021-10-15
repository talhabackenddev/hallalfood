<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Chef',
            'email' => 'chef@chef.com',
            'password' => Hash::make('password'),
            'role' => 'chef',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'first_name' => 'customer',
            'email' => 'customer@customer.com',
            'password' => Hash::make('password'),
            'role' => 'customer',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'first_name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
        ]);
    }
}
