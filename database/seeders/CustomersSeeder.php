<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table("customers")->insert([
            'fname' => \Str::random(5),
            'lname' => \Str::random(5),
            'email' => \Str::random(5) . "@gmail.com",
            'password' => \Hash::make('password')
        ]);
    }
}
