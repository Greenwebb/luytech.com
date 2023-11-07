<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@luytech.com',
            'email_verified_at' => now(),
            'password' => Hash::make('luytech.@2023'), // hashing the password
        ]);
    }
}
