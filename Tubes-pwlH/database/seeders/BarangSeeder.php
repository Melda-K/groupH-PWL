<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert(
            [
                 //Kategori Alat Tulis
                [
                    'kode_barang' => 'BKU001',
                    'nama_barang' => 'Buku Tulis',
                    'qty' => 10,
                    'harga' => 999900,
                    'produk_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'TPX002',
                    'nama_barang' => 'Tipe-X',
                    'qty' => 15,
                    'harga' => 500000,
                    'produk_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'PGS003',
                    'nama_barang' => 'Penggaris',
                    'qty' => 20,
                    'harga' => 799900,
                    'produk_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'SPDL004',
                    'nama_barang' => 'Spidol',
                    'qty' => 10,
                    'harga' => 700000,
                    'produk_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'PNL005',
                    'nama_barang' => 'Pensil',
                    'qty' => 20,
                    'harga' => 400000,
                    'produk_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'BPN006',
                    'nama_barang' => 'Balpoin',
                    'qty' => 25,
                    'harga' => 250000,
                    'produk_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'BRG007',
                    'nama_barang' => 'Stabilo Joyko',
                    'qty' => 15,
                    'harga' => 1100000,
                    'produk_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'CRY008',
                    'nama_barang' => 'Crayon Faber Castell',
                    'qty' => 17,
                    'harga' => 3700000,
                    'produk_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //Kategori Minuman
                [
                    'kode_barang' => 'UTRA009',
                    'nama_barang' => 'Ultra Milk',
                    'qty' => 21,
                    'harga' => 570000,
                    'produk_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'YGR010',
                    'nama_barang' => 'Yogurt Cimory',
                    'qty' => 17,
                    'harga' => 900000,
                    'produk_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'TEH011',
                    'nama_barang' => 'Teh Botol',
                    'qty' => 11,
                    'harga' => 250000,
                    'produk_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'BRG012',
                    'nama_barang' => 'Nescafe',
                    'qty' => 13,
                    'harga' => 640000,
                    'produk_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'MGU013',
                    'nama_barang' => 'Mogu Mogu',
                    'qty' => 20,
                    'harga' => 900000,
                    'produk_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //Kategori Makanan
                [
                    'kode_barang' => 'CKT014',
                    'nama_barang' => 'SilverQueen',
                    'qty' => 20,
                    'harga' => 1700000,
                    'produk_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'MIE015',
                    'nama_barang' => 'Pop Mie',
                    'qty' => 25,
                    'harga' => 500000,
                    'produk_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'KZR016',
                    'nama_barang' => 'Kanzler Nugget',
                    'qty' => 30,
                    'harga' => 380000,
                    'produk_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'ORO017',
                    'nama_barang' => 'Oreo',
                    'qty' => 20,
                    'harga' => 750000,
                    'produk_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'QTL018',
                    'nama_barang' => 'Qitela Singkong',
                    'qty' => 20,
                    'harga' => 200000,
                    'produk_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //Kategori Bumbu Dapur
                [
                    'kode_barang' => 'RYO019',
                    'nama_barang' => 'Royco',
                    'qty' => 20,
                    'harga' => 550000,
                    'produk_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'SMBL020',
                    'nama_barang' => 'Saus Sambal',
                    'qty' => 20,
                    'harga' => 690000,
                    'produk_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'KCP021',
                    'nama_barang' => 'Kecap Bango',
                    'qty' => 10,
                    'harga' => 200000,
                    'produk_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'LDU022',
                    'nama_barang' => 'Ladaku',
                    'qty' => 10,
                    'harga' => 200000,
                    'produk_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //Kategori Alat Mandi
                [
                    'kode_barang' => 'SBN023',
                    'nama_barang' => 'Sabun Nuvo',
                    'qty' => 10,
                    'harga' => 1412200,
                    'produk_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'SMP024',
                    'nama_barang' => 'Zinc Shampoo',
                    'qty' => 17,
                    'harga' => 1690000,
                    'produk_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'PST025',
                    'nama_barang' => 'Pepsodent',
                    'qty' => 15,
                    'harga' => 1190000,
                    'produk_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}