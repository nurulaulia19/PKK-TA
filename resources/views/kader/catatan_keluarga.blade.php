@extends('kader.layout')

@section('title', 'Catatan Keluarga  | Kader Dasawisma PKK Kab. Indramayu')

@section('bread', 'Catatan Keluarga ')
@section('container')

    <!-- Main content -->
<div class="main-content">
    <section class="section">

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <center><h5><strong> Catatan Keluarga </strong></h5></center>

                            <div class="row">
                                <div class="col-sm-8">
                                    <h6>Catatan Keluarga dari : {{ ucfirst($keluarga->nama_kepala_rumah_tangga) }}</h6>
                                    <h6>Anggota Kelompok Dasawisma : {{ ucfirst($keluarga->dasawisma->nama_dasawisma) }}</h6>
                                    <h6>Tahun : {{ ucfirst($keluarga->periode) }}</h6>
                                </div>
                                <div class="col-sm-4">
                                    {{-- kriteria rumah --}}
                                    @if ($keluarga->kriteria_rumah == 1)
                                        <h6>Kriteria Rumah : Sehat</h6>
                                    @else
                                        <h6>Kriteria Rumah : Kurang Sehat</h6>
                                    @endif

                                    {{-- jamban keluarga --}}
                                    @if ($keluarga->punya_jamban == 1)
                                        <h6>Jamban Keluarga : Ya/{{ $keluarga->jumlah_jamban }} buah</h6>
                                    @else
                                        <h6>Jamban Keluarga : Tidak</h6>
                                    @endif

                                    {{-- sumber air --}}
                                    @if ($keluarga->sumber_air == 1)
                                        <h6>Sumber Air : PDAM</h6>
                                    @elseif ($keluarga->sumber_air == 2)
                                        <h6>Sumber Air : Sumur</h6>
                                    @elseif ($keluarga->sumber_air == 3)
                                        <h6>Sumber Air : Sungai</h6>
                                    @elseif ($keluarga->sumber_air == 4)
                                        <h6>Sumber Air : Lainnya</h6>
                                    @endif

                                    {{-- tempat sampah --}}
                                    @if ($keluarga->punya_tempat_sampah == 1)
                                        <h6>Tempat Sampah : Ya</h6>
                                    @else
                                        <h6>Tempat Sampah : Tidak</h6>
                                    @endif
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered data" id="add-row">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Nama Anggota Keluarga</th>
                                            <th rowspan="2">Status Perkawinan</th>
                                            <th rowspan="2">Jenis Kelamin</th>
                                            <th rowspan="2">Tempat Lahir</th>
                                            <th rowspan="2">Tanggal Lahir/Umur</th>
                                            <th rowspan="2">Agama</th>
                                            <th rowspan="2">Pendidikan</th>
                                            <th rowspan="2">Pekerjaan</th>
                                            <th rowspan="2">Berkebutuhan Khusus</th>
                                            <th colspan="8"><center>Kegiatan Yang diikuti</center></th>
                                            {{-- <th rowspan="2">Ket</th> --}}
                                        </tr>

                                        <tr>
                                            {{-- <th>Penghayatan Dan Pengamalan Pancasilal</th>
                                            <th>Gotong Royong</th>
                                            <th>Pendidikan dan Keterampilan</th>
                                            <th>Pengembangan Kehidupan Berkoperasi</th>
                                            <th>Pangan</th>
                                            <th>Sandang</th>
                                            <th>Kesehatan</th>
                                            <th>Perencanaan Sehat</th> --}}
                                            @foreach ($kategori_kegiatans as $kategori_kegiatan)
                                                <th>{{ $kategori_kegiatan->nama_kegiatan }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>

                                    <tbody>

                                            @foreach ($catatan_keluarga as $data_warga)
                                                <tr>
                                                    <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                                    <td style="vertical-align: middle;">{{ucfirst($data_warga->nama)}}</td>
                                                    <td style="vertical-align: middle;">{{ucfirst($data_warga->status_perkawinan)}}</td>
                                                    <td style="vertical-align: middle;">{{ucfirst($data_warga->jenis_kelamin)}}</td>
                                                    <td style="vertical-align: middle;">{{ucfirst($data_warga->tempat_lahir)}}</td>
                                                    <td style="vertical-align: middle;">{{ \Carbon\Carbon::parse($data_warga->tgl_lahir)->isoFormat('D MMMM Y') }}/{{ ucfirst($data_warga->umur) }} Tahun</td>
                                                    <td style="vertical-align: middle;">{{ucfirst($data_warga->agama)}}</td>
                                                    <td style="vertical-align: middle;">{{ucfirst($data_warga->pendidikan)}}</td>
                                                    <td style="vertical-align: middle;">{{ucfirst($data_warga->pekerjaan)}}</td>
                                                    <td style="vertical-align: middle;">{{ucfirst($data_warga->berkebutuhan_khusus)}}</td>

                                                    @foreach ($kategori_kegiatans as $kategori_kegiatan)
                                                    
                                                        <td>
                                                            @if ($data_kegiatan_wargas = $data_warga->kegiatan)
                                                                <ul>
                                                                    @foreach ($data_kegiatan_wargas as $data_kegiatan_warga)
                                                                        @if ($data_kegiatan_warga->kategori_kegiatan->id === $kategori_kegiatan->id)
                                                                            <li>{{ $data_kegiatan_warga->keterangan_kegiatan->nama_keterangan }}</li>
                                                                        @endif
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </td>

                                                    @endforeach
                                                        </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                                {{-- <a href="{{ url('print_cakel', $print_cakel->id_keluarga) }}" target="_blank" class="btn btn-primary" type="button" role="button">
                                <i class="fas fa-print"></i> Cetak ke Printer </a> --}}

                                <a href="{{ url('print_pdf_cakel', $print_pdf_cakel->id_keluarga) }}" target="_blank" class="btn btn-success" type="button" role="button">
                                <i class="fas fa-print"></i> Cetak ke PDF </a><br>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
    <!-- /.content -->


<!-- page script -->
  @endsection

  @push('script-addon')

<script>
$(document).ready( function () {
    $('.data').DataTable();
} );
</script>


@endpush
