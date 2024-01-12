<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends \Spatie\Permission\Models\Role
{
    use HasFactory;
    const ROLE_ADMIN = 'Admin';

    // const ROLE_ADMIN_DESA = 'Admin Desa';
    // const ROLE_ADMIN_KELURAHAN = 'Admin Kelurahan';
    // const ROLE_ADMIN_KECAMATAN = 'Admin Kecamatan';
    // const ROLE_ADMIN_KABUPATEN = 'Admin Kabupaten';
    // const ROLE_SUPER_ADMIN = 'Super Admin';

    const ROLE_KADER = 'Kader';

    // const ROLE_KADER_DESA = 'Kader Desa';
    // const ROLE_KADER_KELURAHAN = 'Kader Kelurahan';
    // const ROLE_KADER_KECAMATAN = 'Kader Kecamatan';
    // const ROLE_KADER_KABUPATEN = 'Kader Kabupaten';


    public static function getRoleList(): array
    {
        return [
            self::ROLE_ADMIN,
            self::ROLE_KADER,


            // self::ROLE_ADMIN_DESA,
            // self::ROLE_ADMIN_KELURAHAN,
            // self::ROLE_ADMIN_KECAMATAN,
            // self::ROLE_ADMIN_KABUPATEN,
            // self::ROLE_SUPER_ADMIN,

            // self::ROLE_KADER_DESA,
            // self::ROLE_KADER_KELURAHAN,
            // self::ROLE_KADER_KECAMATAN,
            // self::ROLE_KADER_KABUPATEN,
        ];
    }

    public static function isRoleExist(string $role_name)
    {
        return empty($role_name) ? static::query()
        : static::where('name', '=', $role_name)->first();
    }

}