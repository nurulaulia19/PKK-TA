{{-- bikin login sendiri --}}

{{-- @extends('layouts.app') --}}
@extends('admin_kec.layout_login')
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Silahkan Login Admin Desa PKK') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin_desa.login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#contohModal">
                                    {{ __('Login') }}
                                </button>

                                <div class="modal fade" id="contohModal" role="dialog" arialabelledby="modalLabel" area-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header"> --}}

                                           {{-- <img src="/asset/sukses.png" width="" height="" alt="..."> --}}
                                        {{-- </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b>Kecamatan</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
          <center>
              <img src="{{ url ('image/remove.png') }}" width="100px">
          </center>
        <p class="login-box-msg">Silahkan Login Admin TP PKK Kecamatan</p>

        <form method="POST" action="{{ route('admin_kecamatan.login') }}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

<br>
          <div class="row">
            <div class="col md-8">
              <div class="icheck-primary">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col md-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        {{-- <div class="social-auth-links text-center mb-3">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
          </a>
        </div> --}}
        <!-- /.social-auth-links -->

        <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
@endsection
