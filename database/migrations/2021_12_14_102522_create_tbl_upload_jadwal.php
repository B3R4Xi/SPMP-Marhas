<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUploadJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_upload_jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->string('waktu');
            $table->string('pengajar');
            $table->string('mata_pelajaran');
            $table->string('kelas');
            $table->string('ruangan');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_upload_jadwal');
    }
}
