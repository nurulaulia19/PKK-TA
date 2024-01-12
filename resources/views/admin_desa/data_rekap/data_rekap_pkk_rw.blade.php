@extends('admin_desa.layout')

@section('title', 'Rekapitulasi Catatan Data Dan Kegiatan Warga Kelompok PKK RW | Admin Desa/Kelurahan PKK Kab. Indramayu')

@section('bread', 'Rekapitulasi Catatan Data Dan Kegiatan Warga Kelompok PKK RW')
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
                                <h6><strong>KELOMPOK PKK RW</strong> </h6>

                                <h6>RW : {{$rw}}</h6>
                                <h6>Desa/Kel : {{ ucfirst($desa->nama_desa) }}</h6>
                                <h6>Tahun : {{$periode}}</h6>
                            </center>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered data" id="add-row" width="6000px">
                                    <thead>
                                        <tr>
                                        <th rowspan="3" style="text-align: center;">No</th>
                                        <th rowspan="3" style="text-align: center;">No.RT</th>
                                        <th rowspan="3" style="text-align: center;">Jml. Dasa Wisma</th>
                                        <th rowspan="3" style="text-align: center;">Jml. KRT</th>
                                        <th rowspan="3" style="text-align: center;">Jml. KK</th>
                                        <th colspan="12" style="text-align:center;">Jumlah Anggota Keluarga</th>
                                        <th colspan="5" style="text-align:center;">Jumlah Rumah</th>
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
                                        @foreach ($rts as $rt)
                                        <tr>
                                            <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                            <td style="vertical-align: middle;">{{ $rt->rt }}</td>
                                            <td style="vertical-align: middle;">{{ $rt->jumlah_dasa_wisma }}</td>
                                            <td style="vertical-align: middle;">{{ $rt->jumlah_KRT }}</td>
                                            <td style="vertical-align: middle;">{{ $rt->jumlah_KK }}</td>
                                            <td>{{ $rt->jumlah_laki_laki }}</td>
                                            <td>{{ $rt->jumlah_perempuan }}</td>
                                            <td>{{ $rt->jumlah_balita_laki }}</td>
                                            <td>{{ $rt->jumlah_balita_perempuan }}</td>
                                            <td>{{ $rt->jumlah_3_buta_laki }}</td>
                                            <td>{{ $rt->jumlah_3_buta_perempuan }}</td>
                                            <td>{{ $rt->jumlah_PUS }}</td>
                                            <td>{{ $rt->jumlah_WUS }}</td>
                                            <td>{{ $rt->jumlah_ibu_hamil }}</td>
                                            <td>{{ $rt->jumlah_ibu_menyusui }}</td>
                                            <td>{{ $rt->jumlah_lansia }}</td>
                                            <td>{{ $rt->jumlah_kebutuhan_khusus }}</td>
                                            <td>{{ $rt->jumlah_kriteria_rumah_sehat }}</td>
                                            <td>{{ $rt->jumlah_kriteria_rumah_tidak_sehat }}</td>
                                            <td>{{ $rt->jumlah_punya_tempat_sampah }}</td>
                                            <td>{{ $rt->jumlah_punya_saluran_air }}</td>
                                            <td>{{ $rt->jumlah_tempel_stiker }}</td>
                                            <td>{{ $rt->jumlah_sumber_air_pdam }}</td>
                                            <td>{{ $rt->jumlah_sumber_air_sumur }}</td>
                                            <td>{{ $rt->jumlah_sumber_air_sungai }}</td>
                                            <td>{{ $rt->jumlah_sumber_air_dll }}</td>
                                            <td>{{ $rt->punya_jamban }}</td>
                                            <td>{{ $rt->jumlah_makanan_pokok_beras }}</td>
                                            <td>{{ $rt->jumlah_makanan_pokok_non_beras }}</td>
                                            <td>{{ $rt->jumlah_aktivitas_UP2K }}</td>
                                            <td>{{ $rt->jumlah_have_pemanfaatan }}</td>
                                            <td>{{ $rt->jumlah_have_industri }}</td>
                                            <td>{{ $rt->jumlah_have_kegiatan }}</td>
                                        </tr>
                                        @endforeach

                                        <tr>
                                            <td colspan="2"><strong>Jumlah</strong> </td>
                                            <td>{{ $rts->sum('jumlah_dasa_wisma') }}</td>
                                            <td>{{ $rts->sum('jumlah_KRT') }}</td>
                                            <td>{{ $rts->sum('jumlah_KK') }}</td>
                                            <td>{{ $rts->sum('jumlah_laki_laki') }}</td>
                                            <td>{{ $rts->sum('jumlah_perempuan') }}</td>
                                            <td>{{ $rts->sum('jumlah_balita_laki') }}</td>
                                            <td>{{ $rts->sum('jumlah_balita_perempuan') }}</td>
                                            <td>{{ $rts->sum('jumlah_3_buta_laki') }}</td>
                                            <td>{{ $rts->sum('jumlah_3_buta_perempuan') }}</td>
                                            <td>{{ $rts->sum('jumlah_PUS') }}</td>
                                            <td>{{ $rts->sum('jumlah_WUS') }}</td>
                                            <td>{{ $rts->sum('jumlah_ibu_hamil') }}</td>
                                            <td>{{ $rts->sum('jumlah_ibu_menyusui') }}</td>
                                            <td>{{ $rts->sum('jumlah_lansia') }}</td>
                                            <td>{{ $rts->sum('jumlah_kebutuhan_khusus') }}</td>
                                            <td>{{ $rts->sum('jumlah_kriteria_rumah_sehat') }}</td>
                                            <td>{{ $rts->sum('jumlah_kriteria_rumah_tidak_sehat') }}</td>
                                            <td>{{ $rts->sum('jumlah_punya_tempat_sampah') }}</td>
                                            <td>{{ $rts->sum('jumlah_punya_saluran_air') }}</td>
                                            <td>{{ $rts->sum('jumlah_tempel_stiker') }}</td>
                                            <td>{{ $rts->sum('jumlah_sumber_air_pdam') }}</td>
                                            <td>{{ $rts->sum('jumlah_sumber_air_sumur') }}</td>
                                            <td>{{ $rts->sum('jumlah_sumber_air_sungai') }}</td>
                                            <td>{{ $rts->sum('jumlah_sumber_air_dll') }}</td>
                                            <td>{{ $rts->sum('punya_jamban') }}</td>
                                            <td>{{ $rts->sum('jumlah_makanan_pokok_beras') }}</td>
                                            <td>{{ $rts->sum('jumlah_makanan_pokok_non_beras') }}</td>
                                            <td>{{ $rts->sum('jumlah_aktivitas_UP2K') }}</td>
                                            <td>{{ $rts->sum('jumlah_have_pemanfaatan') }}</td>
                                            <td>{{ $rts->sum('jumlah_have_industri') }}</td>
                                            <td>{{ $rts->sum('jumlah_have_kegiatan') }}</td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            <a href="{{ url('export_rekap_rw').'?'.http_build_query(compact('rw', 'periode')) }}" target="_blank" class="btn btn-success" type="button" role="button">
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

<script>
    $('.delete').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
            title: `Apakah anda yakin ingin menghapus data ini ?`,
              text: "Jika anda menghapusnya maka datanya akan di hapus secara permanen",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>

@endpush
