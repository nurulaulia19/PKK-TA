@extends('kader.layout')

@section('title', 'Data Industri Rumah Warga | Kader Dasawisma PKK Kab. Indramayu')

@section('bread', 'Data Industri Rumah Warga')
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
                                            <a href="{{ url('data_industri/create') }}" type="button" class="btn btn-success">Tambah</a><br><br>
                                        </div>

                                    </div>

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Warga</th>
                                            <th>Kategori</th>
                                            <th>Komoditi</th>
                                            <th>Volume</th>
                                            <th>Periode</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($industri as $c)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                        {{-- nama desa yang login --}}
                                        <td style="vertical-align: middle;">{{ucfirst($c->keluarga->nama_kepala_rumah_tangga) }}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->nama_kategori)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->komoditi)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->volume)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->periode)}}</td>
                                        <td class="text-center">
                                            <a class="btn btn-primary btn-sm" href="{{ url('data_industri/'.$c->id.'/edit') }}">Edit</a>

                                            @if(date('Y') <= $c->periode)
                                            <form action="{{ route('data_industri.destroy',$c->id) }}" method="POST">
                                              @csrf
                                              @method('DELETE')

                                              <button type="submit" class="btn btn-danger btn-sm delete">Hapus</button>
                                            </form>
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
