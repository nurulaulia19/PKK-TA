@extends('admin_kec.layout')

@section('title', 'Data POKJA IV TP PKK Kecamatan | Admin Kecamatan PKK Kab. Indramayu')

@section('bread', 'Data POKJA IV TP PKK Kecamatan')
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
                                    <h6>DATA KEGIATAN PKK POKJA IV</h6>
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
                                                <th colspan="6"><center>JUMLAH KADER</center></th>
                                                <th colspan="5"><center>KESEHATAN POSYANDU</center></th>
                                                <th colspan="7"><center>KELESTARIAN LINGKUNGAN HIDUP</center></th>
                                                <th colspan="5">PERENCANAAN SEHAT</th>
                                                <th rowspan="3">KET</th>
                                        </tr>
                                        <tr>
                                            <th rowspan="2">POSYANDU</th>
                                            <th rowspan="2">GIZI</th>
                                            <th rowspan="2">KESLING</th>
                                            <th rowspan="2">PENYULUHAN NARKOBA</th>
                                            <th rowspan="2">PHBS</th>
                                            <th rowspan="2">KB</th>
                                            <th rowspan="2">JUMLAH</th>
                                            <th rowspan="2">TERINTEGRASI</th>
                                            <th colspan="3"><center>LANSIA</center></th>
                                            <th colspan="3">JUMLAH RUMAH YANG MEMILIKI</th>
                                            <th rowspan="2">JML. MCK</th>
                                            <th colspan="3">JML. KRT YANG MENGGUNAKAN AIR</th>
                                            <th rowspan="2">JML. PUS</th>
                                            <th rowspan="2">JML. WUS</th>
                                            <th colspan="2">JML. AKSEPTOR KB</th>
                                            <th rowspan="2">JML. KK YANG MEMILIKI TABUNGAN</th>
                                        </tr>
                                        <tr>
                                            <th>JML. KLP</th>
                                            <th>JML. ANGGOTA</th>
                                            <th>JML. YANG MEMILIKI KARTU BEROBAT GRATIS</th>
                                            <th>JAMBAN</th>
                                            <th>SPAL</th>
                                            <th>TMP. PEMBUANGAN SAMPAH</th>
                                            <th>PDAM</th>
                                            <th>SUMUR</th>
                                            <th>LAIN-LAIN</th>
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
