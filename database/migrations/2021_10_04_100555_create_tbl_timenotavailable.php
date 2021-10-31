<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTimenotavailable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_timenotavailable', function (Blueprint $table) {
            $table->id();
            $table->integer('guru_id')->unsigned()->nullable();
            $table->integer('hari_id')->unsigned()->nullable();
            $table->integer('waktu_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('guru_id')->references('id')->on('tbl_guru')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('hari_id')->references('id')->on('tbl_hari')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('waktu_id')->references('id')->on('tbl_hari')->onUpdate('CASCADE')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_timenotavailable');
    }
}
