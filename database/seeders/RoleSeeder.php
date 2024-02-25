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
            'show-product',
            'create-prices',
            'edit-prices',
            'delete-prices',
            'show-prices',
            'create-batches',
            'edit-batches',
            'delete-batches',
            'show-batches',
            'create-supplier',
            'edit-supplier',
            'delete-supplier',
            'show-batches',
            'create-client',
            'edit-client',
            'delete-client',
            'show-client',
            'create-dde',
            'edit-dde',
            'delete-dde',
            'show-dde',
            'create-work-order',
            'edit-work-order',
            'delete-work-order',
            'show-work-order',
            'create-bill',
            'edit-bill',
            'delete-bill',
            'show-bill',
            'create-traceable',
            'edit-traceable',
            'delete-traceable',
            'show-traceable',
            'create-report',
            'edit-report',
            'delete-report',
            'show-report',
            'create-quotation',
            'edit-quotation',
            'delete-quotation',
            'show-quotation'
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
            'create-bill',
            'edit-bill',
            'delete-bill',
            'show-traceable',
            'create-report',
            'edit-report',
            'delete-report',
            'show-report',
            'edit-quotation',
            'show-quotation'
        ]);

        $logistics->givePermissionTo([
            'create-batches',
            'edit-batches',
            'delete-batches',
            'show-batches',
            'create-work-order',
            'edit-work-order',
            'delete-work-order',
            'create-dde',
            'edit-dde',
            'delete-dde',
            'show-dde',
            'edit-traceable',
        ]);
    }
}
