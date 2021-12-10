<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSurat extends Model
{

    //use HasFactory;
    protected $fillable = ['kode_surat','jenis','keterangan'];
    //protected $guarded = ['id'];
    public function js(){
        return $this->hasMany(PengajuanSurat::class,'jenis_id','id');

    }
}
