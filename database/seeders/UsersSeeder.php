<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        User::insert([
            'name' => 'test',
            'email' => 'test@test.pl',
            'password' => Hash::make('password'),
        ]);
    }
}
