<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cabangs')->insert(
            [
                [
                    'manajer_id' => 1,
                    'nama_cabang' => 'Cabang I Mini Market',
                    'alamat' => 'Cianjur',
                    'supervisor_id' => 1,
                    'kasir_id' => 1,
                    'gudang_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'manajer_id' => 2,
                    'nama_cabang' => 'Cabang II Mini Market',
                    'alamat' => 'Bandung',
                    'supervisor_id' => 2,
                    'kasir_id' => 2,
                    'gudang_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'manajer_id' => 3,
                    'nama_cabang' => 'Cabang III Mini Market',
                    'alamat' => 'Katang Tengah',
                    'supervisor_id' => 3,
                    'kasir_id' => 3,
                    'gudang_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'manajer_id' => 4,
                    'nama_cabang' => 'Cabang IV Mini Market',
                    'alamat' => 'Ciranjang',
                    'supervisor_id' => 4,
                    'kasir_id' => 4,
                    'gudang_id' => 20,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'manajer_id' => 5,
                    'nama_cabang' => 'Cabang V Mini Market',
                    'alamat' => 'Sukabumi',
                    'supervisor_id' => 5,
                    'kasir_id' => 5,
                    'gudang_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
