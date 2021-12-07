<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pejabat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function pj(){
<<<<<<< HEAD
        return $this->hasMany(PengajuanSurat::class,'pejabat_id','id');
=======
        return $this->hasMany(PengajuanSurat::class,'id');
>>>>>>> 9c161e039e2f7d9175f16a85a899b53f492332a7
    }
}
