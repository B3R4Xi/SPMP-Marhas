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
            $table->id();
            $table->string('kode_guru');
            $table->integer('NIP');
            $table->string('nama');
            $table->string('alamat');
            $table->integer('no_hp');
            $table->string('email');
            $table->string('foto');
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
