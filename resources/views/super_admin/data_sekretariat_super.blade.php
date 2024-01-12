@extends('super_admin.layout')

@section('title', 'Data Sekretariat | Super Admin PKK Kab. Indramayu')

@section('bread', 'Data Sekretariat')
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
                                        <th>Jumlah Kelompok</th>
                                        <th>Jumlah Data Umum</th>
                                        <th>Jumlah Jiwa Data Umum</th>
                                        <th>Jumlah Kader Data Umum</th>
                                        <th>Jumlah Tenaga Sekretariat Data Umum</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="/kelompok_super" type="button" class="btn btn-primary">Detail</a>

                                            </td>
                                            <td>
                                                <a href="/jml_data_umum_super" type="button" class="btn btn-primary">Detail</a>
                                            </td>
                                            <td>
                                                <a href="/jml_jiwa_umum_super" type="button" class="btn btn-primary">Detail</button>
                                            </td>
                                            <td>
                                                <a href="/jml_kader_umum_super" type="button" class="btn btn-primary">Detail</a>

                                            </td>
                                            <td>
                                                <a href="/jml_tenaga_umum_super" type="button" class="btn btn-primary">Detail</a>
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
