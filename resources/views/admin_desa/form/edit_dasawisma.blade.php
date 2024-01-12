@extends('admin_desa.layout')

@section('title', 'Edit Data Dasawisma | Admin Desa PKK Kab. Indramayu')

@section('bread', 'Edit Data Dasawisma')
@section('container')

<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Dasawisma</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form action="{{ url('data_dasawisma', $data_dasawisma->id) }}" method="POST">
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
            <div class="row">

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Dasawisma</label>
                        {{-- nama Nama Dasawisma --}}
                            <input type="text" class="form-control @error('nama_dasawisma') is-invalid @enderror" name="nama_dasawisma" id="nama_dasawisma" placeholder="Isi Nama Dasawisma" value="{{ old('nama_dasawismma', $data_dasawisma->nama_dasawisma) }}">
                            @error('nama_dasawisma')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Alamat Dasawisma</label>
                        {{-- nama Alamat --}}
                            <input type="text" class="form-control @error('alamat_dasawisma') is-invalid @enderror" name="alamat_dasawisma" id="alamat_dasawisma" placeholder="Isi Alamat Dasawisma" value="{{ old('alamat_dasawisma', $data_dasawisma->alamat_dasawisma) }}">
                            @error('alamat_dasawisma')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>RT</label>
                        <input type="number" class="form-control @error('rt') is-invalid @enderror" name="rt" id="rt" placeholder="Isi RT" required value="{{ old('rt', $data_dasawisma->rt) }}">
                        @error('rt')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>RW</label>
                        <input type="number" class="form-control @error('rw') is-invalid @enderror" name="rw" id="rw" placeholder="Isi RW" required value="{{ old('rw', $data_dasawisma->rw) }}">
                        @error('rw')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group @error('dusun') is-invalid @enderror">
                        <label>Dusun</label>
                        <input type="text" class="form-control @error('dusun') is-invalid @enderror" name="dusun" id="dusun" placeholder="Isi Nama Dusun" required value="{{ old('dusun', $data_dasawisma->dusun) }}">
                        @error('dusun')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group @error('status') is-invalid @enderror">
                        <label>Status</label>
                        <select class="form-control @error('status') is-invalid @enderror" name="status">
                            <option hidden> Pilih Status Dasawisma</option>
                            <option value="1" {{ $data_dasawisma->status == '1' ? 'selected' :'' }}>Aktif</option>
                            <option value="0" {{ $data_dasawisma->status == '0' ? 'selected' :''}}>Tidak Aktif</option>
                        </select>
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama Desa</label>
                    <input type="text" readonly class="form-control" name="id_desa" id="id_desa" placeholder="Masukkan Nama Kader" required value="{{ Auth::user()->desa->nama_desa }}">
                  </div>
                <div class="form-group">
                    <label>Nama Kecamatan</label>
                    <input type="text" readonly class="form-control" name="id_kecamatan" id="id_kecamatan" placeholder="Masukkan Nama Kader" required value="{{ Auth::user()->kecamatan->nama_kecamatan }}">
                </div>
                <div class="col-md-2">
                    <div class="form-group @error('periode') is-invalid @enderror">
                        {{-- pilih periode --}}
                        <label>Periode</label>
                        <select style="cursor:pointer;" class="form-control" id="periode" name="periode">
                            <option value="{{ $data_dasawisma->periode }}"
                                {{ $data_dasawisma->periode ? 'selected' : '' }}>{{ $data_dasawisma->periode }}
                            </option>
                                <?php
                                $year = date('Y');
                                $min = $year ;
                                    $max = $year + 20;
                                for( $i=$min; $i<=$max; $i++ ) {
                                echo '<option value="'.$i.'" >'.$i.'</option>';
                            }?>
                        </select>
                    </div>
                    @error('periode')
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
          <a href="/data_dasawisma" class="btn btn-outline-primary">
            <span>Batalkan</span>
        </a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
@endsection

