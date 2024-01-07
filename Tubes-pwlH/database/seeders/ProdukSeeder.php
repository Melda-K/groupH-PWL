<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produks')->insert(
            [
                [
                    'jenis_produk' => 'Sidu',
                    'id_kategori' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Joyko',
                    'id_kategori' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Faber Castell',
                    'id_kategori' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Susu',
                    'id_kategori' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Yogurt',
                    'id_kategori' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Teh',
                    'id_kategori' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Kopi',
                    'id_kategori' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Minuman Botol',
                    'id_kategori' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Coklat',
                    'id_kategori' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Mie',
                    'id_kategori' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Kanzler',
                    'id_kategori' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Makanan',
                    'id_kategori' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Snack',
                    'id_kategori' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Bumbu Masak',
                    'id_kategori' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Alat Mandi',
                    'id_kategori' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ],
        );
    }
}
