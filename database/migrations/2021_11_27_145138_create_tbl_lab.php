<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblLab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_lab', function (Blueprint $table) {
            $table->id();
            $table->string('kode_lab');
            $table->string('nama_lab');
            $table->integer('kapasitas');
            $table->bigInteger('jenis_lab_id')->unsigned()->nullable();
            $table->timestamps();
            
            $table->foreign('jenis_lab_id')->references('id')
            ->on('tbl_jenis_mapel')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_lab');
    }
}
