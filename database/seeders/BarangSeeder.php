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
        DB::table('barang')->insert([
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
                'stok' => 150,
            ],
            [
                'kode' => 'B003',
                'nama' => 'Kulkas',
                'harga' => 5000000.00,
                'stok' => 25,
            ],
            [
                'kode' => 'B004',
                'nama' => 'Radio',
                'harga' => 500000.00,
                'stok' => 30,
            ],
            [
                'kode' => 'B005',
                'nama' => 'AC',
                'harga' => 1500000.00,
                'stok' => 10,
            ],
            [
                'kode' => 'B006',
                'nama' => 'Radio',
                'harga' => 270000.00,
                'stok' => 5,
            ],
            [
                'kode' => 'B007',
                'nama' => 'Blender',
                'harga' => 300000.00,
                'stok' => 300,
            ],
            [
                'kode' => 'B008',
                'nama' => 'Microwave',
                'harga' => 2300000.00,
                'stok' => 200,
            ],
            [
                'kode' => 'B009',
                'nama' => 'Laptop',
                'harga' => 6000000.00,
                'stok' => 200,
            ],
            [
                'kode' => 'B010',
                'nama' => 'CPU',
                'harga' => 200000.00,
                'stok' => 200,
            ],
        ]);
    }
}