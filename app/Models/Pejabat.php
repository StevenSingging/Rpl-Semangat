<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pejabat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function pejabat_jadi(){
        return $this->belongsToMany(SuratJadi::class);
    }
}
