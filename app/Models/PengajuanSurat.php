<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    protected $table = "pengajuan_surat";
    protected $primaryKey = "id";
    protected $fillable = ['nomor_surat','niuser','tanggal','tujuan_surat','nama_mitra','alamat_mitra','keterangan','status','validasi'];
    protected $hidden = [];
}
