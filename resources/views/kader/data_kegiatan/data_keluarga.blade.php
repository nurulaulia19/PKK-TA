@extends('kader.layout')

@section('title', 'Data Keluarga | Kader Dasawisma PKK Kab. Indramayu')

@section('bread', 'Data Keluarga')
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
                                            <a href="{{ url('data_keluarga/create') }}" type="button" class="btn btn-success">Tambah</a><br><br>
                                        </div>

                                    </div>

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kepala Keluarga</th>
                                            <th>Jumlah Anggota Keluarga</th>
                                            <th>Jumlah Anggota Keluarga Laki-laki</th>
                                            <th>Jumlah Anggota Keluarga Perempuan</th>
                                            <th>Jumlah Kepala Keluarga (KK)</th>
                                            <th>Periode</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($keluarga as $c)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                        {{-- nama desa yang login --}}
                                        <td style="vertical-align: middle;">{{ucfirst($c->nama_kepala_rumah_tangga) }}</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->jumlah_anggota_keluarga)}} Orang</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->jumlah_laki)}} Orang</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->jumlah_perempuan)}} Orang</td>
                                        <td style="vertical-align: middle;">{{ucfirst($c->jumlah_KK)}} KK</td>

                                        <td style="vertical-align: middle;">{{ucfirst($c->periode)}}</td>
                                        <td class="text-center">
                                            <form action="{{ route('data_keluarga.destroy',$c->id) }}" method="POST">

                                            {{-- <a class="btn btn-info btn-sm" href="{{ url('data_keluarga.show',$c->id) }}">Show</a> --}}
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#details-modal-{{ $c->id }}">
                                                Detail
                                              </button>

                                                <a class="btn btn-primary btn-sm" href="{{ url('data_keluarga/'.$c->id.'/edit') }}">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm delete">Hapus</button>
                                            </form>
                                        </td>

                                    </tr>

                                    @endforeach

                                    </tbody>
                                </table>

                                @foreach ($keluarga as $c)
                                <div id="details-modal-{{ $c->id }}" class="modal fade" tabindex="1" role="dialog" aria-labelledby="details-modal-{{ $c->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Details</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                            </div>
                                                    <div class="modal-body">
                                                    <h5>
                                                        Dasawisma : <strong> {{ucfirst($c->dasawisma->nama_dasawisma) }} </strong><br>
                                                        RT <strong>{{ ($c->rt) }}</strong>, RW <strong>{{ ($c->rt) }}</strong> <br>
                                                        Dusun : <br>
                                                        Desa/Kel : <strong>{{ucfirst($c->desa->nama_desa)}}</strong><br>
                                                        Kec. <strong>{{ucfirst($c->kecamatan->nama_kecamatan)}}</strong>,
                                                            Kabupaten <strong>{{ucfirst($c->kabupaten) }}</strong>, Provinsi <strong>{{ucfirst($c->provinsi) }}</strong><br>
                                                        Nama Kepala Rumah Tangga : <strong>{{ucfirst($c->nama_kepala_rumah_tangga) }}</strong><br>
                                                        Jumlah Anggota Keluarga : <strong> {{ucfirst($c->jumlah_anggota_keluarga) }} </strong>Orang<br>

                                                        Jumlah Balita :  @if ($warga = $c->jumlah_balita)
                                                                        {{ $warga }} Anak
                                                                        @else
                                                                            - Orang
                                                                        @endif <br>
                                                        Jumlah PUS (Pasangan Usia Subur) :  @if ($warga = $c->jumlah_PUS)
                                                                        {{ $warga }} Orang
                                                                        @else
                                                                            - Orang
                                                                        @endif <br>
                                                        Jumlah WUS (Wanita Usia Subur) :  @if ($warga = $c->jumlah_WUS)
                                                                        {{ $warga }} Orang
                                                                        @else
                                                                            - Orang
                                                                        @endif <br>
                                                        Jumlah 3 Buta (Buta Warna, Buta Baca, Buta Hitung):  @if ($warga = $c->jumlah_3_buta)
                                                                        {{ $warga }} Orang
                                                                        @else
                                                                            - Orang
                                                                        @endif <br>
                                                        Jumlah Ibu Hamil :  @if ($warga = $c->jumlah_ibu_hamil)
                                                                        {{ $warga }} Orang
                                                                        @else
                                                                            - Orang
                                                                        @endif <br>
                                                        Jumlah Ibu Menyusui :  @if ($warga = $c->jumlah_ibu_menyusui)
                                                                        {{ $warga }} Orang
                                                                        @else
                                                                            - Orang
                                                                        @endif <br>
                                                        Jumlah  Lansia :  @if ($warga = $c->jumlah_lansia)
                                                                        {{ $warga }} Orang
                                                                        @else
                                                                            - Orang
                                                                        @endif <br>
                                                        Jumlah Kebutuhan Khusus : @if ($warga = $c->jumlah_kebutuhan_khusus)
                                                                                    {{ $warga }} Orang
                                                                                    @else
                                                                                    - Orang
                                                                                    @endif <br>

                                                        @if ($c->makanan_pokok == 1)
                                                            Makanan Pokok Sehari-hari: <strong> Beras </strong><br>
                                                        @else
                                                            Makanan Pokok Sehari-hari: <strong> Non Beras </strong><br>
                                                        @endif

                                                        @if ($c->punya_jamban == 1)
                                                            Mempunyai Jamban Keluarga: <strong> Ya/ {{ $c->jumlah_jamban }} Buah</strong><br>
                                                        @else
                                                            Mempunyai Jamban Keluarga: <strong> Tidak/ {{ $c->jumlah_jamban }} Buah</strong><br>
                                                        @endif

                                                        @if ($c->sumber_air == 1)
                                                            Sumber Air Keluarga: <strong> PDAM</strong><br>
                                                        @elseif ($c->sumber_air == 2)
                                                            Sumber Air Keluarga: <strong> Sumur</strong><br>
                                                        @elseif($c->sumber_air == 3)
                                                            Sumber Air Keluarga: <strong> Sungai</strong><br>
                                                        @elseif($c->sumber_air == 4)
                                                            Sumber Air Keluarga: <strong> Lainnya</strong><br>
                                                        @endif

                                                        @if ($c->punya_tempat_sampah == 1)
                                                            Memiliki Tempat Pembuangan Sampah: <strong> Ya</strong><br>
                                                        @else
                                                            Memiliki Tempat Pembuangan Sampah: <strong> Tidak</strong><br>
                                                        @endif

                                                        @if ($c->punya_saluran_air == 1)
                                                            Mempunyai Saluran Pembuangan Air Limbah: <strong> Ya</strong><br>
                                                        @else
                                                            Mempunyai Saluran Pembuangan Air Limbah: <strong> Tidak</strong><br>
                                                        @endif

                                                        @if ($c->tempel_stiker == 1)
                                                            Menempel Stiker P4K: <strong> Ya</strong><br>
                                                        @else
                                                            Menempel Stiker P4K: <strong> Tidak</strong><br>
                                                        @endif

                                                        @if ($c->kriteria_rumah == 1)
                                                            Kriteria Rumah : <strong>Sehat</strong><br>
                                                        @else
                                                            Kriteria Rumah : <strong>Kurang Sehat</strong><br>
                                                        @endif

                                                        @if ($c->aktivitas_UP2K == 1)
                                                            Aktivitaser UP2K: <strong> Ya</strong><br>
                                                        @else
                                                            Aktivitaser UP2K: <strong> Tidak</strong><br>
                                                        @endif

                                                        @if ($c->aktivitas_kegiatan_usaha == 1)
                                                            Aktivitas Kegiatan Usaha Kesehatan Lingkungan: <strong> Ya</strong><br>
                                                        @else
                                                            Aktivitas Kegiatan Usaha Kesehatan Lingkungan: <strong> Tidak</strong><br>
                                                        @endif
                                                        </h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Oke</button>
                                                        {{-- <button type="button" class="btn btn-primary">Oke</button> --}}
                                                    </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach


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
