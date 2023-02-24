<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//hash is used for the password
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
        //
        DB::table('users')->insert([
            'name' => "Bileka Karunarathne",
            'email' => "bileka@bileka.com",
            'password' => Hash::make('password'),
            'phone' => "0757555359",
            'userType' => 0,
        ]);

        DB::table('users')->insert([
            'name' => "Ruby Windowsinghe",
            'email' => "ruby@bileka.com",
            'password' => Hash::make('password'),
            'phone' => "07545754533",
            'userType' => 1,
        ]);

        DB::table('users')->insert([
            'name' => "Digitalia Javarathne",
            'email' => "talia@bileka.com",
            'password' => Hash::make('password'),
            'phone' => "0789574466",
            'userType' => 1,
        ]);

        DB::table('users')->insert([
            'name' => "Jenkins Kontrolean",
            'email' => "jenkins@bileka.com",
            'password' => Hash::make('password'),
            'phone' => "07578644679",
            'userType' => 1,
        ]);

        DB::table('users')->insert([
            'name' => "Applein MacTavish",
            'email' => "applein@bileka.com",
            'password' => Hash::make('password'),
            'phone' => "0775373759",
            'userType' => 1,
        ]);
    }
}
