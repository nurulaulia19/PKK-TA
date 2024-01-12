@extends('admin_desa.layout')

@section('title', 'Rekapitulasi Catatan Data Dan Kegiatan Warga Kelompok Dasa Wisma | Admin Desa/Kelurahan PKK Kab. Indramayu')

@section('bread', 'Rekapitulasi Catatan Data Dan Kegiatan Warga Kelompok Dasa Wisma')
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
                                <h6><strong>KELOMPOK DASA WISMA</strong> </h6>
                                <h6>Dasa Wisma : {{ ucfirst($dasa_wisma->nama_dasawisma) }}</h6>
                                <h6>RT : {{ $rt }}</h6>
                                <h6>RW : {{ $rw }}</h6>
                                <h6>Desa/Kel : {{ ucfirst($desa->nama_desa) }}</h6>
                                <h6>Tahun : {{ $periode }}</h6>
                            </center>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered data" id="add-row" width="6000px">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" style="text-align: center;">No</th>
                                            <th rowspan="2" style="text-align: center;">Nama Kepala Rumah Tangga</th>
                                            <th rowspan="2" style="text-align: center;">Jml. KK</th>
                                            <th colspan="11" style="text-align:center;">Jumlah Anggota Keluarga</th>
                                            <th colspan="6" style="text-align:center;">Kriteria Rumah</th>
                                            <th colspan="3" style="text-align:center;">Sumber Air Keluarga</th>
                                            <th colspan="2" style="text-align:center;">Makanan Pokok</th>
                                            <th colspan="4" style="text-align:center;">Warga Mengikuti Kegiatan</th>
                                            {{-- <th rowspan="2" style="text-align: center;">Ket</th> --}}
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
                                            <th>Sehat Layak Huni</th>
                                            <th>Tidak Sehat Layak Huni</th>
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
                                            <th>Kerja Bakti</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($catatan_keluarga as $keluarga)
                                        <tr>
                                            <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                            <td style="vertical-align: middle;">{{ $keluarga->nama_kepala_rumah_tangga }}</td>
                                            <td>{{ $keluarga->jumlah_KK }}</td>
                                            <td>{{ $keluarga->jumlah_laki }}</td>
                                            <td>{{ $keluarga->jumlah_perempuan }}</td>
                                            <td>{{ $keluarga->jumlah_balita_laki }}</td>
                                            <td>{{ $keluarga->jumlah_balita_perempuan }}</td>
                                            <td>{{ $keluarga->jumlah_3_buta }}</td>
                                            <td>{{ $keluarga->jumlah_PUS }}</td>
                                            <td>{{ $keluarga->jumlah_WUS }}</td>
                                            <td>{{ $keluarga->jumlah_ibu_hamil }}</td>
                                            <td>{{ $keluarga->jumlah_ibu_menyusui }}</td>
                                            <td>{{ $keluarga->jumlah_lansia }}</td>
                                            <td>{{ $keluarga->jumlah_kebutuhan_khusus }}</td>
                                                    <td>
                                                        @if ($keluarga->kriteria_rumah == '1')
                                                            <i class="fas fa-check"></i>
                                                        @else
                                                                0
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($keluarga->kriteria_rumah == '0')
                                                            <i class="fas fa-check"></i>
                                                        @else
                                                                0
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($keluarga->punya_tempat_sampah == '1')
                                                            <i class="fas fa-check"></i>
                                                        @else
                                                            0
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($keluarga->punya_saluran_air == '1')
                                                            <i class="fas fa-check"></i>
                                                        @else
                                                            0
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($keluarga->punya_jamban == '1')
                                                            <i class="fas fa-check"></i>
                                                        @else
                                                            0
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($keluarga->tempel_stiker == '1')
                                                            <i class="fas fa-check"></i>
                                                        @else
                                                            0
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($keluarga->sumber_air == '1')
                                                            <i class="fas fa-check"></i>
                                                        @else
                                                        0
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($keluarga->sumber_air == '2')
                                                            <i class="fas fa-check"></i>
                                                        @else
                                                            0
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($keluarga->sumber_air == '4')
                                                            <i class="fas fa-check"></i>
                                                        @else
                                                            0
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if ($keluarga->makanan_pokok == '1')
                                                            <i class="fas fa-check"></i>
                                                        @else
                                                            0
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if ($keluarga->makanan_pokok == '0')
                                                            <i class="fas fa-check"></i>
                                                        @else
                                                            0
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if ($keluarga->aktivitas_UP2K == '1')
                                                            <i class="fas fa-check"></i>
                                                        @else
                                                            0
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if ($keluarga->pemanfaatan->count() > 0)
                                                            <i class="fas fa-check"></i>
                                                        @else
                                                            0
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($keluarga->industri->count() > 0)
                                                            <i class="fas fa-check"></i>
                                                        @else
                                                            0
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($keluarga->getKepalaKeluargaKegiatans()->count() > 0)
                                                            <i class="fas fa-check"></i>
                                                        @else
                                                            0
                                                        @endif
                                                    </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td><strong>Jumlah</strong> </td>
                                            <td></td>
                                            <td>{{ $catatan_keluarga->sum('jumlah_KK') }}</td>
                                            <td>{{ $catatan_keluarga->sum('jumlah_laki') }}</td>
                                            <td>{{ $catatan_keluarga->sum('jumlah_perempuan') }}</td>
                                            <td>{{ $catatan_keluarga->sum('jumlah_balita_laki') }}</td>
                                            <td>{{ $catatan_keluarga->sum('jumlah_balita_perempuan') }}</td>
                                            <td>{{ $catatan_keluarga->sum('jumlah_3_buta') }}</td>
                                            <td>{{ $catatan_keluarga->sum('jumlah_PUS') }}</td>
                                            <td>{{ $catatan_keluarga->sum('jumlah_WUS') }}</td>
                                            <td>{{ $catatan_keluarga->sum('jumlah_ibu_hamil') }}</td>
                                            <td>{{ $catatan_keluarga->sum('jumlah_ibu_menyusui') }}</td>
                                            <td>{{ $catatan_keluarga->sum('jumlah_lansia') }}</td>
                                            <td>{{ $catatan_keluarga->sum('jumlah_kebutuhan_khusus') }}</td>
                                            <td>{{ $catatan_keluarga->sum('kriteria_rumah') }}</td>
                                            <td>{{ $catatan_keluarga->count() - $catatan_keluarga->sum('kriteria_rumah') }}</td>
                                            <td>{{ $catatan_keluarga->sum('punya_tempat_sampah') }}</td>
                                            <td>{{ $catatan_keluarga->sum('punya_saluran_air') }}</td>
                                            <td>{{ $catatan_keluarga->sum('punya_jamban') }}</td>
                                            <td>{{ $catatan_keluarga->sum('tempel_stiker') }}</td>
                                            <td>{{ $catatan_keluarga->where('sumber_air', 1)->count() }}</td>
                                            <td>{{ $catatan_keluarga->where('sumber_air', 2)->count() }}</td>
                                            <td>{{ $catatan_keluarga->where('sumber_air', 4)->count() }}</td>
                                            <td>{{ $catatan_keluarga->where('makanan_pokok', 1)->count() }}</td>
                                            <td>{{ $catatan_keluarga->where('makanan_pokok', 0)->count() }}</td>
                                            <td>{{ $catatan_keluarga->sum('aktivitas_UP2K') }}</td>
                                            <td>{{ $catatan_keluarga->sum('have_pemanfaatan') }}</td>
                                            <td>{{ $catatan_keluarga->sum('have_industri') }}</td>
                                            <td>{{ $catatan_keluarga->sum('have_kegiatan') }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <a href="{{ url('export_rekap_dasawisma').'?'.http_build_query(compact('nama_dasawisma', 'rt', 'rw', 'periode'))  }}" target="_blank" class="btn btn-success" type="button" role="button">
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

  {{-- <script src="{{url('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{url('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script> --}}
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
