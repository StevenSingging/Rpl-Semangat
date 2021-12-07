<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pejabat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function pj(){
        return $this->hasMany(PengajuanSurat::class,'pejabat_id','id');
    }
}
