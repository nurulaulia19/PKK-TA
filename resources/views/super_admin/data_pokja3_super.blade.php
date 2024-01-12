@extends('super_admin.layout')

@section('title', 'Data POKJA III | Super Admin PKK Kab. Indramayu')

@section('bread', 'Data POKJA III')
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
                                <table class="table table-striped table-bordered" id="add-row">

                                    <thead>
                                        <tr>
                                        <th>Jumlah Kader</th>
                                        <th>Pangan</th>
                                        <th>Jumlah Industri Rumah Tangga</th>
                                        <th>Jumlah Rumah</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="/kader_super" type="button" class="btn btn-primary">Detail</button>

                                        </td>
                                        <td>
                                            <a href="/pangan_super" type="button" class="btn btn-primary">Detail</a>
                                        </td>
                                        <td>
                                            <a href="/industri_super" type="button" class="btn btn-primary">Detail</a>

                                        </td>
                                        <td>
                                            <a href="/rumah_super" type="button" class="btn btn-primary">Detail</a>

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
