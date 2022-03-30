<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use phpDocumentor\Reflection\Types\Boolean;

class SurveyController extends Controller
{


    public function index(){
        return 'ok';
    }

    public function create(){
        $tahun = 2022;
        $user = Auth::user();
        $sur= Survey::where('tahun',$tahun)->where('email',$user->email )->first();
        if($sur){
            return redirect()->back()->with('error', 'Sudah Pernah Mengisi');
        }


        $survey = new Survey();
        return view('create',compact('tahun', 'survey', 'user'));
    }

    public function store(Request $request){
        $survey = Survey::insert(
            [
                'tahun' => $request->tahun,
                'email' => $request->email,
                'kip' => $request->kip,

                'provinsi' => $request->provinsi,
                'kabkot' =>  $request->kabkot,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,

                'nama_perusahaan' => $request->nama_perusahaan,
                'alamat_perusahaan' => $request->alamat_perusahaan,
                'kode_pos_perusahaan' => $request->kode_pos_perusahaan,
                'email_perusahaan' => $request->email_perusahaan,
                'phone_perusahaan' => $request->phone_perusahaan,
                'fax_perusahaan' => $request->fax_perusahaan,
                'alamat_pusat' => $request->alamat_pusat,
                'kode_pos_pusat' => $request->kode_pos_pusat,
                'email_pusat' => $request->email_pusat,
                'phone_pusat' => $request->phone_pusat,
                'fax_pusat' => $request->fax_pusat,

                'kbli' => $request->kbli,
                'bentuk_kerjasama' => $request->bentuk_kerjasama,
                'pemodalan_pem_pusat' => $request->pemodalan_pem_pusat,
                'pemodalan_pem_daerah' => $request->pemodalan_pem_daerah,
                'pemodalan_swasta' => $request->pemodalan_swasta,
                'pemodalan_asing' => $request->pemodalan_asing,
                'pemodalan_jumlah' => $request->pemodalan_jumlah,

                'pemegang_saham_1_nama' => $request->pemegang_saham_1_nama,
                'pemegang_saham_1_negara' => $request->pemegang_saham_1_negara,
                'pemegang_saham_1_share' => $request->pemegang_saham_1_share,
                'pemegang_saham_2_nama' => $request->pemegang_saham_2_nama,
                'pemegang_saham_2_negara' => $request->pemegang_saham_2_negara,
                'pemegang_saham_2_share' => $request->pemegang_saham_2_share,
                'pemegang_saham_3_nama' => $request->pemegang_saham_3_nama,
                'pemegang_saham_3_negara' => $request->pemegang_saham_3_negara,
                'pemegang_saham_3_share' => $request->pemegang_saham_3_share,
                'pemegang_saham_4_nama' => $request->pemegang_saham_4_nama,
                'pemegang_saham_4_negara' => $request->pemegang_saham_4_negara,
                'pemegang_saham_4_share' => $request->pemegang_saham_4_share,
                'pemegang_saham_5_nama' => $request->pemegang_saham_5_nama,
                'pemegang_saham_5_negara' => $request->pemegang_saham_5_negara,
                'pemegang_saham_5_share' => $request->pemegang_saham_5_share,



                'pekerja_lakilaki' => $request->pekerja_lakilaki,
                'pekerja_perempuan' => $request->pekerja_perempuan,
                'pekerja_jenis_kelamin_jumlah' => $request->pekerja_jenis_kelamin_jumlah,

                'pekerja_sltp' => $request->pekerja_sltp,
                'pekerja_slta' => $request->pekerja_slta,
                'pekerja_diploma' => $request->pekerja_diploma,
                'pekerja_sarjana' => $request->pekerja_sarjana,
                'pekerja_pascasarjana' => $request->pekerja_pascasarjana,
                'pekerja_pendidikan_jumlah' => $request->pekerja_pendidikan_jumlah,

                'pekerja_asing' => $request->pekerja_asing,
                'pekerja_outsourcing' => $request->pekerja_outsourcing,

                'gaji_pk_tetap' => $request->gaji_pk_tetap,
                'gaji_pk_kontrak' => $request->gaji_pk_kontrak,
                'lembur_pk_tetap' => $request->lembur_pk_tetap,
                'lembur_pk_kontrak' => $request->lembur_pk_kontrak,
                'transport_pk_tetap' => $request->transport_pk_tetap,
                'transport_pk_kontrak' => $request->transport_pk_kontrak,
                'bonus_pk_tetap' => $request->bonus_pk_tetap,
                'bonus_pk_kontrak' => $request->bonus_pk_kontrak,
                'pensiun_pk_tetap' => $request->pensiun_pk_tetap,
                'pensiun_pk_kontrak' => $request->pensiun_pk_kontrak,
                'asuransi_pk_tetap' => $request->asuransi_pk_tetap,
                'asuransi_pk_kontrak' => $request->asuransi_pk_kontrak,
                'jumlah_balas_jasa_pk_tetap' => $request->jumlah_balas_jasa_pk_tetap,
                'jumlah_balas_jasa_pk_kontrak' => $request->jumlah_balas_jasa_pk_kontrak,


                'biaya_outsourcing' => $request->biaya_outsourcing,
                'biaya_pengurasan' => $request->biaya_pengurasan,
                'biaya_angkutan' => $request->biaya_angkutan,
                'biaya_penyimpanan' => $request->biaya_penyimpanan,
                'biaya_subkontrak' => $request->biaya_subkontrak,
                'biaya_jumlah_produksi' => $request->biaya_jumlah_produksi,

                'pengeluaran_sukucadang' => $request->pengeluaran_sukucadang,
                'pengeluaran_atk' => $request->pengeluaran_atk,
                'pengeluaran_peralatan_setahun' => $request->pengeluaran_peralatan_setahun,
                'pengeluaran_sewa_kendaraan' => $request->pengeluaran_sewa_kendaraan,
                'pengeluaran_sewa_tanah' => $request->pengeluaran_sewa_tanah,
                'pengeluaran_jasa_lain' => $request->pengeluaran_jasa_lain,
                'pengeluaran_asuransi' => $request->pengeluaran_asuransi,
                'pengeluaran_angkutan' => $request->pengeluaran_angkutan,
                'pengeluaran_pergudangan' => $request->pengeluaran_pergudangan,
                'pengeluaran_pos' => $request->pengeluaran_pos,
                'pengeluaran_perjalanan' => $request->pengeluaran_perjalanan,
                'pengeluaran_bunga_pinjaman' => $request->pengeluaran_bunga_pinjaman,
                'pengeluaran_ppn' => $request->pengeluaran_ppn,
                'pengeluaran_pph' => $request->pengeluaran_pph,
                'pengeluaran_pajak_lain' => $request->pengeluaran_pajak_lain,
                'pengeluaran_penyusutan' => $request->pengeluaran_penyusutan,
                'pengeluaran_jasa_akuntan' => $request->pengeluaran_jasa_akuntan,
                'pengeluaran_pendidikan' => $request->pengeluaran_pendidikan,
                'pengeluaran_lainnya' => $request->pengeluaran_lainnya,
                'pengeluaran_jumlah' => $request->pengeluaran_jumlah,
                'pengeluaran_eksplorasi' => $request->pengeluaran_eksplorasi,
                'pengeluaran_pemulihan' => $request->pengeluaran_pemulihan,
                'pengeluaran_penelitian' => $request->pengeluaran_penelitian,


                'bb_avgas_volume' => $request->bb_avgas_volume,
                'bb_avgas_nilai' => $request->bb_avgas_nilai,
                'bb_avtur_volume' => $request->bb_avtur_volume,
                'bb_avtur_nilai' => $request->bb_avtur_nilai,
                'bb_bensin_volume' => $request->bb_bensin_volume,
                'bb_bensin_nilai' => $request->bb_bensin_nilai,
                'bb_solar_volume' => $request->bb_solar_volume,
                'bb_solar_nilai' => $request->bb_solar_nilai,
                'bb_diesel_volume' => $request->bb_diesel_volume,
                'bb_diesel_nilai' => $request->bb_diesel_nilai,
                'bb_minyaktanah_volume' => $request->bb_minyaktanah_volume,
                'bb_minyaktanah_nilai' => $request->bb_minyaktanah_nilai,
                'bb_elpiji_volume' => $request->bb_elpiji_volume,
                'bb_elpiji_nilai' => $request->bb_elpiji_nilai,
                'bb_gasalam_volume' => $request->bb_gasalam_volume,
                'bb_gasalam_nilai' => $request->bb_gasalam_nilai,
                'bb_minyakbakar_volume' => $request->bb_minyakbakar_volume,
                'bb_minyakbakar_nilai' => $request->bb_minyakbakar_nilai,
                'bb_batubara_volume' => $request->bb_batubara_volume,
                'bb_batubara_nilai' => $request->bb_batubara_nilai,
                'bb_lainnnya_nilai' => $request->bb_lainnnya_nilai,
                'bb_pelumas_volume' => $request->bb_pelumas_volume,
                'bb_pelumas_nilai' => $request->bb_pelumas_nilai,
                'bb_jumlah_nilai' => $request->bb_jumlah_nilai,

                'garam_volume' => $request->garam_volume,
                'garam_nilai' => $request->garam_nilai,
                'kapasitas_pembangkit_listrik_volume' => $request->kapasitas_pembangkit_listrik_volume,
                'produksi_listrik_volume' => $request->produksi_listrik_volume,
                'produksi_listrik_nilai' => $request->produksi_listrik_nilai,
                'bb_listrik_solar_volume' => $request->bb_listrik_solar_volume,
                'bb_listrik_solar_nilai' => $request->bb_listrik_solar_nilai,
                'bb_listrik_batubara_volume' => $request->bb_listrik_batubara_volume,
                'bb_listrik_batubara_nilai' => $request->bb_listrik_batubara_nilai,
                'bb_listrik_gasalam_volume' => $request->bb_listrik_gasalam_volume,
                'bb_listrik_gasalam_nilai' => $request->bb_listrik_gasalam_nilai,
                'listrik_dibeli_volume' => $request->listrik_dibeli_volume,
                'listrik_dibeli_nilai' => $request->listrik_dibeli_nilai,
                'listrik_dijual_volume' => $request->listrik_dijual_volume,
                'listrik_dijual_nilai' => $request->listrik_dijual_nilai,


                'minyak_mentah_stok_awal' => $request->minyak_mentah_stok_awal,
                'minyak_mentah_produksi' => $request->minyak_mentah_produksi,
                'minyak_mentah_penjualan' => $request->minyak_mentah_penjualan,
                'minyak_mentah_hilang' => $request->minyak_mentah_hilang,
                'minyak_mentah_stok_akhir' => $request->minyak_mentah_stok_akhir,

                'kondensat_stok_awal' => $request->kondensat_stok_awal,
                'kondensat_produksi' => $request->kondensat_produksi,
                'kondensat_penjualan' => $request->kondensat_penjualan,
                'kondensat_hilang' => $request->kondensat_hilang,
                'kondensat_stok_akhir' => $request->kondensat_stok_akhir,

                'gas_bumi_stok_awal' => $request->gas_bumi_stok_awal,
                'gas_bumi_produksi' => $request->gas_bumi_produksi,
                'gas_bumi_penjualan' => $request->gas_bumi_penjualan,
                'gas_bumi_hilang' => $request->gas_bumi_hilang,
                'gas_bumi_stok_akhir' => $request->gas_bumi_stok_akhir,

                'pendapatan_jasa_penambangan' => $request->pendapatan_jasa_penambangan,
                'pendapatan_jasa_transportasi' => $request->pendapatan_jasa_transportasi,
                'pendapatan_penyewaan' => $request->pendapatan_penyewaan,
                'pendapatan_lainnya' => $request->pendapatan_lainnya,
                'pendapatan_jumlah' => $request->pendapatan_jumlah,

                'pj_dokumen_nama' => $request->pj_dokumen_nama,
                'pj_dokumen_jabatan' => $request->pj_dokumen_jabatan,
                'pj_dokumen_email' => $request->pj_dokumen_email,
                'pemberi_keterangan_nama' => $request->pemberi_keterangan_nama,
                'pemberi_keterangan_jabatan' => $request->pemberi_keterangan_jabatan,
                'pemberi_keterangan_telp' => $request->pemberi_keterangan_telp,
                'pemberi_keterangan_fax' => $request->pemberi_keterangan_fax,
                'pemberi_keterangan_email' => $request->pemberi_keterangan_email,

                'pencacah_nama' => $request->pencacah_nama,
                'pencacah_jabatan' => $request->pencacah_jabatan,
                'pencacah_no_hp' => $request->pencacah_no_hp,
                'pencacah_tanggal' => $request->pencacah_tanggal,
                'pengawas_nama' => $request->pengawas_nama,
                'pengawas_jabatan' => $request->pengawas_jabatan,
                'pengawas_no_hp' => $request->pengawas_no_hp,
                'pengawas_tanggal' => $request->pengawas_tanggal,
                'catatan_petugas' => $request->catatan_petugas,
                'created_by' => $request->updated_by,
            ]);
        if ($survey) {
            return redirect('/')->with('message', 'Berhasil Disimpan');
        }
    }

