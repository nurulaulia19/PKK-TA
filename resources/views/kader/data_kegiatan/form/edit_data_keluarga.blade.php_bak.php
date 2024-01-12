@extends('kader.layout')

@section('title', 'Edit Data Keluarga Warga TP PKK | Kader Dasawisma PKK Kab. Indramayu')

@section('bread', 'Edit Data Keluarga Warga TP PKK')
@section('container')

<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data Keluarga Warga TP PKK</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">
            <form action="{{ url('data_keluarga', $data_keluarga->id) }}" method="POST">
                @method('PUT')
                @csrf
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
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Dasa Wisma</label>
                            {{-- <input type="text" class="form-control @error('dasa_wisma') is-invalid @enderror" name="dasa_wisma" id="dasa_wisma" placeholder="Masukkan Nama Dasa Wisma" value="{{ ucfirst(old('dasa_wisma', $data_keluarga->dasa_wisma )) }}">
                            --}}
                            <select class="form-control" id="id_dasawisma" name="id_dasawisma">
                                {{-- nama dasa wisma --}}
                                @foreach ($dasawisma as $c)
                                <option value="{{$c->id}}" {{ $c->id === $c->id_dasawisma ? 'selected' : '' }}>
                                    {{ $c->nama_dasawisma }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('dasa_wisma')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">RT</label>
                            <input type="text" class="form-control @error('rt') is-invalid @enderror" name="rt" id="rt"
                                placeholder="Masukkan No.  RT" value="{{ ucfirst(old('rt', $data_keluarga->rt )) }}">

                            {{-- <select class="form-control" id="rt" name="rt"> --}}
                            {{-- nama rt --}}
                            {{-- @foreach ($warga as $c)
                                <option value="{{ $c->id }}"
                            {{ $c->id === $data_keluarga->rt ? 'selected' : '' }}>{{ $c->rt }}</option>
                            @endforeach
                            </select> --}}
                        </div>
                        @error('rt')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">RW</label>
                            <input type="text" class="form-control @error('rw') is-invalid @enderror" name="rw" id="rw"
                                placeholder="Masukkan No. RW" value="{{ ucfirst(old('rw', $data_keluarga->rw )) }}">

                            {{-- <select class="form-control " id="rw" name="rw"> --}}
                            {{-- nama rw --}}
                            {{-- @foreach ($warga as $c)
                            <option value="{{ $c->id }}"
                            {{ $c->id === $data_keluarga->rw ? 'selected' : '' }}>{{ $c->rw }}</option>

                            @endforeach
                            </select> --}}
                        </div>
                        @error('rw')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <div class="form-group @error('dusun') is-invalid @enderror">
                            <label for="exampleFormControlSelect1">Dusun</label>
                            <input type="text" class="form-control @error('dusun') is-invalid @enderror" name="dusun"
                                id="dusun" placeholder="Masukkan Nama Dusun"
                                value="{{ ucfirst(old('rw', $data_keluarga->dusun )) }}">

                        </div>
                        @error('dusun')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <div class="form-group @error('id_desa') is-invalid @enderror">
                            <label for="exampleFormControlSelect1">Desa</label>
                            @foreach ($desas as $c)
                            <input type="hidden" class="form-control" name="id_desa" id="id_desa"
                                placeholder="Masukkan Nama Desa" value="{{$c->id}}">
                            <input type="text" disabled class="form-control" name="id_desa" id="id_desa"
                                placeholder="Masukkan Nama Desa" value="{{ $c->nama_desa }}">
                            @endforeach
                        </div>
                        @error('id_desa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="col-md-2">
                        <div class="form-group @error('id_kecamatan') is-invalid @enderror">
                            <label for="exampleFormControlSelect1">Kecamatan</label>
                            @foreach ($kec as $c)
                            <input type="hidden" class="form-control" name="id_kecamatan" id="id_kecamatan"
                                placeholder="Masukkan Nama Desa" value="{{$c->id}}">
                            <input type="text" disabled class="form-control" name="id_kecamatan" id="id_kecamatan"
                                placeholder="Masukkan Nama Desa" value="{{ $c->nama_kecamatan }}">

                            @endforeach
                        </div>
                        @error('id_kecamatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kabupaten</label>
                            <input type="text" readonly class="form-control @error('kota') is-invalid @enderror"
                                name="kota" id="kota" placeholder="Masukkan Kota" value="Indramayu">
                            @error('kota')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Provinsi</label>
                            <input type="text" readonly class="form-control @error('provinsi') is-invalid @enderror"
                                name="provinsi" id="provinsi" placeholder="Masukkan Provisni" value="Jawa Barat">
                            @error('provinsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Nama Kepala Rumah Tangga</label>
                            <input type="text"
                                class="form-control @error('nama_kepala_rumah_tangga') is-invalid @enderror"
                                name="nama_kepala_rumah_tangga" id="nama_kepala_rumah_tangga"
                                placeholder="Masukkan Nama Kepala Rumah Tangga"
                                value="{{ ucfirst(old('nama_kepala_rumah_tangga', $data_keluarga->nama_kepala_rumah_tangga )) }}">

                            {{-- <select class="form-control @error('nama_kepala_rumah_tangga') is-invalid @enderror" id="id_warga" name="id_warga"> --}}
                            {{-- nama warga --}}
                            {{-- @foreach ($warga as $c)
                                <option value="{{ $c->id }}"
                            {{ $c->id === $data_keluarga->id_warga ? 'selected' : '' }}>{{ $c->nama_kepala_rumah_tangga }}
                            </option>
                            @endforeach

                            </select> --}}
                            @error('nama_kepala_rumah_tangga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>NIK Kepala Rumah Tangga</label>
                            <input type="text" class="form-control @error('nik_kepala_keluarga') is-invalid @enderror"
                                name="nik_kepala_keluarga" id="nik_kepala_keluarga"
                                placeholder="Masukkan NIK Kepala Rumah Tangga"
                                value="{{ ucfirst(old('nik_kepala_keluarga', $data_keluarga->nik_kepala_keluarga )) }}">

                            {{-- <select class="form-control @error('nama_kepala_rumah_tangga') is-invalid @enderror" id="id_warga" name="id_warga"> --}}
                            {{-- Pilih Nama Kepala Rumah Tangga --}}
                            {{-- <option hidden> Pilih Nama Kepala Rumah Tangga</option>
                            @foreach ($warga as $c)
                                <option value="{{$c->id}}">{{ $c->nik_kepala_keluarga }} -
                            {{ $c->nama_kepala_rumah_tangga }}</option>
                            @endforeach
                            </select> --}}
                            @error('nik_kepala_keluarga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Jumlah Anggota Keluarga</label>
                            <input type="number"
                                class="form-control @error('jumlah_anggota_keluarga') is-invalid @enderror"
                                name="jumlah_anggota_keluarga" id="jumlah_anggota_keluarga"
                                placeholder="Diisi Jumlah Anggota Keluarga"
                                value="{{ ucfirst(old('jumlah_anggota_keluarga', $data_keluarga->jumlah_anggota_keluarga )) }}">
                            @error('jumlah_anggota_keluarga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group @error('laki_laki') is-invalid @enderror">
                            <label>Laki-laki</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" min="0" name="laki_laki" id="laki_laki"
                                    placeholder="Diisi Jumlah Anggota Keluarga Laki-laki"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                    value="{{ ucfirst(old('laki_laki', $data_keluarga->laki_laki )) }}">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">Orang</span>
                                </div>
                            </div>
                        </div>
                        @error('laki_laki')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <div class="form-group @error('perempuan') is-invalid @enderror">
                            <label>Perempuan</label>
                            <div class="input-group mb-3">
                                <input type="number" name="perempuan" min="0" class="form-control"
                                    placeholder="Diisi Jumlah Anggota Keluarga Perempuan"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                    value="{{ ucfirst(old('perempuan', $data_keluarga->perempuan )) }}">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">Orang</span>
                                </div>
                            </div>
                        </div>
                        @error('perempuan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <div class="form-group @error('jumlah_KK') is-invalid @enderror">
                            <label>Jumlah KK</label>
                            <div class="input-group mb-3">
                                <input type="number" min="1" class="form-control" name="jumlah_KK"
                                    placeholder="Diisi Jumlah Kepala Keluarga" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2"
                                    value="{{ ucfirst(old('jumlah_KK', $data_keluarga->jumlah_KK )) }}">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">KK</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('periode') is-invalid @enderror">
                            <label>Periode</label>
                            <select style="cursor:pointer;" class="form-control" id="periode" name="periode">
                                <option value="{{ $data_keluarga->periode }}"
                                    {{ $data_keluarga->periode ? 'selected' : '' }}>{{ $data_keluarga->periode }}
                                </option>
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

                    <div class="col-md-2">
                        <div class="form-group @error('id_user') is-invalid @enderror">
                            {{-- nama kader --}}
                            @foreach ($kad as $c)
                            <input type="hidden" class="form-control" name="id_user" id="id_user"
                                placeholder="Masukkan Nama Desa" value="{{$c->id}}">
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Jumlah</label>
                            <div class="row">
                                <div class="col-md-3 ">
                                    <div class="input-group mb-3">
                                        {{-- Jumlah Balita laki--}}
                                        <input type="number" min="0"
                                            class="form-control @error('jumlah_balita_laki') is-invalid @enderror"
                                            placeholder="Balita Laki-laki" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2" name="jumlah_balita_laki"
                                            value="{{ ucfirst(old('jumlah_balita_laki', $data_keluarga->jumlah_balita_laki )) }}">
                                        @error('jumlah_balita_laki')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Anak</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 ">
                                    <div class="input-group mb-3">
                                        {{-- Jumlah Balita laki--}}
                                        <input type="number" min="0"
                                            class="form-control @error('jumlah_balita_perempuan') is-invalid @enderror"
                                            placeholder="Balita Perempuan" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2" name="jumlah_balita_perempuan"
                                            value="{{ ucfirst(old('jumlah_balita_perempuan', $data_keluarga->jumlah_balita_perempuan )) }}">
                                        @error('jumlah_balita_perempuan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Anak</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group mb-3 @error('jumlah_PUS') is-invalid @enderror">
                                        <input type="number" min="0" class="form-control"
                                            placeholder="PUS (Pasangan Usia Subur)" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2" name="jumlah_PUS"
                                            value="{{ ucfirst(old('jumlah_PUS', $data_keluarga->jumlah_PUS )) }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Orang</span>
                                        </div>
                                    </div>
                                    @error('jumlah_PUS')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group mb-3 @error('jumlah_WUS') is-invalid @enderror">
                                        <input type="number" min="0" class="form-control"
                                            placeholder="WUS (Pasangan Usia Subur)" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2" name="jumlah_WUS"
                                            value="{{ ucfirst(old('jumlah_WUS', $data_keluarga->jumlah_WUS )) }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Orang</span>
                                        </div>
                                    </div>
                                    @error('jumlah_WUS')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group mb-3 @error('jumlah_3_buta_laki') is-invalid @enderror">
                                        {{-- jumlah 3 buta --}}
                                        <input type="number" min="0" class="form-control"
                                            placeholder="3 Buta (Buta Tulis, Buta Baca, Buta Hitung) Laki-laki"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2"
                                            name="jumlah_3_buta_laki"
                                            value="{{ ucfirst(old('jumlah_3_buta_laki', $data_keluarga->jumlah_3_buta_laki )) }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Orang</span>
                                        </div>
                                    </div>
                                    @error('jumlah_3_buta_laki')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="col-md-3">
                                    <div
                                        class="input-group mb-3 @error('jumlah_3_buta_perempuan') is-invalid @enderror">
                                        {{-- jumlah 3 buta --}}
                                        <input type="number" min="0" class="form-control"
                                            placeholder="3 Buta (Buta Tulis, Buta Baca, Buta Hitung) Perempuan"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2"
                                            name="jumlah_3_buta_perempuan"
                                            value="{{ ucfirst(old('jumlah_3_buta_perempuan', $data_keluarga->jumlah_3_buta_perempuan )) }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Orang</span>
                                        </div>
                                    </div>
                                    @error('jumlah_3_buta_perempuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="col-md-3">
                                    <div class="input-group mb-3 @error('jumlah_ibu_hamil') is-invalid @enderror">
                                        <input type="number" min="0" class="form-control" placeholder="Ibu Hamil"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2"
                                            name="jumlah_ibu_hamil"
                                            value="{{ ucfirst(old('jumlah_ibu_hamil', $data_keluarga->jumlah_ibu_hamil )) }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Orang</span>
                                        </div>
                                    </div>
                                    @error('jumlah_ibu_hamil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="col-md-3">
                                    <div class="input-group mb-3 @error('jumlah_ibu_menyusui') is-invalid @enderror">
                                        <input type="number" min="0" class="form-control" placeholder="Ibu Menyusui"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2"
                                            name="jumlah_ibu_menyusui"
                                            value="{{ ucfirst(old('jumlah_ibu_menyusui', $data_keluarga->jumlah_ibu_menyusui )) }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Orang</span>
                                        </div>
                                    </div>
                                    @error('jumlah_ibu_menyusui')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="col-md-3">
                                    <div class="input-group mb-3 @error('jumlah_lansia') is-invalid @enderror">
                                        <input type="number" min="0" class="form-control" placeholder="Lansia"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2"
                                            name="jumlah_lansia"
                                            value="{{ ucfirst(old('jumlah_lansia', $data_keluarga->jumlah_lansia )) }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Orang</span>
                                        </div>
                                    </div>
                                    @error('jumlah_lansia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="col-md-3">
                                    <div class="input-group mb-3 @error('jumlah_kebutuhan') is-invalid @enderror">
                                        <input type="number" min="0" class="form-control" placeholder="Kebutuhan Khusus"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2"
                                            name="jumlah_kebutuhan"
                                            value="{{ ucfirst(old('jumlah_kebutuhan', $data_keluarga->jumlah_kebutuhan )) }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Orang</span>
                                        </div>
                                    </div>
                                    @error('jumlah_kebutuhan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">


                    <div class="col-emd-3">
                        <div class="form-group @error('makanan_pokok') is-invalid @enderror">
                            <label class="form-label">Makanan Pokok Sehari-hari </label><br>
                            <select class="form-control @error('makanan_pokok') is-invalid @enderror" id="makanan_pokok"
                                name="makanan_pokok">
                                <option hidden>Pilih Makanan Pokok</option>
                                <option value="1" {{ $data_keluarga->makanan_pokok == '1' ? 'selected' : '' }}punyai
                                    Jam>Beras
                                </option>
                                <option value="2" {{ $data_keluarga->makanan_pokok == '2' ? 'selected' : '' }}>Non Beras
                                </option>
                            </select>
                        </div>
                        @error('makanan_pokok')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <div class="form-group @error('sumber_air') is-invalid @enderror">
                            {{-- pilih sumber air --}}
                            <label>Sumber Air Keluarga</label><br>
                            <div class="form-check form-check-inline">
                                <select class="form-control @error('sumber_air') is-invalid @enderror" id="sumber_air"
                                    name="sumber_air">
                                    <option hidden>Pilih Sumber Air Keluarga</option>
                                    <option value="1" {{ $data_keluarga->sumber_air =='1' ? 'selected' :'' }}>PDAM
                                    </option>
                                    <option value="2" {{ $data_keluarga->sumber_air =='2' ? 'selected' :'' }}>Sumur
                                    </option>
                                    <option value="3" {{ $data_keluarga->sumber_air =='3' ? 'selected' :'' }}>Sungai
                                    </option>
                                    <option value="4" {{ $data_keluarga->sumber_air =='4' ? 'selected' :'' }}>Lainnya
                                    </option>
                                </select>
                            </div>
                        </div>
                        @error('sumber_air')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <div class="form-group @error('kriteria_rumah') is-invalid @enderror">
                            {{-- pilih kriteria rumah --}}
                            <label>Kriteria Rumah</label><br>
                            <div class="form-check form-check-inline">
                                <select class="form-control @error('kriteria_rumah') is-invalid @enderror"
                                    id="kriteria_rumah" name="kriteria_rumah">
                                    <option hidden>Pilih Kriteria Rumah</option>
                                    <option value="1" {{ $data_keluarga->sumber_air =='1' ? 'selected' :'' }}>Sehat
                                    </option>
                                    <option value="2" {{ $data_keluarga->sumber_air =='2' ? 'selected' :'' }}>Kurang
                                        Sehat</option>
                                </select>
                            </div>
                        </div>
                        @error('kriteria_rumah')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <div class="form-group @error('punya_jamban') is-invalid @enderror">
                            <label>Mempunyai Jamban Keluarga</label><br>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="radio" aria-label="Radio button for following text input"
                                                    name="punya_jamban" value="1"
                                                    {{$data_keluarga->punya_jamban == '1'? 'checked' : ''}}>Ya

                                            </div>
                                        </div>
                                        <input type="number" min="0" class="form-control"
                                            aria-label="Text input with radio button" name="jumlah_jamban"
                                            placeholder="Jumlah Jamban"
                                            value="{{ ucfirst(old('jumlah_jamban', $data_keluarga->jumlah_jamban)) }}">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">

                                            <input type="radio" name="punya_jamban" value="0" class="form-check-input"
                                                {{$data_keluarga->punya_jamban == '0'? 'checked' : ''}}>Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @error('punya_jamban')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="col-md-3">
                        <div class="form-group @error('punya_tempat_sampah') is-invalid @enderror">
                            <label>Memiliki Tempat Pembuangan Sampah</label><br>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="punya_tempat_sampah" value="1" class="form-check-input"
                                        {{$data_keluarga->punya_tempat_sampah == '1'? 'checked' : ''}}>Ya
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="punya_tempat_sampah" value="0" class="form-check-input"
                                        {{$data_keluarga->punya_tempat_sampah == '0'? 'checked' : ''}}>Tidak
                                </label>
                            </div>

                        </div>
                        @error('punya_tempat_sampah')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <div class="form-group @error('punya_saluran_air') is-invalid @enderror">
                            <label>Mempunyai Saluran Pembuangan Air Limbah</label><br>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="punya_saluran_air" value="1" class="form-check-input"
                                        {{$data_keluarga->punya_saluran_air == '1'? 'checked' : ''}}>Ya
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="punya_saluran_air" value="0" class="form-check-input"
                                        {{$data_keluarga->punya_saluran_air == '0'? 'checked' : ''}}>Tidak
                                </label>
                            </div>
                        </div>
                        @error('punya_saluran_air')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <div class="form-group @error('tempel_stiker') is-invalid @enderror">
                            <label>Menempel Stiker P4K</label><br>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="tempel_stiker" value="1" class="form-check-input"
                                        {{$data_keluarga->tempel_stiker == '1'? 'checked' : ''}}>Ya
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="tempel_stiker" value="0" class="form-check-input"
                                        {{$data_keluarga->tempel_stiker == '0'? 'checked' : ''}}>Tidak
                                </label>
                            </div>
                        </div>
                        @error('tempel_stiker')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <div class="form-group @error('aktivitas_UP2K') is-invalid @enderror">
                            <label>Aktivitas UP2K</label><br>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="aktivitas_UP2K" value="1" class="form-check-input"
                                        {{$data_keluarga->aktivitas_UP2K == '1'? 'checked' : ''}}>Ya
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="aktivitas_UP2K" value="0" class="form-check-input"
                                        {{$data_keluarga->aktivitas_UP2K == '0'? 'checked' : ''}}>Tidak
                                </label>
                            </div>


                        </div>
                        @error('aktivitas_UP2K')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <div class="form-group @error('aktivitas_kegiatan_usaha') is-invalid @enderror">
                            <label>Aktivitas Kegiatan Usaha Kesehatan Lingkungan</label><br>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="aktivitas_kegiatan_usaha" value="1"
                                        class="form-check-input"
                                        {{$data_keluarga->aktivitas_kegiatan_usaha == '1'? 'checked' : ''}}>Ya
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="aktivitas_kegiatan_usaha" value="0"
                                        class="form-check-input"
                                        {{$data_keluarga->aktivitas_kegiatan_usaha == '0'? 'checked' : ''}}>Tidak
                                </label>
                            </div>
                        </div>
                        @error('aktivitas_kegiatan_usaha')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="/data_keluarga" class="btn btn-outline-primary">
                        <span>Batalkan</span>
                    </a>
                </div>
            </form>
        </div>

    </div>
    <!-- /.card -->
</div>
@endsection

@push('script-addon')

<script type="text/javascript">
$(function() {

    $("#datepicker").datepicker({

        changeMonth: true,

        changeYear: true

    });

});

window.onload = function() {

    $('#tgl_lahir').on('change', function() {

        var dob = new Date(this.value);

        var today = new Date();

        var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));

        $('#umur').val(age);

    });

}
</script>
<script>
$(document).ready(function() {
    $('#id_kecamatan').on('change', function() {
        var categoryID = $(this).val();
        console.log('cek data kecamatan');
        if (categoryID) {
            console.log('cek get data desa');

            $.ajax({
                url: '/getDesa/' + categoryID,
                type: "GET",
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function(data) {
                    console.log('sukses cek data desa');

                    if (data) {
                        $('#id_desa').empty();
                        $('#id_desa').append('<option hidden>Pilih Desa</option>');
                        $.each(data, function(key, desas) {
                            $('select[name="id_desa"]').append('<option value="' +
                                key + '">' + desas.nama_desa + '</option>');
                        });
                    } else {
                        $('#id_desa').empty();
                    }
                }
            });
        } else {
            $('#id_desa').empty();
        }
    });
});
</script>

@endpush