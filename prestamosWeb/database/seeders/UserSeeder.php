<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=> "Administrador",
            "email"=> "admin@gmail.com",
            "password"=> bcrypt("hola123"),
        ])->assignRole('admin');

        User::create([
            "name"=> "User",
            "email"=> "user@gmail.com",
            "password"=> bcrypt("hola123"),
        ])->assignRole('usuario');
    }
}
