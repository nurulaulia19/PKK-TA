<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = RouteServiceProvider::dashboard;
    public function authenticated(){
        if (Auth::user()->user_type == 'superadmin') {
            return redirect('/dashboard_super')->with('sukses', 'selamat datang');
        }
        elseif (Auth::user()->user_type == 'admin_desa') {
            return redirect('/dashboard')->with('sukses', 'selamat datang');
        }
        elseif ( Auth::user()->user_type == 'admin_kecamatan') {
            return redirect('/dashboard_kec')->with('sukses', 'selamat datang');
        }
        // elseif ( Auth::guard('kader')->user->user_type == 'kader_desa') {
        //     return redirect('/dashboard_kader')->with('status', 'selamat datang');
        // }
        elseif ( Auth::user()->user_type == 'kader_dasawisma') {
            Alert::success('Berhasil', 'Selamat datang');

            return redirect('/dashboard_kader');
        }
        else {
            return redirect('/dashboard_kab')->with('sukses', 'selamat datang');
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}