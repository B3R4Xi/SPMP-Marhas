<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_jadwal', function (Blueprint $table) {
            $table->id();
            $table->integer('teach_id')->unsigned();
            $table->integer('hari_id')->unsigned();
            $table->integer('waktu_id')->unsigned();
            $table->integer('lab_id')->unsigned();
            $table->integer('type');
            $table->double('value');
            $table->string('value_process');
            $table->timestamps();

            $table->foreign('teach_id')->references('id')->on('tbl_teach');
            $table->foreign('hari_id')->references('id')->on('tbl_hari');
            $table->foreign('waktu_id')->references('id')->on('tbl_waktu');
            $table->foreign('lab_id')->references('id')->on('tbl_lab_table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_jadwal');
    }
}
