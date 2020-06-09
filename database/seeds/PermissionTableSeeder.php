<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',   
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'address-list',
            'address-create',
            'address-edit',
            'address-delete',
            'company-list',
            'company-create',
            'company-edit',
            'company-delete',
            'vendor-list',
            'vendor-create',
            'vendor-edit',
            'vendor-delete',
            'purchase-list',
            'purchase-create',
            'purchase-edit',
            'purchase-delete',
            'goodreceipt-list',
            'goodreceipt-create',
            'goodreceipt-edit',
            'goodreceipt-delete',
            'sale-list',
            'sale-create',
            'sale-edit',
            'sale-delete',
            
            'quotation-list',
            'quotation-create',
            'quotation-edit',
            'quotation-delete',

            'coa-list',
            'coa-create',
            'coa-edit',
            'coa-delete',
            
           


        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
