@extends('kader.layout')

@section('title', 'Tambah Data Pelatihan Kader TP PKK | Kader Desa/Kelurahan PKK Kab. Indramayu')

@section('bread', 'Tambah Data Pelatihan Kader TP PKK')
@section('container')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Pelatihan Kader TP PKK</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form action="{{ route('data_pelatihan.store') }}" method="POST">
        @csrf

        <div class="card-body">
            <h6 style="color: red">* Semua elemen atribut harus diisi</h6>

        <h6 style="color: red">Kriteria Kader diisi jenis kriteria sesuai dengan ketentuan yang ada pada TP PKK <br>
        (Misalnya : PAUD, BKB, KESLING, DLL)
        </h6>
        @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{  ($error)  }}</li>

                    @endforeach
                </ul>
            </div>
        @endif
            <div class="form-group">
                <label>Nama Kader Pelatihan</label>
                @foreach ($kader as $c)
                    <input type="hidden" class="form-control" name="id_user" id="id_user" placeholder="Masukkan Nama Desa" value="{{$c->id}}">
                    <input type="text" disabled class="form-control" name="id_user" id="id_user" placeholder="Masukkan Nama Desa" value="{{ $c->name }}">

                @endforeach
                    @error('nama_kader_pelatihan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
                <label>Nama Pelatihan</label>
                    {{--Nama Pelatihan--}}
                    <input type="text" class="form-control @error('nama_pelatihan') is-invalid @enderror" name="nama_pelatihan" id="nama_pelatihan" placeholder="Masukkan Nama Pelatihan" value="{{ old('nama_pelatihan') }}">
                        @error('nama_pelatihan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
            </div>
            <div class="form-group">
                <label>Kriteria Kader</label>
                        {{-- Kriteria Kader --}}
                    <div class="form-group @error('kriteria_kader') is-invalid @enderror">
                            <textarea class="form-control" name="kriteria_kader" id="kriteria_kader" placeholder="Masukkan Kriteria Kader" rows="3" cols="70">{{ old('kriteria_kader') }}</textarea>
                    </div>

                        @error('kriteria_kader')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
            </div>
            <div class="form-group @error('tahun') is-invalid @enderror">
                <label>Tahun</label>
                    {{-- pilih tahun --}}
                        <select style="cursor:pointer;" class="form-control" id="tahun" name="tahun">
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
            @error('tahun')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="form-group">
                <label>Penyelenggara</label>
                {{-- nama Penyelenggara --}}
                    <input type="text" class="form-control @error('penyelenggara') is-invalid @enderror" name="penyelenggara" id="penyelenggara" placeholder="Masukkan Nama Penyelenggara" value="{{ old('penyelenggara') }}">
                        @error('penyelenggara')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
            </div>
            <div class="form-group">
                <label>Keterangan</label><br>
                    {{-- Keterangan --}}
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" name="keterangan" value="Bersertifikat" class="form-check-input">Bersertifikat
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" name="keterangan" value="Tidak Bersertifikat" class="form-check-input">Tidak Bersertifikat
                        </label>
                    </div>
            </div>
        </div>
    </div>
</div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="/data_pelatihan" class="btn btn-outline-primary">
            <span>Batalkan</span>
        </a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
@endsection

@push('script-addon')

<script type="text/javascript">
    // $(document).ready(function() {

    //     $('#datepicker').datepicker({

    //         format: 'yyyy-mm-dd',

    //         autoclose: true,

    //     });

    // });

    $(function() {
    $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true
    });
});

</script>
@endpush
