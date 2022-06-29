<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('email_perusahaan')->unique();

            $table->string('kd_kab')->nullable();
            $table->string('kab')->nullable();
            $table->string('kd_kec')->nullable();
            $table->string('kec')->nullable();
            $table->string('kd_desa')->nullable();
            $table->string('desa')->nullable();
            $table->string('alamat_kantor')->nullable();
            $table->string('telepon_perusahaan')->nullabel();

            $table->string('alamat_pusat')->nllable();
            $table->string('email_pusat')->nullable();
            $table->string('telepon_pusat')->nullabel();

            $table->string('cp_nama')->nullable();
            $table->string('cp_no_hp')->nullable();

            $table->string('produksi_utama')->nullable();

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
        Schema::dropIfExists('perusahaan');
    }
}
