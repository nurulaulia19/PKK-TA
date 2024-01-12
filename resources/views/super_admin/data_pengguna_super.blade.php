@extends('super_admin.layout')

@section('title', 'Data Pengguna Sistem Kegiatan POKJA TP PKK | Suuper Admin PKK Kab. Indramayu')

@section('bread', 'Data Pengguna Sistem Kegiatan POKJA TP PKK')
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
                                    <a href="{{ url('data_pengguna_super/create') }}" type="button" class="btn btn-success">Tambah</a><br><br>

                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>User Type</th>
                                        <th>Nama Desa</th>
                                        <th>Nama Kecamatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        <?php $no=1;?>

                                        @foreach ($users as $c)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $no }}</td>
                                        <td style="vertical-align: middle;">{{$c->name}}</td>
                                        <td style="vertical-align: middle;">{{$c->email}}</td>
                                        <td style="vertical-align: middle;">{{$c->password}}</td>
                                        <td style="vertical-align: middle;">{{$c->user_type}}</td>
                                        <td style="vertical-align: middle;">
                                            @if ($desa = $c->desa)
                                                {{ $desa->nama_desa }}
                                            @else
                                                -
                                            @endif
                                        </td>

                                        <td style="vertical-align: middle;">
                                            @if ($kecamatan = $c->kecamatan)
                                            {{ $kecamatan->nama_kecamatan }}
                                        @else
                                            -
                                        @endif
                                        </td>

                                        <td class="text-center">
                                            <form action="{{ route('data_pengguna_super.destroy',$c->id) }}" method="POST">

                                            {{-- <a class="btn btn-info btn-sm" href="{{ route('sisw.show',$siswa->id) }}">Show</a> --}}

                                                <a class="btn btn-primary btn-sm" href="{{ url('data_pengguna_super/'.$c->id.'/edit') }}">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm delete" >Delete</button>
                                            </form>
                                        </td>


                                    </tr>
                                    <?php $no++ ;?>

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
