<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{

    public function run(): void
    {
        $permissions = [
            'create-role',
            'edit-role',
            'delete-role',
            'show-role',
            'create-user',
            'edit-user',
            'delete-user',
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
            'show-supplier',
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
            'create-invoice',
            'edit-invoice',
            'delete-invoice',
            'show-invoice',
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
         ];

         foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
          }
    }
}
