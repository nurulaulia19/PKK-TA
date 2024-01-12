@extends('kader.layout')

@section('title', 'Data Pelatihan Kader PKK | Kader Desa/Kelurahan PKK Kab. Indramayu')

@section('bread', 'Data Pelatihan Kader PKK')
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
                                    <div class="row">
                                        <div class="col-md-1">
                                            <a href="{{ url('data_gabung/create') }}" type="button" class="btn btn-success">Tambah</a><br><br>
                                        </div>

                                    </div>

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kader</th>
                                            <th>Desa</th>
                                            <th>Kecamatan</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Kedudukan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($gabung as $c)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                        {{-- nama desa yang login --}}
                                        <td style="vertical-align: middle;">{{ucfirst($c->user->name) }}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->desa->nama_desa)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->kecamatan->nama_kecamatan)}}</td>
                                        <td style="vertical-align: middle;">{{ \Carbon\Carbon::parse($c->tgl_masuk)->isoFormat('D MMMM Y')}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->kedudukan)}}</td>
                                        <td class="text-center">
                                            <form action="{{ route('data_gabung.destroy',$c->id) }}" method="POST">

                                            {{-- <a class="btn btn-info btn-sm" href="{{ route('sisw.show',$siswa->id) }}">Show</a> --}}

                                                <a class="btn btn-primary btn-sm" href="{{ url('data_gabung/'.$c->id.'/edit') }}">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm delete">Delete</button>
                                            </form>
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
<script>
    $('.delete').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
            title: `Apakah anda yakin ingin menghapus data ini ?`,
              text: "Jika anda menghapusnya maka datanya akan di hapus secara permanen",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
</script>

@endpush
