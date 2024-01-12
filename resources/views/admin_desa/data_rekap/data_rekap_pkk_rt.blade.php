@extends('admin_desa.layout')

@section('title', 'Rekapitulasi Catatan Data Dan Kegiatan Warga Kelompok PKK RT | Admin Desa/Kelurahan PKK Kab. Indramayu')

@section('bread', 'Rekapitulasi Catatan Data Dan Kegiatan Warga Kelompok PKK RT')
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
                                <h6><strong>KELOMPOK PKK RT</strong> </h6>
                                <h6>RT : {{ $rt }}</h6>
                                <h6>RW : {{ $rw }}</h6>
                                <h6>Desa/Kel : {{ ucfirst($desa->nama_desa) }}</h6>
                                <h6>Tahun : {{ $periode }}</h6>
                            </center>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered data" id="add-row" width="6000px">
                                    <thead>
                                        <tr>
                                        <th rowspan="3" style="text-align: center;">No</th>
                                        <th rowspan="3" style="text-align: center;">Nama Dasa Wisma</th>
                                        <th rowspan="3" style="text-align: center;">Jml. KRT</th>
                                        <th rowspan="3" style="text-align: center;">Jml. KK</th>
                                        <th colspan="11" style="text-align:center;">Jumlah Anggota Keluarga</th>
                                        <th colspan="6" style="text-align:center;">Jumlah Rumah</th>
                                        <th colspan="3" style="text-align:center;">Sumber Air Keluarga</th>
                                        <th colspan="2" style="text-align:center;">Makanan Pokok</th>
                                        <th colspan="6" style="text-align:center;">Warga Mengikuti Kegiatan</th>
                                        {{-- <th rowspan="3" style="text-align: center;">Ket</th> --}}
                                    </tr>
                                    <tr>
                                        <th>Total L</th>
                                        <th>Total P</th>
                                        <th>Balita L</th>
                                        <th>Balita P</th>
                                        <th>3 Buta</th>
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
                                        <th>Memiliki Jamban Keluarga</th>
                                        <th>Menempel Stiker P4K</th>
                                        <th>PDAM</th>
                                        <th>Sumur</th>
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
                                        @foreach ($dasaWismas as $dasaWisma)
                                        <tr>
                                            <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                            <td style="vertical-align: middle;">{{ $dasaWisma->nama }}</td>
                                            <td style="vertical-align: middle;">{{ $dasaWisma->jumlah_KRT }}</td>
                                            <td style="vertical-align: middle;">{{ $dasaWisma->jumlah_KK }}</td>
                                            <td>{{ $dasaWisma->jumlah_laki_laki }}</td>
                                            <td>{{ $dasaWisma->jumlah_perempuan }}</td>
                                            <td>{{ $dasaWisma->jumlah_balita_laki }}</td>
                                            <td>{{ $dasaWisma->jumlah_balita_perempuan }}</td>
                                            <td>{{ $dasaWisma->jumlah_3_buta }}</td>
                                            <td>{{ $dasaWisma->jumlah_PUS }}</td>
                                            <td>{{ $dasaWisma->jumlah_WUS }}</td>
                                            <td>{{ $dasaWisma->jumlah_ibu_hamil }}</td>
                                            <td>{{ $dasaWisma->jumlah_ibu_menyusui }}</td>
                                            <td>{{ $dasaWisma->jumlah_lansia }}</td>
                                            <td>{{ $dasaWisma->jumlah_kebutuhan_khusus }}</td>
                                            <td>{{ $dasaWisma->jumlah_kriteria_rumah_sehat }}</td>
                                            <td>{{ $dasaWisma->jumlah_kriteria_rumah_tidak_sehat }}</td>
                                            <td>{{ $dasaWisma->jumlah_punya_tempat_sampah }}</td>
                                            <td>{{ $dasaWisma->jumlah_punya_saluran_air }}</td>
                                            <td>{{ $dasaWisma->jumlah_punya_jamban }}</td>
                                            <td>{{ $dasaWisma->jumlah_tempel_stiker }}</td>
                                            <td>{{ $dasaWisma->jumlah_sumber_air_pdam }}</td>
                                            <td>{{ $dasaWisma->jumlah_sumber_air_sumur }}</td>
                                            <td>{{ $dasaWisma->jumlah_sumber_air_dll }}</td>
                                            <td>{{ $dasaWisma->jumlah_makanan_pokok_beras }}</td>
                                            <td>{{ $dasaWisma->jumlah_makanan_pokok_non_beras }}</td>
                                            <td>{{ $dasaWisma->jumlah_aktivitas_UP2K }}</td>
                                            <td>{{ $dasaWisma->jumlah_have_pemanfaatan }}</td>
                                            <td>{{ $dasaWisma->jumlah_have_industri }}</td>
                                            <td>{{ $dasaWisma->jumlah_have_kegiatan }}</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2"><strong>Jumlah</strong> </td>
                                            <td>{{ $dasaWismas->sum('jumlah_KRT') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_KK') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_laki_laki') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_perempuan') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_balita_laki') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_balita_perempuan') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_3_buta') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_PUS') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_WUS') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_ibu_hamil') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_ibu_menyusui') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_lansia') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_kebutuhan_khusus') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_kriteria_rumah_sehat') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_kriteria_rumah_tidak_sehat') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_punya_tempat_sampah') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_punya_saluran_air') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_punya_jamban') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_tempel_stiker') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_sumber_air_pdam') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_sumber_air_sumur') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_sumber_air_dll') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_makanan_pokok_beras') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_makanan_pokok_non_beras') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_aktivitas_UP2K') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_have_pemanfaatan') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_have_industri') }}</td>
                                            <td>{{ $dasaWismas->sum('jumlah_have_kegiatan') }}</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>
                            <a href="{{ url('export_rekap_rt').'?'.http_build_query(compact('rt', 'rw', 'periode')) }}" target="_blank" class="btn btn-success" type="button" role="button">
                                <i class="fas fa-print"></i> Cetak ke Excel </a><br>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<!-- page script -->
  @endsection

  @push('script-addon')

<script>
$(document).ready( function () {
    $('.data').DataTable();
} );
</script>



@endpush
