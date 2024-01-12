@extends('admin_desa.layout')

@section('title', 'Data Kelompok PKK Dusun  | Admin Desa/Kelurahan PKK Kab. Indramayu')

@section('bread', 'Data Kelompok PKK Dusun ')
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
                                        <th>Dusun</th>
                                        <th>Periode</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($dusun as $c)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->dusun)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->periode)}}</td>

                                        <td class="text-center">
                                            <a class="btn btn-success btn-sm" href="{{ url('rekap_kelompok_pkk_dusun').'?'.http_build_query([
                                                'dusun' => $c->dusun,
                                                'periode' => $c->periode,
                                                ]) }}">Rekap</a>
                                        </td>

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
