{{-- bikin login sendiri --}}

@extends('kader.layout_login')
@section('content')


<div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Kader</b>Dasawisma</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
          <center>
              <img src="{{ url ('image/remove.png') }}" width="100px">
          </center>
        <p class="login-box-msg">Silahkan Login Kader Dasawisma</p>

        <form method="POST" action="{{ route('kader_dasawisma.login') }}">
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


      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
@endsection
