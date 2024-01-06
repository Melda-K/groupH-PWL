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
                    'id_kategori' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Joyko',
                    'id_kategori' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Faber Castell',
                    'id_kategori' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Ultra',
                    'id_kategori' => '2',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Cimory',
                    'id_kategori' => '2',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Kanzler',
                    'id_kategori' => '3',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Qitela',
                    'id_kategori' => '3',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Mie',
                    'id_kategori' => '3',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Ladaku',
                    'id_kategori' => '4',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Nuvo',
                    'id_kategori' => '5',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Zinc',
                    'id_kategori' => '5',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Pepsodent',
                    'id_kategori' => '5',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ],
        );
    }
}
