<?php

namespace App\Models;
use DB;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    //use HasFactory;
    //protected $fillable = ['user_id','jenis_id','pejabat_id','tanggal','nomor_surat','nama_mitra','sebagai','alamat_mitra','keterangan','status','validasi','ni_ang[]','nama_ang[]'];
    protected $guarded = ['id'];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function js(){
        return $this->belongsTo(JenisSurat::class,'jenis_id','id');
    }
    public function pj(){
        return $this->belongsTo(Pejabat::class,'pejabat_id','id');
    }
    public function alldata(){
        return DB::table('pengajuansurats')->get()->first();
    }
}
