<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fakultas')->insert([
            "name" => "TEKNIK"
        ]);
        DB::table('fakultas')->insert([
            "name" => "FISIP"
        ]);
        DB::table('fakultas')->insert([
            "name" => "FMIPA"
        ]);
        DB::table('fakultas')->insert([
            "name" => "FKIP"
        ]);
        DB::table('fakultas')->insert([
            "name" => "FMIPA"
        ]);
        DB::table('fakultas')->insert([
            "name" => "PERTANIAN"
        ]);
        DB::table('fakultas')->insert([
            "name" => "FEB"
        ]);
    }
}
