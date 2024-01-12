@extends('admin_kab.layout')

@section('title', 'Edit Data Galeri Kegiatan | Admin PKK Kab. Indramayu')

@section('bread', 'Edit Data Galeri Kegiatan')
@section('container')

<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Gambar Kegiatan</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ url ('/galeriKeg', $galeriKeg->id) }}" method="POST" enctype="multipart/form-data">
      {{-- @dump($berita) --}}
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

        <div class="card-body">
            <div class="form-group">
                <label>Keterangan Gambar</label>
                <input type="text" class="form-control" name="nama_gambar" id="nama_gambar" placeholder="Masukkan Keterangan Gambar" required value="{{ucfirst(old('nama_gambar', $galeriKeg->nama_gambar))}}">
            </div>
            <div class="form-group">
                <label>Nama Kegiatan</label>
                <input type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan" placeholder="Masukkan Nama Kegiatan Gambar" required value="{{ucfirst(old('nama_kegiatan', $galeriKeg->nama_kegiatan))}}">
            </div>

            <div class="form-group">
                <label>Tanggal Publish Gambar</label>
                <input type="date" class="form-control" name="tgl_publish" id="tgl_publish" placeholder="Masukkan Tanggal Publish Gambar" required value="{{ucfirst(old('tgl_publish', $galeriKeg->tgl_publish))}}">
            </div>
            <div class="form-group">
                <label>Pengirim Gambar</label>
                <input type="text" class="form-control" name="pengirim" id="pengirim" placeholder="Masukkan Pengirim Gambar" required value="{{ucfirst(old('pengirim', $galeriKeg->pengirim))}}">
            </div>
            <div class="form-group">
                <label>Gambar Berita</label>
                <input name="gambar" type="file" class="form-control-file" id="gambar" accept=".img, .jpg, .jpeg, .png">
                <img src="/galeri/{{($galeriKeg->gambar)}}" class="img-thumbnail" width="100px">
                <input name="gambar" type="hidden" name="hidden_image" value="{{asset('galeri/'. $galeriKeg->gambar)}}" class="form-control-file" id="hidden_image">
            </div>

          </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Edit</button>
          <a href="/galeriKeg" class="btn btn-outline-primary">
            <span>Batalkan</span>
        </a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
@endsection

