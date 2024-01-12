@extends('admin_kab.layout')

@section('title', 'Catatan Data Dan Kegiatan Warga Kelompok PKK Kabupaten | Admin Kabupaten PKK Kab. Indramayu')

@section('bread', 'Catatan Data Dan Kegiatan Warga Kelompok PKK Kabupaten')
@section('container')

    <!-- Main content -->
    <div class="main-content">
    <section class="section">

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <h6><strong>CATATAN DATA KEGIATAN WARGA</strong></h6>
                                <h6>TP PKK KABUPATEN</h6>
                                <h6>TAHUN {{ $periode }}</h6><br>
                                <h6><strong>KAB/KOTA : INDRAMAYU</strong> </h6>
                                <h6><strong>PROVINSI : JAWA BARAT</strong> </h6>
                            </center>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered data" id="add-row" width="6000px">
                                    <thead>
                                        <tr>
                                        <th rowspan="3" style="text-align: center;">No</th>
                                        <th rowspan="3" style="text-align: center;">Nama Kecamatan</th>
                                        <th rowspan="3" style="text-align: center;">Jml. Desa/Kel</th>
                                        <th rowspan="3" style="text-align: center;">Jml. Dusun/Ling</th>
                                        <th rowspan="3" style="text-align: center;">Jml. RW</th>
                                        <th rowspan="3" style="text-align: center;">Jml. RT</th>
                                        <th rowspan="3" style="text-align: center;">Jml. Dasa Wisma</th>
                                        <th rowspan="3" style="text-align: center;">Jml. KRT</th>
                                        <th rowspan="3" style="text-align: center;">Jml. KK</th>
                                        <th colspan="12" style="text-align:center;">Jumlah Anggota Keluarga</th>
                                        <th colspan="5" style="text-align:center;">Kriteria Rumah</th>
                                        <th colspan="4" style="text-align:center;">Sumber Air Keluarga</th>
                                        <th rowspan="3" style="text-align: center;">Jml. Jamban Keluarga</th>
                                        <th colspan="2" style="text-align:center;">Makanan Pokok</th>
                                        <th colspan="6" style="text-align:center;">Warga Mengikuti Kegiatan</th>
                                        {{-- <th rowspan="3" style="text-align: center;">Ket</th> --}}
                                    </tr>
                                    <tr>
                                        <th>Total L</th>
                                        <th>Total P</th>
                                        <th>Balita L</th>
                                        <th>Balita P</th>
                                        <th>3 Buta L</th>
                                        <th>3 Buta P</th>
                                        <th>PUS</th>
                                        <th>WUS</th>
                                        <th>Ibu Hamil</th>
                                        <th>Ibu Menyusui</th>
                                        <th>Lansia</th>
                                        <th>Berkebutuhan Khusus</th>
                                        <th>Sehat</th>
                                        <th>Tidak Sehat</th>
                                        <th>Memiliki Tmp. Pemb. Sampah</th>
                                        <th>Memiliki SPAL</th>
                                        <th>Menempel Stiker P4K</th>
                                        <th>PDAM</th>
                                        <th>Sumur</th>
                                        <th>Sungai</th>
                                        <th>DLL</th>
                                        <th>Beras</th>
                                        <th>Non Beras</th>
                                        <th>UP2K</th>
                                        <th>Pemanfaatan dan Pekarangan</th>
                                        <th>Industri Rumah Tangga</th>
                                        <th>Kesehatan Lingkungan</th>
                                    </tr>

                                    {{-- <tr>
                                        <th>L</th>
                                        <th>P</th>
                                        <th>L</th>
                                        <th>P</th>
                                    </tr> --}}
                                    </thead>

                                    <tbody>
                                        @foreach ($kecamatans as $kec)
                                        <tr>
                                            <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                            <td style="vertical-align: middle;">{{ $kec->kecamatan->nama_kecamatan }}</td>
                                            <td style="vertical-align: middle;">{{ $kec->jumlah_desa }}</td>
                                            <td style="vertical-align: middle;">{{ $kec->jumlah_dusun }}</td>
                                            <td style="vertical-align: middle;">{{ $kec->jumlah_rw }}</td>
                                            <td style="vertical-align: middle;">{{ $kec->jumlah_rt }}</td>
                                            <td style="vertical-align: middle;">{{ $kec->jumlah_dasa_wisma }}</td>
                                            <td style="vertical-align: middle;">{{ $kec->jumlah_KRT }}</td>
                                            <td style="vertical-align: middle;">{{ $kec->jumlah_KK }}</td>
                                            <td>{{ $kec->jumlah_laki_laki }}</td>
                                            <td>{{ $kec->jumlah_perempuan }}</td>
                                            <td>{{ $kec->jumlah_balita_laki }}</td>
                                            <td>{{ $kec->jumlah_balita_perempuan }}</td>
                                            <td>{{ $kec->jumlah_3_buta_laki }}</td>
                                            <td>{{ $kec->jumlah_3_buta_perempuan }}</td>
                                            <td>{{ $kec->jumlah_PUS }}</td>
                                            <td>{{ $kec->jumlah_WUS }}</td>
                                            <td>{{ $kec->jumlah_ibu_hamil }}</td>
                                            <td>{{ $kec->jumlah_ibu_menyusui }}</td>
                                            <td>{{ $kec->jumlah_lansia }}</td>
                                            <td>{{ $kec->jumlah_kebutuhan_khusus }}</td>
                                            <td>{{ $kec->jumlah_kriteria_rumah_sehat }}</td>
                                            <td>{{ $kec->jumlah_kriteria_rumah_tidak_sehat }}</td>
                                            <td>{{ $kec->jumlah_punya_tempat_sampah }}</td>
                                            <td>{{ $kec->jumlah_punya_saluran_air }}</td>
                                            <td>{{ $kec->jumlah_tempel_stiker }}</td>
                                            <td>{{ $kec->jumlah_sumber_air_pdam }}</td>
                                            <td>{{ $kec->jumlah_sumber_air_sumur }}</td>
                                            <td>{{ $kec->jumlah_sumber_air_sungai }}</td>
                                            <td>{{ $kec->jumlah_sumber_air_dll }}</td>
                                            <td>{{ $kec->punya_jamban }}</td>
                                            <td>{{ $kec->jumlah_makanan_pokok_beras }}</td>
                                            <td>{{ $kec->jumlah_makanan_pokok_non_beras }}</td>
                                            <td>{{ $kec->jumlah_aktivitas_UP2K }}</td>
                                            <td>{{ $kec->jumlah_have_pemanfaatan }}</td>
                                            <td>{{ $kec->jumlah_have_industri }}</td>
                                            <td>{{ $kec->jumlah_have_kegiatan }}</td>
                                        </tr>
                                        @endforeach

                                        <tr>
                                            <td colspan="2"><strong>Jumlah</strong></td>
                                            <td>{{ $kecamatans->sum('jumlah_desa') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_dusun') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_rw') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_rt') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_dasa_wisma') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_KRT') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_KK') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_laki_laki') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_perempuan') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_balita_laki') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_balita_perempuan') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_3_buta_laki') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_3_buta_perempuan') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_PUS') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_WUS') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_ibu_hamil') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_ibu_menyusui') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_lansia') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_kebutuhan_khusus') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_kriteria_rumah_sehat') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_kriteria_rumah_tidak_sehat') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_punya_tempat_sampah') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_punya_saluran_air') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_tempel_stiker') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_sumber_air_pdam') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_sumber_air_sumur') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_sumber_air_sungai') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_sumber_air_dll') }}</td>
                                            <td>{{ $kecamatans->sum('punya_jamban') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_makanan_pokok_beras') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_makanan_pokok_non_beras') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_aktivitas_UP2K') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_have_pemanfaatan') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_have_industri') }}</td>
                                            <td>{{ $kecamatans->sum('jumlah_have_kegiatan') }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <a href="{{ url('export_rekap_kab').'?'.http_build_query(compact('kecamatan', 'periode')) }}" target="_blank" class="btn btn-success" type="button" role="button">
                                <i class="fas fa-print"></i> Cetak ke Excel </a><br>

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
