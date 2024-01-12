@extends('admin_kec.layout')

@section('title', 'Data Laporan POKJA III TP PKK Kecamatan | Admin Kecamatan PKK Kab. Indramayu')

@section('bread', 'Data Laporan POKJA III TP PKK Kecamatan')
@section('container')

    <!-- Main content -->
    <div class="main-content">
    <section class="section">

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered data" id="add-row">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Periode</th>
                                        <th>Aksi</th>
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
