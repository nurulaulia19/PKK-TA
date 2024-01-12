<div class="table-responsive">
    <table class="table table-striped table-bordered data" id="add-row">
        <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Nama Anggota Keluarga</th>
                <th rowspan="2">Status Perkawinan</th>
                <th rowspan="2">Jenis Kelamin</th>
                <th rowspan="2">Tempat Lahir</th>
                <th rowspan="2">Agama</th>
                <th rowspan="2">Pendidikan</th>
                <th rowspan="2">Pekerjaan</th>
                <th rowspan="2">Berkebutuhan Khusus</th>
                <th colspan="8" style="text-align: center">Kegiatan Yang diikuti</th>
                <th rowspan="2">Ket</th>

            </tr>
            <tr>
                {{-- <th>Penghayatan Dan Pengamalan Pancasilal</th>
                <th>Gotong Royong</th>
                <th>Pendidikan dan Keterampilan</th>
                <th>Pengembangan Kehidupan Berkoperasi</th>
                <th>Pangan</th>
                <th>Sandang</th>
                <th>Kesehatan</th>
                <th>Perencanaan Sehat</th> --}}
                @foreach ($kategori_kegiatans as $kategori_kegiatan)
                <th>{{ $kategori_kegiatan->nama_kegiatan }}</th>
                @endforeach
            </tr>
        </thead>

        <tbody>
            <?php $no=1;?>

            @foreach ($catatan_keluarga as $data_warga)
            {{-- {{ dd($catatan_keluarga) }} --}}
            <tr>
                <td style="vertical-align: middle;">{{ $no }}</td>
                <td style="vertical-align: middle;">{{ucfirst($data_warga->nama)}}</td>
                <td style="vertical-align: middle;">{{ucfirst($data_warga->status)}}</td>
                <td style="vertical-align: middle;">{{ucfirst($data_warga->status_perkawinan)}}</td>
                <td style="vertical-align: middle;">{{ucfirst($data_warga->jenis_kelamin)}}</td>
                <td style="vertical-align: middle;">{{ucfirst($data_warga->tgl_lahir)}}/{{ ucfirst($data_warga->umur) }}
                    Tahun</td>
                <td style="vertical-align: middle;">{{ucfirst($data_warga->pendidikan)}}</td>
                <td style="vertical-align: middle;">{{ucfirst($data_warga->pekerjaan)}}</td>
                <td style="vertical-align: middle;">{{ucfirst($data_warga->berkebutuhan_khusus)}}</td>
                {{-- <td style="vertical-align: middle;">{{ucfirst($kegiatan->kegiatan[0]->kategori_kegiatan->nama_kegiatan == 'Penghayatan dan Pengamalan Pancasila' ? $kegiatan->kegiatan[0]->keterangan_kegiatan->nama_keterangan :'')}}
                </td>
                <td style="vertical-align: middle;">
                    {{ucfirst($kegiatan->kegiatan[0]->kategori_kegiatan->nama_kegiatan == 'Gotong Royong' ? $kegiatan->kegiatan[0]->keterangan_kegiatan->nama_keterangan :'')}}
                </td>
                <td style="vertical-align: middle;">
                    {{ucfirst($kegiatan->kegiatan[0]->kategori_kegiatan->nama_kegiatan == 'Pendidikan dan Keterampilan' ? $kegiatan->kegiatan[0]->keterangan_kegiatan->nama_keterangan :'')}}
                </td>
                <td style="vertical-align: middle;">
                    {{ucfirst($kegiatan->kegiatan[0]->kategori_kegiatan->nama_kegiatan == 'Pengembangan Kehidupan Berkoperasi' ? $kegiatan->kegiatan[0]->keterangan_kegiatan->nama_keterangan :'')}}
                </td>
                <td style="vertical-align: middle;">
                    {{ucfirst($kegiatan->kegiatan[0]->kategori_kegiatan->nama_kegiatan == 'Pangan' ? $kegiatan->kegiatan[0]->keterangan_kegiatan->nama_keterangan :'')}}
                </td>
                <td style="vertical-align: middle;">
                    {{ucfirst($kegiatan->kegiatan[0]->kategori_kegiatan->nama_kegiatan == 'Sandang' ? $kegiatan->kegiatan[0]->keterangan_kegiatan->nama_keterangan :'')}}
                </td>
                <td style="vertical-align: middle;">
                    {{ucfirst($kegiatan->kegiatan[0]->kategori_kegiatan->nama_kegiatan == 'Perencanaan Sehat' ? $kegiatan->kegiatan[0]->keterangan_kegiatan->nama_keterangan :'')}}
                </td>
                <td style="vertical-align: middle;">
                    {{ucfirst($kegiatan->kegiatan[0]->kategori_kegiatan->nama_kegiatan == 'Kesehatan' ? $kegiatan->kegiatan[0]->keterangan_kegiatan->nama_keterangan :'')}}
                </td>
                <td style="vertical-align: middle;">
                    {{ucfirst($kegiatan->kegiatan[0]->kategori_kegiatan->nama_kegiatan == 'Lain-lain' ? $kegiatan->kegiatan[0]->keterangan_kegiatan->nama_keterangan :'')}}
                </td> --}}

                @foreach ($kategori_kegiatans as $kategori_kegiatan)
                <td>
                    @if ($data_kegiatan_wargas = $data_warga->kegiatan)
                    <ul>
                        @foreach ($data_kegiatan_wargas as $data_kegiatan_warga)
                        @if ($data_kegiatan_warga->kategori_kegiatan->id === $kategori_kegiatan->id)
                        <li>{{ $data_kegiatan_warga->keterangan_kegiatan->nama_keterangan }}</li>
                        @endif
                        @endforeach
                    </ul>
                    @endif
                </td>
                @endforeach
            </tr>
            @endforeach

            <?php $no++ ;?>
        </tbody>
    </table>
