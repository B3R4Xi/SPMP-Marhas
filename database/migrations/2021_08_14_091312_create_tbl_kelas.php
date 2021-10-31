<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kelas', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_kelas')->unsigned()->nullable();
            $table->string('nama_kelas');
            $table->timestamps();
      

            $table->foreign('kode_kelas')->references('id')->on('tbl_tingkat')->onUpdate('CASCADE')->onDelete('CASCADE');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_kelas');
    }
}
