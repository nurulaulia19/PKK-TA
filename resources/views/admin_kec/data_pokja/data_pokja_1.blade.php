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
                            <center>
                                <strong>
                                    <h6>DATA KEGIATAN PKK POKJA I</h6>
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
                                                <th colspan="8">PENGHAYATAN DAN PENGAMALAN PANCASILA</th>
                                                <th colspan="5">GOTONG ROYONG</th>
                                                <th rowspan="3">KET</th>
                                        </tr>
                                        <tr>
                                            <th rowspan="2">PKBN</th>
                                            <th rowspan="2">PKDRT</th>
                                            <th rowspan="2">POLA ASUH</th>
                                            <th colspan="2">PKBN</th>
                                            <th colspan="2">PKDRT</th>
                                            <th colspan="2">POLA ASUH</th>
                                            <th colspan="2">LANSIA</th>
                                            <th colspan="5">JUMLAH KELOMPOK</th>
                                        </tr>
                                        <tr>
                                            <th>JML. KEL. SIMULASI</th>
                                            <th>JML. ANGGOTA</th>
                                            <th>JML. KEL. SIMULASI</th>
                                            <th>JML. ANGGOTA</th>
                                            <th>JML. KLP</th>
                                            <th>JML. ANGGOTA</th>
                                            <th>JML. KLP</th>
                                            <th>JML. ANGGOTA</th>
                                            <th>KERJA BAKTI</th>
                                            <th>RUKUN KEMATIAN</th>
                                            <th>KEAGAMAAN</th>
                                            <th>JIMPITAN</th>
                                            <th>ARISAN</th>
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
