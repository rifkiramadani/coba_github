<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            "name" => "Muhammad Rifky Ramadani",
            "npm" => "G1F022039",
            "alamat" => "Curup",
            "fakultas_id" => 1
        ]);
        DB::table('mahasiswas')->insert([
            "name" => "Dwi Saputra",
            "npm" => "G1F022069",
            "alamat" => "Kepahiang",
            "fakultas_id" => 2
        ]);
        DB::table('mahasiswas')->insert([
            "name" => "Muhammad Salman ALfarizi",
            "npm" => "G1F022047",
            "alamat" => "ArgaMakmur",
            "fakultas_id" => 3
        ]);
    }
}
