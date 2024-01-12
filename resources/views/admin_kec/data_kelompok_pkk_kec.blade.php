@extends('admin_kec.layout')

@section('title', 'Data Kelompok PKK Kecamatan | Admin Kecamatan PKK Kab. Indramayu')

@section('bread', 'Data Kelompok PKK Kecamatan')
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
                                        <th>Desa/Kelurahan</th>
                                        <th>Periode</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        <?php $no=1;?>

                                        @foreach ($rw as $c)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $no }}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->desa)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->periode)}}</td>

                                        <td class="text-center">
                                            <a class="btn btn-success btn-sm" href="{{ url('rekap_kelompok_pkk_rw').'?'.http_build_query(['pkk_rw' => $c->rw]) }}">Rekap</a>
                                        </td>
                                    <?php $no++ ;?>

                                    @endforeach
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
