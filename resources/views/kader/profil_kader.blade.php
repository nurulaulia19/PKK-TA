@extends('kader.layout')

@section('title', 'Profil Saya | Kader Dasawisma PKK Kab. Indramayu')

@section('bread', 'Profil Saya')
@section('container')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img src="{{$data_kader->foto ? Storage::disk('public')->url($data_kader->foto) : null}}" class="profile-user-img img-fluid img-circle" width="100px">

              </div>

              <h3 class="profile-username text-center">{{ (Auth::user()->name) }}</h3>

              <p class="text-muted text-center">Kader Dasawisma</p>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Desa</b> <a class="float-right">{{ (Auth::user()->desa->nama_desa) }}</a>
                </li>
                <li class="list-group-item">
                  <b>Kecamatan</b> <a class="float-right">{{ (Auth::user()->kecamatan->nama_kecamatan) }}</a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Edit Nama Akun</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Edit Kata Sandi</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <form class="form-horizontal" action="{{ url ('/profil/update', $data_kader->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Nama" name="name" value="{{ old('name', Auth::user()->name) }}" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{ old('email', Auth::user()->email) }}" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                            <label>Foto Profil</label>
                            <input name="foto" type="file" class="form-control-file" id="foto" accept=".img, .jpg, .jpeg, .png" value="{{old('foto', Auth::user()->foto)}}">
                            <img src="{{$data_kader->foto ? Storage::disk('public')->url($data_kader->foto) : null}}" class="img-thumbnail" width="100px">
                                    {{-- <input name="logo" type="hidden" name="hidden_image" value="{{asset('gambar/'. $c->logo)}}" class="form-control-file" id="hidden_image"> --}}
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="/profil" class="btn btn-outline-primary">
                              <span>Batalkan</span>
                          </a>
                        </div>
                      </form>
                    <!-- /.post -->

                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                      <!-- timeline time label -->
                      <form class="form-horizontal" action="{{ url ('/profil/update/' . $data_kader->id . '/password') }}" method="POST">
                        @csrf

                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Kata Sandi Lama</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="name" name="password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Kata Sandi Baru</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="inputName2" name="new_password" required>
                            @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" id="inputEmail" name="new_password_confirmation" required>
                            @error('new_password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        </div>
                       <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="/profil" class="btn btn-outline-primary">
                              <span>Batalkan</span>
                          </a>
                        </div>
                      </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
          <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
