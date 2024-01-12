@extends('admin_desa.layout')

@section('title', 'Data Dasawisma | Admin Desa PKK Kab. Indramayu')

@section('bread', 'Data Dasawisma')
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
                                    <div class="row">
                                        <div class="col-md-1">
                                            <a href="{{ url('data_dasawisma/create') }}" type="button" class="btn btn-success">Tambah</a><br><br>
                                        </div>
                                    </div>
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama Dasawisma</th>
                                        <th>Alamat Dasawisma</th>
                                        <th>RT/RW</th>
                                        <th>Dusun</th>
                                        <th>Status</th>
                                        <th>Nama Desa</th>
                                        <th>Nama Kecamatan</th>
                                        <th>Periode</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($dasawisma as $c)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                        <td style="vertical-align: middle;">{{$c->nama_dasawisma}}</td>
                                        <td style="vertical-align: middle;">{{$c->alamat_dasawisma}}</td>
                                        <td style="vertical-align: middle;">{{$c->rt}}/{{ $c->rw }}</td>
                                        <td style="vertical-align: middle;">{{$c->dusun}}</td>
                                        @if($c->status == 1)
                                            <td style="vertical-align: middle;">Aktif</td>
                                        @else
                                            <td style="vertical-align: middle;">Tidak Aktif</td>
                                        @endif
                                        <td style="vertical-align: middle;">{{$c->desa->nama_desa}}</td>
                                        <td style="vertical-align: middle;">{{$c->kecamatan->nama_kecamatan}}</td>
                                        <td style="vertical-align: middle;">{{$c->periode}}</td>

                                        <td class="text-center">
                                            <form action="{{ route('data_dasawisma.destroy',$c->id) }}" method="POST">
                                                <a class="btn btn-primary btn-sm" href="{{ url('data_dasawisma/'.$c->id.'/edit') }}">Edit</a>

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
