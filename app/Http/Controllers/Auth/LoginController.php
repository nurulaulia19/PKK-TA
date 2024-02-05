<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

    // hapus ini tadi aul
    // public function login()
    // {
    //     return view('admin_kab.login');
    // }
    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials['email'] = $request->get('email');
        $credentials['password'] = $request->get('password');
        $credentials['user_type'] = 'admin_kabupaten';
        $remember = $request->get('remember');

        $attempt = Auth::attempt($credentials, $remember);
        // dd($attempt);

        if ($attempt) {
            return redirect('/dashboard_kab');
        } else {
            return back()->withErrors(['email' => ['Incorrect email / password.']]);
        }
    }

    public function authenticated(){
        // aul hapus ini juga
        // dd(Auth::user());
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

    $redirect = route('login') . '?logout=true';

    return Redirect::to($redirect);
}
}