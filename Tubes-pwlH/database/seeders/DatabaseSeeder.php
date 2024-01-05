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
            AdminSeeder::class,
            BarangSeeder::class,
            CabangSeeder::class,
            GudangSeeder::class,
            KasirSeeder::class,
            KategoriSeeder::class,
            ManajerSeeder::class,
            ProdukSeeder::class,
            SupervisorSeeder::class,
        ]);
    }
}
