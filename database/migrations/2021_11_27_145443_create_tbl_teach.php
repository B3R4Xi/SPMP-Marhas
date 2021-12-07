<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTeach extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_teach', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_mapel')->unsigned()->nullable();
            $table->bigInteger('id_guru')->unsigned()->nullable();
            $table->bigInteger('id_kelas')->unsigned()->nullable();
            $table->string('tahun_ajaran');
            $table->integer('id_tingkat')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('id_mapel')->references('id_mapel')
            ->on('tbl_mapel')->OnUpdate('CASECADE')->OnDelete('CASECADE');
            $table->foreign('id_guru')->references('id')
            ->on('tbl_guru')->OnUpdate('CASECADE')->OnDelete('CASECADE');
            $table->foreign('id_kelas')->references('id')
            ->on('tbl_kelas')->OnUpdate('CASECADE')->OnDelete('CASECADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_teach');
    }
}
