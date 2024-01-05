<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert(
            [
                [
                    'jenis produk' => 'Sidu',
                    'id_kategori' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis produk' => 'Joyko',
                    'id_kategori' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis produk' => 'Faber Castell',
                    'id_kategori' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis produk' => 'Ultra',
                    'id_kategori' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis produk' => 'Cimory',
                    'id_kategori' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis produk' => 'Kanzler',
                    'id_kategori' => 6,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ],
        );
    }
}
