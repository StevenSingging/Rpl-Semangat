<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_surats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
           
            $table->unsignedBigInteger('jenis_id');
            
            $table->unsignedBigInteger('pejabat_id');
            
            $table->string('nomor_surat');
            $table->date('tanggal');
            $table->string('nama_mitra');
            $table->string('alamat_mitra');
            $table->string('keterangan');
            $table->string('status');
            $table->string('validasi');
            $table->string('ni_ang');
            $table->string('nama_ang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_surats');
    }
}
