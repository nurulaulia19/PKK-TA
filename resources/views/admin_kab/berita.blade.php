@extends('admin_kab.layout')

@section('title', 'Data Berita PKK | Admin Desa PKK Kab. Indramayu')

@section('bread', 'Data Berita PKK')
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
                                <table id="example1" class="table table-bordered table-striped">

                                {{-- <table class="table table-striped table-bordered data" id="add-row"> --}}
                                    <a href="{{ url('beritaKab/create') }}" type="button" class="btn btn-success">Tambah</a><br><br>

                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama Berita</th>
                                        <th>Deskripsi Berita</th>
                                        <th>Gambar Berita</th>
                                        <th>Tanggal Publsih Berita</th>
                                        <th>Penulis Berita PKK</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($beritaKab as $c)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                        <td style="vertical-align: middle;">{{$c->nama_berita}}</td>
                                        <td style="vertical-align: middle;">{!!$c->desk!!}</td>
                                        <td style="vertical-align: middle;"><img src="/gambar/{{$c->gambar}}" width="100px"></td>
                                        <td style="vertical-align: middle;">{{\Carbon\Carbon::parse($c->tgl_publish)->isoFormat('D MMMM Y')}}</td>
                                        <td style="vertical-align: middle;">{{$c->penulis}}</td>
                                        <td class="text-center">
                                            <form action="{{ route('beritaKab.destroy',$c->id) }}" method="POST">

                                            {{-- <a class="btn btn-info btn-sm" href="{{ route('sisw.show',$siswa->id) }}">Show</a> --}}

                                                <a class="btn btn-primary btn-sm" href="{{ url('beritaKab/'.$c->id.'/edit') }}">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm delete" >Delete</button>
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
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });
</script>

{{-- <script>
    $(document).ready(function () {
        $('.data').dataTable();
    });
</script> --}}
{{-- <script>
$(document).ready( function () {
    $('.data').DataTable();
} );
</script> --}}

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
