<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTimedays extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_timedays', function (Blueprint $table) {
            $table->id();
            $table->string('kode_timedays');
            $table->bigInteger('hari_id')->unsigned()->nullable();
            $table->bigInteger('waktu_id')->unsigned()->nullable();
            $table->timestamps();


            $table->foreign('hari_id')->references('id')
            ->on('tbl_hari')->OnUpdate('CASCADE')->OnDelete('CASCADE');
            $table->foreign('waktu_id')->references('id')
            ->on('tbl_waktu')->OnUpdate('CASCADE')->OnDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_timedays');
    }
}
