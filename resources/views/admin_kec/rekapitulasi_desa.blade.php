@extends('admin_kec.layout')

@section('title', 'Data Kelompok PKK Desa | Admin Kecamatan PKK Kab. Indramayu')

@section('bread', 'Data Kelompok PKK Desa')
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

                                    @foreach ($keluarga as $data)
                                        <tr>
                                            <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                            <td style="vertical-align: middle;">{{ ucfirst($data->periode) }}</td>

                                            <td class="text-center">
                                                {{-- <a class="btn btn-success btn-sm" href="{{ route('rekap_desa', ['id' => $desa->id]) }}">Rekap</a> --}}
                                                <a class="btn btn-success btn-sm" href="{{ route('rekap_desa', ['id' => $desa->id, 'periode' => $data->periode]) }}">Rekap</a>
                                                {{-- <a class="btn btn-success btn-sm" href="{{ route('rekap_pkk_desa', ['desa' => $desa->id, 'periode' => $data->periode]) }}">Rekap</a> --}}
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
