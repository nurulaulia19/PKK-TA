@extends('super_admin.layout')

@section('title', 'Data POKJA II | Super Admin PKK Kab. Indramayu')

@section('bread', 'Data POKJA II')
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
                                    {{-- <button type="button" class="btn btn-success">Tambah</button><br><br> --}}

                                    <thead>
                                        <tr>
                                        <th>Pendidikan dan Keterampilan</th>
                                        <th>Pengembangan Kehidupan Beroperasi</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="/pendidikan_super" type="button" class="btn btn-primary">Detail</a>

                                        </td>
                                        <td>
                                            <a href="/koperasi_super" type="button" class="btn btn-primary">Detail</a>
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
