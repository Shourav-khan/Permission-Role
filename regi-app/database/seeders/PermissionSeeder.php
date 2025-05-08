<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions= [
                "role-list",
                "role-create",
                "role-update",
                "role-delete",
                "product-list",
                "product-create",
                "product-update",
                "product-delete",
        ];

        foreach( $permissions as $key => $permission ){
             Permission::create(['name' => $permission]);
        }
    }
}
