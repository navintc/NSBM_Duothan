<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//hash is used for the password
use Illuminate\Support\Facades\Hash;

class PharmacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pharmacy')->insert([
            'name' => "Bileka Pharmacy",
            'email' => "bileka@bileka.com",
            'password' => Hash::make('password'),
            'pharNo' => "513515",
            'address' => "13, Kandy",
            'phone' => "513535135",
            'userType' => 0,
        ]);

        DB::table('pharmacy')->insert([
            'name' => "Ruby Pharmacy",
            'email' => "ruby@bileka.com",
            'password' => Hash::make('password'),
            'pharNo' => "55555",
            'address' => "313, Galenbidunuwewa",
            'phone' => "03462246646",
            'userType' => 0,
        ]);

        DB::table('pharmacy')->insert([
            'name' => "Javarathne Pharmacy",
            'email' => "talia@bileka.com",
            'password' => Hash::make('password'),
            'pharNo' => "513515",
            'address' => "263/B, Colombo",
            'phone' => "64266435",
            'userType' => 0,
        ]);

        DB::table('pharmacy')->insert([
            'name' => "Jenkins Pharmacy",
            'email' => "jenkins@bileka.com",
            'password' => Hash::make('password'),
            'pharNo' => "975863515",
            'address' => "385, Monaragala",
            'phone' => "513535135",
            'userType' => 0,
        ]);

        DB::table('pharmacy')->insert([
            'name' => "Applein Pharmacy",
            'email' => "applein@bileka.com",
            'password' => Hash::make('password'),
            'pharNo' => "462662",
            'address' => "1735, Kandy",
            'phone' => "0837373773",
            'userType' => 0,
        ]);

    }
}
