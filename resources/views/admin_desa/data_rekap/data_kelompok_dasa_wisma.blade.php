@extends('admin_desa.layout')

@section('title', 'Data Kelompok Dasa Wisma | Admin Desa/Kelurahan PKK Kab. Indramayu')

@section('bread', 'Data Kelompok Dasa Wisma')
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
                                            <th>Nama Dasa Wisma</th>
                                            <th>RT</th>
                                            <th>RW</th>
                                            <th>Periode</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($dasa_wisma as $c)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->nama_dasawisma)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->rt)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->rw)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->periode)}}</td>

                                        <td class="text-center">
                                            <a class="btn btn-success btn-sm" href="{{ url('rekap_kelompok_dasa_wisma').'?'.http_build_query([
                                                'nama_dasawisma' => $c->nama_dasawisma,
                                                'rt' => $c->rt,
                                                'rw' => $c->rw,
                                                'periode' => $c->periode,
                                            ]) }}">Rekap</a>
                                        </td>

                                    </tr>

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
