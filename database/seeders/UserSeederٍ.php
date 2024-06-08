<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeederٍ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//composer require laravel/breeze --dev
// php artisan breeze:install
        User::create([
            'name' => 'muhammed',
            'email' => 'muhammed@gmail.com',
            'password' =>Hash::make('password'),


        ]);
        //  created_at - updated_at ________________________________________________________________
        User::create([
            'name' => 'muhammedali',
            'email' => 'muhammedali@gmail.com',
            'password' => Hash::make('password'),



        ]);

        DB::table('users')->insert([
            'name' => 'muhammedaliDB',
            'email' => 'muhammedaliDB@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
