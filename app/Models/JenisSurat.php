<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSurat extends Model
{
<<<<<<< HEAD
    //use HasFactory;
    protected $fillable = ['kode_surat','jenis','keterangan'];
    //protected $guarded = ['id'];
    public function js(){
        return $this->hasMany(PengajuanSurat::class,'jenis_id','id');
=======
    use HasFactory;
    protected $guarded = ['id'];
    public function js(){
        return $this->hasMany(PengajuanSurat::class, 'id');
>>>>>>> 9c161e039e2f7d9175f16a85a899b53f492332a7
    }
}
