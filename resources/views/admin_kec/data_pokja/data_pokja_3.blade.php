@extends('admin_kec.layout')

@section('title', 'Data POKJA III TP PKK Kecamatan | Admin Kecamatan PKK Kab. Indramayu')

@section('bread', 'Data POKJA III TP PKK Kecamatan')
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
                                <strong>
                                    <h6>DATA KEGIATAN PKK POKJA III</h6>
                                    <h6>TP PKK Kecamatan</h6>
                                    <h6>TAHUN</h6>
                                </strong>
                            </center>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered data" id="add-row">
                                    <thead>
                                        <tr>
                                                <th rowspan="3">No</th>
                                                <th rowspan="3">NAMA WILAYAH</th>
                                                <th colspan="3"><center>JUMLAH KADER</center></th>
                                                <th colspan="8"><center>PANGAN</center></th>
                                                <th colspan="3">JUMLAH INDUSTRI RUMAH TANGGA </th>
                                                <th colspan="2">JUMLAH RUMAH</th>
                                                <th rowspan="3">KET</th>
                                        </tr>
                                        <tr>
                                            <th rowspan="2">PANGAN</th>
                                            <th rowspan="2">SANDANG</th>
                                            <th rowspan="2">TATA LAKSANA </th>
                                            <th colspan="2">MAKANAN POKOK</th>
                                            <th colspan="6"><center>PEMANFAATAN DAN PEKARANGAN<center></th>
                                            <th rowspan="2">PANGAN</th>
                                            <th rowspan="2">SANDANG</th>
                                            <th rowspan="2">JASA</th>
                                            <th rowspan="2">SEHAT</th>
                                            <th rowspan="2">TIDAK SEHAT</th>
                                        </tr>
                                        <tr>
                                            <th>BERAS</th>
                                            <th>NON BERAS</th>
                                            <th>PETERNAKAN</th>
                                            <th>PERIKANAN</th>
                                            <th>WARUNG HIDUP</th>
                                            <th>LINGKUNG HIDUP</th>
                                            <th>TOGA</th>
                                            <th>TANAMAN KERAS </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $no=1;?>

                                        {{-- @foreach ($dasa_wisma as $c)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $no }}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->dasa_wisma)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->rt)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->rw)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->periode)}}</td>

                                        <td class="text-center">
                                                <a class="btn btn-success btn-sm" href="{{ url('rekap_kelompok_dasa_wisma') }}">Rekap</a> --}}
                                                {{-- <a class="btn btn-primary btn-sm" href="{{ url('catatan_keluarga/'.$c->id.'/catatan_keluarga') }}">Catatan Keluarga</a> --}}

                                        {{-- </td>

                                    </tr> --}}
                                    <?php $no++ ;?>

                                    {{-- @endforeach --}}
                                    </tbody>

                                </table>

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
