@extends('admin_desa.layout')

@section('title', 'Data Anggota Tim Penggerak PKK | Admin Desa PKK Kab. Indramayu')

@section('bread', 'Data Anggota Tim Penggerak PKK')
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
                                    <a href="{{ url('data_anggota_tp/create') }}" type="button" class="btn btn-success">Tambah</a><br><br>

                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama Kecamatan</th>
                                        <th>Nama Desa</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir/Umur</th>
                                        <th>Status</th>
                                        <th>Alamat</th>
                                        <th>Pendidikan</th>
                                        <th>Pekerjaan</th>
                                        <th>Ket</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        <?php $no=1;?>

                                        @foreach ($anggotas as $c)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $no }}</td>
                                        <td style="vertical-align: middle;">{{$c->desa->nama_desa}}</td>
                                        <td style="vertical-align: middle;">{{$c->kecamatan->nama_kecamatan}}</td>
                                        <td style="vertical-align: middle;">{{$c->nama}}</td>
                                        @if ($c->jabatan == 1)
                                            <td style="vertical-align: middle;">Anggota TP PKK</td>
                                        @elseif ($c->jabatan == 2)
                                            <td style="vertical-align: middle;">Kader Umum</td>
                                        @elseif ($c->jabatan == 3)
                                            <td style="vertical-align: middle;">Kader Khusus</td>
                                        @elseif ($c->jabatan == 4)
                                            <td style="vertical-align: middle;">Tenaga Sekretariat Honorer</td>
                                        @elseif ($c->jabatan == 5)
                                            <td style="vertical-align: middle;">Tenaga Sekretariat Bantuan</td>
                                        @endif

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
                                            <form action="{{ route('data_anggota_tp.destroy',$c->id) }}" method="POST">

                                            {{-- <a class="btn btn-info btn-sm" href="{{ route('sisw.show',$siswa->id) }}">Show</a> --}}

                                                <a class="btn btn-primary btn-sm" href="{{ url('data_anggota_tp/'.$c->id.'/edit') }}">Edit</a>

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
