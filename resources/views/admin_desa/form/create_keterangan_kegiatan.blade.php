@extends('admin_desa.layout')

@section('title', 'Tambah Keterangan Kegiatan | Admin Desa PKK Kab. Indramayu')

@section('bread', 'Tambah Keterangan Kegiatan')
@section('container')

<div class="col-md-4">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Keterangan Kegiatan</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form action="{{ route('keterangan_kegiatan.store') }}" method="POST">
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

        <div class="card-body">
            <div class="form-group ">
                <label>Nama Kegiatan</label>
                <select class="form-control" id="id_kegiatan" name="id_kegiatan">
                    {{-- nama dasa wisma --}}
                    <option hidden> Pilih Kegiatan</option>
                    @foreach ($kategori_kegiatan as $c)
                        <option value="{{$c->id}}">{{ $c->nama_kegiatan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Nama Keterangan</label>
                    {{-- nama Nama Kegiatan --}}
                            <input type="text" class="form-control @error('nama_keterangan') is-invalid @enderror" name="nama_keterangan" id="nama_keterangan" placeholder="Isi Nama Kegiatan" value="{{ old('nama_keterangan') }}">
                            @error('nama_keterangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>


            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Tambah</button>
          <a href="/keterangan_kegiatan" class="btn btn-outline-primary">
            <span>Batalkan</span>
        </a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
@endsection

