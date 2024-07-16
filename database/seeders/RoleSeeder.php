<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{

    public function run(): void
    {
        // creación del rol de super-admin
        Role::create(['name' => 'Super Admin']);

        // creación de la variable de rol
        $administrative = Role::create(['name' => 'Administrative']);
        $manager = Role::create(['name' => 'Manager']);
        $logistics = Role::create(['name' => 'Logistics']);

        // asignación de los permisos definidos en /sitios/sisfarma/database/seeders/PermissionSeeder.php
        $administrative->givePermissionTo([
            'show-role',
            'show-user',
            'create-product',
            'edit-product',
            'delete-product',
            'create-prices',
            'edit-prices',
            'delete-prices',
            'create-batches',
            'edit-batches',
            'delete-batches',
            'create-supplier',
            'edit-supplier',
            'delete-supplier',
            'create-client',
            'edit-client',
            'delete-client',
            'create-dde',
            'edit-dde',
            'delete-dde',
            'show-work-order',
            'create-invoice',
            'edit-invoice',
            'delete-invoice',
            'create-traceable',
            'edit-traceable',
            'delete-traceable',
            'create-report',
            'edit-report',
            'delete-report',
            'create-quotation',
            'edit-quotation',
            'delete-quotation',
        ]);

        $manager->givePermissionTo([
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
            'show-prices',
            'show-dde',
            'create-invoice',
            'edit-invoice',
            'delete-invoice',
            'show-traceable',
            'create-report',
            'edit-report',
            'delete-report',
            'edit-quotation',
            'show-quotation'
        ]);

        $logistics->givePermissionTo([
            'create-batches',
            'edit-batches',
            'delete-batches',
            'create-work-order',
            'edit-work-order',
            'delete-work-order',
            'create-dde',
            'edit-dde',
            'delete-dde',
            'show-dde',
            'show-invoice',
            'edit-traceable',
        ]);
    }
}
