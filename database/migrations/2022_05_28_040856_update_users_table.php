<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('users', function (Blueprint $table) {
               $table->renameColumn('nama','nama');
               $table->renameColumn('level','divisi_fungsi');
               $table->dropColumn('kd_kab');
               $table->dropColumn('kd_kec');
               $table->dropColumn('kd_desa');
               $table->dropColumn('kec');
               $table->dropColumn('desa');
               $table->dropColumn('alamat_kantor');
               $table->dropColumn('alamat_pusat');
               $table->dropColumn('cp_nama');
               $table->renameColumn('cp_no_hp', 'no_hp');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
