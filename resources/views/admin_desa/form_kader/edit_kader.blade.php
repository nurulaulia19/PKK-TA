@extends('admin_desa.layout')

@section('title', 'Edit Data Kader Dasawisma | Admin Desa/Kelurahan PKK Kab. Indramayu')

@section('bread', 'Edit Data Kader Dasawisma')
@section('container')

<div class="col-md-6">
    <!-- general form elements -->

  </div>
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
            <form class="form-horizontal" action="{{ url ('data_kader', $data_kader->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')

                @csrf

                @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{  ($error)  }}</li>

                @endforeach
            </ul>
        </div>
    @endif
                <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Nama" name="name" value="{{$data_kader->name}}" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{$data_kader->email}}" required>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">User Type</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control @error('user_type') is-invalid @enderror" name="user_type" id="user_type" value="kader_dasawisma" required>
                        @error('user_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kader Dasawisma</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="id_dasawisma" name="id_dasawisma">
                            @foreach ($dasawisma as $c)
                                <option value="{{$c->id}}"{{ $c->id === $c->id_dasawisma ? 'selected' : '' }}>{{ $c->nama_dasawisma }}</option>
                            @endforeach
                            
                        </select>
                        @error('id_dasawisma')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Desa</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" name="id_desa" id="id_desa" placeholder="Masukkan Nama Kader" required value="{{ Auth::user()->desa->nama_desa }}">
                    </div>

                  </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Kecamatan</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" name="id_kecamatan" id="id_kecamatan" placeholder="Masukkan Nama Kader" required value="{{ Auth::user()->kecamatan->nama_kecamatan }}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Foto Profil</label>
                    <input name="foto" type="file" class="form-control-file" id="foto" accept=".img, .jpg, .jpeg, .png" value="{{old('foto')}}">
                    <img src="{{$data_kader->foto ? Storage::disk('public')->url($data_kader->foto) : null}}" class="img-thumbnail" width="100px">
                    {{-- <input name="logo" type="hidden" name="hidden_image" value="{{asset('gambar/'. $c->logo)}}" class="form-control-file" id="hidden_image"> --}}
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="/data_kader" class="btn btn-outline-primary">
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
              <form class="form-horizontal" action="{{ url ('/data_kader/update/' . $data_kader->id . '/password') }}" method="POST">
                @csrf
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
                    <a href="/data_kader" class="btn btn-outline-primary">
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
@endsection

@push('script-addon')

<script>
    $(document).ready(function() {
    $('#id_kecamatan').on('change', function() {
       var categoryID = $(this).val();
       console.log('cek data kecamatan');
       if(categoryID) {
        console.log('cek get data desa');

           $.ajax({
               url: '/getDesa/'+categoryID,
               type: "GET",
               data : {"_token":"{{ csrf_token() }}"},
               dataType: "json",
               success:function(data)
               {
                console.log('sukses cek data desa');

                 if(data){
                    $('#id_desa').empty();
                    $('#id_desa').append('<option hidden>Pilih Desa</option>');
                    $.each(data, function(key, desas){
                        $('select[name="id_desa"]').append('<option value="'+ desas.id +'">' + desas.nama_desa+ '</option>');
                    });
                }else{
                    $('#id_desa').empty();
                }
             }
           });
       }else{
         $('#id_desa').empty();
       }
    });
    });
</script>


@endpush
