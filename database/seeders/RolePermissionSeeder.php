<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the dat\abase seeds.
     *
     * @return void
     */
    public function run()
    {
        //




        foreach (Permission::getPermissionList() as $key => $value) {
            if (!Permission::isPermissionExist($value)) {
                  Permission::create(['name' => $value]);
            }
        }

                    foreach (Role::getRoleList() as $key => $value) {
            if (!ROle::isRoleExist($value)) {
                $role = Role::create(['name' => $value]);

                if ($value == Role::ROLE_ADMIN) {
                    $role->syncPermissions([
                        Permission::MANAGE_ADMINS,
                        Permission::MANAGE_KADERS,

                        // Permission::MANAGE_PERMISSIONS,
                        // Permission::MANAGE_ROLES,
                        // Permission::MANAGE_CATEGORIES,
                    ]);
                } else if ($value == Role::ROLE_SELLER) {
                    $role->syncPermissions([
            Permission::MANAGE_PRODUCT,
                    ]);
                }
            }
                    }

    }
}