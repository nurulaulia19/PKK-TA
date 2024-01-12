@extends('kader.layout')

@section('title', 'Data Pemanfaatan Tanah Pekarangan | Kader Dasawisma PKK Kab. Indramayu')

@section('bread', 'Data Pemanfaatan Tanah Pekarangan ')
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
                                            <a href="{{ url('data_pemanfaatan/create') }}" type="button" class="btn btn-success">Tambah</a><br><br>
                                        </div>

                                    </div>

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Warga</th>
                                            <th>Kategori</th>
                                            <th>Komoditi</th>
                                            <th>Jumlah</th>
                                            <th>Periode</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($pemanfaatan as $c)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                        {{-- nama desa yang login --}}
                                        <td style="vertical-align: middle;">{{ucfirst($c->keluarga->nama_kepala_rumah_tangga) }}</td>
                                        {{-- @if ($c->nama_kategori == 1)
                                            <td style="vertical-align: middle;">Peternakan</td>
                                        @elseif($c->nama_kategori == 2)
                                            <td style="vertical-align: middle;">Perikanan</td>
                                        @elseif($c->nama_kategori == 3)
                                            <td style="vertical-align: middle;">Warung Hidup</td>
                                        @elseif($c->nama_kategori == 4)
                                            <td style="vertical-align: middle;">TOGA (Tanaman Obat Keluarga)</td>
                                        @elseif($c->nama_kategori == 5)
                                            <td style="vertical-align: middle;">Tanaman Keras</td>
                                        @elseif($c->nama_kategori == 6)
                                            <td style="vertical-align: middle;">Lainnya</td>

                                        @endif --}}
                                        <td style="vertical-align: middle;">{{ucfirst($c->nama_kategori)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->komoditi)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->jumlah)}}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->periode)}}</td>
                                        <td class="text-center">
                                            <form action="{{ route('data_pemanfaatan.destroy',$c->id) }}" method="POST">

                                            {{-- <a class="btn btn-info btn-sm" href="{{ route('sisw.show',$siswa->id) }}">Show</a> --}}

                                                <a class="btn btn-primary btn-sm" href="{{ url('data_pemanfaatan/'.$c->id.'/edit') }}">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm delete">Hapus</button>
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
