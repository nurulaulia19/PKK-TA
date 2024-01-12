@extends('admin_kec.layout')

@section('title', 'Data POKJA I TP PKK Kecamatan | Admin Kecamatan PKK Kab. Indramayu')

@section('bread', 'Data POKJA I TP PKK Kecamatan')
@section('container')

    <!-- Main content -->
    <div class="main-content">
    <section class="section">

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <strong>
                                <h6>KECAMATAN</h6>
                                <h6>KAB/KOTA</h6>
                                <h6>PROVINSI</h6>
                                <h6>TAHUN</h6>
                            </strong>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered data" id="add-row">
                                    <thead>
                                        <tr>
                                                <th rowspan="3">No</th>
                                                <th rowspan="3">NAMA DESA/KELURAHAN</th>
                                                <th colspan="3"><center>JUMLAH KELOMPOK</center></th>
                                                <th colspan="2"><center>JUMLAH</center></th>
                                                <th colspan="2">JUMLAH JIWA</th>
                                                <th colspan="6"><center>JUMLAH KADER</center></th>
                                                <th colspan="4">JUMLAH TENAGA SEKRETARIAT</th>
                                                <th rowspan="3">KET</th>
                                        </tr>
                                        <tr>
                                            <th rowspan="2">PKK RW</th>
                                            <th rowspan="2">PKK RT</th>
                                            <th rowspan="2">DASA WISMA</th>
                                            <th rowspan="2">KRT</th>
                                            <th rowspan="2">KK</th>
                                            <th rowspan="2">L</th>
                                            <th rowspan="2">P</th>
                                            <th colspan="2">ANGGOTA TP PKK</th>
                                            <th colspan="2">UMUM</th>
                                            <th colspan="2">KHUSUS</th>
                                            <th colspan="2">HONORER</th>
                                            <th colspan="2">BANTUAN</th>

                                        </tr>
                                        <tr>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
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