    public function show(Request $request, $id){
        $id = Crypt::decryptString($id);
        $survey= Survey::where('id', $id)->first();
        $user = Auth::user();
        $tahun = $survey->tahun;
        return view('edit',compact('tahun', 'survey', 'user', 'id'));
    }

    public function update(Request $request, $id){
        // dd($request->all());
        $id_decrip = Crypt::decryptString($id);
        $survey = Survey::where('id', $id_decrip)
                ->update(
                [
                    'provinsi' => $request->provinsi,
                    'kabkot' =>  $request->kabkot,
                    'kecamatan' => $request->kecamatan,
                    'kelurahan' => $request->kelurahan,

                    'nama_perusahaan' => $request->nama_perusahaan,
                    'alamat_perusahaan' => $request->alamat_perusahaan,
                    'kode_pos_perusahaan' => $request->kode_pos_perusahaan,
                    'email_perusahaan' => $request->email_perusahaan,
                    'phone_perusahaan' => $request->phone_perusahaan,
                    'fax_perusahaan' => $request->fax_perusahaan,
                    'alamat_pusat' => $request->alamat_pusat,
                    'kode_pos_pusat' => $request->kode_pos_pusat,
                    'email_pusat' => $request->email_pusat,
                    'phone_pusat' => $request->phone_pusat,
                    'fax_pusat' => $request->fax_pusat,

                    'kbli' => $request->kbli,
                    'bentuk_kerjasama' => $request->bentuk_kerjasama,
                    'pemodalan_pem_pusat' => $request->pemodalan_pem_pusat,
                    'pemodalan_pem_daerah' => $request->pemodalan_pem_daerah,
                    'pemodalan_swasta' => $request->pemodalan_swasta,
                    'pemodalan_asing' => $request->pemodalan_asing,
                    'pemodalan_jumlah' => $request->pemodalan_jumlah,

                    'pemegang_saham_1_nama' => $request->pemegang_saham_1_nama,
                    'pemegang_saham_1_negara' => $request->pemegang_saham_1_negara,
                    'pemegang_saham_1_share' => $request->pemegang_saham_1_share,
                    'pemegang_saham_2_nama' => $request->pemegang_saham_2_nama,
                    'pemegang_saham_2_negara' => $request->pemegang_saham_2_negara,
                    'pemegang_saham_2_share' => $request->pemegang_saham_2_share,
                    'pemegang_saham_3_nama' => $request->pemegang_saham_3_nama,
                    'pemegang_saham_3_negara' => $request->pemegang_saham_3_negara,
                    'pemegang_saham_3_share' => $request->pemegang_saham_3_share,
                    'pemegang_saham_4_nama' => $request->pemegang_saham_4_nama,
                    'pemegang_saham_4_negara' => $request->pemegang_saham_4_negara,
                    'pemegang_saham_4_share' => $request->pemegang_saham_4_share,
                    'pemegang_saham_5_nama' => $request->pemegang_saham_5_nama,
                    'pemegang_saham_5_negara' => $request->pemegang_saham_5_negara,
                    'pemegang_saham_5_share' => $request->pemegang_saham_5_share,



                    'pekerja_lakilaki' => $request->pekerja_lakilaki,
                    'pekerja_perempuan' => $request->pekerja_perempuan,
                    'pekerja_jenis_kelamin_jumlah' => $request->pekerja_jenis_kelamin_jumlah,

                    'pekerja_sltp' => $request->pekerja_sltp,
                    'pekerja_slta' => $request->pekerja_slta,
                    'pekerja_diploma' => $request->pekerja_diploma,
                    'pekerja_sarjana' => $request->pekerja_sarjana,
                    'pekerja_pascasarjana' => $request->pekerja_pascasarjana,
                    'pekerja_pendidikan_jumlah' => $request->pekerja_pendidikan_jumlah,

                    'pekerja_asing' => $request->pekerja_asing,
                    'pekerja_outsourcing' => $request->pekerja_outsourcing,

                    'gaji_pk_tetap' => $request->gaji_pk_tetap,
                    'gaji_pk_kontrak' => $request->gaji_pk_kontrak,
                    'lembur_pk_tetap' => $request->lembur_pk_tetap,
                    'lembur_pk_kontrak' => $request->lembur_pk_kontrak,
                    'transport_pk_tetap' => $request->transport_pk_tetap,
                    'transport_pk_kontrak' => $request->transport_pk_kontrak,
                    'bonus_pk_tetap' => $request->bonus_pk_tetap,
                    'bonus_pk_kontrak' => $request->bonus_pk_kontrak,
                    'pensiun_pk_tetap' => $request->pensiun_pk_tetap,
                    'pensiun_pk_kontrak' => $request->pensiun_pk_kontrak,
                    'asuransi_pk_tetap' => $request->asuransi_pk_tetap,
                    'asuransi_pk_kontrak' => $request->asuransi_pk_kontrak,
                    'jumlah_balas_jasa_pk_tetap' => $request->jumlah_balas_jasa_pk_tetap,
                    'jumlah_balas_jasa_pk_kontrak' => $request->jumlah_balas_jasa_pk_kontrak,


                    'biaya_outsourcing' => $request->biaya_outsourcing,
                    'biaya_pengurasan' => $request->biaya_pengurasan,
                    'biaya_angkutan' => $request->biaya_angkutan,
                    'biaya_penyimpanan' => $request->biaya_penyimpanan,
                    'biaya_subkontrak' => $request->biaya_subkontrak,
                    'biaya_jumlah_produksi' => $request->biaya_jumlah_produksi,

                    'pengeluaran_sukucadang' => $request->pengeluaran_sukucadang,
                    'pengeluaran_atk' => $request->pengeluaran_atk,
                    'pengeluaran_peralatan_setahun' => $request->pengeluaran_peralatan_setahun,
                    'pengeluaran_sewa_kendaraan' => $request->pengeluaran_sewa_kendaraan,
                    'pengeluaran_sewa_tanah' => $request->pengeluaran_sewa_tanah,
                    'pengeluaran_jasa_lain' => $request->pengeluaran_jasa_lain,
                    'pengeluaran_asuransi' => $request->pengeluaran_asuransi,
                    'pengeluaran_angkutan' => $request->pengeluaran_angkutan,
                    'pengeluaran_pergudangan' => $request->pengeluaran_pergudangan,
                    'pengeluaran_pos' => $request->pengeluaran_pos,
                    'pengeluaran_perjalanan' => $request->pengeluaran_perjalanan,
                    'pengeluaran_bunga_pinjaman' => $request->pengeluaran_bunga_pinjaman,
                    'pengeluaran_ppn' => $request->pengeluaran_ppn,
                    'pengeluaran_pph' => $request->pengeluaran_pph,
                    'pengeluaran_pajak_lain' => $request->pengeluaran_pajak_lain,
                    'pengeluaran_penyusutan' => $request->pengeluaran_penyusutan,
                    'pengeluaran_jasa_akuntan' => $request->pengeluaran_jasa_akuntan,
                    'pengeluaran_pendidikan' => $request->pengeluaran_pendidikan,
                    'pengeluaran_lainnya' => $request->pengeluaran_lainnya,
                    'pengeluaran_jumlah' => $request->pengeluaran_jumlah,
                    'pengeluaran_eksplorasi' => $request->pengeluaran_eksplorasi,
                    'pengeluaran_pemulihan' => $request->pengeluaran_pemulihan,
                    'pengeluaran_penelitian' => $request->pengeluaran_penelitian,


                    'bb_avgas_volume' => $request->bb_avgas_volume,
                    'bb_avgas_nilai' => $request->bb_avgas_nilai,
                    'bb_avtur_volume' => $request->bb_avtur_volume,
                    'bb_avtur_nilai' => $request->bb_avtur_nilai,
                    'bb_bensin_volume' => $request->bb_bensin_volume,
                    'bb_bensin_nilai' => $request->bb_bensin_nilai,
                    'bb_solar_volume' => $request->bb_solar_volume,
                    'bb_solar_nilai' => $request->bb_solar_nilai,
                    'bb_diesel_volume' => $request->bb_diesel_volume,
                    'bb_diesel_nilai' => $request->bb_diesel_nilai,
                    'bb_minyaktanah_volume' => $request->bb_minyaktanah_volume,
                    'bb_minyaktanah_nilai' => $request->bb_minyaktanah_nilai,
                    'bb_elpiji_volume' => $request->bb_elpiji_volume,
                    'bb_elpiji_nilai' => $request->bb_elpiji_nilai,
                    'bb_gasalam_volume' => $request->bb_gasalam_volume,
                    'bb_gasalam_nilai' => $request->bb_gasalam_nilai,
                    'bb_minyakbakar_volume' => $request->bb_minyakbakar_volume,
                    'bb_minyakbakar_nilai' => $request->bb_minyakbakar_nilai,
                    'bb_batubara_volume' => $request->bb_batubara_volume,
                    'bb_batubara_nilai' => $request->bb_batubara_nilai,
                    'bb_lainnnya_nilai' => $request->bb_lainnnya_nilai,
                    'bb_pelumas_volume' => $request->bb_pelumas_volume,
                    'bb_pelumas_nilai' => $request->bb_pelumas_nilai,
                    'bb_jumlah_nilai' => $request->bb_jumlah_nilai,

                    'garam_volume' => $request->garam_volume,
                    'garam_nilai' => $request->garam_nilai,
                    'kapasitas_pembangkit_listrik_volume' => $request->kapasitas_pembangkit_listrik_volume,
                    'produksi_listrik_volume' => $request->produksi_listrik_volume,
                    'produksi_listrik_nilai' => $request->produksi_listrik_nilai,
                    'bb_listrik_solar_volume' => $request->bb_listrik_solar_volume,
                    'bb_listrik_solar_nilai' => $request->bb_listrik_solar_nilai,
                    'bb_listrik_batubara_volume' => $request->bb_listrik_batubara_volume,
                    'bb_listrik_batubara_nilai' => $request->bb_listrik_batubara_nilai,
                    'bb_listrik_gasalam_volume' => $request->bb_listrik_gasalam_volume,
                    'bb_listrik_gasalam_nilai' => $request->bb_listrik_gasalam_nilai,
                    'listrik_dibeli_volume' => $request->listrik_dibeli_volume,
                    'listrik_dibeli_nilai' => $request->listrik_dibeli_nilai,
                    'listrik_dijual_volume' => $request->listrik_dijual_volume,
                    'listrik_dijual_nilai' => $request->listrik_dijual_nilai,


                    'minyak_mentah_stok_awal' => $request->minyak_mentah_stok_awal,
                    'minyak_mentah_produksi' => $request->minyak_mentah_produksi,
                    'minyak_mentah_penjualan' => $request->minyak_mentah_penjualan,
                    'minyak_mentah_hilang' => $request->minyak_mentah_hilang,
                    'minyak_mentah_stok_akhir' => $request->minyak_mentah_stok_akhir,

                    'kondensat_stok_awal' => $request->kondensat_stok_awal,
                    'kondensat_produksi' => $request->kondensat_produksi,
                    'kondensat_penjualan' => $request->kondensat_penjualan,
                    'kondensat_hilang' => $request->kondensat_hilang,
                    'kondensat_stok_akhir' => $request->kondensat_stok_akhir,

                    'gas_bumi_stok_awal' => $request->gas_bumi_stok_awal,
                    'gas_bumi_produksi' => $request->gas_bumi_produksi,
                    'gas_bumi_penjualan' => $request->gas_bumi_penjualan,
                    'gas_bumi_hilang' => $request->gas_bumi_hilang,
                    'gas_bumi_stok_akhir' => $request->gas_bumi_stok_akhir,

                    'pendapatan_jasa_penambangan' => $request->pendapatan_jasa_penambangan,
                    'pendapatan_jasa_transportasi' => $request->pendapatan_jasa_transportasi,
                    'pendapatan_penyewaan' => $request->pendapatan_penyewaan,
                    'pendapatan_lainnya' => $request->pendapatan_lainnya,
                    'pendapatan_jumlah' => $request->pendapatan_jumlah,

                    'pj_dokumen_nama' => $request->pj_dokumen_nama,
                    'pj_dokumen_jabatan' => $request->pj_dokumen_jabatan,
                    'pj_dokumen_email' => $request->pj_dokumen_email,
                    'pemberi_keterangan_nama' => $request->pemberi_keterangan_nama,
                    'pemberi_keterangan_jabatan' => $request->pemberi_keterangan_jabatan,
                    'pemberi_keterangan_telp' => $request->pemberi_keterangan_telp,
                    'pemberi_keterangan_fax' => $request->pemberi_keterangan_fax,
                    'pemberi_keterangan_email' => $request->pemberi_keterangan_email,

                    'pencacah_nama' => $request->pencacah_nama,
                    'pencacah_jabatan' => $request->pencacah_jabatan,
                    'pencacah_no_hp' => $request->pencacah_no_hp,
                    'pencacah_tanggal' => $request->pencacah_tanggal,
                    'pengawas_nama' => $request->pengawas_nama,
                    'pengawas_jabatan' => $request->pengawas_jabatan,
                    'pengawas_no_hp' => $request->pengawas_no_hp,
                    'pengawas_tanggal' => $request->pengawas_tanggal,
                    'catatan_petugas' => $request->catatan_petugas,
                    'updated_by' => $request->updated_by
                ]);

        if ($survey) {
            return redirect('form-edit/'.$id)->with('message', 'Berhasil Disimpan');
        }
    }
}
