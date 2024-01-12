@extends('admin_kec.layout')

@section('title', 'Data Pengguna | Admin Kecamatan PKK Kab. Indramayu')

@section('bread', 'Data Pengguna')
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
                                <table class="table table-striped table-bordered data" id="add-row">
                                    {{-- <button type="button" class="btn btn-success">Tambah</button><br><br> --}}

                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        {{-- @foreach ($candidate as $c) --}}
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>
                                            <button type="button" class="btn btn-success">Edit</button>
                                            <button type="button" class="btn btn-danger">Hapus</button>
                                        </td>

                                        {{-- <td style="vertical-align: middle;">{{$i++}}</td>
                                        <td style="vertical-align: middle;">{{$c->name}}</td>
                                        <td style="vertical-align: middle;">{{$c->address}}</td>
                                        <td style="vertical-align: middle;">{{$c->position}}</td>
                                        <td>
                                            <a href="/opencv/{{$c->id}}" target="_blank" class="btn btn-primary">
                                                View File <span class="glyphicon glyphicon-eye-open">
                                            </a>
                                        </td>
                                        <td style="vertical-align: middle;">{{$c->status}}</td></td>

                                        <td style="width: 120px;text-align: center;vertical-align: middle; ">
                                            <form action="/kandidat/{{$c->id}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-primary btn-circle delete"><span class="far fa-trash-alt"></span></button>
                                                <!-- <input type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('anda yakin ingin menghapus data?');"> -->
                                            </form>
                                        </td> --}}
                                    </tr>
                                    {{-- @endforeach --}}
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
  {{-- <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script> --}}

{{-- <script>
    $(document).ready(function () {
        $('.data').dataTable();
    });
</script> --}}
<script>
$(document).ready( function () {
    $('.data').DataTable();
} );
</script>

@endpush
