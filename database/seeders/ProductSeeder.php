<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'nama_produk' => 'POCO X3 PRO',
            'tipe_produk' => 'HandPhone',
            'jumlah' => 10,
            'harga' => 3000000,
        ]);
    }
}
