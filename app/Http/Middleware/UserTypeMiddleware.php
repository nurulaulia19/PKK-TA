<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::check()) {
            $user = Auth::user();

            // Jika user sesuai dengan tipe yang diizinkan
            if ($user->user_type === $userType) {
                return $next($request);
            }

            // Jika user tidak sesuai dengan tipe yang diizinkan, redirect sesuai tipe
            // switch ($userType) {
            //     case 'superadmin':
            //         return redirect()->route('super_admin.login')->withErrors(['email' => ['Anda harus login sebagai super admin terlebih dahulu.']]);
            //         break;
            //     case 'admin_kabupaten':
            //         return redirect()->route('admin_kabupaten.login')->withErrors(['email' => ['Anda harus login sebagai admin kabupaten terlebih dahulu.']]);
            //         break;
            //     case 'admin_desa':
            //         return redirect()->route('admin_desa.login')->withErrors(['email' => ['Anda harus login sebagai admin desa terlebih dahulu.']]);
            //         break;
            //     case 'kader_dasawisma':
            //         return redirect()->route('kader_dasawisma.login')->withErrors(['email' => ['Anda harus login sebagai kader desa terlebih dahulu.']]);
            //         break;
            //     default:
            //         // Tipe user tidak dikenali
            //         return redirect('/'); // Atau sesuaikan dengan halaman default yang sesuai
            //         break;
            // }
            switch ($userType) {
                case 'superadmin':
                    return redirect()->route('login')->withErrors(['email' => ['Anda harus login sebagai super admin terlebih dahulu.']]);
                    break;
                case 'admin_kabupaten':
                    return redirect()->route('login')->withErrors(['email' => ['Anda harus login sebagai admin kabupaten terlebih dahulu.']]);
                    break;
                case 'admin_desa':
                    return redirect()->route('login')->withErrors(['email' => ['Anda harus login sebagai admin desa terlebih dahulu.']]);
                    break;
                case 'kader_dasawisma':
                    return redirect()->route('login')->withErrors(['email' => ['Anda harus login sebagai kader desa terlebih dahulu.']]);
                    break;
                case 'admin_kecamatan':
                    return redirect()->route('login')->withErrors(['email' => ['Anda harus login sebagai admin kecamatan terlebih dahulu.']]);
                    break;
                default:
                    // Tipe user tidak dikenali
                    return redirect('/'); // Atau sesuaikan dengan halaman default yang sesuai
                    break;
            }

        }

        // Jika user belum login, lewati middleware dan biarkan sistem menangani sesuai kebutuhan
        return $next($request);
    }
}
