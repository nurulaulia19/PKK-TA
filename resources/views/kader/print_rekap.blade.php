
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Print Data Rekap Data Warga | Kader Dasawisma PKK Kab. Indramayu</title>
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
<body onload="window.print();">
<div class="wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h6><strong><center>
                REKAPITULASI DATA WARGA KELUARGA</strong></h6>
            </center>

            <!-- Main content -->
            <div class="invoice p-3 mb-3">

              <!-- Table row -->
              <div class="row">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">

                    <thead>
                        <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">No.Registrasi</th>
                        <th rowspan="2">Nama Anggota Keluarga</th>
                        <th rowspan="2">Status Dalam Keluarga</th>
                        <th rowspan="2">Status Dalam Perkawinan</th>
                        <th colspan="2">Jenis Kelamin</th>
                        <th rowspan="2">Tgl Lahir/Umur</th>
                        <th rowspan="2">Pendidikan</th>
                        <th rowspan="2">Pekerjaan</th>
                    </tr>
                    <tr>
                        <th>L</th>
                        <th>P</th>
                    </tr>
                    </thead>

                    <tbody>

                        <?php $no=1;?>

                        @foreach ($warga as $c)

                    <tr>
                        <td style="vertical-align: middle;">{{ $no }}</td>
                        <td style="vertical-align: middle;">{{ $c->no_registrasi }}</td>
                        <td style="vertical-align: middle;">{{ucfirst($c->nama)}}</td>
                        @if ($c->status_keluarga=='kepala keluarga')
                        <td style="vertical-align: middle;">Kepala Keluarga</td>
                            @else
                        <td style="vertical-align: middle;">{{ucfirst($c->status_keluarga)}} ({{ucfirst($c->status)}})</td>
                        @endif
                        <td style="vertical-align: middle;">{{ucfirst($c->status_perkawinan)}}</td>
                        <td style="vertical-align: middle;">{{ucfirst($c->jenis_kelamin == 'laki-laki' ? 'laki-laki' :'')}}</td>
                        <td style="vertical-align: middle;">{{ucfirst($c->jenis_kelamin == 'perempuan' ? 'perempuan' :'')}}</td>
                        <td style="vertical-align: middle;">{{ \Carbon\Carbon::parse($c->tgl_lahir)->isoFormat('D MMMM Y') }}/{{ ucfirst($c->umur) }} Tahun</td>
                        <td style="vertical-align: middle;">{{ucfirst($c->pendidikan)}}</td>
                        <td style="vertical-align: middle;">{{ucfirst($c->pekerjaan)}}</td>
                    </tr>
                    <?php $no++ ;?>
                    @endforeach

                    </tbody>
                  </table>
                  Tanggal Cetak : {{ Carbon\Carbon::now()->isoFormat('D MMMM Y') }}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->


            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
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
