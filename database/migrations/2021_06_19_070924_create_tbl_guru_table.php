<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_guru', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->bigInteger('nip');
            $table->string('kode_guru');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('email');
            $table->timestamps();
            // $table->foreign('id')->references('id_guru')
            // ->on('tbl_teach')->OnUpdate('CASECADE')->OnDelete('CASECADE');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_guru');
    }
}
