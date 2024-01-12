@extends('kader.layout')

@section('title', 'Tambah Data Keluarga | Kader Dasawisma PKK Kab. Indramayu')

@section('bread', 'Tambah Data Keluarga')
@section('container')
<div class="container">

    <div class="row">

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Keluarga</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                    <form action="{{ route('data_keluarga.store') }}" method="POST">
                        @csrf
                        <h6 style="color: red">* Semua elemen atribut harus diisi</h6>

                        <div class="col-md-2">
                            <!-- Tombol yang memicu modal -->
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalSaya">
                                Klik Info
                            </button>
                        </div>
                        <!-- Contoh Modal -->
                        <div class="modal fade" id="modalSaya" tabindex="-1" role="dialog"
                            aria-labelledby="modalSayaLabel" aria-hidden="true">
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
                                                <td>Di isi sesuai dengan nama dasawisma yang diikuti warga yang
                                                    bersangkutan</td>

                                            </tr>
                                            <tr>
                                                <td>Nama Kepala Keluarga</td>
                                                <td>Di isi dengan nama Kepala Rumah Tangga pada rumah yang didata.
                                                    Kepala Rumah Tangga adalah yang bertanggung jawab atas segala
                                                    sesuatu yang terkait dengan kegiatan di dalam rumah yang sedang
                                                    didata.</td>

                                            </tr>
                                            <tr>
                                                <td>Jumlah Balita</td>
                                                <td>Diisi dengan jumlah Balita yang ada pada rumah yang sedang didata
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah PUS (Pasangan Usia Subur)</td>
                                                <td>Diisi dengan jumlah Pasangan Usia Subur yang ada pada rumah yang
                                                    sedang didata</td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah WUS (Wanita Usia Subur)</td>
                                                <td>Diisi dengan jumlah Wanita Usia Subur yakni Usia antara 14 tahun
                                                    hingga 50 tahun pada rumah yang sedang didata kecuali ada keterangan
                                                    khusus. Misalnya terjadi manopouse dini karena penyakit tertentu,
                                                    dll.</td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah 3 Buta</td>
                                                <td>Diisi dengan jumlah anggota rumah yang sedang didata
                                                    yang mengalami ‘3 Buta’ pada usia diatas 13 tahun (Buta Baca, Buta
                                                    Tulis, Buta Hitung)</td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Ibu Hamil</td>
                                                <td>Diisi dengan jumlah ibu hamil pada rumah yang sedang didata</td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Ibu Menyusui</td>
                                                <td>Diisi dengan jumlah ibu yang sedang menyusui bayi pada rumah yang
                                                    sedang didata</td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Lansia</td>
                                                <td>Diisi dengan jumlah orang tua lanjut usia pada rumah yang sedang
                                                    didata</td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Kebutuhan Khusus</td>
                                                <td>Diisi dengan jumlah anggota keluarga berkebutuhan khusus pada rumah
                                                    yang sedang didata</td>
                                            </tr>
                                            <tr>
                                                <td>Stiker P4K (Program Perencanaan Persalinan dan Pencegahan
                                                    Komplikasi)</td>
                                                <td>Stiker P4K berisi data tentang : nama ibu hamil, taksiran
                                                    persalinan, penolong persalinan, tempat persalinan, pendamping
                                                    persalinan, transport yang digunakan dan calon donor darah.</td>
                                            </tr>
                                            <tr>
                                                <td>Aktivitas UP2K ( Upaya Peningkatan Pendapatan Keluarga )</td>
                                                <td>UP2K ( Upaya Peningkatan Pendapatan Keluarga ) adalah merupakan
                                                    salah satu program penanggulangan kemiskinan khususnya bagi kaum
                                                    perempuan.</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Oke</button>
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
                                <div class="form-group ">
                                    <label>Dasa Wisma</label>
                                    {{-- <input type="text" class="form-control @error('dasa_wisma') is-invalid @enderror" name="dasa_wisma" id="dasa_wisma" placeholder="Masukkan Nama Dasa Wisma" value="{{ old('dasa_wisma') }}">
                                    --}}
                                    <select class="form-control" id="id_dasawisma" name="id_dasawisma">
                                        {{-- nama dasa wisma --}}
                                        <option hidden> Pilih Dasa Wisma</option>
                                        @foreach ($dasawisma as $c)
                                        <option value="{{$c->id}}">{{ $c->nama_dasawisma }}</option>
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
                                    <input type="number" min="1" class="form-control @error('rt') is-invalid @enderror"
                                        name="rt" id="rt" placeholder="Masukkan No. RT" value="{{ old('rt') }}">

                                    {{-- <select class="form-control" id="rt" name="rt"> --}}
                                    {{-- nomor rt --}}
                                    {{-- <option hidden> Pilih RT</option>
                                    @foreach ($warga as $c)
                                        <option value="{{$c->id}}">{{ $c->rt }}</option>
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
                                <div class="form-group @error('rw') is-invalid @enderror">
                                    <label for="exampleFormControlSelect1">RW</label>
                                    <input type="number" min="1" class="form-control @error('rw') is-invalid @enderror"
                                        name="rw" id="rw" placeholder="Masukkan No. RW" value="{{ old('rw') }}">

                                    {{-- <select class="form-control " id="rw" name="rw"> --}}
                                    {{-- nama rw --}}
                                    {{-- <option hidden> Pilih RW</option>
                                    @foreach ($warga as $c)
                                        <option value="{{$c->id}}">{{ $c->rw }}</option>
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
                                <div class="form-group @error('rw') is-invalid @enderror">
                                    <label for="exampleFormControlSelect1">Dusun</label>
                                    <input type="text" class="form-control @error('dusun') is-invalid @enderror"
                                        name="dusun" id="dusun" placeholder="Masukkan Nama Dusun"
                                        value="{{ old('dusun') }}">

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
                                    {{-- nama kecamatan --}}
                                    @foreach ($kec as $c)
                                    <input type="hidden" class="form-control" name="id_kecamatan" id="id_kecamatan"
                                        placeholder="Masukkan Nama Desa" value="{{$c->id}}">
                                    <input type="text" disabled class="form-control" name="id_kecamatan"
                                        id="id_kecamatan" placeholder="Masukkan Nama Desa"
                                        value="{{ $c->nama_kecamatan }}">

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
                                    {{-- nama kabupaten --}}
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
                                    {{-- nama provinsi --}}
                                    <input type="text" readonly
                                        class="form-control @error('provinsi') is-invalid @enderror" name="provinsi"
                                        id="provinsi" placeholder="Masukkan Provisni" value="Jawa Barat">
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
                                        value="{{ old('nama_kepala_rumah_tangga') }}">

                                    {{-- <select class="form-control @error('nama_kepala_rumah_tangga') is-invalid @enderror" id="id_warga" name="id_warga"> --}}
                                    {{-- Pilih Nama Kepala Rumah Tangga --}}
                                    {{-- <option hidden> Pilih Nama Kepala Rumah Tangga</option>
                                    @foreach ($warga as $c)
                                        <option value="{{$c->id}}">{{ $c->nik_kepala_keluarga }} -
                                    {{ $c->nama_kepala_rumah_tangga }}</option>
                                    @endforeach
                                    </select> --}}
                                    @error('nama_kepala_rumah_tangga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>NIK Kepala Rumah Tangga</label>
                                    <input type="text"
                                        class="form-control @error('nik_kepala_keluarga') is-invalid @enderror"
                                        name="nik_kepala_keluarga" id="nik_kepala_keluarga"
                                        placeholder="Masukkan NIK Kepala Rumah Tangga"
                                        value="{{ old('nik_kepala_keluarga') }}">

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
                                    {{-- Jumlah Anggota Keluarga --}}
                                    <input type="number" min="0"
                                        class="form-control @error('jumlah_anggota_keluarga') is-invalid @enderror"
                                        name="jumlah_anggota_keluarga" id="jumlah_anggota_keluarga"
                                        placeholder="Diisi Jumlah Anggota Keluarga"
                                        value="{{ old('jumlah_anggota_keluarga') }}">
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
                                    {{-- Jumlah Anggota Keluarga Laki-laki--}}
                                    <div class="input-group mb-3">
                                        <input type="number" min="0" class="form-control" name="laki_laki"
                                            id="laki_laki" placeholder="Diisi Jumlah Anggota Keluarga Laki-laki"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2"
                                            value="{{ old('laki_laki') }}">
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
                                    {{-- Jumlah Anggota Keluarga perempuan--}}
                                    <div class="input-group mb-3">
                                        <input type="number" min="0" name="perempuan" class="form-control"
                                            placeholder="Diisi Jumlah Anggota Keluarga Perempuan"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2"
                                            value="{{ old('perempuan') }}">
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
                                    {{-- Jumlah KK--}}
                                    <div class="input-group mb-3">
                                        <input type="number" min="1" class="form-control" name="jumlah_KK"
                                            placeholder="Diisi Jumlah Kepala Keluarga" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2" value="{{ old('jumlah_KK') }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">KK</span>
                                        </div>
                                    </div>
                                </div>
                                @error('jumlah_KK')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <div class="form-group @error('periode') is-invalid @enderror">
                                    {{-- pilih periode --}}
                                    <label>Periode</label>
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
                                        <div class="col-md-3">
                                            <div class="input-group mb-3 @error('jumlah_balita') is-invalid @enderror">
                                                {{-- jumlah 3 buta --}}
                                                <input type="number" min="0" class="form-control" placeholder="Balita"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                    name="jumlah_balita" value="{{ old('jumlah_balita') }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">Orang</span>
                                                </div>
                                            </div>
                                            @error('jumlah_balita')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="input-group mb-3">
                                                {{-- Jumlah Balita laki--}}
                                                <input type="number" min="0"
                                                    class="form-control @error('jumlah_balita_laki') is-invalid @enderror"
                                                    placeholder="Balita Laki-laki" aria-label="Recipient's username"
                                                    aria-describedby="basic-addon2" name="jumlah_balita_laki"
                                                    value="{{ old('jumlah_balita_laki') }}">
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
                                                    value="{{ old('jumlah_balita_perempuan') }}">
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
                                                {{-- Jumlah PUS--}}
                                                <input type="number" min="0" class="form-control"
                                                    placeholder="PUS (Pasangan Usia Subur)"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                    name="jumlah_PUS" value="{{ old('jumlah_PUS') }}">
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
                                                {{-- Jumlah WUS--}}
                                                <input type="number" min="0" class="form-control"
                                                    placeholder="WUS (Pasangan Usia Subur)"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                    name="jumlah_WUS" value="{{ old('jumlah_WUS') }}">
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
                                            <div class="input-group mb-3 @error('jumlah_3_buta') is-invalid @enderror">
                                                {{-- jumlah 3 buta --}}
                                                <input type="number" min="0" class="form-control"
                                                    placeholder="3 Buta (Buta Tulis, Buta Baca, Buta Hitung)"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                    name="jumlah_3_buta" value="{{ old('jumlah_3_buta') }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">Orang</span>
                                                </div>
                                            </div>
                                            @error('jumlah_3_buta')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                        <div class="col-md-3">
                                            <div
                                                class="input-group mb-3 @error('jumlah_3_buta_laki') is-invalid @enderror">
                                                {{-- jumlah 3 buta --}}
                                                <input type="number" min="0" class="form-control"
                                                    placeholder="3 Buta (Buta Tulis, Buta Baca, Buta Hitung) Laki-laki"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                    name="jumlah_3_buta_laki" value="{{ old('jumlah_3_buta_laki') }}">
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
                                                    value="{{ old('jumlah_3_buta_perempuan') }}">
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
                                            <div
                                                class="input-group mb-3 @error('jumlah_ibu_hamil') is-invalid @enderror">
                                                {{-- jumlah ibu hamil --}}
                                                <input type="number" min="0" class="form-control"
                                                    placeholder="Ibu Hamil" aria-label="Recipient's username"
                                                    aria-describedby="basic-addon2" name="jumlah_ibu_hamil"
                                                    value="{{ old('jumlah_ibu_hamil') }}">
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
                                            <div
                                                class="input-group mb-3 @error('jumlah_ibu_menyusui') is-invalid @enderror">
                                                {{-- jumlah ibu menyusui --}}
                                                <input type="number" min="0" class="form-control"
                                                    placeholder="Ibu Menyusui" aria-label="Recipient's username"
                                                    aria-describedby="basic-addon2" name="jumlah_ibu_menyusui"
                                                    value="{{ old('jumlah_ibu_menyusui') }}">
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
                                                {{-- jumlah lansia --}}
                                                <input type="number" min="0" class="form-control" placeholder="Lansia"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                    name="jumlah_lansia" value="{{ old('jumlah_lansia') }}">
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
                                            <div
                                                class="input-group mb-3 @error('jumlah_kebutuhan') is-invalid @enderror">
                                                {{-- jumlah kebutuhan --}}
                                                <input type="number" min="0" class="form-control"
                                                    placeholder="Kebutuhan Khusus" aria-label="Recipient's username"
                                                    aria-describedby="basic-addon2" name="jumlah_kebutuhan"
                                                    value="{{ old('jumlah_kebutuhan') }}">
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
                            <div class="col-md-3">
                                <div class="form-group @error('makanan_pokok') is-invalid @enderror">
                                    {{-- pilih Makanan Pokok Sehari-hari--}}
                                    <label class="form-label">Makanan Pokok Sehari-hari </label><br>
                                    <select class="form-control @error('makanan_pokok') is-invalid @enderror"
                                        id="makanan_pokok" name="makanan_pokok">
                                        <option hidden>Pilih Makanan Pokok</option>
                                        <option value="1">Beras</option>
                                        <option value="2">Non Beras</option>
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
                                        <select class="form-control @error('sumber_air') is-invalid @enderror"
                                            id="sumber_air" name="sumber_air">
                                            <option hidden>Pilih Sumber Air Keluarga</option>
                                            <option value="1">PDAM</option>
                                            <option value="2">Sumur</option>
                                            <option value="3">Sungai</option>
                                            <option value="4">Lainnya</option>
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
                                            <option value="1">Sehat</option>
                                            <option value="2">Kurang Sehat</option>
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
                                    {{-- pilih mempunyai jamban --}}
                                    <label>Mempunyai Jamban Keluarga</label><br>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input"
                                                            name="punya_jamban" value="1">Ya
                                                    </div>
                                                </div>
                                                <input type="number" min="0" class="form-control"
                                                    aria-label="Text input with radio button" name="jumlah_jamban"
                                                    placeholder="Jumlah Jamban">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="punya_jamban" value="0"
                                                        class="form-check-input">Tidak
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


                            <div class="col-md-4">
                                <div class="form-group @error('punya_tempat_sampah') is-invalid @enderror">
                                    {{-- pilih punya tempat pembuangan sampah --}}
                                    <label>Memiliki Tempat Pembuangan Sampah</label><br>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="punya_tempat_sampah" value="1"
                                                class="form-check-input">Ya
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="punya_tempat_sampah" value="0"
                                                class="form-check-input">Tidak
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
                                    {{-- pilih punya saluran pembuangan air limbah --}}
                                    <label>Mempunyai Saluran Pembuangan Air Limbah</label><br>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="punya_saluran_air" value="1"
                                                class="form-check-input">Ya
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="punya_saluran_air" value="0"
                                                class="form-check-input">Tidak
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
                                    {{-- pilih stiker --}}
                                    <label>Menempel Stiker P4K</label><br>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="tempel_stiker" value="1"
                                                class="form-check-input">Ya
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="tempel_stiker" value="0"
                                                class="form-check-input">Tidak
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
                                    {{-- pilih aktivitas UP2K--}}
                                    <label>Aktivitas UP2K</label><br>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="aktivitas_UP2K" value="1"
                                                class="form-check-input">Ya
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="aktivitas_UP2K" value="0"
                                                class="form-check-input">Tidak
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
                                    {{-- pilih aktivitas kegiatan usaha --}}
                                    <label>Aktivitas Kegiatan Usaha Kesehatan Lingkungan</label><br>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="aktivitas_kegiatan_usaha" value="1"
                                                class="form-check-input">Ya
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="aktivitas_kegiatan_usaha" value="0"
                                                class="form-check-input">Tidak
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
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <a href="/data_keluarga" class="btn btn-outline-primary">
                                <span>Batalkan</span>
                            </a>
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.card -->
        </div>

    </div>
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
                            $('select[name="id_desa"]').append(
                                '<option value="' + key + '">' + desas
                                .nama_desa + '</option>');
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
