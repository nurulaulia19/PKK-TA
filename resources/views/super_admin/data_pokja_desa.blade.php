@extends('super_admin.layout')

@section('title', 'Data POKJA Desa | Super Admin PKK Kab. Indramayu')

@section('bread', 'Data POKJA Desa')
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
                                            <th>No</th>
                                            <th>Nama Desa</th>
                                            <th>Data Umum PKK</th>
                                            <th>Data POKJA I</th>
                                            <th>Data POKJA II</th>
                                            <th>Data POKJA III</th>
                                            <th>Data POKJA IV</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>
                                            <a href="/jml_kader_super" type="button" class="btn btn-primary">Detail</a>
                                            <a href="/jml_kader_super" type="button" class="btn btn-warning">Cetak</a>
                                        </td>

                                        <td>
                                            <a href="/jml_kader_super" type="button" class="btn btn-primary">Detail</a>
                                            <a href="/jml_kader_super" type="button" class="btn btn-warning">Cetak</a>
                                        </td>

                                        <td>
                                            <a href="/jml_kader_super" type="button" class="btn btn-primary">Detail</a>
                                            <a href="/jml_kader_super" type="button" class="btn btn-warning">Cetak</a>
                                        </td>

                                        <td>
                                            <a href="/penghayatan_super" type="button" class="btn btn-primary">Detail</a>
                                            <a href="/jml_kader_super" type="button" class="btn btn-warning">Cetak</a>
                                        </td>

                                        <td>
                                            <a href="/gotong_royong_super" type="button" class="btn btn-primary">Detail</a>
                                            <a href="/jml_kader_super" type="button" class="btn btn-warning">Cetak</a>
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
