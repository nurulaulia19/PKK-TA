{{-- @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Silahkan Login Admin PKK') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
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
                                        <div class="modal-header">
                                        </div>
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
</div>
@endsection --}}


{{-- bikin login sendiri --}}

@extends('layouts.login')
@section('content')


<div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
          <center>
              <img src="{{ url ('image/remove.png') }}" width="100px">
          </center>
        <p class="login-box-msg">Silahkan Login</p>

        <form method="POST" action="{{ route('login') }}">
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
            {{-- <div class="col md-8">
              <div class="icheck-primary">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div> --}}
            <!-- /.col -->
            <div class="col md-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.login-card-body -->
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the value of the 'logout' query parameter
            var queryParamsLogout = new URLSearchParams(window.location.search).get('logout');
    
            // Check if 'logout' is set to 'true'
            if (queryParamsLogout === 'true') {
                console.log('bli jelas');
                // Clear all page history
                // window.history.replaceState({}, document.title, window.location.href);
                window.history.pushState(null, null, window.location.href);

            }
        });
    </script>
    
    
  </div>
@endsection
