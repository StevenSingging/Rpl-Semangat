<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function js(){
        return $this->belongsTo(JenisSurat::class, 'jenis_id', 'id');
    }
    public function pj(){
        return $this->belongsTo(Pejabat::class, 'pejabat_id', 'id');
    }
}
