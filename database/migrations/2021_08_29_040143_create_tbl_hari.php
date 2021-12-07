<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblHari extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_hari', function (Blueprint $table) {
            $table->id();
            $table->string('kode_hari');
            $table->string('nama_hari');
            $table->timestamps();
            // $table->foreign('id')->references('hari_id')
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
        Schema::dropIfExists('tbl_hari');
    }
}
