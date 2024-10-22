<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUsersAndAdddressSedd extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "name" => "Cássio Coutinho Lima",
            "email" => "cassio@gmail.com",
            "password" => hash::make("123456789"),
        ]);

        DB::table('addresses')->insert([
            "address" => "Rua A, nº 15, Centro, Paraíso do Tocantins",
        ]);
    }
}
