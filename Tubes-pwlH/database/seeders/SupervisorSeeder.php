<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'supervisor', 'guard_name' => 'web']);
        $dataUser = [
            [
                'name' => 'Supervisor1',
                'email' => 'supervisor1@gmail.com',
                'password' => Hash::make('supervisor01'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Supervisor2',
                'email' => 'supervisor2@gmail.com',
                'password' => Hash::make('supervisor02'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Supervisor3',
                'email' => 'supervisor3@gmail.com',
                'password' => Hash::make('supervisor03'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Supervisor4',
                'email' => 'supervisor4@gmail.com',
                'password' => Hash::make('supervisor04'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Supervisor5',
                'email' => 'supervisor5@gmail.com',
                'password' => Hash::make('supervisor05'),
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

        $user->assignRole('supervisor');
        }
    }
}
