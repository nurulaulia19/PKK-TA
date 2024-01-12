<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_desa
 * @property int $id_kecamatan
 * @property string $dasa_wisma
 * @property string $nama_kepala_rumah_tangga
 * @property string $nik_kepala_keluarga
 * @property int $id_user
 * @property string $dusun
 * @property int $jumlah_anggota_keluarga
 * @property int $rt
 * @property int $rw
 * @property string $kota
 * @property string $provinsi
 * @property null|int $laki_laki
 * @property null|int $perempuan
 * @property int $jumlah_KK
 * @property null|int $jumlah_balita
 * @property null|int $jumlah_balita_laki
 * @property null|int $jumlah_balita_perempuan
 * @property null|int $jumlah_PUS
 * @property null|int $jumlah_WUS
 * @property null|int $jumlah_3_buta
 * @property null|int $jumlah_3_buta_laki
 * @property null|int $jumlah_3_buta_perempuan
 * @property null|int $jumlah_ibu_hamil
 * @property null|int $jumlah_ibu_menyusui
 * @property null|int $jumlah_lansia
 * @property null|int $jumlah_kebutuhan
 * @property string $makanan_pokok
 * @property string $punya_jamban
 * @property int $jumlah_jamban
 * @property int $sumber_air
 * @property int $punya_tempat_sampah
 * @property int $punya_saluran_air
 * @property int $tempel_stiker
 * @property int $kriteria_rumah
 * @property int $aktivitas_UP2K
 * @property int $aktivitas_kegiatan_usaha
 * @property int $periode
 * @property null|string $created_at
 * @property null|string $updated_at
 *
 * @property-read string $dasa_wisma_id
 * @property-read int $have_kegiatan
 * @property-read int $have_industri
 * @property-read int $have_pemanfaatan
 * @property-read Collection<DataIndustriRumah> $industri
 * @property-read null|DataWarga $kepalaKeluarga
 * @property-read Collection<DataPemanfaatanPekarangan> $pemanfaatan
 */
class DataKeluarga extends Model
{
    use HasFactory;

    protected $table = "data_keluarga";
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    // protected $fillable = [
    //    'id_desa','id_kecamatan', 'id_user','nama_kepala_rumah_tangga', 'nik_kepala_keluarga', 'dasa_wisma', 'kota', 'provinsi', 'rt', 'rw', 'jumlah_anggota_keluarga',
    //    'laki_laki', 'perempuan', 'jumlah_KK', 'jumlah_balita', 'jumlah_balita_laki', 'jumlah_balita_perempuan','jumlah_PUS', 'jumlah_WUS', 'jumlah_3_buta',
    //    'jumlah_3_buta_laki','jumlah_3_buta_perempuan', 'jumlah_ibu_hamil', 'jumlah_ibu_menyusui','jumlah_lansia', 'jumlah_kebutuhan', 'makanan_pokok', 'punya_jamban',
    //    'jumlah_jamban', 'sumber_air', 'punya_tempat_sampah', 'punya_saluran_air', 'tempel_stiker', 'kriteria_rumah', 'aktivitas_UP2K', 'aktivitas_kegiatan_usaha', 'periode'
    // ];

    /**
     * @return string
     */
    public function getDasaWismaIdAttribute()
    {
        return join('-', [
            $this->id_kecamatan,
            $this->id_desa,
            $this->dusun,
            $this->rw,
            $this->rt,
            $this->dasawisma ? $this->dasawisma->nama_dasawisma : '',
        ]);
    }

    public function getHaveKegiatanAttribute()
    {
        $have = 0;

        if ($kepalaKeluarga = $this->kepalaKeluarga) {
            if ($kepalaKeluarga->kegiatan->count() > 0) {
                $have = 1;
            }
        }

        return $have;
    }

    public function getHaveIndustriAttribute()
    {
        $have = 0;

        if ($this->industri->count() > 0) {
            $have = 1;
        }

        return $have;
    }

    public function getHavePemanfaatanAttribute()
    {
        $have = 0;

        if ($this->industri->count() > 0) {
            $have = 1;
        }

        return $have;
    }

    public function getKepalaKeluargaKegiatans()
    {
        /** @var Collection<DataKegiatanWarga> */
        $kegiatans = new Collection();

        if ($kepalaKeluarga = $this->kepalaKeluarga) {
            $kegiatans = $kepalaKeluarga->kegiatan;
        }

        return $kegiatans;
    }

    public function getRekap()
    {

    }

    public function kecamatan(){
        return $this->belongsTo(DataKecamatan::class, 'id_kecamatan');
    }

    public function kepalaKeluarga()
    {
        return $this->belongsTo(DataWarga::class, 'nik_kepala_keluarga', 'no_ktp');
    }

    public function desa(){
        return $this->belongsTo(Data_Desa::class, 'id_desa');
    }

    // public function warga(){
    //     return $this->belongsTo(DataWarga::class, 'id_warga');
    // }

    public function warga(){
        return $this->hasMany(DataWarga::class, 'id_keluarga');
    }

    // data_pemanfaatan
    public function pemanfaatan(){
        return $this->hasMany(DataPemanfaatanPekarangan::class, 'id_keluarga');
    }

     // data_pemanfaatan
     public function industri(){
        return $this->hasMany(DataIndustriRumah::class, 'id_keluarga');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function dasawisma(){
        return $this->belongsTo(DataKelompokDasawisma::class, 'id_dasawisma');
    }
}