</div>

// $catatan_keluarga = DB::table('data_keluarga')
// ->select(
// 'id',
// 'dasa_wisma','jumlah_KK','laki_laki', 'perempuan',
// 'jumlah_balita_laki','jumlah_balita_perempuan', 'jumlah_3_buta',
// 'jumlah_PUS','jumlah_WUS','jumlah_ibu_hamil', 'jumlah_ibu_menyusui',
// 'jumlah_lansia', 'jumlah_kebutuhan', 'kriteria_rumah', 'punya_tempat_sampah', 'punya_saluran_air',
// 'punya_jamban', 'tempel_stiker', 'sumber_air', 'makanan_pokok', 'aktivitas_UP2K',
// 'rt', 'rw', 'periode')
// ->where('id_desa', $user->id_desa)
// ->distinct()
// ->get();
// $dasa_wismas = DB::table('data_keluarga')->select('dasa_wisma')->distinct();

// $rekap = DB::table('data_keluarga')
// ->join('data_desa', 'data_desa.id', '=', 'data_keluarga.id_desa')
// ->select('dasa_wisma', 'rt','rw', 'periode', 'nama_desa')->distinct()->where('dasa_wisma',
$request->query('dasa_wisma'))
// ->get();

// $catatan_keluarga = DataKeluarga::
// leftjoin('data_pemanfaatan_pekarangan', 'data_pemanfaatan_pekarangan.id_keluarga', '=', 'data_keluarga.id')
// ->leftjoin('data_industri_rumah', 'data_industri_rumah.id_keluarga', '=', 'data_keluarga.id')
// ->leftjoin('data_kegiatan_warga', 'data_keluarga.id', '=', 'data_kegiatan_warga.id_keluarga')
// ->leftjoin('kategori_kegiatan', 'data_kegiatan_warga.id_kategori', '=', 'kategori_kegiatan.id')

// ->select(
// 'data_keluarga.*', 'data_pemanfaatan_pekarangan.*','data_pemanfaatan_pekarangan.id_keluarga as kategori_pemanfaatan',
// 'data_industri_rumah.*', 'data_kegiatan_warga.*', 'kategori_kegiatan.*'
// )
// ->get();


// $rekap

// $rekap = DB::table('data_warga')
// ->join('data_desa', 'data_desa.id', '=', 'data_warga.id_desa')
// ->select('alamat', 'periode', 'nama_desa')->distinct()
// ->get();
// $catatan_keluarga = DataWarga::query()
// ->with([
// 'kegiatan',
// 'kegiatan.kategori_kegiatan',
// 'kegiatan.keterangan_kegiatan',
// 'keluarga'
// ])->get();