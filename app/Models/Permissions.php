<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends \Spatie\Permission\Models\Permission
{
    use HasFactory;

    const MANAGE_ADMIN_DESA = 'can manage admin desa';
    const MANAGE_ADMIN_KELURAHAN = 'can manage admin kelurahan';
    const MANAGE_ADMIN_KECAMATAN = 'can manage admin kecamatan';
    const MANAGE_ADMIN_KABUPATEN = 'can manage admin kabupaten';
    const MANAGE_SUPER_ADMIN = 'can manage super admin';

    // const MANAGE_ROLES = 'can manage roles';
    // const MANAGE_PERMISSIONS = 'can manage permissions';
    const MANAGE_KADER_DASAWISMA = 'can manage kader desa';
    const MANAGE_KADER_KELURAHAN = 'can manage kader kelurahan';
    const MANAGE_KADER_KECAMATAN = 'can manage kader kecamatan';
    const MANAGE_KADER_KABUPATEN = 'can manage kader kabupaten';

    // const MANAGE_CATEGORIES = 'can manage categories';

    public static function getPermissionList(): array
    {
        return [
            self::MANAGE_ADMIN_DESA,
            self::MANAGE_ADMIN_KELURAHAN,
            self::MANAGE_ADMIN_KECAMATAN,
            self::MANAGE_ADMIN_KABUPATEN,
            self::MANAGE_SUPER_ADMIN,

//             self::MANAGE_ROLES,
//             self::MANAGE_PERMISSIONS,
            self::MANAGE_KADER_DASAWISMA,
            self::MANAGE_KADER_KELURAHAN,
            self::MANAGE_KADER_KECAMATAN,
            self::MANAGE_KADER_KABUPATEN,

//             self::MANAGE_CATEGORIES,
        ];
    }

    public static function isPermissionExist(string $permission_name)
    {
        $query = static::query();
        $query->where('name', '=', $permission_name);
        return $query->first();
    }
}