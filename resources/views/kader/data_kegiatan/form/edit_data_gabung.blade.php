@extends('kader.layout')

@section('title', 'Edit Data Gabung Pelatihan Kader TP PKK | Kader Desa/Kelurahan PKK Kab. Indramayu')

@section('bread', 'Edit Data Gabung Pelatihan Kader TP PKK')
@section('container')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Gabung Pelatihan Kader TP PKK</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form action="{{ url('data_gabung', $data_gabung->id) }}" method="POST">
        @method('PUT')

        @csrf
        <div class="card-body">
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{  ($error)  }}</li>

                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group @error('id_desa') is-invalid @enderror">
                <label for="exampleFormControlSelect1">Desa</label>
                    {{-- nama desa --}}
                    @foreach ($desas as $c)
                        <input type="hidden" class="form-control" name="id_desa" id="id_desa" placeholder="Masukkan Nama Desa" value="{{$c->id}}">
                        <input type="text" readonly class="form-control" placeholder="Masukkan Nama Desa" value="{{$c->nama_desa}}">
                    @endforeach
            </div>
                    @error('id_desa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            <div class="form-group @error('id_kecamatan') is-invalid @enderror">
                <label for="exampleFormControlSelect1">Kecamatan</label>
                {{-- nama kecamatan --}}
                    @foreach ($kec as $c)
                        <input type="hidden" class="form-control" name="id_kecamatan" id="id_kecamatan" placeholder="Masukkan Nama Desa" value="{{$c->id}}">
                        <input type="text" readonly class="form-control" placeholder="Masukkan Nama Desa" value="{{ $c->nama_kecamatan }}">
                    @endforeach
            </div>
                    @error('id_kecamatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            <div class="form-group">
                {{-- nama kabupaten --}}
                <label for="exampleFormControlSelect1">Kabupaten</label>
                    <input type="text" readonly class="form-control" name="kota" id="kota" placeholder="Masukkan Kota" required value="Indramayu">
            </div>


            <div class="form-group">
                {{-- nama provinsi --}}
                    <label for="exampleFormControlSelect1">Provinsi</label>
                        <input type="text" readonly class="form-control" name="provinsi" id="provinsi" placeholder="Masukkan Provisni" required value="Jawa Barat">
            </div>


            <div class="form-group">
                {{-- no.registrasi --}}
                <label>No. Registrasi</label>
                    <input type="text" class="form-control @error('no_registrasi') is-invalid @enderror" name="no_registrasi" id="no_registrasi" placeholder="Masukkan No. Registrasi" value="{{ ucfirst(old('no_registrasi', $data_gabung->no_registrasi)) }}">
                        @error('no_registrasi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
            </div>

            <div class="form-group">
                <label>Nama</label>
                    {{-- nama warga --}}
                        @foreach ($kader as $c)
                            <input type="hidden" class="form-control" name="id_user" id="id_user" placeholder="Masukkan Nama Desa" required value="{{$c->id}}">
                            <input type="text" readonly class="form-control" placeholder="Masukkan Nama Desa" required value="{{ $c->name }}">
                        @endforeach
            </div>
                        @error('id_user')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

            <div class="form-group">
                <label>Tanggal Masuk</label>
                    <input type="date" class="form-control @error('tgl_masuk') is-invalid @enderror" name="tgl_masuk" id="tgl_masuk" placeholder="Di isi tanggal lahir" data-date-format="dd/mm/yyyy" value="{{ ucfirst(old('tgl_masuk', $data_gabung->tgl_masuk)) }}">
                        @error('tgl_masuk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
            </div>

            <div class="form-group">
            {{-- beri Kedudukan --}}
                <label>Kedudukan</label>
                    <input type="text" class="form-control @error('kedudukan') is-invalid @enderror" name="kedudukan" id="kedudukan" placeholder="Masukkan Kedudukan" value="{{ ucfirst(old('kedudukan', $data_gabung->kedudukan)) }}">
                        @error('kedudukan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
            </div>
        </div>


        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="/data_gabung" class="btn btn-outline-primary">
            <span>Batalkan</span>
        </a>
        </div>
      </form>
    </div>
    <!-- /.card -->
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
                        $('select[name="id_desa"]').append('<option value="'+ key +'">' + desas.nama_desa+ '</option>');
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
