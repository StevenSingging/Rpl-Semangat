<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSurat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function jenis_surat_jadi(){
        return $this->belongsToMany(SuratJadi::class);
    }
}
