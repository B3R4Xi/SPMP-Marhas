<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblWaktu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_waktu', function (Blueprint $table) {
            $table->id();
            $table->string('kode_waktu');
            $table->string('waktu_mulai');
            $table->string('waktu_selesai');
            $table->string('range');
            $table->integer('jumlah_jam');
            $table->timestamps();
            // $table->foreign('id')->references('waktu_id')
            // ->on('tbl_timedays')->OnUpdate('CASCADE')->OnDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_waktu');
    }
}
