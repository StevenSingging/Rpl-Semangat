<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    protected $table = "pengajuan_surat";
    protected $primaryKey = "id";
    protected $fillable = ['niuser','tanggal','tujuan_surat','nama_mitra','alamat_mitra','keterangan','status'];
    protected $hidden = [];
    public function role(){
        return $this->belongsTo('App\User');
    }
}
