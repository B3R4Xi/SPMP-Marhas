<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMapel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_mapel', function (Blueprint $table) {
             $table->foreign('tingkat_mapel_id')->references('id')
            ->on('tbl_tingkat')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('semester_id')->references('id')
            ->on('tbl_semester')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('jenis_mapel_id')->references('id')
            ->on('tbl_jenis_mapel')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->id('id_mapel');
            $table->string('kode_mapel');
            $table->string('nama_mapel');
            $table->bigInteger('tingkat_mapel_id')->unsigned()->nullable();
            $table->bigInteger('semester_id')->unsigned()->nullable();
            $table->integer('jumlah_jam')->unsigned()->nullable();
            $table->bigInteger('jenis_mapel_id')->unsigned()->nullable();
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
        Schema::dropIfExists('tbl_mapel');
    }
}
