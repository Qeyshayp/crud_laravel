<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //tambahkan ini

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode' => 'B001',
                'nama' => 'Kipas Angin',
                'harga' => 150000.00,
                'stok' => 100,
            ],
            [
                'kode' => 'B002',
                'nama' => 'Televisi',
                'harga' => 2000000.00,
                'stok' => 50,
            ],
        ]);
    }
}