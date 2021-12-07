<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTingkat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tingkat', function (Blueprint $table) {
            $table->id();
            $table->string('tingkat_mapel');
            $table->timestamps();
            // $table->foreign('id')->references('tingkat_mapel_id')
            // ->on('tbl_mapel')->onUpdate('CASCADE')->onDelete('CASCADE');
            // $table->foreign('id')->references('kode_kelas')
            // ->on('tbl_kelas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tingkat');
    }
}
