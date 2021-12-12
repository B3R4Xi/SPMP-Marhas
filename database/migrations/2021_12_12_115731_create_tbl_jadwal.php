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
            $table->bigInteger('teach_id')->unsigned();
            $table->bigInteger('hari_id')->unsigned();
            $table->bigInteger('waktu_id')->unsigned();
            $table->bigInteger('lab_id')->unsigned();
            $table->integer('type');
            $table->double('value')->nullable();
            $table->string('value_process')->nullable();
            $table->timestamps();

            $table->foreign('teach_id')->references('id')->on('tbl_teach')
            ->OnUpdate('CASCADE')->OnDelete('CASCADE');
            $table->foreign('hari_id')->references('id')->on('tbl_hari')
            ->OnUpdate('CASCADE')->OnDelete('CASCADE');
            $table->foreign('waktu_id')->references('id')->on('tbl_waktu')
            ->OnUpdate('CASCADE')->OnDelete('CASCADE');
            $table->foreign('lab_id')->references('id')->on('tbl_lab')
            ->OnUpdate('CASCADE')->OnDelete('CASCADE');
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
