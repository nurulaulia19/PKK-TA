@extends('kader.layout')

@section('title', 'Tambah Data Pemanfaatan Tanah Pekarangan | Kader Dasawisma PKK Kab. Indramayu')

@section('bread', 'Tambah Data Pemanfaatan Tanah Pekarangan')
@section('container')

<div class="col-md-8">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Pemanfaatan Tanah Pekarangan</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form action="{{ route('data_pemanfaatan.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <h6 style="color: red">* Semua elemen atribut harus diisi</h6>

            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{  ($error)  }}</li>

                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group @error('id_desa') is-invalid @enderror">
                        <label for="exampleFormControlSelect1">Desa</label>
                        {{-- nama desa --}}
                        @foreach ($desas as $c)
                        <input type="hidden" class="form-control" name="id_desa" id="id_desa" placeholder="Masukkan Nama Desa" required value="{{$c->id}}">

                        <input type="text" disabled class="form-control" name="id_desa" id="id_desa" placeholder="Masukkan Nama Desa" required value="{{ $c->nama_desa }}">

                        @endforeach
                    </div>
                    @error('id_desa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4">
                    <div class="form-group @error('id_kecamatan') is-invalid @enderror">
                        <label for="exampleFormControlSelect1">Kecamatan</label>
                        {{-- nama kecamatan --}}
                        @foreach ($kec as $c)
                        <input type="hidden" class="form-control" name="id_kecamatan" id="id_kecamatan" placeholder="Masukkan Nama Desa" required value="{{$c->id}}">
                        <input type="text" disabled class="form-control" name="id_kecamatan" id="id_kecamatan" placeholder="Masukkan Nama Desa" required value="{{ $c->nama_kecamatan }}">

                        @endforeach
                    </div>
                    @error('id_kecamatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-2">
                    <div class="form-group @error('id_user') is-invalid @enderror">
                        {{-- nama kader --}}
                        @foreach ($kad as $c)
                            <input type="hidden" class="form-control" name="id_user" id="id_user" placeholder="Masukkan Nama Desa" value="{{$c->id}}">
                        @endforeach
                    </div>
                    @error('id_user')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group @error('id_keluarga') is-invalid @enderror">
                        <label for="exampleFormControlSelect1">Nama Warga</label>
                        <select class="form-control" id="id_keluarga" name="id_keluarga">
                          {{-- nama warga --}}
                          <option hidden> Pilih Warga</option>
                          @foreach ($kel as $c)
                              <option value="{{$c->id}}">  {{$c->id }}-{{ $c->nama_kepala_rumah_tangga }}</option>
                          @endforeach
                          </select>
                      </div>
                      @error('id_keluarga')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>

                <div class="col-md-6">
                    <div class="form-group @error('nama_kategori') is-invalid @enderror">
                        <label>Kategori</label>
                        <select class="form-control" id="nama_kategori" name="nama_kategori">
                            {{-- pilih kategori --}}
                            <option hidden> Pilih Kategori</option>
                            {{-- @foreach($kategori as $key => $val)
                                @if($key==old('nama_kategori'))
                                <option value="{{ $key }}" selected>{{ $val }}</option>
                                @else
                                <option value="{{ $key }}">{{ $val }}</option>
                                @endif
                            @endforeach --}}
                            <option value="1">Peternakan</option>
                            <option value="2">Perikanan</option>
                            <option value="3">Warung Hidup</option>
                            <option value="4">TOGA (Tanaman Obat Keluarga)</option>
                            <option value="5">Tanaman Keras</option>
                            <option value="6">Lainnya</option>


                        </select>
                      </div>
                      @error('nama_kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Komoditi</label>
                {{-- nama Komoditi --}}
                <input type="text" class="form-control @error('komoditi') is-invalid @enderror" name="komoditi" id="komoditi" placeholder="Masukkan Komoditi" value="{{ old('komoditi') }}">
                @error('komoditi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jumlah</label>
                        {{-- Jumlah Komoditi--}}
                        <input type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" id="jumlah" placeholder="Masukkan Jumlah" value="{{ old('jumlah') }}">
                        @error('jumlah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group @error('periode') is-invalid @enderror">
                        <label>Periode</label>
                        {{-- Pilih periode --}}
                        <select style="cursor:pointer;" class="form-control" id="periode" name="periode">
                          <option hidden> Pilih Tahun</option>
                            <?php
                              $year = date('Y');
                              $min = $year ;
                              $max = $year + 20;
                              for( $i=$min; $i<=$max; $i++ ) {
                                echo '<option value='.$i.'>'.$i.'</option>';
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
          <button type="submit" class="btn btn-primary">Tambah</button>
          <a href="/data_pemanfaatan" class="btn btn-outline-primary">
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
