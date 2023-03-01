<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Niamul Hasan",
            'email' => "niamulhasanbd@gmail.com",
            'type' => "admin",
            'password' => Hash::make('123456789')
        ]);
        User::create([
            'name' => "anujit",
            'email' => "anujitdeb99@gmail.com",
            'type' => "user",
            'password' => Hash::make('123456789')
        ]);
        User::create([
            'name' => "thanvi",
            'email' => "thanvi@gmail.com",
            'type' => "employee",
            'password' => Hash::make('123456789')
        ]);
        User::create([
            'name' => "sadi",
            'email' => "sadi@gmail.com",
            'type' => "byer",
            'password' => Hash::make('123456789')
        ]);
    }
}
