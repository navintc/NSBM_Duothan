<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
//hash is used for the password
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'name' => "Gehan Block",
            'email' => "gehan@bileka.com",
            'password' => Hash::make('password'),
            'userType' => 10,
        ]);

        DB::table('admin')->insert([
            'name' => "Dino Corera",
            'email' => "dino@bileka.com",
            'password' => Hash::make('password'),
            'userType' => 10,
        ]);
    }
}
