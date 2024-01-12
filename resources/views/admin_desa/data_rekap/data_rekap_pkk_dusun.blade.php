@extends('admin_desa.layout')

@section('title', 'Rekapitulasi Catatan Data Dan Kegiatan Warga Kelompok PKK Dusun| Admin Desa/Kelurahan PKK Kab. Indramayu')

@section('bread', 'Rekapitulasi Catatan Data Dan Kegiatan Warga Kelompok PKK Dusun')
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
                                <h6><strong>REKAPITULASI</strong></h6>
                                <h6><strong>CATATAN DATA DAN KEGIATAN WARGA</strong> </h6>
                                <h6><strong>KELOMPOK PKK DUSUN</strong> </h6>

                                <h6>Dusun : {{ucfirst ($dusun) }}</h6>
                                <h6>Desa/Kel : {{ ucfirst($desa->nama_desa) }}</h6>
                                <h6>Tahun : {{$periode}}</h6>
                            </center>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered data" id="add-row" width="6000px">
                                    <thead>
                                        <tr>
                                        <th rowspan="3" style="text-align: center;">No</th>
                                        <th rowspan="3" style="text-align: center;">No.RW</th>
                                        <th rowspan="3" style="text-align: center;">Jumlah RT</th>
                                        <th rowspan="3" style="text-align: center;">Jumlah Dasa Wisma</th>
                                        <th rowspan="3" style="text-align: center;">Jumlah KRT</th>
                                        <th rowspan="3" style="text-align: center;">Jumlah KK</th>
                                        <th colspan="12" style="text-align:center;">Jumlah Anggota Keluarga</th>
                                        <th colspan="5" style="text-align:center;">Kriteria Rumah</th>
                                        <th colspan="4" style="text-align:center;">Sumber Air Keluarga</th>
                                        <th rowspan="3" style="text-align:center;">Jumlah Jamban Keluarga</th>
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
                                        <th>Sehat Layak Huni</th>
                                        <th>Tidak Sehat Layak Huni</th>
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
                                            @foreach ($rws as $rw)
                                            <tr>
                                                <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                                <td style="vertical-align: middle;">{{ $rw->rw }}</td>
                                                <td style="vertical-align: middle;">{{ $rw->jumlah_rt }}</td>
                                                <td style="vertical-align: middle;">{{ $rw->jumlah_dasa_wisma }}</td>
                                                <td style="vertical-align: middle;">{{ $rw->jumlah_KRT }}</td>
                                                <td style="vertical-align: middle;">{{ $rw->jumlah_KK }}</td>
                                                <td>{{ $rw->jumlah_laki_laki }}</td>
                                                <td>{{ $rw->jumlah_perempuan }}</td>
                                                <td>{{ $rw->jumlah_balita_laki }}</td>
                                                <td>{{ $rw->jumlah_balita_perempuan }}</td>
                                                <td>{{ $rw->jumlah_3_buta_laki }}</td>
                                                <td>{{ $rw->jumlah_3_buta_perempuan }}</td>
                                                <td>{{ $rw->jumlah_PUS }}</td>
                                                <td>{{ $rw->jumlah_WUS }}</td>
                                                <td>{{ $rw->jumlah_ibu_hamil }}</td>
                                                <td>{{ $rw->jumlah_ibu_menyusui }}</td>
                                                <td>{{ $rw->jumlah_lansia }}</td>
                                                <td>{{ $rw->jumlah_kebutuhan_khusus }}</td>
                                                <td>{{ $rw->jumlah_kriteria_rumah_sehat }}</td>
                                                <td>{{ $rw->jumlah_kriteria_rumah_tidak_sehat }}</td>
                                                <td>{{ $rw->jumlah_punya_tempat_sampah }}</td>
                                                <td>{{ $rw->jumlah_punya_saluran_air }}</td>
                                                <td>{{ $rw->jumlah_tempel_stiker }}</td>
                                                <td>{{ $rw->jumlah_sumber_air_pdam }}</td>
                                                <td>{{ $rw->jumlah_sumber_air_sumur }}</td>
                                                <td>{{ $rw->jumlah_sumber_air_sungai }}</td>
                                                <td>{{ $rw->jumlah_sumber_air_dll }}</td>
                                                <td>{{ $rw->punya_jamban }}</td>
                                                <td>{{ $rw->jumlah_makanan_pokok_beras }}</td>
                                                <td>{{ $rw->jumlah_makanan_pokok_non_beras }}</td>
                                                <td>{{ $rw->jumlah_aktivitas_UP2K }}</td>
                                                <td>{{ $rw->jumlah_have_pemanfaatan }}</td>
                                                <td>{{ $rw->jumlah_have_industri }}</td>
                                                <td>{{ $rw->jumlah_have_kegiatan }}</td>
                                            </tr>
                                            @endforeach

                                            <tr>
                                                <td colspan="2"><strong>Jumlah</strong></td>
                                                <td>{{ $rws->sum('jumlah_rt') }}</td>
                                                <td>{{ $rws->sum('jumlah_dasa_wisma') }}</td>
                                                <td>{{ $rws->sum('jumlah_KRT') }}</td>
                                                <td>{{ $rws->sum('jumlah_KK') }}</td>
                                                <td>{{ $rws->sum('jumlah_laki_laki') }}</td>
                                                <td>{{ $rws->sum('jumlah_perempuan') }}</td>
                                                <td>{{ $rws->sum('jumlah_balita_laki') }}</td>
                                                <td>{{ $rws->sum('jumlah_balita_perempuan') }}</td>
                                                <td>{{ $rws->sum('jumlah_3_buta_laki') }}</td>
                                                <td>{{ $rws->sum('jumlah_3_buta_perempuan') }}</td>
                                                <td>{{ $rws->sum('jumlah_PUS') }}</td>
                                                <td>{{ $rws->sum('jumlah_WUS') }}</td>
                                                <td>{{ $rws->sum('jumlah_ibu_hamil') }}</td>
                                                <td>{{ $rws->sum('jumlah_ibu_menyusui') }}</td>
                                                <td>{{ $rws->sum('jumlah_lansia') }}</td>
                                                <td>{{ $rws->sum('jumlah_kebutuhan_khusus') }}</td>
                                                <td>{{ $rws->sum('jumlah_kriteria_rumah_sehat') }}</td>
                                                <td>{{ $rws->sum('jumlah_kriteria_rumah_tidak_sehat') }}</td>
                                                <td>{{ $rws->sum('jumlah_punya_tempat_sampah') }}</td>
                                                <td>{{ $rws->sum('jumlah_punya_saluran_air') }}</td>
                                                <td>{{ $rws->sum('jumlah_tempel_stiker') }}</td>
                                                <td>{{ $rws->sum('jumlah_sumber_air_pdam') }}</td>
                                                <td>{{ $rws->sum('jumlah_sumber_air_sumur') }}</td>
                                                <td>{{ $rws->sum('jumlah_sumber_air_sungai') }}</td>
                                                <td>{{ $rws->sum('jumlah_sumber_air_dll') }}</td>
                                                <td>{{ $rws->sum('punya_jamban') }}</td>
                                                <td>{{ $rws->sum('jumlah_makanan_pokok_beras') }}</td>
                                                <td>{{ $rws->sum('jumlah_makanan_pokok_non_beras') }}</td>
                                                <td>{{ $rws->sum('jumlah_aktivitas_UP2K') }}</td>
                                                <td>{{ $rws->sum('jumlah_have_pemanfaatan') }}</td>
                                                <td>{{ $rws->sum('jumlah_have_industri') }}</td>
                                                <td>{{ $rws->sum('jumlah_have_kegiatan') }}</td>
                                            </tr>
                                        </tbody>

                                </table>

                            </div>
                            <a href="{{ url('export_rekap_dusun').'?'.http_build_query(compact('dusun', 'periode')) }}" target="_blank" class="btn btn-success" type="button" role="button">
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
