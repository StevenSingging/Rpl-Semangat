<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToPengajuanSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengajuan_surats', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->nullable();
            $table->foreign('jenis_id')->references('id')->on('jenis_surats')->nullable();
            $table->foreign('pejabat_id')->references('id')->on('pejabats')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /*public function down()
    {
        Schema::table('pengajuan_surats', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['jenis_id']);
            $table->dropForeign(['pejabat_id']);
        });
    }*/
}
