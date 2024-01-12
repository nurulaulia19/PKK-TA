@extends('admin_desa.layout')

@section('title', 'Edit Keterangan Kegiatan | Admin Desa PKK Kab. Indramayu')

@section('bread', 'Edit Keterangan Kegiatan')
@section('container')

<div class="col-md-4">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Keterangan Kegiatan</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form action="{{ url('keterangan_kegiatan', $keterangan_kegiatan->id) }}" method="POST">
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
            <div class="form-group ">
                <label>Nama Kegiatan</label>
                <select class="form-control" id="id_kegiatan" name="id_kegiatan">
                    {{-- nama dasa wisma --}}
                    @foreach ($kategori_kegiatan as $c)
                        <option value="{{$c->id}}" {{ $c->id === $keterangan_kegiatan->id_kegiatan ? 'selected' : '' }}>{{ $c->nama_kegiatan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Nama Keterangan</label>
                    {{-- nama Nama Kegiatan --}}
                            <input type="text" class="form-control @error('nama_keterangan') is-invalid @enderror" name="nama_keterangan" id="nama_keterangan" placeholder="Isi Nama Kegiatan" value="{{ old('nama_keterangan', $keterangan_kegiatan->nama_keterangan) }}">
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
          <button type="submit" class="btn btn-primary">Edit</button>
          <a href="/keterangan_kegiatan" class="btn btn-outline-primary">
            <span>Batalkan</span>
        </a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
@endsection

