<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jasa extends Model
{
     protected $fillable = [
        'photo',
        'photo2',
        'photo3',
        'photo4',
        'nama_paket',
        'kategori',
        'kategori1',
        'kategori2',
        'spesialisasi',
        'bidang_spesialisasi',
        'izin_praktik',
        'konsultasi',
        'khusus_layanan',
        'obat',
        'hari_senin','jam_buka_senin','zona_waktu_buka_senin','jam_tutup_senin','zona_waktu_tutup_senin',
        'hari_selasa','jam_buka_selasa','zona_waktu_buka_selasa','jam_tutup_selasa','zona_waktu_tutup_selasa',
        'hari_rabu','jam_buka_rabu','zona_waktu_buka_rabu','jam_tutup_rabu','zona_waktu_tutup_rabu',
        'hari_kamis','jam_buka_kamis','zona_waktu_buka_kamis','jam_tutup_kamis','zona_waktu_tutup_kamis',
        'hari_jumat','jam_buka_jumat','zona_waktu_buka_jumat','jam_tutup_jumat','zona_waktu_tutup_jumat',
        'hari_sabtu','jam_buka_sabtu','zona_waktu_buka_sabtu','jam_tutup_sabtu','zona_waktu_tutup_sabtu',
        'hari_minggu','jam_buka_minggu','zona_waktu_buka_minggu','jam_tutup_minggu','zona_waktu_tutup_minggu','keterangan_libur',

        'gelar_pendidikan',
        'nama_universitas',
        'bahasa_indonesia',
        'bahasa_inggris',
        'bahasa_mandarin',
        'bahasa_jepang',
        'lama_pengalaman',
        'waktu_lama_pengalaman',
        'usia',
        'jenis_kelamin',
        'kelurahan',
        'kecamatan',
        'kabupaten_kota',
        'provinsi',
        'kode_pos',
        'deskripsi_pelayanan',
        'jumlah_paket',
        'value',
        'harga',
        'waktu',
        'perusahaan',
        'nama_perusahaan',
        'bentuk_perusahaan',
        'alat_medis',
        'kelegalan_usaha',
        'ujian_sertifikasi',
        'status_ujian_sertifikasi',
        'lama_pelayanan',
        'waktu_lama_pelayanan',
        'lokasi_ditawarkan'

    ];

    protected $casts = [
        'khusus_layanan' => 'array',
    ];

   
    use SoftDeletes;
    protected $dates =['deleted_at'];
}



           
           
           
        
          
          
         
          
        
      