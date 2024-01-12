<?php

namespace App\Http\Middleware;
use RealRashid\SweetAlert\Facades\Alert;

use Closure;
use Illuminate\Http\Request;

class UserTypeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string $userType
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        $check = false;

        if ($user = auth()->user()) {
            if ($user->user_type === $userType) {

                $check = true;



            }
        }

            if ($check === false) {
                if ($userType === 'superadmin') {
                    return redirect()->route('super_admin.login')->withErrors(['email' => ['Anda harus login sebagai super admin terlebih dahulu.']]);
                }
                elseif ($userType === 'admin_kabupaten') {
                    return redirect()->route('admin_kabupaten.login')->withErrors(['email' => ['Anda harus login sebagai admin kabupaten terlebih dahulu.']]);
                // }elseif ($userType === 'admin_kecamatan') {
                //     return redirect()->route('admin_kecamatan.login')->withErrors(['email' => ['Anda harus login sebagai admin kecamatan terlebih dahulu.']]);
                // }elseif ($userType === 'admin_kelurahan') {
                    // return redirect()->route('admin_kelurahan.login')->withErrors(['email' => ['Anda harus login sebagai admin kelurahan terlebih dahulu.']]);
                }elseif ($userType === 'admin_desa') {
                    return redirect()->route('admin_desa.login')->withErrors(['email' => ['Anda harus login sebagai admin desa terlebih dahulu.']]);
                }
                // elseif ($userType === 'kader_desa') {
                //     return redirect()->route('kader_kelurahan.login')->withErrors(['email' => ['Anda harus login sebagai kader desa terlebih dahulu.']]);
                // }
                else{
                    return redirect()->route('kader_dasawisma.login')->withErrors(['email' => ['Anda harus login sebagai kader desa terlebih dahulu.']]);
                }


        }
        return $next($request);

    }
}