@extends('admin_kec.layout')

@section('title', 'Data POKJA I | Admin Kecamatan PKK Kab. Indramayu')

@section('bread', 'Data POKJA I')
@section('container')

    <!-- Main content -->
    <div class="main-content">
    <section class="section">
        {{-- <h1 class="section-header">
            <div>Kandidat</div>
        </h1> --}}

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered " id="add-row">

                                    <thead>
                                        <tr>
                                        <th>Jumlah Kader</th>
                                        <th>Penghayatan Dan Pengamalan Pancasila</th>
                                        <th>Gotong Royong</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="/jml_kader" type="button" class="btn btn-primary">Detail</a>

                                        </td>
                                        <td>
                                            <a href="/penghayatan" type="button" class="btn btn-primary">Detail</a>
                                        </td>
                                        <td>
                                            <a href="/gotong_royong" type="button" class="btn btn-primary">Detail</button>

                                        </td>

                                    </tr>
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
