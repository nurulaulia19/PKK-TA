@extends('kader.layout')

@section('title', 'Edit Data Pemanfataan Tanah Pekarangan | Kader Dasawisma PKK Kab. Indramayu')

@section('bread', 'Edit Data Pemanfataan Tanah Pekarangan')
@section('container')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Pemanfataan Tanah Pekarangan</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form action="{{ url('data_pemanfaatan', $data_pemanfaatan->id) }}" method="POST">
        @method('PUT')

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
                <div class="col-md-6">
                    <div class="form-group @error('id_desa') is-invalid @enderror">
                        <label for="exampleFormControlSelect1">Desa</label>
                        {{-- nama desa --}}
                        @foreach ($desas as $c)
                            <input type="hidden" class="form-control" name="id_desa" id="id_desa" placeholder="Masukkan Nama Desa" value="{{$c->id}}">

                            <input type="text" disabled class="form-control" name="id_desa" id="id_desa" placeholder="Masukkan Nama Desa" value="{{ $c->nama_desa }}">

                        @endforeach
                    </div>
                    @error('id_desa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <div class="form-group @error('id_kecamatan') is-invalid @enderror">
                        <label for="exampleFormControlSelect1">Kecamatan</label>
                        {{-- nama kecamatan --}}
                        @foreach ($kec as $c)
                        <input type="hidden" class="form-control" name="id_kecamatan" id="id_kecamatan" placeholder="Masukkan Nama Desa" value="{{$c->id}}">
                        <input type="text" disabled class="form-control" name="id_kecamatan" id="id_kecamatan" placeholder="Masukkan Nama Desa" value="{{ $c->nama_kecamatan }}">

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
                          {{-- Pilih nama warga --}}
                          @foreach ($kel as $c)
                            <option value="{{ $c->id }}" {{ $c->id === $data_pemanfaatan->id_keluarga ? 'selected' : '' }}>{{ $c->nama_kepala_rumah_tangga }}</option>
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
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" id="nama_kategori" name="nama_kategori">
                            {{-- pilih nama Kategori --}}
                            @foreach($kategori as $key => $val)
                                @if($key==old('nama_kategori', $data_pemanfaatan->nama_kategori))
                                    <option value="{{ $key }}" selected>{{ $val }}</option>
                                @else
                                    <option value="{{ $key }}">{{ $val }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group @error('komoditi') is-invalid @enderror">
                {{-- nama kategori --}}
                <label>Komoditi</label>
                    <input type="text" class="form-control" name="komoditi" id="komoditi" placeholder="Masukkan Komoditi" value="{{ucfirst(old('komoditi', $data_pemanfaatan->komoditi))}}">
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
                        <input type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" id="jumlah" placeholder="Masukkan Jumlah" value="{{ucfirst(old('jumlah', $data_pemanfaatan->jumlah))}}">
                        @error('jumlah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('periode') is-invalid @enderror">
                    {{-- Pilih periode --}}
                    <label>Periode</label>
                    <select style="cursor:pointer;" class="form-control" id="periode" name="periode">
                        <option value="{{ $data_pemanfaatan->periode }}" {{ $data_pemanfaatan->periode ? 'selected' : '' }}>{{ $data_pemanfaatan->periode }}</option>
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
          <button type="submit" class="btn btn-primary">Edit</button>
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
