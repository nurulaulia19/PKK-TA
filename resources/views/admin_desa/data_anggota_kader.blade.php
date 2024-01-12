@extends('admin_desa.layout')

@section('title', 'Data Anggota Tim Penggerak PKK dan Kader| Admin Desa PKK Kab. Indramayu')

@section('bread', 'Data Anggota Tim Penggerak PKK dan Kader')
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
                                    <a href="{{ url('data_anggota_kader/create') }}" type="button" class="btn btn-success">Tambah</a><br><br>

                                    <thead>
                                        <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Nama Kecamatan</th>
                                        <th rowspan="2">Nama Desa</th>
                                        <th rowspan="2">Nama</th>
                                        <th rowspan="2">No. Registrasi TP PKK</th>
                                        <th colspan="3"><center>Kedudukan Fungsi</center></th>
                                        <th rowspan="2">Jenis Kelamin</th>
                                        <th rowspan="2">Tempat Lahir</th>
                                        <th rowspan="2">Tanggal Lahir/Umur</th>
                                        <th rowspan="2">Status</th>
                                        <th rowspan="2">Alamat</th>
                                        <th rowspan="2">Pendidikan</th>
                                        <th rowspan="2">Pekerjaan</th>
                                        <th rowspan="2">Ket</th>
                                        <th rowspan="2">Aksi</th>
                                    </tr>
                                    <tr>
                                        <th>Dalam Keanggotaan TP PKK</th>
                                        <th>Kader Umum</th>
                                        <th>Kader Khusus</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($anggotas as $c)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                        <td style="vertical-align: middle;">{{$c->desa->nama_desa}}</td>
                                        <td style="vertical-align: middle;">{{$c->kecamatan->nama_kecamatan}}</td>
                                        <td style="vertical-align: middle;">{{$c->no_registrasi}}</td>
                                        <td style="vertical-align: middle;">{{$c->nama}}</td>
                                        <td style="vertical-align: middle;">{{$c->fungsi_keanggotaan}}</td>
                                        <td style="vertical-align: middle;">{{$c->kader_umum}}</td>
                                        <td style="vertical-align: middle;">{{$c->kader_khusus}}</td>


                                        @if ($c->jenis_kelamin == 1)
                                            <td style="vertical-align: middle;">Laki-laki</td>
                                        @else
                                            <td style="vertical-align: middle;">Perempuan</td>
                                        @endif

                                        <td style="vertical-align: middle;">{{$c->tempat_lahir}}</td>
                                        <td style="vertical-align: middle;">{{ \Carbon\Carbon::parse($c->tgl_lahir)->isoFormat('D MMMM Y') }}/{{ucfirst($c->umur) }} Tahun</td>
                                        <td style="vertical-align: middle;">{{$c->status}}</td>
                                        <td style="vertical-align: middle;">{{$c->alamat}}</td>
                                        <td style="vertical-align: middle;">{{$c->pendidikan}}</td>
                                        <td style="vertical-align: middle;">{{$c->pekerjaan}}</td>
                                        <td style="vertical-align: middle;">{{$c->keterangan}}</td>

                                        <td class="text-center">
                                            <form action="{{ route('data_anggota_kader.destroy',$c->id) }}" method="POST">
                                                <a class="btn btn-primary btn-sm" href="{{ url('data_anggota_kader/'.$c->id.'/edit') }}">Edit</a>

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
