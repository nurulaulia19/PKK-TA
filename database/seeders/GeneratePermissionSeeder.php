<?php

namespace Database\Seeders;

use App\Models\Permissions;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class GeneratePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach (Permissions::getPermissionList() as $key => $value) {
            if (!Permissions::isPermissionExist($value) ) {
                Permissions::create(['name' => $value]);
            }
        }

        foreach (Role::getRoleList() as $key => $value) {
            if (!Role::isRoleExist($value)) {
                $role = Role::create(['name'=> $value]);

                if ($value == Role::ROLE_ADMIN) {
                    $role->syncPermissions([
                        Permissions::MANAGE_ADMIN_DESA,
                        Permissions::MANAGE_ADMIN_KELURAHAN,
                        Permissions::MANAGE_ADMIN_KECAMATAN,
                        Permissions::MANAGE_ADMIN_KABUPATEN,
                    ]);
                }else if ($value == Role::ROLE_KADER) {
                    $role->syncPermissions([
                        Permissions::MANAGE_KADER_DASAWISMA,
                        Permissions::MANAGE_KADER_KELURAHAN,
                        Permissions::MANAGE_KADER_KECAMATAN,
                        Permissions::MANAGE_KADER_KABUPATEN,
                    ]);
                }
            }
        }
    }
}