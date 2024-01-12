@extends('admin_kab.layout')

@section('title', 'Tambah Data Desa | Super Admin PKK Kab. Indramayu')

@section('bread', 'Tambah Data Desa')
@section('container')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Desa</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form action="{{ route('data_desa.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Kecamatan</label>
                  <select class="form-control" id="id_kecamatan" name="id_kecamatan">
                      @foreach ($kec as $c)
                          <option value="{{$c->id }}">  {{$c->kode_kecamatan }}-{{ $c->nama_kecamatan }}</option>
                      @endforeach
                  </select>
              </div>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label>Kode Desa</label>
            <input type="text" class="form-control" name="kode_desa" id="kode_desa" placeholder="Masukkan Kode Desa" required>
          </div>
          <div class="form-group">
            <label>Nama Desa</label>
            <input type="text" class="form-control" name="nama_desa" id="nama_desa" placeholder="Masukkan Nama Desa" required>
          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Tambah</button>
          <a href="/data_desa" class="btn btn-outline-primary">
            <span>Batalkan</span>
        </a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
@endsection

