<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cabang')->insert(
            [
                [
                    'id_manajer' => 2,
                    'nama_cabang' => 'Cabang I Mini Market',
                    'alamat' => 'Cianjur',
                    'supervisor_id' => 7,
                    'kasir_id' => 12,
                    'id_gudang' => 17,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'manajer_id' => 3,
                    'nama_cabang' => 'Cabang II Mini Market',
                    'alamat' => 'Bandung',
                    'supervisor_id' => 8,
                    'kasir_id' => 13,
                    'warehouse_id' => 18,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'manajer_id' => 4,
                    'nama_cabang' => 'Cabang III Mini Market',
                    'alamat' => 'Katang Tengah',
                    'supervisor_id' => 9,
                    'kasir_id' => 14,
                    'warehouse_id' => 19,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'manajer_id' => 5,
                    'nama_cabang' => 'Cabang IV Mini Market',
                    'alamat' => 'Ciranjang',
                    'supervisor_id' => 10,
                    'kasir_id' => 15,
                    'warehouse_id' => 20,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'manajer_id' => 6,
                    'nama_cabang' => 'Cabang V Mini Market',
                    'alamat' => 'Sukabumi',
                    'supervisor_id' => 11,
                    'kasir_id' => 16,
                    'warehouse_id' => 21,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
