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
        Role::create(['name' => 'kasir', 'guard_name' => 'web']);

        $dataUser = [
            [
                'name' => 'Kasir1',
                'email' => 'kasir1@gmail.com',
                'password' => Hash::make('kasir01'),
            ],

            [
                'name' => 'Kasir2',
                'email' => 'kasir2@gmail.com',
                'password' => Hash::make('kasir02'),
            ],

            [
                'name' => 'Kasir3',
                'email' => 'kasir3@gmail.com',
                'password' => Hash::make('kasir03'),
            ],

            [
                'name' => 'Kasir4',
                'email' => 'kasir4@gmail.com',
                'password' => Hash::make('kasir04'),
            ],

            [
                'name' => 'Kasir5',
                'email' => 'kasir5@gmail.com',
                'password' => Hash::make('kasir05'),
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
