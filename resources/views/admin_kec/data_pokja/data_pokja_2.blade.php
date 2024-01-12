@extends('admin_kec.layout')

@section('title', 'Data POKJA II TP PKK Kecamatan | Admin Kecamatan PKK Kab. Indramayu')

@section('bread', 'Data POKJA II TP PKK Kecamatan')
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
                                    <h6>DATA KEGIATAN PKK POKJA II</h6>
                                    <h6>TP PKK Kecamatan</h6>
                                    <h6>TAHUN</h6>
                                </strong>
                            </center>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered data" id="add-row">
                                    <thead>
                                        <tr>
                                                <th rowspan="4">No</th>
                                                <th rowspan="4">NAMA WILAYAH</th>
                                                <th colspan="18"><center>PENDIDIKAN DAN KETERAMPILAN</center></th>
                                                <th colspan="15"><center>PENGEMBANGAN KEHIDUPAN BERKOPERASI </center></th>
                                                <th rowspan="4">KET</th>

                                        </tr>
                                        <tr>
                                            <th rowspan="3">JML.  WARGA YANG MASIIH 3 BUTA</th>
                                            <th colspan="9"><center>JUMLAH KELOMPOK BELAJAR</center></th>
                                            <th rowspan="3">JML. TAMAN BACAAN/PERPUSTAKAAN</th>
                                            <th colspan="4"><center>BKB</center></th>
                                            <th colspan="5"><center>KADER KHUSUS</center></th>
                                            <th colspan="3">KADER UMUM YG SDH DILATIH</th>
                                            <th colspan="10">PARA KOPERASI/USAHA BERSAMA/UP2K</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">PAKET A</th>
                                            <th colspan="2">PAKET B</th>
                                            <th colspan="2">PAKET C</th>
                                            <th colspan="2">KF</th>
                                            <th rowspan="2">PAUD/SEJENIS</th>
                                            <th rowspan="2">JML. KELOMPOK</th>
                                            <th rowspan="2">JML. IBU PESERTA</th>
                                            <th rowspan="2">JML. APE(SET)</th>
                                            <th rowspan="2">JML. KEL SIMULASI BKB</th>
                                            <th colspan="2">TUTOR</th>
                                            <th rowspan="2">BKB</th>
                                            <th rowspan="2">KOPERASI</th>
                                            <th rowspan="2">KETERAMPILAN</th>
                                            <th rowspan="2">LP3 PKK</th>
                                            <th rowspan="2">TPK 3 PKK</th>
                                            <th rowspan="2">DAMAS PKK</th>
                                            <th colspan="2">PEMULA</th>
                                            <th colspan="2">MADYA</th>
                                            <th colspan="2">UTAMA</th>
                                            <th colspan="2">MANDIRI</th>
                                            <th colspan="2">KOPERASI BERBADAN HUKUM</th>
                                        </tr>

                                        <tr>
                                            <th>KEL. BELAJAR</th>
                                            <th>WARGA BELAJAR</th>
                                            <th>KEL. BELAJAR</th>
                                            <th>WARGA BELAJAR</th>
                                            <th>KEL. BELAJAR</th>
                                            <th>WARGA BELAJAR</th>
                                            <th>KEL. BELAJAR</th>
                                            <th>WARGA BELAJAR</th>
                                            <th>KF</th>
                                            <th>PAUD SEJENIS</th>
                                            <th>JML. KLP</th>
                                            <th>JML. PESERTA</th>
                                            <th>JML. KLP</th>
                                            <th>JML. PESERTA</th>
                                            <th>JML. KLP</th>
                                            <th>JML. PESERTA</th>
                                            <th>JML. KLP</th>
                                            <th>JML. PESERTA</th>
                                            <th>JML. KLP</th>
                                            <th>JML. PESERTA</th>
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
