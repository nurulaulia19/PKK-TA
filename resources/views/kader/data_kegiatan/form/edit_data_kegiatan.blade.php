@extends('kader.layout')

@section('title', 'Edit Data Kegiatan Warga | Kader Dasawisma PKK Kab. Indramayu')

@section('bread', 'Edit Data Kegiatan Warga')
@section('container')

<div class="col-md-10">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Kegiatan Warga</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form action="{{ url('data_kegiatan', $data_kegiatan->id) }}" method="POST">
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

                <div class="col-md-6">
                    <div class="form-group @error('id_kecamatan') is-invalid @enderror">
                        <label for="exampleFormControlSelect1">Kecamatan</label>
                        {{-- nama Kecamatan --}}
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
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Warga</label>
                        <select class="form-control" id="id_warga" name="id_warga">
                          {{-- pilih nama warga --}}
                          @foreach ($warga as $c)
                            <option value="{{ $c->id }}" {{ $c->id === $data_kegiatan->id_warga ? 'selected' : '' }}>{{ $c->nama }}</option>
                          @endforeach
                          </select>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Kegiatan</label>
                        <select class="form-control @error('id_kategori') is-invalid @enderror" id="id_kategori" name="id_kategori">
                            {{-- Pilih Kegiatan --}}

                            @foreach ($keg as $item)
                                <option value="{{ $item->id }}" {{ $item->id === $data_kegiatan->id_kategori ? 'selected' : '' }}>{{ $item->nama_kegiatan }}</option>
                            @endforeach

                        </select>

                      </div>
                </div>
            </div>

          <div class="form-group">
            <label>Aktivitas</label><br>
            {{-- pilih Aktivitas --}}
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="aktivitas" value="Ya" class="form-check-input" {{$data_kegiatan->aktivitas == 'Ya'? 'checked' : ''}}>Ya
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="aktivitas" value="Tidak" class="form-check-input" {{$data_kegiatan->aktivitas == 'Tidak'? 'checked' : ''}}>Tidak
                </label>
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
                <div class="form-group">
                    <label>Keterangan (Jenis Kegiatan Yang Diikuti)</label>
                    {{-- <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" placeholder="Masukkan Keterangan"> --}}
                    <select class="form-control @error('id_keterangan') is-invalid @enderror" id="id_keterangan" name="id_keterangan">
                        {{-- Pilih Kegiatan --}}
                            @foreach ($ket as $item)
                                <option value="{{ $item->id }}" {{ $item->id === $data_kegiatan->id_keterangan ? 'selected' : '' }}>{{ $item->nama_keterangan }}</option>
                            @endforeach
                    </select>

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Periode</label>
                    {{-- pilih periode --}}
                    <select style="cursor:pointer;" class="form-control" id="periode" name="periode">
                        <option value="{{ $data_kegiatan->periode }}" {{ $data_kegiatan->periode ? 'selected' : '' }}>{{ $data_kegiatan->periode }}</option>
                            <?php
                            $year = date('Y');
                            $min = $year ;
                                $max = $year + 20;
                            for( $i=$min; $i<=$max; $i++ ) {
                            echo '<option value='.$i.'>'.$i.'</option>';
                        }?>
                    </select>
                  </div>
            </div>
        </div>
    </div>

        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Edit</button>
          <a href="/data_kegiatan" class="btn btn-outline-primary">
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
    $('#id_kategori').on('change', function() {
       var categoryID = $(this).val();
       console.log('cek data kegiatan');
       if(categoryID) {
        console.log('cek get data keterangan kegiatan');

           $.ajax({
               url: '/getKeterangan/'+categoryID,
               type: "GET",
               data : {"_token":"{{ csrf_token() }}"},
               dataType: "json",
               success:function(data)
               {
                console.log('sukses cek data desa');

                 if(data){
                    $('#id_keterangan').empty();
                    $('#id_keterangan').append('<option hidden>Pilih Keterangan</option>');
                    $.each(data, function(key, keterangan){
                        $('select[name="id_keterangan"]').append('<option value="'+ keterangan.id +'">' + keterangan.nama_keterangan + '</option>');
                    });
                }else{
                    $('#id_keterangan').empty();
                }
             }
           });
       }else{
         $('#id_keterangan').empty();
       }
    });
    });
</script>
@endpush
