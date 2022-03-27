<fieldset>
    <input type="text" id="tahun" name="tahun" value="{{$tahun}}" hidden>
    <input type="text" id="email" name="email" value="{{$user->email}}" hidden>
    <div class="mb-1 row ">
        <label for="kip" class="col-sm-2 col-form-label">KIP</label>
        <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm" id="kip" name="kip"
                value="{{old('kip',  $survey->kip)}}">
        </div>
    </div>
    <table class="table table-bordered border-dark mb-1">
        <tr>
            <td class="px-5 py-3">
                <div class=" mb-1 row">
                    <label for="provinsi" class="col-sm-3 col-form-label">
                        <strong>1. Provinsi </strong> <br>
                        <span class="fst-italic">&nbsp; &nbsp; Province</span>
                    </label>
                    <div class="col-sm-9 d-flex align-items-center">
                        <select class="form-select " aria-label="Default select" id="provinsi" name="provinsi">
                            <option value="16" selected>[16]Sumatera Selatan</option>
                        </select>
                    </div>
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="kabkot" class="col-sm-3 col-form-label">
                        <strong>2. Kabupaten/Kota*)</strong> <br>
                        <span class="fst-italic">&nbsp; &nbsp; Regency/ Municipality</span>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="kabkot" name="kabkot"
                            value="{{old('kabkot',  $survey->kabkot)}}">
                    </div>
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="kecamatan" class="col-sm-3 col-form-label">
                        <strong>3. Kecamatan</strong> <br>
                        <span class="fst-italic">&nbsp; &nbsp; Sub-district</span>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                            value="{{old('kecamatan',  $survey->kecamatan)}}">
                    </div>
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="kelurahan" class="col-sm-3 col-form-label">
                        <strong>4. Kelurahan</strong> <br>
                        <span class="fst-italic">&nbsp; &nbsp; Village</span>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan"
                            value="{{old('kelurahan',  $survey->kelurahan)}}">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="px-5 py-3">
                <div class="mb-1 row">
                    <label for="nama_perusahaan" class="col-sm-3 col-form-label">
                        <strong>5. Nama perusahaan</strong> <br>
                        <span class="fst-italic">&nbsp; &nbsp; Name of Companny</span>
                    </label>
                    <div class="col-sm-9 d-flex align-items-center">
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                            value="{{old('nama_perusahaan',  $survey->nama_perusahaan)}}">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="alamat_perusahaan" class="col-sm-3 col-form-label">
                        <strong>6. Alamat perusahaan</strong><br>
                        <span class="fst-italic">&nbsp; &nbsp; Company Address</span>
                    </label>
                    <div class="col-sm-9 d-flex align-items-center">
                        <textarea type="text" class="form-control" id="alamat_perusahaan"
                            name="alamat_perusahaan">{{old('alamat_perusahaan', $survey->alamat_perusahaan)}}</textarea>
                    </div>
                </div>

                <div class="mb-1 row">
                    <div class="col-sm-1"></div>
                    <label for="email_perusahaan" class="col-sm-2 col-form-label">
                        E-mail :<br>
                    </label>
                    <div class="col-sm-4 d-flex align-items-center">
                        <input type="text" class="form-control" id="email_perusahaan" name="email_perusahaan"
                            value="{{old('email_perusahaan',  $survey->email_perusahaan)}}">
                    </div>
                </div>
                <div class="mb-1 row">
                    <div class="col-sm-1"></div>
                    <label for="phone_perusahaan" class="col-sm-2 col-form-label">
                        Phone :<br>
                    </label>
                    <div class="col-sm-4 d-flex align-items-center">
                        <input type="text" class="form-control" id="phone_perusahaan" name="phone_perusahaan"
                            value="{{old('phone_perusahaan',  $survey->phone_perusahaan)}}">
                    </div>
                    <label for="fax_perusahaan" class="col-sm-1 col-form-label">
                        Fax :<br>
                    </label>
                    <div class="col-sm-4 d-flex align-items-center">
                        <input type="text" class="form-control" id="fax_perusahaan" name="fax_perusahaan"
                            value="{{old('fax_perusahaan',  $survey->fax_perusahaan)}}">
                    </div>
                </div>

                <div class="mb-1 row">
                    <label for="alamat_pusat" class="col-sm-3 col-form-label">
                        <strong>7. Alamat kantor pusat</strong><br>
                        <span class="fst-italic">&nbsp; &nbsp; Head Office Address</span>
                    </label>
                    <div class="col-sm-9 d-flex align-items-center">
                        <textarea type="text" class="form-control" id="alamat_pusat"
                            name="alamat_pusat">{{old('alamat_pusat', $survey->alamat_pusat)}}</textarea>
                    </div>
                </div>
                <div class="mb-1 row">
                    <div class="col-sm-1"></div>
                    <label for="email_pusat" class="col-sm-2 col-form-label">
                        E-mail :<br>
                    </label>
                    <div class="col-sm-4 d-flex align-items-center">
                        <input type="text" class="form-control" id="email_pusat" name="email_pusat"
                            value="{{old('email_pusat',  $survey->email_pusat)}}">
                    </div>
                </div>
                <div class="mb-1 row">
                    <div class="col-sm-1"></div>
                    <label for="phone_pusat" class="col-sm-2 col-form-label">
                        Phone :<br>
                    </label>
                    <div class="col-sm-4 d-flex align-items-center">
                        <input type="text" class="form-control" id="phone_pusat" name="phone_pusat"
                            value="{{old('phone_pusat',  $survey->phone_pusat)}}">
                    </div>
                    <label for="fax_pusat" class="col-sm-1 col-form-label">
                        Fax :<br>
                    </label>
                    <div class="col-sm-4 d-flex align-items-center">
                        <input type="text" class="form-control" id="fax_pusat" name="fax_pusat"
                            value="{{old('fax_pusat',  $survey->fax_pusat)}}">
                    </div>
                </div>

            </td>
        </tr>

    </table>
    <table style="font-size: 10px" class="table table-sm table-borderless ">
        <tr>
            <td>
                <span>*) Coret yang tidak sesuai/</span><span class="fst-italic">Cross out if not valid</span>
            </td>
        </tr>
        <tr>
            <th>
                Tujuan Turvei
            </th>
            <td>:</td>
            <td>Memperoleh data Statistik pertambangan Migas untuk perencanaan dan evaluasi pembangunan nasional</td>
        </tr>
    </table>

    <table style="font-size: 10px" class="table table-sm table-borderless">
        <tr>
            <th class="text-center  border-top border-bottom border-dark" colspan="2">Keterangan Lebih </th>
        </tr>
        <tr>
            <th>Koo</th>
            <th class="text-end fst-italic">Koor</th>
        </tr>
        <tr class="border-bottom border-dark">
            <td></td>
            <td class="text-end fst-italic">
                BPS-Statistic Indonesia, Jl. Dr. Sutomo No. 6-8, Jakarta 10710 <br>
                Pho
            </td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <table class="table  table-borderless">
        <tr>
            <th class="border-dark border text-center">
                I. KETERANGAN UMUM PERUSAHAAN <br>
                <span class="fst-italic">GENERAL INFORMATION</span>
            </th>
        </tr>
        <tr class="text-end">
            <td style="font-size: 14px">
                KBLI/<span class="fst-italic">ISIC</span><br>
                <span style="font-size: 12px"> Diisi Oleh BPS/<span class="fst-italic">Filled by BPS</span></span>
                <div class="mb-1 row">
                    <div class="col-sm-9"></div>
                    <div class="col-sm-3 d-flex align-items-center">
                        <input type="text" class="form-control form-control-sm" id="kbli" name="kbli"
                            value="{{old('kbli', $survey->kbli)}}">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="mb-1 row">
                    <label for="bentuk_kerjasama" class="col-sm-12 col-form-label">
                        <strong>101. Bentuk Kerjasama/
                            <span class="fst-italic">Kind of Joint Project</span></strong>
                    </label>
                </div>
                <div class="mb-1 row">
                    <div class="col-sm-2">
                        KKKS/PSC -1
                    </div>
                    <div class="col-sm-2">
                        BOB/JOB -2
                    </div>
                    <div class="col-sm-2">
                        TAC-3
                    </div>
                    <div class="col-sm-5">
                        Lainnya -4
                    </div>
                    <div class="col-sm-1 d-flex align-items-center">
                        <input type="text" class="form-control" id="bentuk_kerjasama" name="bentuk_kerjasama"
                            value="{{old('bentuk_kerjasama',  $survey->bentuk_kerjasama)}}">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="pemodalan_pem_pusat" class="col-sm-12 col-form-label">
                        <strong>102. Persentase pemodalan
                            <span class="fst-italic">Percentage of Capital Modal</span></strong>
                    </label>
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <div class="col-sm-6">
                        a. Pemerintah Pusat/ <span class="fst-italic">Central Goverment</span>
                    </div>
                    <div class="col-sm-1">
                        <input type="text" class="form-control form-control-sm" id="pemodalan_pem_pusat"
                            name="pemodalan_pem_pusat"
                            value="{{old('pemodalan_pem_pusat',  $survey->pemodalan_pem_pusat)}}">
                    </div>
                    %
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <div class=" col-sm-6">
                        b. Pemerintah Daerah/ <span class="fst-italic">Local Goverment</span>
                    </div>
                    <div class="col-sm-1">
                        <input type="text" class="form-control form-control-sm" id="pemodalan_pem_daerah"
                            name="pemodalan_pem_daerah"
                            value="{{old('pemodalan_pem_daerah',  $survey->pemodalan_pem_daerah)}}">
                    </div>
                    %
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <div class=" col-sm-6">
                        c. Swasta/ <span class="fst-italic">Private</span>
                    </div>
                    <div class="col-sm-1">
                        <input type="text" class="form-control form-control-sm" id="pemodalan_swasta"
                            name="pemodalan_swasta" value="{{old('pemodalan_swasta',  $survey->pemodalan_swasta)}}">
                    </div>
                    %
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <div class=" col-sm-6">
                        d. Asing/ <span class="fst-italic">Foreign</span>
                    </div>
                    <div class="col-sm-1">
                        <input type="text" class="form-control form-control-sm" id="pemodalan_asing"
                            name="pemodalan_asing" value="{{old('pemodalan_asing',  $survey->pemodalan_asing)}}">
                    </div>
                    {{-- <div class="col-sm-1">%</div> --}}
                    %
                    <div class="col-sm-4" style="font-size: 12px">&rarr; (Jika terisi lanjut ke R103 / <span
                            class="fst-italic">If filled, continue
                            to R 103</span>)</div>

                </div>
                <div class="mb-3 row d-flex align-items-center">
                    <div class=" col-sm-6">
                        e. jumlah/ <span class="fst-italic">Total</span>
                    </div>
                    <div class="col-sm-1">
                        <input type="text" class="form-control form-control-sm" id="pemodalan_jumlah"
                            name="pemodalan_jumlah" value="100" disabled>
                    </div>
                    %
                </div>
                <div class="mb-1 row ">
                    <label for="bentuk_kerjasama" class="col-sm-12 col-form-label">
                        <strong>103. Informasi Pemegang Saham Asing Tahun 2021/
                            <span class="fst-italic">foreign shareholder information in 2021</span></strong>
                    </label>
                    <span style="font-size: 12px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(Urutkan dari pemegang saham
                        terbesar / Sort by largest shareholder)</span>
                    <div class="ps-5 pe-0">
                        <table class="table table-sm table-bordered border-dark text-center">
                            <tr>
                                <td>No</td>
                                <td>Nama/Name</td>
                                <td>Negara / Country</td>
                                <td width="200px">Kepemilikan Saham / Shareholding (%)</td>
                            </tr>
                            <tr style="font-size:10px">
                                <td>(1)</td>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pemegang_saham_1_nama"
                                        name="pemegang_saham_1_nama"
                                        value="{{old('pemegang_saham_1_nama', $survey->pemegang_saham_1_nama)}}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pemegang_saham_1_negara"
                                        name="pemegang_saham_1_negara"
                                        value="{{old('pemegang_saham_1_negara',  $survey->pemegang_saham_1_negara)}}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pemegang_saham_1_share"
                                        name="pemegang_saham_1_share"
                                        value="{{old('pemegang_saham_1_share',  $survey->pemegang_saham_1_share)}}">
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pemegang_saham_2_nama"
                                        name="pemegang_saham_2_nama"
                                        value="{{old('pemegang_saham_2_nama', $survey->pemegang_saham_2_nama)}}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pemegang_saham_2_negara"
                                        name="pemegang_saham_2_negara"
                                        value="{{old('pemegang_saham_2_negara',  $survey->pemegang_saham_2_negara)}}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pemegang_saham_2_share"
                                        name="pemegang_saham_2_share"
                                        value="{{old('pemegang_saham_2_share',  $survey->pemegang_saham_2_share)}}">
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pemegang_saham_3_nama"
                                        name="pemegang_saham_3_nama"
                                        value="{{old('pemegang_saham_3_nama', $survey->pemegang_saham_3_nama)}}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pemegang_saham_3_negara"
                                        name="pemegang_saham_3_negara"
                                        value="{{old('pemegang_saham_3_negara',  $survey->pemegang_saham_3_negara)}}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pemegang_saham_3_share"
                                        name="pemegang_saham_3_share"
                                        value="{{old('pemegang_saham_3_share',  $survey->pemegang_saham_3_share)}}">
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pemegang_saham_1_nama"
                                        name="pemegang_saham_4_nama"
                                        value="{{old('pemegang_saham_4_nama', $survey->pemegang_saham_4_nama)}}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pemegang_saham_4_negara"
                                        name="pemegang_saham_4_negara"
                                        value="{{old('pemegang_saham_4_negara',  $survey->pemegang_saham_4_negara)}}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pemegang_saham_4_share"
                                        name="pemegang_saham_4_share"
                                        value="{{old('pemegang_saham_4_share',  $survey->pemegang_saham_4_share)}}">
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pemegang_saham_5_nama"
                                        name="pemegang_saham_5_nama"
                                        value="{{old('pemegang_saham_5_nama', $survey->pemegang_saham_5_nama)}}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pemegang_saham_5_negara"
                                        name="pemegang_saham_5_negara"
                                        value="{{old('pemegang_saham_5_negara',  $survey->pemegang_saham_5_negara)}}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pemegang_saham_5_share"
                                        name="pemegang_saham_5_share"
                                        value="{{old('pemegang_saham_5_share',  $survey->pemegang_saham_5_share)}}">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </td>
        </tr>
    </table>


    <br>
    <br>
    <br>
    <table class="table table-borderless">
        <tr>
            <th class="border-dark border text-center">
                II. SUMBER DAYA MANUSIA PADA TAHUN 2021 <br>
                <span class="fst-italic">HUMAN RESOURCE BY THE YEAR 2021</span>
            </th>
        </tr>
        <tr>
            <td>
                <div class="mb-1 row ">
                    <label for="bentuk_kerjasama" class="col-sm-12 col-form-label">
                        <strong>201. Banyaknya Pekerja Tetap dan Kontrak Menurut Jenis Kelamin <br></strong>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="fst-italic">Number of Permanent and Contracted by
                            Sex</span>
                    </label>
                    <div class="ps-5 pe-0">
                        <table class="table table-sm table-bordered border-dark ">
                            <tr class="text-center">
                                <td>Jenis Kelamin/Sex</td>
                                <td>Orang/Person</td>
                            </tr>
                            <tr style="font-size:10px" class="text-center">
                                <td>(1)</td>
                                <td>(2)</td>
                            </tr>
                            <tr>
                                <td>a. Laki-laki/Male
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pekerja_lakilaki"
                                        name="pekerja_lakilaki"
                                        value="{{old('pekerja_lakilaki',  $survey->pekerja_lakilaki)}}">
                                </td>

                            </tr>
                            <tr>
                                <td>b. Perempuan/Female
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pekerja_perempuan"
                                        name="pekerja_perempuan"
                                        value="{{old('pekerja_perempuan',  $survey->pekerja_perempuan)}}">
                                </td>
                            </tr>
                            <tr>
                                <td> <strong> c. Jumlah/Total</strong>
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        id="pekerja_jenis_kelamin_jumlah" name="pekerja_jenis_kelamin_jumlah"
                                        value="{{old('pekerja_jenis_kelamin_jumlah',  $survey->pekerja_jenis_kelamin_jumlah)}}">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="mb-1 row ">
                    <label for="bentuk_kerjasama" class="col-sm-12 col-form-label">
                        <strong>202. Banyaknya Pekerja Tetap dan Kontrak Menurut Tingkat Pendidikan Tertinggi yang
                            Ditamatkan<br></strong>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="fst-italic">Number of Permanent and Contracted by
                            Education</span>
                    </label>
                    <div class="ps-5 pe-0">
                        <table class="table table-sm table-bordered border-dark align-middle" style="font-size: 14px">
                            <tr class=" text-center">
                                <td>Jenjang Pendidikan/Education</td>
                                <td>Orang/Person</td>
                            </tr>
                            <tr style="font-size:10px" class="text-center">
                                <td>(1)</td>
                                <td>(2)</td>
                            </tr>
                            <tr>
                                <td>
                                    a. SLTP dan Sederajat atau lebih rendah / Junior High School and Equal or lower
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pekerja_sltp"
                                        name="pekerja_sltp" value="{{old('pekerja_sltp',  $survey->pekerja_sltp)}}">
                                </td>

                            </tr>
                            <tr>
                                <td>b. Sampai dengan SLTA/High School and lower
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pekerja_slta"
                                        name="pekerja_slta" value="{{old('pekerja_slta',  $survey->pekerja_slta)}}">
                                </td>
                            </tr>
                            <tr>
                                <td> c. Diploma I/II/III
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pekerja_diploma"
                                        name="pekerja_diploma"
                                        value="{{old('pekerja_diploma',  $survey->pekerja_diploma)}}">
                                </td>
                            </tr>
                            <tr>
                                <td> d. Sarjana dan Diploma IV/Undergraduate
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pekerja_sarjana"
                                        name="pekerja_sarjana"
                                        value="{{old('pekerja_sarjana',  $survey->pekerja_sarjana)}}">
                                </td>
                            </tr>
                            <tr>
                                <td> e. Pasca Sarjana/Post Graduate
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="pekerja_pascasarjana"
                                        name="pekerja_pascasarjana"
                                        value="{{old('pekerja_pascasarjana',  $survey->pekerja_pascasarjana)}}">
                                </td>
                            </tr>
                            <tr>
                                <td> <strong> f. Jumlah/Total</strong>
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        id="pekerja_pendidikan_jumlah" name="pekerja_pendidikan_jumlah"
                                        value="{{old('pekerja_pendidikan_jumlah',  $survey->pekerja_pendidikan_jumlah)}}">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="bentuk_kerjasama" class="col-sm-8 col-form-label">
                        <strong>203. Jumlah Pekerja Asing/
                            <span class="fst-italic">Number of Foreign Workes</span></strong>
                    </label>
                    <div class="col-sm-2 d-flex align-items-center">
                        <input type="text" class="form-control form-control-sm" id="pekerja_asing" name="pekerja_asing"
                            value="{{old('pekerja_asing',  $survey->pekerja_asing)}}">
                    </div>
                    Orang/Person
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="bentuk_kerjasama" class="col-sm-8 col-form-label">
                        <strong>204. Jumlah Pekerja Outsourcing/
                            <span class="fst-italic">Number of Outsourcing Workes</span></strong>
                    </label>
                    <div class="col-sm-2 d-flex align-items-center">
                        <input type="text" class="form-control form-control-sm" id="pekerja_outsourcing"
                            name="pekerja_outsourcing"
                            value="{{old('pekerja_outsourcing',  $survey->pekerja_outsourcing)}}">
                    </div>
                    Orang/Person
                </div>
                <div class="mb-1 row ms-4">
                    <div class="col-sm-11" style="font-size: 12px">
                        <strong>Pekerja Tetap</strong>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <br>
    <br>
    <br>
    <table class="table table-borderless">
        <tr>
            <th class="border-dark border text-center">
                III. PENGELUARAN SELAMA SETAHUN 2021 <br>
                <span class="fst-italic">EXPENDITURES IN 2021</span>
            </th>
        </tr>
        <tr>
            <td>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="gaji_pk_tetap" class="col-sm-8 col-form-label">
                        <strong>301. Jumlah Pekerja Outsourcing/
                            <span class="fst-italic">Number of Outsourcing Workes</span></strong>
                    </label>
                </div>
                <div class=" mb-1 row  pe-0">
                    <table class="table table-bordered border-dark align-middle table-sm" style="font-size: 14px">
                        <tr class="text-center">
                            <th>Jenis Balas Jasa/Kinnd of Compensation</th>
                            <th>Pekerja Tetap <br> Permanent Workers
                                <br>(Rupiah)
                            </th>
                            <th>Pekerja Kontrak <br> Contract Workers <br>(Rupiah)</th>
                        </tr>
                        <tr class="text-center" style="font-size: 10px">
                            <td>(1)</td>
                            <td>(2)</td>
                            <td>(3)</td>
                        </tr>
                        <tr>
                            <td>a. Gaji dan Tunjangan Rutin <br>
                                <span class="fst-italic">&nbsp; &nbsp; Salaries and Regular Allowance</span>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="gaji_pk_tetap"
                                    name="gaji_pk_tetap" value="{{old('gaji_pk_tetap',  $survey->gaji_pk_tetap)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="gaji_pk_kontrak"
                                    name="gaji_pk_kontrak"
                                    value="{{old('gaji_pk_kontrak',  $survey->gaji_pk_kontrak)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>b. Upah Lembur <br>
                                <span class="fst-italic">&nbsp; &nbsp; Overtime</span>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="lembur_pk_tetap"
                                    name="lembur_pk_tetap"
                                    value="{{old('lembur_pk_tetap',  $survey->lembur_pk_tetap)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="lembur_pk_kontrak"
                                    name="lembur_pk_kontrak"
                                    value="{{old('lembur_pk_kontrak',  $survey->lembur_pk_kontrak)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>c. Uang Transportasi dan Uang Makan<br>
                                <span class="fst-italic">&nbsp; &nbsp; Transportation and Meal</span>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="transport_pk_tetap"
                                    name="transport_pk_tetap"
                                    value="{{old('transport_pk_tetap',  $survey->transport_pk_tetap)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="transport_pk_kontrak"
                                    name="transport_pk_kontrak"
                                    value="{{old('transport_pk_kontrak',  $survey->transport_pk_kontrak)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>d. Hadiah, Bonus, dan Sejenisnya<br>
                                <span class="fst-italic">&nbsp; &nbsp; Reward, Bonus, etc</span>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bonus_pk_tetap"
                                    name="bonus_pk_tetap" value="{{old('bonus_pk_tetap',  $survey->bonus_pk_tetap)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bonus_pk_kontrak"
                                    name="bonus_pk_kontrak"
                                    value="{{old('bonus_pk_kontrak',  $survey->bonus_pk_kontrak)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>e. Iuaran Dana Pension dan Tunjangan Sosial<br>
                                <span class="fst-italic">&nbsp; &nbsp; Pension Contribution and Sosial Allowance</span>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="pensiun_pk_tetap"
                                    name="pensiun_pk_tetap"
                                    value="{{old('pensiun_pk_tetap',  $survey->pensiun_pk_tetap)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="pensiun_pk_kontrak"
                                    name="pensiun_pk_kontrak"
                                    value="{{old('pensiun_pk_kontrak',  $survey->pensiun_pk_kontrak)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>f. Asuransi Tenaga Kerja<br>
                                <span class="fst-italic">&nbsp; &nbsp; Labout Insurance</span>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="asuransi_pk_tetap"
                                    name="asuransi_pk_tetap"
                                    value="{{old('asuransi_pk_tetap',  $survey->asuransi_pk_tetap)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="asuransi_pk_kontrak"
                                    name="asuransi_pk_kontrak"
                                    value="{{old('asuransi_pk_kontrak',  $survey->asuransi_pk_kontrak)}}">
                            </td>
                        </tr>
                        <tr>
                            <th>g. JUMLAH/
                                <span class="fst-italic">TOTAL</span>
                            </th>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="jumlah_balas_jasa_pk_tetap"
                                    name="jumlah_balas_jasa_pk_tetap"
                                    value="{{old('jumlah_balas_jasa_pk_tetap',  $survey->jumlah_balas_jasa_pk_tetap)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm"
                                    id="jumlah_balas_jasa_pk_kontrak" name="jumlah_balas_jasa_pk_kontrak"
                                    value="{{old('jumlah_balas_jasa_pk_kontrak',  $survey->jumlah_balas_jasa_pk_kontrak)}}">
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="bentuk_kerjasama" class="col-sm-9 col-form-label">
                        <strong>302. Biaya untuk Jasa Pekerja Outsourcing/
                            <span class="fst-italic">Cost of Labor Outsourcing Services Company</span></strong>
                    </label>
                    <div class="col-sm-1 text-end">
                        Rp
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control form-control-sm" id="biaya_outsourcing"
                            name="biaya_outsourcing" value="{{old('biaya_outsourcing',  $survey->biaya_outsourcing)}}">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="biaya_pengurasan" class="col-sm-9 col-form-label">
                        <strong>303. Biaya Produksi/
                            <span class="fst-italic">Production cost</span></strong>
                    </label>
                </div>
                <div class=" mb-1 row  pe-0">
                    <table class="table table-bordered border-dark align-middle table-sm" style="font-size: 14px">
                        <tr class="text-center">
                            <th>Jenis Biaya <span class="fst-italic">/Kind of Expenditures</span> </th>
                            <th>Nilai <span class="fst-italic">/Value</span>
                                <br>(Rupiah)
                            </th>

                        </tr>
                        <tr class="text-center" style="font-size: 10px">
                            <td>(1)</td>
                            <td>(2)</td>
                        </tr>
                        <tr>
                            <td>a. Biaya pengurasan, pengumpulan dan pemisahan <br>
                                <span class="fst-italic">&nbsp; &nbsp; Depletion, collection and separation cost</span>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="biaya_pengurasan"
                                    name="biaya_pengurasan"
                                    value="{{old('biaya_pengurasan',  $survey->biaya_pengurasan)}}">
                            </td>

                        </tr>
                        <tr>
                            <td>b. Biaya angkutan migas ke penampungan utama di lokasi penambangan<br>
                                <span class="fst-italic">&nbsp; &nbsp; Transportation cost include of oil and gas field
                                    to the main storage</span>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="biaya_angkutan"
                                    name="biaya_angkutan" value="{{old('biaya_angkutan',  $survey->biaya_angkutan)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>c. Biaya penyimpanan<br>
                                <span class="fst-italic">&nbsp; &nbsp; Storage cost</span>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="biaya_penyimpanan"
                                    name="biaya_penyimpanan"
                                    value="{{old('biaya_penyimpanan',  $survey->biaya_penyimpanan)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>d. Biaya pekerjaan yang subkontrakan kepada pihak lain<br>
                                <span class="fst-italic">&nbsp; &nbsp; Cost of miningservices carried out by
                                    other</span>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="biaya_subkontrak"
                                    name="biaya_subkontrak"
                                    value="{{old('biaya_subkontrak',  $survey->biaya_subkontrak)}}">
                            </td>
                        </tr>
                        <tr>
                            <th>e. JUMLAH/
                                <span class="fst-italic">TOTAL</span>
                            </th>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="biaya_jumlah_produksi"
                                    name="biaya_jumlah_produksi"
                                    value="{{old('biaya_jumlah_produksi',  $survey->biaya_jumlah_produksi)}}">
                            </td>

                        </tr>
                    </table>
                </div>
                <div class="mb-1 row ">
                    <div class="col-sm-12 ps-0" style="font-size: 12px">
                        <strong>Biaya pengurasan, penngumpulan, dan pemisahan</strong>
                        mulai dari proses pengurasan di bawah tanah sampai dengan pengoperasian fasilitas tempat
                        penyeimpanan migas di lapangan
                    </div>
                </div>
                <br>
                <div class="mb-1 row ">
                    <div class="col-sm-12 ps-0" style="font-size: 12px">
                        <strong>Biaya pengurasan, penngumpulan, dan pemisahan</strong>
                        mulai dari proses pengurasan di bawah tanah sampai dengan pengoperasian fasilitas tempat
                        penyeimpanan migas di lapangan
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="biaya_pengurasan" class="col-sm-9 col-form-label">
                        <strong>304. Pemakaian Bahan Bakar dan Pelumas/
                            <span class="fst-italic">Fuels and Lubricants Consumtion</span></strong>
                    </label>
                </div>
                <div class=" mb-1 row  pe-0">
                    <table class="table table-bordered border-dark align-middle table-sm" style="font-size: 14px">
                        <tr class="text-center">
                            <th rowspan="2">Jenis Bahan Bakar dan Pelumas <br> <span class="fst-italic">Kind of Fuels
                                    and
                                    Lubricants</span>
                            </th>
                            <th rowspan="2">Satuan <br>
                                <span class="fst-italic">Unit</span>
                            </th>
                            <th colspan="2">Total Pemakaian <br><span class="fst-italic">Total Usage</span></th>

                        </tr>
                        <tr class="text-center">
                            <th>Volume <span class="fst-italic">Volume</span></th>
                            <th>Nilai/ <span class="fst-italic">Value</span> <br>(Rupiah)</th>
                        </tr>
                        <tr class="text-center" style="font-size: 10px">
                            <td>(1)</td>
                            <td>(2)</td>
                            <td>(3)</td>
                            <td>(4)</td>
                        </tr>
                        <tr>
                            <td>a. Avgas/<span class="fst-italic">Avgas</span></td>
                            <td class="text-center">Liter</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_avgas_volume"
                                    name="bb_avgas_volume"
                                    value="{{old('bb_avgas_volume',  $survey->bb_avgas_volume)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_avgas_nilai"
                                    name="bb_avgas_nilai" value="{{old('bb_avgas_nilai',  $survey->bb_avgas_nilai)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>b. Avtur/<span class="fst-italic">Avtur</span></td>
                            <td class="text-center">Liter</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_avtur_volume"
                                    name="bb_avtur_volume"
                                    value="{{old('bb_avtur_volume',  $survey->bb_avtur_volume)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_avtur_nilai"
                                    name="bb_avtur_nilai" value="{{old('bb_avtur_nilai',  $survey->bb_avtur_nilai)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>c. Bensin/<span class="fst-italic">gasolin</span></td>
                            <td class="text-center">Liter</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_bensin_volume"
                                    name="bb_bensin_volume"
                                    value="{{old('bb_bensin_volume',  $survey->bb_bensin_volume)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_bensin_nilai"
                                    name="bb_bensin_nilai"
                                    value="{{old('bb_bensin_nilai',  $survey->bb_bensin_nilai)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>d. Minyak Solar/Gas Oil/<span class="fst-italic">Automotive Diesel Oil</span></td>
                            <td class="text-center">Liter</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_solar_volume"
                                    name="bb_solar_volume"
                                    value="{{old('bb_solar_volume',  $survey->bb_solar_volume)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_solar_nilai"
                                    name="bb_solar_nilai" value="{{old('bb_solar_nilai',  $survey->bb_solar_nilai)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>e. Minyak Diesel/<span class="fst-italic">Diesel Oil</span></td>
                            <td class="text-center">Liter</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_diesel_volume"
                                    name="bb_diesel_volume"
                                    value="{{old('bb_diesel_volume',  $survey->bb_diesel_volume)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_diesel_nilai"
                                    name="bb_diesel_nilai"
                                    value="{{old('bb_diesel_nilai',  $survey->bb_diesel_nilai)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>f. Minyak Tanah/<span class="fst-italic">Kerosene</span></td>
                            <td class="text-center">Liter</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_minyaktanah_volume"
                                    name="bb_minyaktanah_volume"
                                    value="{{old('bb_minyaktanah_volume',  $survey->bb_minyaktanah_volume)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_minyaktanah_nilai"
                                    name="bb_minyaktanah_nilai"
                                    value="{{old('bb_minyaktanah_nilai',  $survey->bb_minyaktanah_nilai)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>g. Elpiji/<span class="fst-italic">LPG</span></td>
                            <td class="text-center">Kg</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_elpiji_volume"
                                    name="bb_elpiji_volume"
                                    value="{{old('bb_elpiji_volume',  $survey->bb_elpiji_volume)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_elpiji_nilai"
                                    name="bb_elpiji_nilai"
                                    value="{{old('bb_elpiji_nilai',  $survey->bb_elpiji_nilai)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>h. Gas Alam/<span class="fst-italic">Natural Gas</span></td>
                            <td class="text-center">MMSCF</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_gasalam_volume"
                                    name="bb_gasalam_volume"
                                    value="{{old('bb_gasalam_volume',  $survey->bb_gasalam_volume)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_gasalam_nilai"
                                    name="bb_gasalam_nilai"
                                    value="{{old('bb_gasalam_nilai',  $survey->bb_gasalam_nilai)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>i. Minyak Bakar/<span class="fst-italic">Mini Fuel Oil</span></td>
                            <td class="text-center">Liter</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_minyakbakar_volume"
                                    name="bb_minyakbakar_volume"
                                    value="{{old('bb_minyakbakar_volume',  $survey->bb_minyakbakar_volume)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_minyakbakar_nilai"
                                    name="bb_minyakbakar_nilai"
                                    value="{{old('bb_minyakbakar_nilai',  $survey->bb_minyakbakar_nilai)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>j. Batubara/<span class="fst-italic">Coal</span></td>
                            <td class="text-center">Ton</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_batubara_volume"
                                    name="bb_batubara_volume"
                                    value="{{old('bb_batubara_volume',  $survey->bb_batubara_volume)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_batubara_nilai"
                                    name="bb_batubara_nilai"
                                    value="{{old('bb_batubara_nilai',  $survey->bb_batubara_nilai)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>k. Bahan Bakar Lainnya/<span class="fst-italic">Other Fuels</span></td>
                            <td class="text-center bg-secondary"></td>
                            <td class="bg-secondary">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_lainnnya_nilai"
                                    name="bb_lainnnya_nilai"
                                    value="{{old('bb_lainnnya_nilai',  $survey->bb_lainnnya_nilai)}}">
                            </td>
                        </tr>
                        <tr>
                            <td>l. Pelumas/<span class="fst-italic">Lubricant</span></td>
                            <td class="text-center">Liter</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_pelumas_volume"
                                    name="bb_pelumas_volume"
                                    value="{{old('bb_pelumas_volume',  $survey->bb_pelumas_volume)}}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_pelumas_nilai"
                                    name="bb_pelumas_nilai"
                                    value="{{old('bb_pelumas_nilai',  $survey->bb_pelumas_nilai)}}">
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3">e. JUMLAH/
                                <span class="fst-italic">TOTAL</span>
                            </th>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="bb_jumlah_nilai"
                                    name="bb_jumlah_nilai"
                                    value="{{old('bb_jumlah_nilai',  $survey->bb_jumlah_nilai)}}">
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="mb-0 row d-flex align-items-center">
                    <label for="bentuk_kerjasama" class="col-sm-9 col-form-label mb-0">
                        <strong>305. a. Volume Penggunaan Garam /
                            <span class="fst-italic">Volume of salt use</span></strong>
                    </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control form-control-sm" id="garam_volume" name="garam_volume"
                            value="{{old('garam_volume',  $survey->garam_volume)}}">
                    </div>
                    <div class="col-sm-1 text-start">Ton</div>
                </div>
                <div class="mt-0 row d-flex align-items-center">
                    <label for="bentuk_kerjasama" class="col-sm-8 col-form-label mt-0">
                        <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b. Nilai Penggunaan Garam /
                            <span class="fst-italic">Value of salt use</span></strong>
                    </label>
                    <div class="col-sm-1 text-end">Rp</div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control form-control-sm" id="garam_volume" name="garam_volume"
                            value="{{old('garam_volume',  $survey->garam_volume)}}">
                    </div>

                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="biaya_pengurasan" class="col-sm-9 col-form-label">
                        <strong>306. Pengeluaran Lain/
                            <span class="fst-italic">Other Expenditures</span></strong>
                    </label>
                </div>
                <div class=" mb-1 row  pe-0">
                    <table class="table table-bordered border-dark align-middle table-sm" style="font-size: 14px">
                        <tr class="text-center">
                            <th>Jenis Biaya/<span class="fst-italic">Kind of Expenditure</span></th>
                            <th>Nilai/<span class="fst-italic">Value</span> <br>(Rupiah)</th>
                        </tr>
                        <tr class="text-center" style="font-size: 10px">
                            <td>(1)</td>
                            <td>(2)</td>
                        </tr>
                        <tr>
                            <td>a. Suku cadang, pemeliharaan dan perbaikan kecil barang modal <br>
                                <span class="fst-italic">&nbsp; &nbsp; Spareparts and Maintenance cost/Minor
                                    Repairs</span>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="pengeluaran_sukucadang"
                                    name="pengeluaran_sukucadang"
                                    value="{{old('pengeluaran_sukucadang',  $survey->pengeluaran_sukucadang)}}">
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>

    </table>


    <br>
    <div class="mb-1 row float-end">
        <button type="submit" class="btn btn-primary ">Submit</button>
    </div>

</fieldset>

<style>
    .col-form-label {
        font-size: 14px
    }
</style>
