<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataUser = [
            [
                'name' => 'Kasir1',
                'email' => 'kasir1@gmail.com',
                'password' => Hash::make('kasir01'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Kasir2',
                'email' => 'kasir2@gmail.com',
                'password' => Hash::make('kasir02'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Kasir3',
                'email' => 'kasir3@gmail.com',
                'password' => Hash::make('kasir03'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Kasir4',
                'email' => 'kasir4@gmail.com',
                'password' => Hash::make('kasir04'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Kasir5',
                'email' => 'kasir5@gmail.com',
                'password' => Hash::make('kasir05'),
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

        $user->assignRole('kasir');
        }
    }
}
