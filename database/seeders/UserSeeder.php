<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create([
            'name' => 'Administrador',
            'email' => 'admin@sisfarma.com',
            'password' => Hash::make('12345'),
        ]);
        $superAdmin->assignRole('Super Admin');

        $manager = User::create([
            'name' => 'Usuario Gerente',
            'email' => 'manager@sisfarma.com',
            'password' => Hash::make('12345'),
        ]);
        $manager->assignRole('Manager');

        $admin = User::create([
            'name' => 'Usuario Administrativo',
            'email' => 'administrative@sisfarma.com',
            'password' => Hash::make('12345'),
        ]);
        $admin->assignRole('Administrative');

        $logistics = User::create([
            'name' => 'Usuario Logística',
            'email' => 'logistics@sisfarma.com',
            'password' => Hash::make('12345'),
        ]);
        $logistics->assignRole('Logistics');
    }
}
