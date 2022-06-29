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
            $table->string('id_perusahaan');
            $table->string('id_user');
            $table->string('tahun', 5);
            $table->string('tipe_form');

            $table->string('email');

            $table->string('kip')->nullable();

            $table->string('kd_prov', 5);
            $table->string('provinsi', 30);
            $table->string('kd_kab', 5);
            $table->string('kabkot', 50);
            $table->string('kd_kec', 5);
            $table->string('kecamatan', 50);
            $table->string('kd_desa', 5);
            $table->string('kelurahan', 50);

            $table->string('nama_perusahaan')->nullable();
            $table->string('alamat_perusahaan')->nullable();
            $table->string('kode_pos_perusahaan', 6)->nullable();
            $table->string('email_perusahaan')->nullable();
            $table->string('phone_perusahaan')->nullable();
            $table->string('fax_perusahaan')->nullable();
            $table->string('alamat_pusat')->nullable();
            $table->string('kode_pos_pusat', 6)->nullable();
            $table->string('email_pusat')->nullable();
            $table->string('phone_pusat')->nullable();
            $table->string('fax_pusat')->nullable();

            $table->string('kbli', 6)->nullable();
            $table->string('bentuk_kerjasama', 2)->nullable();
            $table->integer('pemodalan_pem_pusat')->nullable();
            $table->integer('pemodalan_pem_daerah')->nullable();
            $table->integer('pemodalan_swasta')->nullable();
            $table->integer('pemodalan_asing')->nullable();
            $table->integer('pemodalan_jumlah')->nullable();

            $table->string('pemegang_saham_1_nama')->nullable();
            $table->string('pemegang_saham_1_negara')->nullable();
            $table->integer('pemegang_saham_1_share')->nullable();
            $table->string('pemegang_saham_2_nama')->nullable();
            $table->string('pemegang_saham_2_negara')->nullable();
            $table->integer('pemegang_saham_2_share')->nullable();
            $table->string('pemegang_saham_3_nama')->nullable();
            $table->string('pemegang_saham_3_negara')->nullable();
            $table->integer('pemegang_saham_3_share')->nullable();
            $table->string('pemegang_saham_4_nama')->nullable();
            $table->string('pemegang_saham_4_negara')->nullable();
            $table->integer('pemegang_saham_4_share')->nullable();
            $table->string('pemegang_saham_5_nama')->nullable();
            $table->string('pemegang_saham_5_negara')->nullable();
            $table->integer('pemegang_saham_5_share')->nullable();

            $table->integer('pekerja_lakilaki')->nullable();
            $table->integer('pekerja_perempuan')->nullable();
            $table->integer('pekerja_jenis_kelamin_jumlah')->nullable();

            $table->integer('pekerja_sltp')->nullable();
            $table->integer('pekerja_slta')->nullable();
            $table->integer('pekerja_diploma')->nullable();
            $table->integer('pekerja_sarjana')->nullable();
            $table->integer('pekerja_pascasarjana')->nullable();
            $table->integer('pekerja_pendidikan_jumlah')->nullable();

            $table->integer('pekerja_asing')->nullable();
            $table->integer('pekerja_outsourcing')->nullable();

            $table->bigInteger('gaji_pk_tetap')->nullable();
            $table->bigInteger('gaji_pk_kontrak')->nullable();
            $table->bigInteger('lembur_pk_tetap')->nullable();
            $table->bigInteger('lembur_pk_kontrak')->nullable();
            $table->bigInteger('transport_pk_tetap')->nullable();
            $table->bigInteger('transport_pk_kontrak')->nullable();
            $table->bigInteger('bonus_pk_tetap')->nullable();
            $table->bigInteger('bonus_pk_kontrak')->nullable();
            $table->bigInteger('pensiun_pk_tetap')->nullable();
            $table->bigInteger('pensiun_pk_kontrak')->nullable();
            $table->bigInteger('asuransi_pk_tetap')->nullable();
            $table->bigInteger('asuransi_pk_kontrak')->nullable();
            $table->bigInteger('jumlah_balas_jasa_pk_tetap')->nullable();
            $table->bigInteger('jumlah_balas_jasa_pk_kontrak')->nullable();

            $table->bigInteger('biaya_outsourcing')->nullable();
            $table->bigInteger('biaya_pengurasan')->nullable();
            $table->bigInteger('biaya_angkutan')->nullable();
            $table->bigInteger('biaya_penyimpanan')->nullable();
            $table->bigInteger('biaya_subkontrak')->nullable();
            $table->bigInteger('biaya_jumlah_produksi')->nullable();

            $table->integer('pengeluaran_sukucadang')->nullable();
            $table->integer('pengeluaran_atk')->nullable();
            $table->integer('pengeluaran_peralatan_setahun')->nullable();
            $table->integer('pengeluaran_sewa_kendaraan')->nullable();
            $table->integer('pengeluaran_sewa_tanah')->nullable();
            $table->integer('pengeluaran_jasa_lain')->nullable();
            $table->integer('pengeluaran_asuransi')->nullable();
            $table->integer('pengeluaran_angkutan')->nullable();
            $table->integer('pengeluaran_pergudangan')->nullable();
            $table->integer('pengeluaran_pos')->nullable();
            $table->integer('pengeluaran_perjalanan')->nullable();
            $table->integer('pengeluaran_bunga_pinjaman')->nullable();
            $table->integer('pengeluaran_ppn')->nullable();
            $table->integer('pengeluaran_pph')->nullable();
            $table->integer('pengeluaran_pajak_lain')->nullable();
            $table->integer('pengeluaran_penyusutan')->nullable();
            $table->integer('pengeluaran_jasa_akuntan')->nullable();
            $table->integer('pengeluaran_pendidikan')->nullable();
            $table->integer('pengeluaran_lainnya')->nullable();
            $table->integer('pengeluaran_jumlah')->nullable();
            $table->integer('pengeluaran_eksplorasi')->nullable();
            $table->integer('pengeluaran_pemulihan')->nullable();
            $table->integer('pengeluaran_penelitian')->nullable();

            $table->integer('bb_avgas_volume')->nullable();
            $table->integer('bb_avgas_nilai')->nullable();
            $table->integer('bb_avtur_volume')->nullable();
            $table->integer('bb_avtur_nilai')->nullable();
            $table->integer('bb_bensin_volume')->nullable();
            $table->integer('bb_bensin_nilai')->nullable();
            $table->integer('bb_solar_volume')->nullable();
            $table->integer('bb_solar_nilai')->nullable();
            $table->integer('bb_diesel_volume')->nullable();
            $table->integer('bb_diesel_nilai')->nullable();
            $table->integer('bb_minyaktanah_volume')->nullable();
            $table->integer('bb_minyaktanah_nilai')->nullable();
            $table->integer('bb_elpiji_volume')->nullable();
            $table->integer('bb_elpiji_nilai')->nullable();
            $table->integer('bb_gasalam_volume')->nullable();
            $table->integer('bb_gasalam_nilai')->nullable();
            $table->integer('bb_minyakbakar_volume')->nullable();
            $table->integer('bb_minyakbakar_nilai')->nullable();
            $table->integer('bb_batubara_volume')->nullable();
            $table->integer('bb_batubara_nilai')->nullable();
            $table->integer('bb_lainnnya_nilai')->nullable();
            $table->integer('bb_pelumas_volume')->nullable();
            $table->integer('bb_pelumas_nilai')->nullable();
            $table->integer('bb_jumlah_nilai')->nullable();

            $table->integer('garam_volume')->nullable();
            $table->integer('garam_nilai')->nullable();


            $table->integer('kapasitas_pembangkit_listrik_volume')->nullable();
            $table->integer('produksi_listrik_volume')->nullable();
            $table->integer('produksi_listrik_nilai')->nullable();
            $table->integer('bb_listrik_solar_volume')->nullable();
            $table->integer('bb_listrik_solar_nilai')->nullable();
            $table->integer('bb_listrik_batubara_volume')->nullable();
            $table->integer('bb_listrik_batubara_nilai')->nullable();
            $table->integer('bb_listrik_gasalam_volume')->nullable();
            $table->integer('bb_listrik_gasalam_nilai')->nullable();
            $table->integer('listrik_dibeli_volume')->nullable();
            $table->integer('listrik_dibeli_nilai')->nullable();
            $table->integer('listrik_dijual_volume')->nullable();
            $table->integer('listrik_dijual_nilai')->nullable();

            $table->integer('minyak_mentah_stok_awal')->nullable();
            $table->integer('minyak_mentah_produksi')->nullable();
            $table->integer('minyak_mentah_penjualan')->nullable();
            $table->integer('minyak_mentah_hilang')->nullable();
            $table->integer('minyak_mentah_stok_akhir')->nullable();

            $table->integer('kondensat_stok_awal')->nullable();
            $table->integer('kondensat_produksi')->nullable();
            $table->integer('kondensat_penjualan')->nullable();
            $table->integer('kondensat_hilang')->nullable();
            $table->integer('kondensat_stok_akhir')->nullable();

            $table->integer('gas_bumi_stok_awal')->nullable();
            $table->integer('gas_bumi_produksi')->nullable();
            $table->integer('gas_bumi_penjualan')->nullable();
            $table->integer('gas_bumi_hilang')->nullable();
            $table->integer('gas_bumi_stok_akhir')->nullable();

            $table->integer('pendapatan_jasa_penambangan')->nullable();
            $table->integer('pendapatan_jasa_transportasi')->nullable();
            $table->integer('pendapatan_penyewaan')->nullable();
            $table->integer('pendapatan_lainnya')->nullable();
            $table->integer('pendapatan_jumlah')->nullable();

            $table->string('pj_dokumen_nama')->nullable();
            $table->string('pj_dokumen_jabatan')->nullable();
            $table->string('pj_dokumen_email')->nullable();
            $table->string('pemberi_keterangan_nama')->nullable();
            $table->string('pemberi_keterangan_jabatan')->nullable();
            $table->string('pemberi_keterangan_telp')->nullable();
            $table->string('pemberi_keterangan_fax')->nullable();
            $table->string('pemberi_keterangan_email')->nullable();

            $table->string('pencacah_nama')->nullable();
            $table->string('pencacah_jabatan')->nullable();
            $table->string('pencacah_no_hp')->nullable();
            $table->string('pencacah_tanggal')->nullable();
            $table->string('pengawas_nama')->nullable();
            $table->string('pengawas_jabatan')->nullable();
            $table->string('pengawas_no_hp')->nullable();
            $table->string('pengawas_tanggal')->nullable();

            $table->string('catatan_petugas')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
        Schema::table('survey', function (Blueprint $table) {
            $table->unique(["tahun", "nama_perusahaan"], 'identifikasi');
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
