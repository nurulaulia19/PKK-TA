@extends('kader.layout')

@section('title', 'Tambah Data Gabung Pelatihan Kader TP PKK | Kader Desa/Kelurahan PKK Kab. Indramayu')

@section('bread', 'Tambah Data Gabung Pelatihan Kader TP PKK')
@section('container')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Gabung Pelatihan Kader TP PKK</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form action="{{ route('data_gabung.store') }}" method="POST">
        @csrf
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        {{  ($errors)  }}
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
                <label for="exampleFormControlSelect1">Kabupaten</label>
                {{-- nama kabupaten --}}
                <input type="text" readonly class="form-control" name="kota" id="kota" placeholder="Masukkan Kota" required value="Indramayu">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Provinsi</label>
                {{-- nama provinsi --}}
                    <input type="text" readonly class="form-control" name="provinsi" id="provinsi" placeholder="Masukkan Provisni" required value="Jawa Barat">
            </div>

            <div class="form-group">
                <label>No. Registrasi</label>
                {{-- no.registrasi --}}
                    <input type="text" class="form-control @error('no_registrasi') is-invalid @enderror" name="no_registrasi" id="no_registrasi" placeholder="Masukkan No. Registrasi" value="{{ old('no_registrasi') }}">
                        @error('no_registrasi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
            </div>

            <div class="form-group @error('id_kecamatan') is-invalid @enderror">
                <label>Nama</label>
                {{-- pilih nama kader --}}
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
                    {{-- tgl masuk --}}
                    <input type="date" class="form-control @error('tgl_masuk') is-invalid @enderror" name="tgl_masuk" id="tgl_masuk" placeholder="Di isi tanggal lahir" data-date-format="mm/dd/yyyy" value="{{ old('tgl_masuk') }}">
                        @error('tgl_masuk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
            </div>

            <div class="form-group">
                <label>Kedudukan</label>
                    {{-- nama kedudukan --}}
                    <input type="text" class="form-control @error('kedudukan') is-invalid @enderror" name="kedudukan" id="kedudukan" placeholder="Masukkan Kedudukan" value="{{ old('kedudukan') }}">
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

<script type="text/javascript">
    // $(document).ready(function() {

    //     $('#datepicker').datepicker({

    //         format: 'yyyy-mm-dd',

    //         autoclose: true,

    //     });

    // });

    $(function() {
    $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true
    });
});

</script>
@endpush
