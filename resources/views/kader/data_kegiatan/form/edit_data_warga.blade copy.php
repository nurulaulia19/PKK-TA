@extends('kader.layout')

@section('title', 'Edit Data Warga | Kader Dasawisma PKK Kab. Indramayu')

@section('bread', 'Edit Data Warga')
@section('container')

<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data Warga</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">
            <form action="{{ url('data_warga', $data_warga->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-10">
                        <h6 style="color: red">* Semua elemen atribut harus diisi</h6>
                    </div>
                    <div class="col-md-2">
                        <!-- Tombol yang memicu modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya">
                            Klik Info
                        </button>

                    </div>
                </div>
                <!-- Contoh Modal -->
                <div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalSayaLabel">Info Keterangan Atribut </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table>
                                    <tr>
                                        <th colspan="1">Point/Isian</th>
                                        <th>Penjelasan</th>
                                    </tr>
                                    <tr>
                                        <td>Dasa Wisma</td>
                                        <td>Di isi sesuai dengan nama dasawisma yang diikuti warga yang bersangkutan
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Nama Kepala Keluarga</td>
                                        <td>Di isi dengan nama Kepala Rumah Tangga pada rumah yang didata.
                                            Kepala Rumah Tangga adalah yang bertanggung jawab atas segala sesuatu yang
                                            terkait dengan kegiatan di dalam rumah yang sedang didata.</td>

                                    </tr>
                                    <tr>
                                        <td>No. Registrasi</td>
                                        <td>Nomor Registrasi diisi dengan nomor urutan sesuai wilayah,
                                            misalnya:020103042009001,dengan rincian: 02:prov; 01:kab/kota; 03:kec;
                                            04:desa/kelurahan; 2009:th masuk; 001 : nomor pendataan</td>
                                    </tr>
                                    <tr>
                                        <td>No. KTP/NIK</td>
                                        <td>Di isi dengan sudah atau belum atas kepemilikan KTP dan atau Kartu Keluarga
                                            (KK)</td>
                                    </tr>
                                    <tr>
                                        <td>Jabatan</td>
                                        <td>Jabatan yang bersangkutan pada di struktural TP PKK</td>
                                    </tr>
                                    <tr>
                                        <td>Status Dalam Keluarga</td>
                                        <td>Diisi sesuai status yang bersangkutan didalam rumah yang sedang di data.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Akseptor KB</td>
                                        <td>Diisi dengan apakah yang bersangkutan mengikuti program KB dan jenis
                                            akseptor KB yang dipilih</td>
                                    </tr>
                                    <tr>
                                        <td>Memiliki Tabungan</td>
                                        <td>Tabungan tidak hanya berupa uang di bank, tetapi bisa juga berupa ternak,
                                            tanaman keras, tanah dll
                                            sesuai dengan situasi kondisi masing-masing daerah</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Oke</button>
                            </div>
                        </div>
                    </div>
                </div>

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
                            {{-- nama dasa wisma --}}
                            <label>Dasawisma</label>
                            <select class="form-control" id="id_dasawisma" name="id_dasawisma">
                                {{-- nama dasa wisma --}}
                                @foreach ($dasawisma as $c)
                                <option value="{{$c->id}}" {{ $c->id === $c->id_dasawisma ? 'selected' : '' }}>
                                    {{ $c->nama_dasawisma }}</option>
                                @endforeach
                            </select>
                            @error('id_keluarga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            {{-- Nama Kepala Rumah Tangga --}}
                            <label>Nama Kepala Rumah Tangga</label>
                            <select class="form-control" id="nama_kepala_rumah_tangga" name="id_keluarga">
                                {{-- nama dasa wisma --}}
                                @foreach ($kel as $c)
                                <option value="{{$c->id}}"
                                    {{ $c->id === $c->nama_kepala_rumah_tangga ? 'selected' : '' }}>
                                    {{ $c->nama_kepala_rumah_tangga }}</option>
                                @endforeach
                            </select>
                            @error('id_keluarga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    {{-- <div class="col-md-4">
                    <div class="form-group">
                        <label>NIK Kepala Rumah Tangga</label> --}}
                    {{-- NIK Kepala Rumah Tangga --}}
                    {{-- <input type="text" class="form-control @error('nik_kepala_keluarga') is-invalid @enderror" name="nik_kepala_keluarga" id="nik_kepala_keluarga" placeholder="Diisi Nomor Induk Keluarga Kepala Keluarga" value="{{ucfirst(old('nik_kepala_keluarga', $data_warga->nik_kepala_keluarga))}}">
                    @error('nik_kepala_keluarga')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
        </div> --}}
        <div class="col-md-3">
            <div class="form-group">
                {{-- no.registrasi --}}
                <label>No. Registrasi</label>
                <input type="text" class="form-control @error('no_registrasi') is-invalid @enderror"
                    name="no_registrasi" id="no_registrasi"
                    placeholder="Nomor Registrasi diisi dengan nomor urutan sesuai wilayah"
                    value="{{ucfirst(old('no_registrasi', $data_warga->no_registrasi))}}">
                @error('no_registrasi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                {{-- no.KTP --}}
                <label>No. KTP</label>
                <input type="text" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" id="no_ktp"
                    placeholder="Di isi dengan sudah atau belum atas kepemilikan KTP dan atau Kartu Keluarga (KK)"
                    value="{{ucfirst(old('no_ktp', $data_warga->no_ktp))}}">
                @error('no_ktp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label>Nama</label>
                {{-- nama warga --}}
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
                    placeholder="Di isi dengan nama" value="{{ucfirst(old('nama', $data_warga->nama))}}">
                @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label>Jabatan</label>
                {{-- jabatan --}}
                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan"
                    id="jabatan" placeholder="Di isi jabatan yang bersangkutan pada di struktural TP PKK"
                    value="{{ucfirst(old('jabatan', $data_warga->jabatan))}}">
                @error('jabatan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label>Tempat lahir</label>
                {{-- tempat lahir --}}
                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir"
                    id="tempat_lahir" placeholder="Di isi Kota/Kabupaten tempat lahir yang bersangkutan"
                    value="{{ucfirst(old('tempat_lahir', $data_warga->tempat_lahir))}}">
                @error('tempat_lahir')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Tanggal lahir</label>
                {{-- Tanggal lahir --}}
                <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir"
                    id="tgl_lahir" placeholder="Di isi tanggal lahir"
                    value="{{ucfirst(old('tgl_lahir', $data_warga->tgl_lahir))}}" data-date-format="mm/dd/yyyy">
                @error('tgl_lahir')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label>Umur</label>
                {{-- umur --}}
                <input type="number" class="form-control @error('umur') is-invalid @enderror" name="umur" id="umur"
                    placeholder="Di isi Umur" value="{{ucfirst(old('umur', $data_warga->umur))}}">
                @error('umur')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                {{-- alamat --}}
                <label>Dusun</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat"
                    placeholder="Di isi Alamat" value="{{ucfirst(old('alamat', $data_warga->alamat))}}">
                @error('alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                {{-- rt --}}
                <label>RT</label>
                <select class="form-control" id="id_keluarga" name="rt">
                    {{-- nama RT --}}
                    @foreach ($kel as $c)
                    <option value="{{$c->id}}" {{ $c->id === $c->rt ? 'selected' : '' }}>{{ $c->rt }}</option>
                    @endforeach
                </select>
                @error('rt')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                {{-- rw --}}
                <label>RW</label>
                <select class="form-control" id="id_keluarga" name="rw">
                    {{-- nama Rw --}}
                    @foreach ($kel as $c)
                    <option value="{{$c->id}}" {{ $c->id === $c->rw ? 'selected' : '' }}>{{ $c->rw }}</option>
                    @endforeach
                </select>
                @error('rw')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group @error('id_desa') is-invalid @enderror">
                <label for="exampleFormControlSelect1">Desa</label>
                {{-- pilih nama desa --}}
                @foreach ($desas as $c)
                <input type="hidden" class="form-control" name="id_desa" id="id_desa" placeholder="Masukkan Nama Desa"
                    value="{{$c->id}}">
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
                {{-- pilih Kecamatan --}}
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
                {{-- pilih Kabupaten --}}
                <input type="text" readonly class="form-control @error('kota') is-invalid @enderror" name="kota"
                    id="kota" placeholder="Masukkan Kota" value="Indramayu">
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
                {{-- nama provinsi --}}
                <input type="text" readonly class="form-control @error('provinsi') is-invalid @enderror" name="provinsi"
                    id="provinsi" placeholder="Masukkan Provisni" value="Jawa Barat">
                @error('provinsi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group @error('periode') is-invalid @enderror">
                <label>Periode</label>
                {{-- pilih periode --}}
                <select style="cursor:pointer;" class="form-control" id="periode" name="periode">
                    <option value="{{ $data_warga->periode }}" {{ $data_warga->periode ? 'selected' : '' }}>
                        {{ $data_warga->periode }}</option>
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
            <div class="form-group @error('jenis_kelamin') is-invalid @enderror">
                <label class="form-label">Jenis Kelamin </label><br>
                {{-- pilih Jenis Kelamin --}}
                <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                    <option hidden>Pilih Jenis Kelamin</option>
                    <option value="laki-laki" {{ $data_warga->jenis_kelamin == 'laki-laki' ? 'selected' :'' }}>Laki-laki
                    </option>
                    <option value="perempuan" {{ $data_warga->jenis_kelamin == 'perempuan' ? 'selected' :'' }}>Perempuan
                    </option>
                </select>
            </div>
            @error('jenis_kelamin')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="col-md-2">
            <div class="form-group @error('status_perkawinan') is-invalid @enderror">
                <label>Status Perkawinan</label><br>
                {{-- pilih status Perkawinan --}}
                <select class="form-control @error('status_perkawinan') is-invalid @enderror" name="status_perkawinan">
                    <option hidden>Pilih Status Perkawinan</option>
                    <option value="menikah" {{ $data_warga->status_perkawinan == 'menikah' ? 'selected' :'' }}>Menikah
                    </option>
                    <option value="lajang" {{ $data_warga->status_perkawinan == 'lajang' ? 'selected' :'' }}>Lajang
                    </option>
                    <option value="janda" {{ $data_warga->status_perkawinan == 'janda' ? 'selected' :'' }}>Janda
                    </option>
                    <option value="duda" {{ $data_warga->status_perkawinan == 'duda' ? 'selected' :'' }}>Duda</option>
                </select>
            </div>
            @error('status_perkawinan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-2">
            <div class="form-group @error('agama') is-invalid @enderror">
                <label>Agama</label><br>
                {{-- pilih agama --}}
                <select class="form-control @error('agama') is-invalid @enderror" name="agama">
                    <option hidden>Pilih Agama</option>
                    <option value="islam" {{ $data_warga->agama == 'islam' ? 'selected' :'' }}>Islam</option>
                    <option value="kristen" {{ $data_warga->agama == 'kristen' ? 'selected' :'' }}>Kristen</option>
                    <option value="katolik" {{ $data_warga->agama == 'katolik' ? 'selected' :'' }}>Katolik</option>
                    <option value="hindu" {{ $data_warga->agama == 'hindu' ? 'selected' :'' }}>Hindu</option>
                    <option value="konghucu" {{ $data_warga->agama == 'konghucu' ? 'selected' :'' }}>Konghucu</option>
                    <option value="kepercayaan lain" {{ $data_warga->agama == 'kepercayaan lain' ? 'selected' :'' }}>
                        Kepercayaan Lain</option>
                </select>
            </div>
            @error('agama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-2">
            <div class="form-group @error('pendidikan') is-invalid @enderror">
                <label>Pendidikan</label><br>
                {{-- Pilih Pendidikan --}}
                <select class="form-control @error('pendidikan') is-invalid @enderror" name="pendidikan">
                    <option hidden>Pilih Pendidikan</option>
                    <option value="Tidak Tamat SD" {{ $data_warga->pendidikan == 'Tidak Tamat SD' ? 'selected' :'' }}>
                        Tidak Tamat SD</option>
                    <option value="SD/MI" {{ $data_warga->pendidikan == 'SD/MI' ? 'selected' :'' }}>SD/MI</option>
                    <option value="SMP/Sederajat" {{ $data_warga->pendidikan == 'SMP/Sederajat' ? 'selected' :'' }}>
                        SMP/Sederajat</option>
                    <option value="SMA/Sederajat" {{ $data_warga->pendidikan == 'SMA/Sederajat' ? 'selected' :'' }}>
                        SMA/Sederajat</option>
                    <option value="konghucu" {{ $data_warga->pendidikan == 'konghucu' ? 'selected' :'' }}>Konghucu
                    </option>
                    <option value="Diploma" {{ $data_warga->pendidikan == 'Diploma' ? 'selected' :'' }}>Diploma</option>
                    <option value="D4/S1" {{ $data_warga->pendidikan == 'D4/S1' ? 'selected' :'' }}>D4/S1</option>
                    <option value="S2" {{ $data_warga->pendidikan == 'S2' ? 'selected' :'' }}>S2</option>
                    <option value="S3" {{ $data_warga->pendidikan == 'S3' ? 'selected' :'' }}>S3</option>
                </select>
            </div>
            @error('pendidikan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-2">
            <div class="form-group @error('pekerjaan') is-invalid @enderror">
                <label>Pekerjaan</label><br>
                {{-- Pilih Pekejaan --}}
                <select class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan">
                    <option hidden>Pilih Pekerjaan</option>
                    <option value="Petani" {{ $data_warga->pekerjaan == 'Petani' ? 'selected' :'' }}>Petani</option>
                    <option value="Pedagang" {{ $data_warga->pekerjaan == 'Pedagang' ? 'selected' :'' }}>Pedagang
                    </option>
                    <option value="Swasta" {{ $data_warga->pekerjaan == 'Swasta' ? 'selected' :'' }}>Swasta</option>
                    <option value="Wirausaha" {{ $data_warga->pekerjaan == 'Wirausaha' ? 'selected' :'' }}>Wirausaha
                    </option>
                    <option value="TNI Polri" {{ $data_warga->pekerjaan == 'TNI Polri' ? 'selected' :'' }}>TNI Polri
                    </option>
                    <option value="PNS" {{ $data_warga->pekerjaan == 'PNS' ? 'selected' :'' }}>PNS</option>
                    <option value="Lainnya" {{ $data_warga->pekerjaan == 'Lainnya' ? 'selected' :'' }}>Lainnya</option>
                </select>
            </div>
            @error('pekerjaan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-3">
            <div class="form-group @error('ikut_kelompok_belajar') is-invalid @enderror">
                <label>Mengikuti Jenis Kelompok Belajar </label><br>
                {{-- Pilih Pekejaan --}}
                <select class="form-control @error('ikut_kelompok_belajar') is-invalid @enderror"
                    name="ikut_kelompok_belajar">
                    <option hidden>Pilih Jenis Kelompok Belajar</option>
                    <option value="Ya" {{ $data_warga->ikut_kelompok_belajar == 'Ya' ? 'selected' :'' }}>Ya</option>
                    <option value="Tidak" {{ $data_warga->ikut_kelompok_belajar == 'Tidak' ? 'selected' :'' }}>Tidak
                    </option>
                    <option value="Paket A" {{ $data_warga->ikut_kelompok_belajar == 'Paket A' ? 'selected' :'' }}>Paket
                        A</option>
                    <option value="Paket B" {{ $data_warga->ikut_kelompok_belajar == 'Paket B' ? 'selected' :'' }}>Paket
                        B</option>
                    <option value="Paket C" {{ $data_warga->ikut_kelompok_belajar == 'Paket C' ? 'selected' :'' }}>Paket
                        C</option>
                    <option value="KF (Keaksaraan Fungsional)"
                        {{ $data_warga->ikut_kelompok_belajar == 'KF (Keaksaraan Fungsional)' ? 'selected' :'' }}>KF
                        (Keaksaraan Fungsional)</option>
                </select>
            </div>
            @error('pekerjaan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-3">
            <div class="form-group @error('status_keluarga') is-invalid @enderror">
                {{-- pilih status Dalam Keluarga --}}
                <label>Status Dalam Keluarga</label><br>
                @if ($data_warga->status_keluarga == 'kepala keluarga')

                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" name="status_keluarga" value="kepala keluarga" class="form-check-input"
                            {{$data_warga->status_keluarga == 'kepala keluarga'? 'checked' : ''}}>Kepala Keluarga
                    </label>

                </div>
                {{-- <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="status_keluarga" value="anggota Keluarga" class="form-check-input" {{$data_warga->status_keluarga == 'anggota Keluarga'? 'checked' : ''}}>Anggota
                Keluarga
                </label>
            </div> --}}
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" aria-label="Radio button for following text input" name="status_keluarga"
                            value="anggota keluarga"
                            {{$data_warga->status_keluarga == 'anggota keluarga'? 'checked' : ''}}>Anggota Keluarga
                    </div>
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" name="status"
                    placeholder="Status">
            </div>
            @else
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="status_keluarga" value="Kepala Rumah Tangga" class="form-check-input"
                        {{$data_warga->status_keluarga == 'Kepala Rumah Tangga'? 'checked' : ''}}>Kepala Rumah Tangga
                </label>
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" aria-label="Radio button for following text input" name="status_keluarga"
                            value="anggota keluarga"
                            {{$data_warga->status_keluarga == 'anggota keluarga'? 'checked' : ''}}>Anggota Keluarga
                    </div>
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" name="status"
                    value="{{ucfirst(old('status_keluarga', $data_warga->status))}}">
            </div>
            @endif
        </div>
        @error('status_keluarga')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-2">
        <div class="form-group @error('akseptor_KB') is-invalid @enderror">
            {{-- pilih akseptor KB --}}
            <label>Akseptor KB</label><br>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="akseptor_kb" value="ya" class="form-check-input"
                        {{$data_warga->akseptor_kb == 'ya'? 'checked' : ''}}>Ya
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="akseptor_kb" value="tidak" class="form-check-input"
                        {{$data_warga->akseptor_kb == 'tidak'? 'checked' : ''}}>Tidak
                </label>
            </div>
        </div>
        @error('akseptor_KB')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-3">
        <div class="form-group @error('aktif_posyandu') is-invalid @enderror">
            {{-- pilih aktif dalam Kegiatan Posyandu --}}
            <label>Aktif dalam Kegiatan Posyandu</label><br>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="aktif_posyandu" value="ya" class="form-check-input"
                        {{$data_warga->aktif_posyandu == 'ya'? 'checked' : ''}}>Ya
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="aktif_posyandu" value="tidak" class="form-check-input"
                        {{$data_warga->aktif_posyandu == 'tidak'? 'checked' : ''}}>Tidak
                </label>
            </div>
        </div>
        @error('aktif_posyandu')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-4">
        <div class="form-group @error('ikut_bkb') is-invalid @enderror">
            {{-- pilih mengikuti Program Bina Keluarga Balita --}}
            <label>Mengikuti Program Bina Keluarga Balita</label><br>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="ikut_bkb" value="ya" class="form-check-input"
                        {{$data_warga->ikut_bkb == 'ya'? 'checked' : ''}}>Ya
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="ikut_bkb" value="tidak" class="form-check-input"
                        {{$data_warga->ikut_bkb == 'tidak'? 'checked' : ''}}>Tidak
                </label>
            </div>
        </div>
        @error('ikut_bkb')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-2">
        <div class="form-group @error('memiliki_tabungan') is-invalid @enderror">
            {{-- pilih memiliki tabungan --}}
            <label>Memiliki Tabungan</label><br>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="memiliki_tabungan" value="ya" class="form-check-input"
                        {{$data_warga->memiliki_tabungan == 'ya'? 'checked' : ''}}>Ya
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="memiliki_tabungan" value="tidak" class="form-check-input"
                        {{$data_warga->memiliki_tabungan == 'tidak'? 'checked' : ''}}>Tidak
                </label>
            </div>
        </div>
        @error('memiliki_tabungan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-3">
        <div class="form-group @error('ikut_paud_sejenis') is-invalid @enderror">
            {{-- pilih Mengikuti PAUD/Sejenis--}}
            <label>Mengikuti PAUD/Sejenis</label><br>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="ikut_paud_sejenis" value="ya" class="form-check-input"
                        {{$data_warga->ikut_paud_sejenis == 'ya'? 'checked' : ''}}>Ya
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="ikut_paud_sejenis" value="tidak" class="form-check-input"
                        {{$data_warga->ikut_paud_sejenis == 'tidak'? 'checked' : ''}}>Tidak
                </label>
            </div>
        </div>
        @error('ikut_paud_sejenis')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-3">
        <div class="form-group @error('ikut_koperasi') is-invalid @enderror">
            {{-- pilih Mengikuti dalam Kegiatan Koperasi --}}
            <label>Ikut dalam Kegiatan Koperasi</label><br>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="ikut_koperasi" value="ya" class="form-check-input"
                        {{$data_warga->ikut_koperasi == 'ya'? 'checked' : ''}}>Ya
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="ikut_koperasi" value="tidak" class="form-check-input"
                        {{$data_warga->ikut_koperasi == 'tidak'? 'checked' : ''}}>Tidak
                </label>
            </div>
        </div>
        @error('ikut_koperasi')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-2">
        <div class="form-group @error('id_user') is-invalid @enderror">
            {{-- nama kader --}}
            @foreach ($kad as $c)
            <input type="hidden" class="form-control" name="id_user" id="id_user" placeholder="Masukkan Nama Desa"
                value="{{$c->id}}">
            @endforeach
        </div>
        @error('id_user')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/data_warga" class="btn btn-outline-primary">
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