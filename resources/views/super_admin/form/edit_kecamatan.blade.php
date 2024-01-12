@extends('super_admin.layout')

@section('title', 'Edit Data Kecamatan | Super Admin PKK Kab. Indramayu')

@section('bread', 'Edit Data Kecamatan')
@section('container')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Kecamatan</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ url ('/data_kecamatan', $data_kecamatan->id) }}" method="POST">
      {{-- @dump($data_desa) --}}
        @method('PUT')
        @csrf

        <div class="card-body">
          <div class="form-group">
            <label>Kode Kecamatan</label>
            <input type="text" class="form-control" name="kode_kecamatan" id="kode_kecamatan" placeholder="Masukkan Kode Desa" required value="{{ucfirst(old('kode_kecamatan', $data_kecamatan->kode_kecamatan))}}" >
          </div>
          <div class="form-group">
            <label>Nama Kecamatan</label>
            <input type="text" class="form-control" name="nama_kecamatan" id="nama_desa" placeholder="Masukkan Nama Desa" required value="{{ucfirst(old('nama_desa', $data_kecamatan->nama_kecamatan))}}">
          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="/data_desa" class="btn btn-outline-primary">
            <span>Batalkan</span>
        </a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
@endsection

