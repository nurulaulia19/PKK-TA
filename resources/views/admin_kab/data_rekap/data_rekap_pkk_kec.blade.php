@extends('admin_kab.layout')

@section('title', 'Catatan Data Dan Kegiatan Warga Kelompok PKK Kecamatan | Admin Kabupaten PKK Kab. Indramayu')

@section('bread', 'Catatan Data Dan Kegiatan Warga Kelompok PKK Kecamatan')
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
                                <h6><strong>TP PKK KECAMATAN</strong></h6>
                                <h6><strong>TAHUN : {{ $periode }}</strong></h6>
                                <h6><strong>KECAMATAN : {{ $nama_kecamatan }}</strong> </h6>
                                <h6><strong>KAB/KOTA : INDRAMAYU</strong> </h6>
                                <h6><strong>PROVINSI : JAWA BARAT</strong> </h6>


                            </center>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered data" id="add-row" width="6000px">
                                    <thead>
                                        <tr>
                                        <th rowspan="2" style="text-align: center;">No</th>
                                        <th rowspan="2" style="text-align: center;">Nama Desa/Kelurahan</th>
                                        <th rowspan="2" style="text-align: center;">Jml. Dusun/Ling</th>
                                        <th rowspan="2" style="text-align: center;">Jml. RW</th>
                                        <th rowspan="2" style="text-align: center;">Jml. RT</th>
                                        <th rowspan="2" style="text-align: center;">Jml. Dasa Wisma</th>
                                        <th rowspan="2" style="text-align: center;">Jml. KRT</th>
                                        <th rowspan="2" style="text-align: center;">Jml. KK</th>
                                        <th colspan="12" style="text-align:center;">Jumlah Anggota Keluarga</th>
                                        <th colspan="5" style="text-align:center;">Kriteria Rumah</th>
                                        <th colspan="4" style="text-align:center;">Sumber Air Keluarga</th>
                                        <th rowspan="2" style="text-align: center;">Jml. Jamban Keluarga</th>
                                        <th colspan="2" style="text-align:center;">Makanan Pokok</th>
                                        <th colspan="4" style="text-align:center;">Warga Mengikuti Kegiatan</th>
                                        {{-- <th rowspan="2" style="text-align: center;">Ket</th> --}}
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
                                        @foreach ($desas as $desa)
                                        <tr>
                                            <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                            <td style="vertical-align: middle;">{{ $desa->desa->nama_desa }}</td>
                                            <td style="vertical-align: middle;">{{ $desa->jumlah_dusun }}</td>
                                            <td style="vertical-align: middle;">{{ $desa->jumlah_rw }}</td>
                                            <td style="vertical-align: middle;">{{ $desa->jumlah_rt }}</td>
                                            <td style="vertical-align: middle;">{{ $desa->jumlah_dasa_wisma }}</td>
                                            <td style="vertical-align: middle;">{{ $desa->jumlah_KRT }}</td>
                                            <td style="vertical-align: middle;">{{ $desa->jumlah_KK }}</td>
                                            <td>{{ $desa->jumlah_laki_laki }}</td>
                                            <td>{{ $desa->jumlah_perempuan }}</td>
                                            <td>{{ $desa->jumlah_balita_laki }}</td>
                                            <td>{{ $desa->jumlah_balita_perempuan }}</td>
                                            <td>{{ $desa->jumlah_3_buta_laki }}</td>
                                            <td>{{ $desa->jumlah_3_buta_perempuan }}</td>
                                            <td>{{ $desa->jumlah_PUS }}</td>
                                            <td>{{ $desa->jumlah_WUS }}</td>
                                            <td>{{ $desa->jumlah_ibu_hamil }}</td>
                                            <td>{{ $desa->jumlah_ibu_menyusui }}</td>
                                            <td>{{ $desa->jumlah_lansia }}</td>
                                            <td>{{ $desa->jumlah_kebutuhan_khusus }}</td>
                                            <td>{{ $desa->jumlah_kriteria_rumah_sehat }}</td>
                                            <td>{{ $desa->jumlah_kriteria_rumah_tidak_sehat }}</td>
                                            <td>{{ $desa->jumlah_punya_tempat_sampah }}</td>
                                            <td>{{ $desa->jumlah_punya_saluran_air }}</td>
                                            <td>{{ $desa->jumlah_tempel_stiker }}</td>
                                            <td>{{ $desa->jumlah_sumber_air_pdam }}</td>
                                            <td>{{ $desa->jumlah_sumber_air_sumur }}</td>
                                            <td>{{ $desa->jumlah_sumber_air_sungai }}</td>
                                            <td>{{ $desa->jumlah_sumber_air_dll }}</td>
                                            <td>{{ $desa->punya_jamban }}</td>
                                            <td>{{ $desa->jumlah_makanan_pokok_beras }}</td>
                                            <td>{{ $desa->jumlah_makanan_pokok_non_beras }}</td>
                                            <td>{{ $desa->jumlah_aktivitas_UP2K }}</td>
                                            <td>{{ $desa->jumlah_have_pemanfaatan }}</td>
                                            <td>{{ $desa->jumlah_have_industri }}</td>
                                            <td>{{ $desa->jumlah_have_kegiatan }}</td>
                                        </tr>
                                        @endforeach

                                        <tr>
                                            <td><strong>Jumlah</strong></td>
                                            <td></td>
                                            <td>{{ $desas->sum('jumlah_dusun') }}</td>
                                            <td>{{ $desas->sum('jumlah_rw') }}</td>
                                            <td>{{ $desas->sum('jumlah_rt') }}</td>
                                            <td>{{ $desas->sum('jumlah_dasa_wisma') }}</td>
                                            <td>{{ $desas->sum('jumlah_KRT') }}</td>
                                            <td>{{ $desas->sum('jumlah_KK') }}</td>
                                            <td>{{ $desas->sum('jumlah_laki_laki') }}</td>
                                            <td>{{ $desas->sum('jumlah_perempuan') }}</td>
                                            <td>{{ $desas->sum('jumlah_balita_laki') }}</td>
                                            <td>{{ $desas->sum('jumlah_balita_perempuan') }}</td>
                                            <td>{{ $desas->sum('jumlah_3_buta_laki') }}</td>
                                            <td>{{ $desas->sum('jumlah_3_buta_perempuan') }}</td>
                                            <td>{{ $desas->sum('jumlah_PUS') }}</td>
                                            <td>{{ $desas->sum('jumlah_WUS') }}</td>
                                            <td>{{ $desas->sum('jumlah_ibu_hamil') }}</td>
                                            <td>{{ $desas->sum('jumlah_ibu_menyusui') }}</td>
                                            <td>{{ $desas->sum('jumlah_lansia') }}</td>
                                            <td>{{ $desas->sum('jumlah_kebutuhan_khusus') }}</td>
                                            <td>{{ $desas->sum('jumlah_kriteria_rumah_sehat') }}</td>
                                            <td>{{ $desas->sum('jumlah_kriteria_rumah_tidak_sehat') }}</td>
                                            <td>{{ $desas->sum('jumlah_punya_tempat_sampah') }}</td>
                                            <td>{{ $desas->sum('jumlah_punya_saluran_air') }}</td>
                                            <td>{{ $desas->sum('jumlah_tempel_stiker') }}</td>
                                            <td>{{ $desas->sum('jumlah_sumber_air_pdam') }}</td>
                                            <td>{{ $desas->sum('jumlah_sumber_air_sumur') }}</td>
                                            <td>{{ $desas->sum('jumlah_sumber_air_sungai') }}</td>
                                            <td>{{ $desas->sum('jumlah_sumber_air_dll') }}</td>
                                            <td>{{ $desas->sum('punya_jamban') }}</td>
                                            <td>{{ $desas->sum('jumlah_makanan_pokok_beras') }}</td>
                                            <td>{{ $desas->sum('jumlah_makanan_pokok_non_beras') }}</td>
                                            <td>{{ $desas->sum('jumlah_aktivitas_UP2K') }}</td>
                                            <td>{{ $desas->sum('jumlah_have_pemanfaatan') }}</td>
                                            <td>{{ $desas->sum('jumlah_have_industri') }}</td>
                                            <td>{{ $desas->sum('jumlah_have_kegiatan') }}</td>
                                        </tr>
                                    </tbody>

                                </table>

                            </div>
                            <a href="{{ url('export_rekap_kec').'?'.http_build_query(compact('nama_kecamatan', 'desa', 'periode')) }}" target="_blank" class="btn btn-success" type="button" role="button">
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
