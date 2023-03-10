<?php

namespace Database\Seeders;

use App\Models\Buyer;
use App\Models\Customers;
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
        /*User::create([
            'name' => "Niamul Hasan",
            'email' => "niamulhasanbd@gmail.com",
            'type' => "admin",
            'password' => Hash::make('123456789')
        ]);*/
        User::create([
            'name' => "super admin",
            'email' => "superadmin@gmail.com",
            'address' => "Mirpur",
            'phone' => "01995876029",
            'type' => "admin",
            'password' => Hash::make('111111')
        ]);
        User::create([
            'name' => "sadia",
            'email' => "sadia@gmail.com",
            'address' => "Savar",
            'phone' => "01688614633",
            'type' => "customer",
            'password' => Hash::make('111111')
        ]);
        User::create([
            'name' => "sara",
            'email' => "sara@gmail.com",
            'address' => "Dhanmondi",
            'phone' => "01995876029",
            'type' => "buyer",
            'password' => Hash::make('111111')
        ]);
        User::create([
            'name' => "jon",
            'email' => "jon@gmail.com",
            'address' => "Mohammadpur",
            'phone' => "01638045225",
            'type' => "employee",
            'password' => Hash::make('111111')
        ]);
    }
}
