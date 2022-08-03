<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey', function (Blueprint $table) {
            $table->id();

            $table->string('id_perusahaan', 5);
            $table->string('id_user', 5);
            $table->string('tahun', 5);
            $table->string('tipe_form', 20);

            $table->string('status_skk', 20)->nullable();
            $table->string('status_lainnya', 20)->nullable();

            $table->string('email', 100);
            $table->timestamp('time_restore')->nullable();

            $table->string('kip', 20)->nullable();
            $table->string('kd_prov', 3);
            $table->string('provinsi', 30);
            $table->string('kd_kab', 3);
            $table->string('kabkot', 30);
            $table->string('kd_kec', 4);
            $table->string('kecamatan', 30);
            $table->string('kd_desa', 4);
            $table->string('kelurahan', 30);

            $table->string('nama_perusahaan', 200)->nullable();
            $table->string('alamat_perusahaan', 200)->nullable();
            $table->string('kode_pos_perusahaan', 6)->nullable();
            $table->string('email_perusahaan', 100)->nullable();
            $table->string('phone_perusahaan', 15)->nullable();
            $table->string('fax_perusahaan', 20)->nullable();
            $table->string('alamat_pusat', 200)->nullable();
            $table->string('kode_pos_pusat', 6)->nullable();
            $table->string('email_pusat', 100)->nullable();
            $table->string('phone_pusat', 15)->nullable();
            $table->string('fax_pusat', 20)->nullable();

            $table->string('kbli', 6)->nullable();
            $table->string('bentuk_kerjasama', 2)->nullable();
            $table->integer('pemodalan_pem_pusat')->nullable();
            $table->integer('pemodalan_pem_daerah')->nullable();
            $table->integer('pemodalan_swasta')->nullable();
            $table->integer('pemodalan_asing')->nullable();
            $table->integer('pemodalan_jumlah')->nullable();

            $table->string('pemegang_saham_1_nama', 30)->nullable();
            $table->string('pemegang_saham_1_negara', 30)->nullable();
            $table->integer('pemegang_saham_1_share')->nullable();
            $table->string('pemegang_saham_2_nama', 30)->nullable();
            $table->string('pemegang_saham_2_negara', 30)->nullable();
            $table->integer('pemegang_saham_2_share')->nullable();
            $table->string('pemegang_saham_3_nama', 30)->nullable();
            $table->string('pemegang_saham_3_negara', 30)->nullable();
            $table->integer('pemegang_saham_3_share')->nullable();
            $table->string('pemegang_saham_4_nama', 30)->nullable();
            $table->string('pemegang_saham_4_negara', 30)->nullable();
            $table->integer('pemegang_saham_4_share')->nullable();
            $table->string('pemegang_saham_5_nama', 30)->nullable();
            $table->string('pemegang_saham_5_negara', 30)->nullable();
            $table->integer('pemegang_saham_5_share')->nullable();

            $table->string('pekerja_lakilaki', 10)->nullable();
            $table->string('pekerja_perempuan', 10)->nullable();
            $table->string('pekerja_jenis_kelamin_jumlah', 10)->nullable();

            $table->string('pekerja_sltp', 10)->nullable();
            $table->string('pekerja_slta', 10)->nullable();
            $table->string('pekerja_diploma', 10)->nullable();
            $table->string('pekerja_sarjana', 10)->nullable();
            $table->string('pekerja_pascasarjana', 10)->nullable();
            $table->string('pekerja_pendidikan_jumlah', 10)->nullable();

            $table->string('pekerja_asing', 10)->nullable();
            $table->string('pekerja_outsourcing', 10)->nullable();

            $table->string('gaji_pk_tetap', 20)->nullable();
            $table->string('gaji_pk_kontrak', 20)->nullable();
            $table->string('lembur_pk_tetap', 20)->nullable();
            $table->string('lembur_pk_kontrak', 20)->nullable();
            $table->string('transport_pk_tetap', 20)->nullable();
            $table->string('transport_pk_kontrak', 20)->nullable();
            $table->string('bonus_pk_tetap', 20)->nullable();
            $table->string('bonus_pk_kontrak', 20)->nullable();
            $table->string('pensiun_pk_tetap', 20)->nullable();
            $table->string('pensiun_pk_kontrak', 20)->nullable();
            $table->string('asuransi_pk_tetap', 20)->nullable();
            $table->string('asuransi_pk_kontrak', 20)->nullable();
            $table->string('jumlah_balas_jasa_pk_tetap', 20)->nullable();
            $table->string('jumlah_balas_jasa_pk_kontrak', 20)->nullable();

            $table->string('biaya_outsourcing', 20)->nullable();
            $table->string('biaya_pengurasan', 20)->nullable();
            $table->string('biaya_angkutan', 20)->nullable();
            $table->string('biaya_penyimpanan', 20)->nullable();
            $table->string('biaya_subkontrak', 20)->nullable();
            $table->string('biaya_jumlah_produksi', 20)->nullable();

            $table->string('pengeluaran_sukucadang', 20)->nullable();
            $table->string('pengeluaran_atk', 20)->nullable();
            $table->string('pengeluaran_peralatan_setahun', 20)->nullable();
            $table->string('pengeluaran_sewa_kendaraan', 20)->nullable();
            $table->string('pengeluaran_sewa_tanah', 20)->nullable();
            $table->string('pengeluaran_jasa_lain', 20)->nullable();
            $table->string('pengeluaran_asuransi', 20)->nullable();
            $table->string('pengeluaran_angkutan', 20)->nullable();
            $table->string('pengeluaran_pergudangan', 20)->nullable();
            $table->string('pengeluaran_pos', 20)->nullable();
            $table->string('pengeluaran_perjalanan', 20)->nullable();
            $table->string('pengeluaran_bunga_pinjaman', 20)->nullable();
            $table->string('pengeluaran_ppn', 20)->nullable();
            $table->string('pengeluaran_pph', 20)->nullable();
            $table->string('pengeluaran_pajak_lain', 20)->nullable();
            $table->string('pengeluaran_penyusutan', 20)->nullable();
            $table->string('pengeluaran_jasa_akuntan', 20)->nullable();
            $table->string('pengeluaran_pendidikan', 20)->nullable();
            $table->string('pengeluaran_lainnya', 20)->nullable();
            $table->string('pengeluaran_jumlah', 20)->nullable();
            $table->string('pengeluaran_eksplorasi', 20)->nullable();
            $table->string('pengeluaran_pemulihan', 20)->nullable();
            $table->string('pengeluaran_penelitian', 20)->nullable();

            $table->string('bb_avgas_volume', 20)->nullable();
            $table->string('bb_avgas_nilai', 20)->nullable();
            $table->string('bb_avtur_volume', 20)->nullable();
            $table->string('bb_avtur_nilai', 20)->nullable();
            $table->string('bb_bensin_volume', 20)->nullable();
            $table->string('bb_bensin_nilai', 20)->nullable();
            $table->string('bb_solar_volume', 20)->nullable();
            $table->string('bb_solar_nilai', 20)->nullable();
            $table->string('bb_diesel_volume', 20)->nullable();
            $table->string('bb_diesel_nilai', 20)->nullable();
            $table->string('bb_minyaktanah_volume', 20)->nullable();
            $table->string('bb_minyaktanah_nilai', 20)->nullable();
            $table->string('bb_elpiji_volume', 20)->nullable();
            $table->string('bb_elpiji_nilai', 20)->nullable();
            $table->string('bb_gasalam_volume', 20)->nullable();
            $table->string('bb_gasalam_nilai', 20)->nullable();
            $table->string('bb_minyakbakar_volume', 20)->nullable();
            $table->string('bb_minyakbakar_nilai', 20)->nullable();
            $table->string('bb_batubara_volume', 20)->nullable();
            $table->string('bb_batubara_nilai', 20)->nullable();
            $table->string('bb_lainnnya_nilai', 20)->nullable();
            $table->string('bb_pelumas_volume', 20)->nullable();
            $table->string('bb_pelumas_nilai', 20)->nullable();
            $table->string('bb_jumlah_nilai', 20)->nullable();

            $table->string('garam_volume', 20)->nullable();
            $table->string('garam_nilai', 20)->nullable();


            $table->string('kapasitas_pembangkit_listrik_volume', 20)->nullable();
            $table->string('produksi_listrik_volume', 20)->nullable();
            $table->string('produksi_listrik_nilai', 20)->nullable();
            $table->string('bb_listrik_solar_volume', 20)->nullable();
            $table->string('bb_listrik_solar_nilai', 20)->nullable();
            $table->string('bb_listrik_batubara_volume', 20)->nullable();
            $table->string('bb_listrik_batubara_nilai', 20)->nullable();
            $table->string('bb_listrik_gasalam_volume', 20)->nullable();
            $table->string('bb_listrik_gasalam_nilai', 20)->nullable();
            $table->string('listrik_dibeli_volume', 20)->nullable();
            $table->string('listrik_dibeli_nilai', 20)->nullable();
            $table->string('listrik_dijual_volume', 20)->nullable();
            $table->string('listrik_dijual_nilai', 20)->nullable();

            $table->string('minyak_mentah_stok_awal', 20)->nullable();
            $table->string('minyak_mentah_produksi', 20)->nullable();
            $table->string('minyak_mentah_penjualan', 20)->nullable();
            $table->string('minyak_mentah_hilang', 20)->nullable();
            $table->string('minyak_mentah_stok_akhir', 20)->nullable();

            $table->string('kondensat_stok_awal', 20)->nullable();
            $table->string('kondensat_produksi', 20)->nullable();
            $table->string('kondensat_penjualan', 20)->nullable();
            $table->string('kondensat_hilang', 20)->nullable();
            $table->string('kondensat_stok_akhir', 20)->nullable();

            $table->string('gas_bumi_stok_awal', 20)->nullable();
            $table->string('gas_bumi_produksi', 20)->nullable();
            $table->string('gas_bumi_penjualan', 20)->nullable();
            $table->string('gas_bumi_hilang', 20)->nullable();
            $table->string('gas_bumi_stok_akhir', 20)->nullable();

            $table->string('pendapatan_jasa_penambangan', 20)->nullable();
            $table->string('pendapatan_jasa_transportasi', 20)->nullable();
            $table->string('pendapatan_penyewaan', 20)->nullable();
            $table->string('pendapatan_lainnya', 20)->nullable();
            $table->string('pendapatan_jumlah', 20)->nullable();

            $table->string('pj_dokumen_nama', 50)->nullable();
            $table->string('pj_dokumen_jabatan', 30)->nullable();
            $table->string('pj_dokumen_email', 50)->nullable();
            $table->string('pemberi_keterangan_nama', 50)->nullable();
            $table->string('pemberi_keterangan_jabatan', 30)->nullable();
            $table->string('pemberi_keterangan_telp', 20)->nullable();
            $table->string('pemberi_keterangan_fax', 20)->nullable();
            $table->string('pemberi_keterangan_email', 50)->nullable();

            $table->string('pencacah_nama', 50)->nullable();
            $table->string('pencacah_jabatan', 30)->nullable();
            $table->string('pencacah_no_hp', 10)->nullable();
            $table->string('pencacah_tanggal', 20)->nullable();
            $table->string('pengawas_nama', 50)->nullable();
            $table->string('pengawas_jabatan', 30)->nullable();
            $table->string('pengawas_no_hp', 20)->nullable();
            $table->string('pengawas_tanggal', 20)->nullable();
            $table->text('catatan_petugas')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
        Schema::table('survey', function (Blueprint $table) {
            $table->unique(["tahun", "id_perusahaan", "id_user", "tipe_form"], 'identifikasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey');
    }
}
