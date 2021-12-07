<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblJenisMapel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_jenis_mapel', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_mapel');
            $table->timestamps();
            // $table->foreign('id')->references('jenis_mapel_id')
            // ->on('tbl_mapel')->onUpdate('CASCADE')->onDelete('CASCADE');
            // $table->foreign('id')->references('jenis_lab_id')
            // ->on('tbl_lab')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_jenis_mapel');
    }
}
