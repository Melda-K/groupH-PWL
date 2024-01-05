<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class ManajerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'manajer', 'guard_name' => 'web']);

        $dataUser = [
            [
                'name' => 'Melda',
                'email' => 'melda@gmail.com',
                'password' => Hash::make('melda12345'),
            ],
            [
                'name' => 'Nisa',
                'email' => 'nisa@gmail.com',
                'password' => Hash::make('nisa12345'),
            ],
            [
                'name' => 'Zahari',
                'email' => 'zahari@gmail.com',
                'password' => Hash::make('zahari12345'),
            ],
            [
                'name' => 'Nabillah',
                'email' => 'nabillah@gmail.com',
                'password' => Hash::make('nabillah12345'),
            ],
            [
                'name' => 'Idan',
                'email' => 'idan@gmail.com',
                'password' => Hash::make('idan12345'),
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

            $user->assignRole('manajer');
        }
    }
}