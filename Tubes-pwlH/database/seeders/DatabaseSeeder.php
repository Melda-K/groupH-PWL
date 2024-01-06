<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            OwnerSeeder::class,
            ManajerSeeder::class,
            SupervisorSeeder::class,
            KasirSeeder::class,
            GudangSeeder::class,
            CabangSeeder::class,
            KategoriSeeder::class,
            ProdukSeeder::class,
            BarangSeeder::class,
        ]);
    }
}
