<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('kd_kab')->nullable();
            $table->string('level')->nullable();
            $table->string('kd_kec')->nullable();
            $table->string('kec')->nullable();
            $table->string('kd_desa')->nullable();
            $table->string('desa')->nullable();
            $table->string('alamat_kantor')->nullable();
            $table->string('alamat_pusat')->nullable();
            $table->string('cp_nama')->nullable();
            $table->string('cp_no_hp')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('users');
    }
}
