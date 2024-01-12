@extends('kader.layout')

@section('title', 'Tambah Data Kegiatan Warga | Kader Dasawisma PKK Kab. Indramayu')

@section('bread', 'Tambah Data Kegiatan Warga')
@section('container')

<div class="col-md-10">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Kegiatan Warga</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form action="{{ route('data_kegiatan.store') }}" method="POST">
        @csrf

        <div class="card-body">
            <h6 style="color: red">* Semua elemen atribut harus diisi</h6>
            {{-- <h6 style="color: red">* Keterangan Kegiatan Yang diikuti seperti : Keagamaan, PKBN, Pola Asuh Pencegahan KDRT, Pencegahan Traffocking, Narkoba, Pencegahan
                Kejahatan Seksual, Kerja Bakti, Jimpitan, Arisan, Rukun Kematian, Bakti Sosial, BKB, PAUD Sejenis, Paket A, Paket B, Paket C, KF (Keaksaraan Fungsional),
                UP2K, Koperasi</h6> --}}
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
                        {{-- nama desa --}}
                        <label for="exampleFormControlSelect1">Desa</label>
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
                        {{-- nama kecamatan --}}
                        <label for="exampleFormControlSelect1">Kecamatan</label>
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
                        <select class="form-control @error('id_warga') is-invalid @enderror" id="id_warga" name="id_warga">
                          {{-- nama warga --}}
                          <option hidden> Pilih Nama Warga</option>
                            @foreach ($warga as $c)
                                <option value="{{$c->id}}">  {{$c->id }}-{{ $c->nama }}</option>
                            @endforeach
                          </select>
                          @error('id_warga')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Kegiatan</label>
                        <select class="form-control @error('id_kategori') is-invalid @enderror" id="id_kategori" name="id_kategori">
                            {{-- Pilih Kegiatan --}}
                            <option hidden> Pilih Kegiatan</option>
                            {{-- @foreach($kategori as $key => $val)
                                @if($key==old('nama_kategori'))
                                <option value="{{ $key }}" selected>{{ $val }}</option>
                                @else
                                <option value="{{ $key }}">{{ $val }}</option>
                                @endif
                            @endforeach --}}
                            @foreach ($keg as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_kegiatan }}</option>
                            @endforeach

                        </select>
                        @error('nama_kegiatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group @error('aktivitas') is-invalid @enderror">
                        <label>Aktivitas</label><br>
                        {{-- Pilih aktivitas --}}
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" name="aktivitas" value="Ya" class="form-check-input">Ya
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" name="aktivitas" value="Tidak" class="form-check-input">Tidak
                            </label>
                        </div>
                    </div>
                    @error('aktivitas')
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
                            <input type="hidden" disabled class="form-control" name="id_user" id="id_user" placeholder="Masukkan Nama Desa" value="{{ $c->name }}">
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
                        {{-- nama keterangan --}}
                        <label>Keterangan (Jenis Kegiatan Yang Diikuti)</label>
                        {{-- <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" placeholder="Masukkan Keterangan"> --}}
                        <select class="form-control @error('id_keterangan') is-invalid @enderror" id="id_keterangan" name="id_keterangan">
                            {{-- Pilih Kegiatan --}}
                            {{-- <option hidden> Pilih Keterangan Kegiatan</option> --}}
                                {{-- @foreach($keterangan as $key => $val)
                                    @if($key==old('keterangan'))
                                        <option value="{{ $key }}" selected>{{ $val }}</option>
                                    @else
                                        <option value="{{ $key }}">{{ $val }}</option>
                                    @endif
                                @endforeach --}}
                        </select>

                        @error('id_keterangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group @error('periode') is-invalid @enderror">
                        <label>Periode</label>
                        {{-- pilih periode --}}
                        <select style="cursor:pointer;" class="form-control " id="periode" name="periode" value="{{ old('periode') }}">
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
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tambah</button>
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
