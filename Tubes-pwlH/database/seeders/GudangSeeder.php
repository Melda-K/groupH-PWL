<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class GudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataUser = [
            [
                'name' => 'pegawai gudang 1',
                'email' => 'pegawai-gudang1@gmail.com',
                'password' => Hash::make('p-gudang1'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'pegawai gudang 2',
                'email' => 'pegawai-gudang2@gmail.com',
                'password' => Hash::make('p-gudang2'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'pegawai gudang 3',
                'email' => 'pegawai-gudang3@gmail.com',
                'password' => Hash::make('p-gudang3'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'pegawai gudang 4',
                'email' => 'pegawai-gudang4@gmail.com',
                'password' => Hash::make('p-gudang4'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'pegawai gudang 5',
                'email' => 'pegawai-gudang5@gmail.com',
                'password' => Hash::make('p-gudang5'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
       
        ];
        foreach ($dataUser as $data) {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $user->assignRole('gudang');
        }
    }
}