@extends('admin_desa.layout')

@section('title', 'Tambah Kategori Kegiatan | Admin Desa PKK Kab. Indramayu')

@section('bread', 'Tambah Kategori Kegiatan')
@section('container')

<div class="col-md-4">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Kategori Kegiatan</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form action="{{ route('kategori_kegiatan.store') }}" method="POST">
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
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Kegiatan</label>
                        {{-- nama Nama Kegiatan --}}
                            <input type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" name="nama_kegiatan" id="nama_kegiatan" placeholder="Isi Nama Kegiatan" value="{{ old('nama_kegiatan') }}">
                            @error('nama_kegiatan')
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
          <a href="/kategori_kegiatan" class="btn btn-outline-primary">
            <span>Batalkan</span>
        </a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
@endsection

