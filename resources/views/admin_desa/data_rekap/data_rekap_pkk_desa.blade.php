    @extends('admin_desa.layout')

    @section('title', 'Catatan Data Dan Kegiatan Warga Kelompok PKK Desa/Kelurahan| Admin Desa/Kelurahan PKK Kab. Indramayu')

    @section('bread', 'Catatan Data Dan Kegiatan Warga Kelompok PKK Desa/Kelurahan')
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
                                    <h6><strong>KELOMPOK PKK DESA/KELURAHAN</strong></h6>
                                    <h6>TAHUN : {{$periode}}</h6>

                                </center>

                                    <h6>TP PKK Desa/Kel : {{ucfirst ($desa->nama_desa) }}</h6>
                                    <h6>Kecamatan : {{ucfirst ($kecamatan->nama_kecamatan) }}</h6>
                                    <h6>Kabupaten : Indramayu</h6>
                                    <h6>Provinsi : Jawa Barat</h6>

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered data" id="add-row" width="6000px">
                                        <thead>
                                            <tr>
                                            <th rowspan="2" style="text-align: center;">No</th>
                                            <th rowspan="2" style="text-align: center;">Nama Dusun/Ling</th>
                                            <th rowspan="2" style="text-align: center;">Jml. RW</th>
                                            <th rowspan="2" style="text-align: center;">Jml. RT</th>
                                            <th rowspan="2" style="text-align: center;">Jml. Dasa Wisma</th>
                                            <th rowspan="2" style="text-align: center;">Jml. KRT</th>
                                            <th rowspan="2" style="text-align: center;">Jml. KK</th>
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
                                            @foreach ($dusuns as $dusun)
                                            <tr>
                                                <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                                <td style="vertical-align: middle;">{{ $dusun->dusun }}</td>
                                                <td style="vertical-align: middle;">{{ $dusun->jumlah_rw }}</td>
                                                <td style="vertical-align: middle;">{{ $dusun->jumlah_rt }}</td>
                                                <td style="vertical-align: middle;">{{ $dusun->jumlah_dasa_wisma }}</td>
                                                <td style="vertical-align: middle;">{{ $dusun->jumlah_KRT }}</td>
                                                <td style="vertical-align: middle;">{{ $dusun->jumlah_KK }}</td>
                                                <td>{{ $dusun->jumlah_laki_laki }}</td>
                                                <td>{{ $dusun->jumlah_perempuan }}</td>
                                                <td>{{ $dusun->jumlah_balita_laki }}</td>
                                                <td>{{ $dusun->jumlah_balita_perempuan }}</td>
                                                <td>{{ $dusun->jumlah_3_buta }}</td>
                                                <td>{{ $dusun->jumlah_PUS }}</td>
                                                <td>{{ $dusun->jumlah_WUS }}</td>
                                                <td>{{ $dusun->jumlah_ibu_hamil }}</td>
                                                <td>{{ $dusun->jumlah_ibu_menyusui }}</td>
                                                <td>{{ $dusun->jumlah_lansia }}</td>
                                                <td>{{ $dusun->jumlah_kebutuhan_khusus }}</td>
                                                <td>{{ $dusun->jumlah_kriteria_rumah_sehat }}</td>
                                                <td>{{ $dusun->jumlah_kriteria_rumah_tidak_sehat }}</td>
                                                <td>{{ $dusun->jumlah_punya_tempat_sampah }}</td>
                                                <td>{{ $dusun->jumlah_punya_saluran_air }}</td>
                                                <td>{{ $dusun->punya_jamban }}</td>
                                                <td>{{ $dusun->jumlah_tempel_stiker }}</td>
                                                <td>{{ $dusun->jumlah_sumber_air_pdam }}</td>
                                                <td>{{ $dusun->jumlah_sumber_air_sumur }}</td>
                                                <td>{{ $dusun->jumlah_sumber_air_dll }}</td>
                                                <td>{{ $dusun->jumlah_makanan_pokok_beras }}</td>
                                                <td>{{ $dusun->jumlah_makanan_pokok_non_beras }}</td>
                                                <td>{{ $dusun->jumlah_aktivitas_UP2K }}</td>
                                                <td>{{ $dusun->jumlah_have_pemanfaatan }}</td>
                                                <td>{{ $dusun->jumlah_have_industri }}</td>
                                                <td>{{ $dusun->jumlah_have_kegiatan }}</td>
                                            </tr>
                                            @endforeach

                                            <tr>
                                                <td><strong>Jumlah</strong></td>
                                                <td></td>
                                                <td>{{ $dusuns->sum('jumlah_rw') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_rt') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_dasa_wisma') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_KRT') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_KK') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_laki_laki') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_perempuan') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_balita_laki') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_balita_perempuan') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_3_buta') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_PUS') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_WUS') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_ibu_hamil') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_ibu_menyusui') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_lansia') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_kebutuhan_khusus') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_kriteria_rumah_sehat') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_kriteria_rumah_tidak_sehat') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_punya_tempat_sampah') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_punya_saluran_air') }}</td>
                                                <td>{{ $dusuns->sum('punya_jamban') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_tempel_stiker') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_sumber_air_pdam') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_sumber_air_sumur') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_sumber_air_dll') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_makanan_pokok_beras') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_makanan_pokok_non_beras') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_aktivitas_UP2K') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_have_pemanfaatan') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_have_industri') }}</td>
                                                <td>{{ $dusuns->sum('jumlah_have_kegiatan') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <a href="{{ url('export_rekap_desa').'?'.http_build_query(compact('periode')) }}" target="_blank" class="btn btn-success" type="button" role="button">
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
