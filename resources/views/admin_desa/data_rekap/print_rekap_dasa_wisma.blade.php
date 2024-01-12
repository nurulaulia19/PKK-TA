
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Print PDF Data Rekap Kelompok Dasawisma | Admin Desa/Kelurahan PKK Kab. Indramayu</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('admin/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h6><strong>REKAPITULASI</strong></h6>
                            <h6><strong>CATATAN DATA DAN KEGIATAN WARGA</strong> </h6>
                            <h6><strong>KELOMPOK DASA WISMA</strong> </h6>
                            <h6>Dasa Wisma : {{ ucfirst($dasa_wisma) }}</h6>
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
                                        <td>{{ $keluarga->laki_laki }}</td>
                                        <td>{{ $keluarga->perempuan }}</td>
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
                                        <td colspan="2"><strong>Jumlah</strong> </td>
                                        {{-- <td style="vertical-align: middle;">{{ $catatan_keluarga->count('nama_kepala_rumah_tangga') }}</td> --}}
                                        <td>{{ $catatan_keluarga->sum('jumlah_KK') }}</td>
                                        <td>{{ $catatan_keluarga->sum('laki_laki') }}</td>
                                        <td>{{ $catatan_keluarga->sum('perempuan') }}</td>
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
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>




<!-- jQuery -->
<script src="{{ url('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('admin/dist/js/demo.js') }}"></script>
</body>
</html>
