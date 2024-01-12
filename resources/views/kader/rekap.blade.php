@extends('kader.layout')

@section('title', 'Data Kelompok Kepala Keluarga | Kader Dasawisma PKK Kab. Indramayu')

@section('bread', 'Data Kelompok Kepala Keluarga')
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
                                        <th>Nama Kepala Keluarga</th>
                                        <th>Periode</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($warga as $c)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->keluarga->nama_kepala_rumah_tangga)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->periode)}}</td>

                                        <td class="text-center">
                                                <a class="btn btn-success btn-sm" href="{{ url('rekap_data_warga/'.$c->id.'/rekap_data_warga') }}">Rekap Data Warga</a>
                                                @if ($warga != NULL)
                                                    <a class="btn btn-primary btn-sm" href="{{ url('catatan_keluarga/'.$c->id.'/catatan_keluarga') }}">Catatan Keluarga</a>

                                                @else

                                                @endif

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
