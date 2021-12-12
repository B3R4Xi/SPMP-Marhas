<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            // $table->foreign('kode_guru')->references('kode_guru')->on('tbl_guru')->onUpdate('CASCADE')->onDelete('CASCADE');
            // $table->foreign('level')->references('id')->on('level')->onUpdate('CASCADE')->onDelete('CASCADE');
            
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->string('alamat');
                $table->string('no_hp');
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->bigInteger('level_id')->unsigned()->nullable();
                $table->rememberToken();
                $table->timestamps();

                $table->foreign('level_id')->references('id')->on('tbl_level')->onUpdate('CASCADE')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_users');
    }
}
