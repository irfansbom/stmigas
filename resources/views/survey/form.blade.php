<fieldset>
    <input type="text" id="id_perusahaan" name="id_perusahaan"
        value="{{ old('id_perusahaan', $survey->id_perusahaan) }}" hidden>
    <input type="text" id="id_user" name="id_user" value="{{ old('id_user', $survey->id_user) }}" hidden>
    <input type="text" id="tahun" name="tahun" value="{{ old('tahun', $survey->tahun) }}" hidden>
    <input type="text" id="tipe_form" name="tipe_form" value="{{ old('tipe_form', $survey->tipe_form) }}" hidden>
    <input type="text" id="email" name="email" value="{{ old('email', $survey->email) }}" hidden>
    <div class="mb-1 row ">
        <label for="kip" class="col-sm-1 col-form-label">KIP</label>
        <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" id="kip" name="kip"
                value="{{ old('kip', $survey->kip) }}" maxlength="8">
        </div>
        <div class="col-sm-2 d-flex align-items-center">
            <span style="font-size: 8px">Diisi Oleh BPS <br>
                <Span class="fst-italic">Filled in By BPS</Span>
            </span>
        </div>
    </div>
    <table class="table table-bordered border-dark mb-0">
        <tr>
            <td class="px-5 py-3">
                <div class=" mb-1 row">
                    <label for="provinsi" class="col-sm-4 col-form-label">
                        <strong>1. Provinsi </strong> <br>
                        <span class="fst-italic">&nbsp; &nbsp; Province</span>
                    </label>
                    <div class="col-sm-8 d-flex align-items-center">
                        <select class="form-select " aria-label="Default select" id="provinsi" name="provinsi">
                            <option value="16" selected>Sumatera Selatan</option>
                        </select>
                    </div>
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="kabkot" class="col-sm-4 col-form-label">
                        <strong>2. Kabupaten/Kota*)</strong> <br>
                        <span class="fst-italic">&nbsp; &nbsp; Regency/ Municipality</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kabkot" name="kabkot"
                            value="{{ old('kabkot', $survey->kabkot) }}" required>
                    </div>
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="kecamatan" class="col-sm-4 col-form-label">
                        <strong>3. Kecamatan</strong> <br>
                        <span class="fst-italic">&nbsp; &nbsp; Sub-district</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                            value="{{ old('kecamatan', $survey->kecamatan) }}" required>
                    </div>
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="kelurahan" class="col-sm-4 col-form-label">
                        <strong>4. Kelurahan</strong> <br>
                        <span class="fst-italic">&nbsp; &nbsp; Village</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan"
                            value="{{ old('kelurahan', $survey->kelurahan) }}" required>
                    </div>
                </div>
            </td>
            <td class="px-2 py-0" style="width:15%">
                <div class="mb-1 row text-center">
                    <span style="font-size: 8px">Diisi oleh BPS <br>
                        <span class="fst-italic">Filled by
                            BPS</span>
                    </span>
                </div>
                <div class=" mb-4 row">
                    <div class="col-sm-12 d-flex align-items-center">
                        <input type="number" class="form-control" name="kd_prov" id="kd_prov" maxlength="2"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

                    </div>
                </div>
                <div class=" mb-4 row">
                    <div class="col-sm-12 d-flex align-items-center">
                        <input type="number" class="form-control" name="kd_kab" id="kd_kab" maxlength="2"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    </div>
                </div>
                <div class=" mb-4 row">
                    <div class="col-sm-12 d-flex align-items-center">
                        <input type="number" class="form-control" name="kd_kec" id="kd_kec" maxlength="3"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    </div>
                </div>
                <div class=" mb-4 row">
                    <div class="col-sm-12 d-flex align-items-center">
                        <input type="number" class="form-control" name="kd_desa" id="kd_desa" maxlength="3"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    </div>
                </div>

            </td>
        </tr>
        <tr>
            <td class="px-5 py-3" colspan="2">
                <div class="mb-1 row">
                    <label for="nama_perusahaan" class="col-sm-3 col-form-label">
                        <strong>5. Nama perusahaan</strong> <br>
                        <span class="fst-italic">&nbsp; &nbsp; Name of Companny</span>
                    </label>
                    <div class="col-sm-9 d-flex align-items-center">
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                            value="{{ old('nama_perusahaan', $survey->nama_perusahaan) }}" required>
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="alamat_perusahaan" class="col-sm-3 col-form-label">
                        <strong>6. Alamat perusahaan</strong><br>
                        <span class="fst-italic">&nbsp; &nbsp; Company Address</span>
                    </label>
                    <div class="col-sm-9 d-flex align-items-center">
                        <textarea type="text" class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" required>{{ old('alamat_perusahaan', $survey->alamat_perusahaan) }}</textarea>
                    </div>
                </div>

                <div class="mb-1 row">
                    <div class="col-sm-1"></div>
                    <label for="email_perusahaan" class="col-sm-2 col-form-label">
                        E-mail :<br>
                    </label>
                    <div class="col-sm-4 d-flex align-items-center">
                        <input type="email" class="form-control" id="email_perusahaan" name="email_perusahaan"
                            value="{{ old('email_perusahaan', $survey->email_perusahaan) }}">
                        <div class="invalid-tooltip">
                            Email Salah
                        </div>
                    </div>
                </div>
                <div class="mb-1 row">
                    <div class="col-sm-1"></div>
                    <label for="phone_perusahaan" class="col-sm-2 col-form-label">
                        Phone :<br>
                    </label>
                    <div class="col-sm-4 d-flex align-items-center">
                        <input type="tel" class="form-control" id="phone_perusahaan" name="phone_perusahaan"
                            value="{{ old('phone_perusahaan', $survey->phone_perusahaan) }}">
                    </div>
                    <label for="fax_perusahaan" class="col-sm-1 col-form-label">
                        Fax :<br>
                    </label>
                    <div class="col-sm-4 d-flex align-items-center">
                        <input type="text" class="form-control" id="fax_perusahaan" name="fax_perusahaan"
                            value="{{ old('fax_perusahaan', $survey->fax_perusahaan) }}">
                    </div>
                </div>

                <div class="mb-1 row">
                    <label for="alamat_pusat" class="col-sm-3 col-form-label">
                        <strong>7. Alamat kantor pusat</strong><br>
                        <span class="fst-italic">&nbsp; &nbsp; Head Office Address</span>
                    </label>
                    <div class="col-sm-9 d-flex align-items-center">
                        <textarea type="text" class="form-control" id="alamat_pusat" name="alamat_pusat">{{ old('alamat_pusat', $survey->alamat_pusat) }}</textarea>
                    </div>
                </div>
                <div class="mb-1 row">
                    <div class="col-sm-1"></div>
                    <label for="email_pusat" class="col-sm-2 col-form-label">
                        E-mail :<br>
                    </label>
                    <div class="col-sm-4 d-flex align-items-center">
                        <input type="email" class="form-control" id="email_pusat" name="email_pusat"
                            value="{{ old('email_pusat', $survey->email_pusat) }}">
                    </div>
                </div>
                <div class="mb-1 row">
                    <div class="col-sm-1"></div>
                    <label for="phone_pusat" class="col-sm-2 col-form-label">
                        Phone :<br>
                    </label>
                    <div class="col-sm-4 d-flex align-items-center">
                        <input type="text" class="form-control" id="phone_pusat" name="phone_pusat"
                            value="{{ old('phone_pusat', $survey->phone_pusat) }}">
                    </div>
                    <label for="fax_pusat" class="col-sm-1 col-form-label">
                        Fax :<br>
                    </label>
                    <div class="col-sm-4 d-flex align-items-center">
                        <input type="text" class="form-control" id="fax_pusat" name="fax_pusat"
                            value="{{ old('fax_pusat', $survey->fax_pusat) }}">
                    </div>
                </div>

            </td>
        </tr>

    </table>
    <table style="font-size: 12px" class="table table-sm table-borderless ">
        <tr>
            <td style="font-size:10px" class="py-0">
                <span>*) Coret yang tidak sesuai/</span><span class="fst-italic">Cross out if not valid</span>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row mb-1">
                    <div class="col-sm-3"><strong>Tujuan Survei</strong></div>
                    <div class="col-sm-1 text-end"><strong>:</strong></div>
                    <div class="col-sm-8">Memperoleh data Statistik pertambangan Migas untuk perencanaan dan evaluasi
                        pembangunan nasional</div>
                </div>
                <div class="row mb-1">
                    <div class="col-sm-3 fst-italic"><strong>Objective of the Survey</strong></div>
                    <div class="col-sm-1 text-end"><strong>:</strong></div>
                    <div class="col-sm-8 fst-italic">To obtain of oil and gas mining data for national developmennt
                        planning and evaluation</div>
                </div>
                <br>
                <div class="row mb-1">
                    <div class="col-sm-3"><strong>Jaminan Kerahasiaan Data</strong></div>
                    <div class="col-sm-1 text-end"><strong>:</strong></div>
                    <div class="col-sm-8">Identitas dan seluruh informasi perusahaan akan tetap dirahasiakan dan tidak
                        akan dipublikasikan secara individu sesuai UU No. 16 tahun 1997 Tentang Statistik.</div>
                </div>
                <div class="row mb-1">
                    <div class="col-sm-3 fst-italic"><strong>Data Confidentiality Guarantee</strong></div>
                    <div class="col-sm-1 text-end"><strong>:</strong></div>
                    <div class="col-sm-8 fst-italic">Identity and all company information will remain secret and will
                        not be published individually based on Law No. 16 of 1997 on Statistics.</div>
                </div>
                <br>
                <div class="row mb-1">
                    <div class="col-sm-3"><strong>Biaya Survei</strong></div>
                    <div class="col-sm-1 text-end"><strong>:</strong></div>
                    <div class="col-sm-8">Survei ini tidak memungut biaya apapun dan tidak ada kaitannya dengan pajak.
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-sm-3 fst-italic"><strong>Charge of the Survey
                        </strong></div>
                    <div class="col-sm-1 text-end"><strong>:</strong></div>
                    <div class="col-sm-8 fst-italic">The survey is free of charge and has no related with taxes.</div>
                </div><br>
                <div class="row mb-1">
                    <div class="col-sm-3"><strong>Pengembalian Dokumen</strong></div>
                    <div class="col-sm-1 text-end"><strong>:</strong></div>
                    <div class="col-sm-8">Dikirim ke BPS selambat-lambatnya pada tanggal 1 Agustus 2022.
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-sm-3 fst-italic"><strong>Date of Document Return
                        </strong></div>
                    <div class="col-sm-1 text-end"><strong>:</strong></div>
                    <div class="col-sm-8 fst-italic">Please send this document to BPS before August 1st 2022.</div>
                </div>
            </td>
        </tr>
    </table>

    <table style="font-size: 10px" class="table table-sm table-borderless">
        <tr>
            <th class="text-center  border-top border-bottom border-dark" colspan="2">Keterangan Lebih </th>
        </tr>
        <tr>
            <th>Koordinator Fungsi Statistik Pertambangan dan Energi</th>
            <th class="text-end fst-italic">Function Coordinator of Mining and Energy Statistics</th>
        </tr>
        <tr class="border-bottom border-dark">
            <td> Badan Pusat Statistik, Jl. Dr. Sutomo No. 6-8, Jakarta 10710<br>
                Telp. (021) 3841195, 3842508, 3810291-4, Pesawat 5330-5333 <br>
                Fax (021) 3863816 <br>
                E-mail: pe@bps.go.id</td>
            <td class="text-end fst-italic">

                BPS - Statistics Indonesia, Jl. Dr. Sutomo No. 6-8, Jakarta 10710 <br>
                Phone (021) 3841195, 3842508, 3810291-4, Ext 5330-5333<br>
                Fax (021) 3863816 <br>
                E-mail: pe@bps.go.id
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
                            value="{{ old('kbli', $survey->kbli) }}" maxlength="5">
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
                    <div class="col-sm-4">
                        Lainnya -4
                    </div>
                    <div class="col-sm-2 d-flex align-items-center">
                        <input type="number" class="form-control" id="bentuk_kerjasama" name="bentuk_kerjasama"
                            max="4" min="1"
                            value="{{ old('bentuk_kerjasama', $survey->bentuk_kerjasama) }}" maxlength="1"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="pemodalan_pem_pusat" class="col-sm-12 col-form-label">
                        <strong>102. Persentase pemodalan
                            <span class="fst-italic">Percentage of Capital Modal</span></strong>
                    </label>
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <div class="col-sm-5">
                        a. Pemerintah Pusat/ <span class="fst-italic">Central Goverment</span>
                    </div>
                    <div class="col-sm-2">
                        <input type="number" class="form-control form-control-sm" id="pemodalan_pem_pusat"
                            name="pemodalan_pem_pusat" min="1" max="100"
                            value="{{ old('pemodalan_pem_pusat', $survey->pemodalan_pem_pusat) }}" maxlength="3"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    </div>
                    %
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <div class=" col-sm-5">
                        b. Pemerintah Daerah/ <span class="fst-italic">Local Goverment</span>
                    </div>
                    <div class="col-sm-2">
                        <input type="number" class="form-control form-control-sm" id="pemodalan_pem_daerah"
                            name="pemodalan_pem_daerah" min="1" max="100"
                            value="{{ old('pemodalan_pem_daerah', $survey->pemodalan_pem_daerah) }}" maxlength="3"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    </div>
                    %
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <div class=" col-sm-5">
                        c. Swasta/ <span class="fst-italic">Private</span>
                    </div>
                    <div class="col-sm-2">
                        <input type="number" class="form-control form-control-sm" id="pemodalan_swasta"
                            name="pemodalan_swasta"
                            value="{{ old('pemodalan_swasta', $survey->pemodalan_swasta) }}" maxlength="3"
                            min="1" max="100"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    </div>
                    %
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <div class=" col-sm-5">
                        d. Asing/ <span class="fst-italic">Foreign</span>
                    </div>
                    <div class="col-sm-2">
                        <input type="number" class="form-control form-control-sm" id="pemodalan_asing"
                            name="pemodalan_asing" value="{{ old('pemodalan_asing', $survey->pemodalan_asing) }}"
                            maxlength="3" min="1" max="100"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    </div>
                    {{-- <div class="col-sm-1">%</div> --}}
                    %
                    <div class="col-sm-4" style="font-size: 12px">&rarr; <strong> (Jika terisi lanjut ke R103 / <span
                                class="fst-italic">If filled, continue
                                to R 103</span>)</strong></div>

                </div>
                <div class="mb-3 row d-flex align-items-center">
                    <div class=" col-sm-5">
                        e. jumlah/ <span class="fst-italic">Total</span>
                    </div>
                    <div class="col-sm-2">
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
                    <span style="font-size: 12px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (Urutkan dari pemegang saham
                        terbesar / Sort by largest shareholder)</span>
                    <div class="ps-5 pe-0">
                        <table class="table table-sm table-bordered border-dark text-center align-middle"
                            style="font-size:14px">
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
                                    <input type="text" class="form-control form-control-sm"
                                        id="pemegang_saham_1_nama" name="pemegang_saham_1_nama"
                                        value="{{ old('pemegang_saham_1_nama', $survey->pemegang_saham_1_nama) }}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        id="pemegang_saham_1_negara" name="pemegang_saham_1_negara"
                                        value="{{ old('pemegang_saham_1_negara', $survey->pemegang_saham_1_negara) }}">
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm"
                                        id="pemegang_saham_1_share" name="pemegang_saham_1_share"
                                        value="{{ old('pemegang_saham_1_share', $survey->pemegang_saham_1_share) }}"
                                        maxlength="3" min="1" max="100"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        id="pemegang_saham_2_nama" name="pemegang_saham_2_nama"
                                        value="{{ old('pemegang_saham_2_nama', $survey->pemegang_saham_2_nama) }}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        id="pemegang_saham_2_negara" name="pemegang_saham_2_negara"
                                        value="{{ old('pemegang_saham_2_negara', $survey->pemegang_saham_2_negara) }}">
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm"
                                        id="pemegang_saham_2_share" name="pemegang_saham_2_share"
                                        value="{{ old('pemegang_saham_2_share', $survey->pemegang_saham_2_share) }}"
                                        maxlength="3" min="1" max="100"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        id="pemegang_saham_3_nama" name="pemegang_saham_3_nama"
                                        value="{{ old('pemegang_saham_3_nama', $survey->pemegang_saham_3_nama) }}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        id="pemegang_saham_3_negara" name="pemegang_saham_3_negara"
                                        value="{{ old('pemegang_saham_3_negara', $survey->pemegang_saham_3_negara) }}">
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm"
                                        id="pemegang_saham_3_share" name="pemegang_saham_3_share"
                                        value="{{ old('pemegang_saham_3_share', $survey->pemegang_saham_3_share) }}"
                                        maxlength="3" min="1" max="100"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        id="pemegang_saham_1_nama" name="pemegang_saham_4_nama"
                                        value="{{ old('pemegang_saham_4_nama', $survey->pemegang_saham_4_nama) }}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        id="pemegang_saham_4_negara" name="pemegang_saham_4_negara"
                                        value="{{ old('pemegang_saham_4_negara', $survey->pemegang_saham_4_negara) }}">
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm"
                                        id="pemegang_saham_4_share" name="pemegang_saham_4_share"
                                        value="{{ old('pemegang_saham_4_share', $survey->pemegang_saham_4_share) }}"
                                        maxlength="3" min="1" max="100"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        id="pemegang_saham_5_nama" name="pemegang_saham_5_nama"
                                        value="{{ old('pemegang_saham_5_nama', $survey->pemegang_saham_5_nama) }}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        id="pemegang_saham_5_negara" name="pemegang_saham_5_negara"
                                        value="{{ old('pemegang_saham_5_negara', $survey->pemegang_saham_5_negara) }}">
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm"
                                        id="pemegang_saham_5_share" name="pemegang_saham_5_share"
                                        value="{{ old('pemegang_saham_5_share', $survey->pemegang_saham_5_share) }}"
                                        maxlength="3" min="1" max="100"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
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
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="fst-italic">Number of Permanent and Contracted
                            by
                            Sex</span>
                    </label>
                    <div class="ps-5 pe-0">
                        <table class="table table-sm table-bordered border-dark " style="font-size: 14px">
                            <tr class="text-center">
                                <th>Jenis Kelamin/<span class="fst-italic">Sex</span></th>
                                <th>Orang/<span class="fst-italic">Person</span></th>
                            </tr>
                            <tr style="font-size:10px" class="text-center">
                                <td>(1)</td>
                                <td>(2)</td>
                            </tr>
                            <tr>
                                <td>a. Laki-laki/<span class="fst-italic">Male</span>
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm" id="pekerja_lakilaki"
                                        name="pekerja_lakilaki" min="1"
                                        value="{{ old('pekerja_lakilaki', $survey->pekerja_lakilaki) }}">
                                </td>

                            </tr>
                            <tr>
                                <td>b. Perempuan/<span class="fst-italic">Female</span>
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm" id="pekerja_perempuan"
                                        name="pekerja_perempuan" min="1"
                                        value="{{ old('pekerja_perempuan', $survey->pekerja_perempuan) }}">
                                </td>
                            </tr>
                            <tr>
                                <td> <strong> c. Jumlah/<span class="fst-italic">Total</span></strong>
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm"
                                        id="pekerja_jenis_kelamin_jumlah" name="pekerja_jenis_kelamin_jumlah"
                                        min="1"
                                        value="{{ old('pekerja_jenis_kelamin_jumlah', $survey->pekerja_jenis_kelamin_jumlah) }}">
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
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="fst-italic">Number of Permanent and Contracted
                            by
                            Education</span>
                    </label>
                    <div class="ps-5 pe-0">
                        <table class="table table-sm table-bordered border-dark align-middle" style="font-size: 14px">
                            <tr class=" text-center">
                                <th>Jenjang Pendidikan/<span class="fst-italic">Education</span></th>
                                <th>Orang/<span class="fst-italic">Person</span></th>
                            </tr>
                            <tr style="font-size:10px" class="text-center">
                                <td>(1)</td>
                                <td>(2)</td>
                            </tr>
                            <tr>
                                <td>
                                    a. SLTP dan Sederajat atau lebih rendah /<span class="fst-italic">Junior High
                                        School
                                        and Equal or lower</span>
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm" id="pekerja_sltp"
                                        min="1" name="pekerja_sltp"
                                        value="{{ old('pekerja_sltp', $survey->pekerja_sltp) }}">
                                </td>

                            </tr>
                            <tr>
                                <td>b. Sampai dengan SLTA/<span class="fst-italic">High School and lower</span>
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm" id="pekerja_slta"
                                        min="1" name="pekerja_slta"
                                        value="{{ old('pekerja_slta', $survey->pekerja_slta) }}">
                                </td>
                            </tr>
                            <tr>
                                <td> c. Diploma I/II/III
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm" id="pekerja_diploma"
                                        name="pekerja_diploma" min="1"
                                        value="{{ old('pekerja_diploma', $survey->pekerja_diploma) }}">
                                </td>
                            </tr>
                            <tr>
                                <td> d. Sarjana dan Diploma IV/<span class="fst-italic">Undergraduate</span>
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm" id="pekerja_sarjana"
                                        name="pekerja_sarjana" min="1"
                                        value="{{ old('pekerja_sarjana', $survey->pekerja_sarjana) }}">
                                </td>
                            </tr>
                            <tr>
                                <td> e. Pasca Sarjana/<span class="fst-italic">Post Graduate</span>
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm"
                                        id="pekerja_pascasarjana" name="pekerja_pascasarjana" min="1"
                                        value="{{ old('pekerja_pascasarjana', $survey->pekerja_pascasarjana) }}">
                                </td>
                            </tr>
                            <tr>
                                <td> <strong> f. Jumlah/<span class="fst-italic">Total</span></strong>
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm"
                                        id="pekerja_pendidikan_jumlah" name="pekerja_pendidikan_jumlah"
                                        min="1"
                                        value="{{ old('pekerja_pendidikan_jumlah', $survey->pekerja_pendidikan_jumlah) }}">
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
                        <input type="number" class="form-control form-control-sm" id="pekerja_asing"
                            name="pekerja_asing" min="1"
                            value="{{ old('pekerja_asing', $survey->pekerja_asing) }}">
                    </div>
                    <div class="col-sm-2">
                        Orang/<span class="fst-italic">Person</span>
                    </div>
                </div>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="bentuk_kerjasama" class="col-sm-8 col-form-label">
                        <strong>204. Jumlah Pekerja Outsourcing/
                            <span class="fst-italic">Number of Outsourcing Workers</span></strong>
                    </label>
                    <div class="col-sm-2 d-flex align-items-center">
                        <input type="number" class="form-control form-control-sm" id="pekerja_outsourcing"
                            name="pekerja_outsourcing" min="1"
                            value="{{ old('pekerja_outsourcing', $survey->pekerja_outsourcing) }}">
                    </div>
                    <div class="col-sm-2">
                        Orang/<span class="fst-italic">Person</span>
                    </div>
                </div>
                <br>
                <div class="mb-1 row ms-4">
                    <div class="col-sm-12" style="font-size: 12px">
                        <strong>Pekerja Tetap</strong> adalah pekerja formal perusahaan dan memiliki kesempatan dalam
                        jejang karir sesuai aturan perusahaan.
                    </div>
                    <div class="col-sm-12 fst-italic mb-2" style="font-size: 12px">
                        <strong>Permanent employees</strong> are formal employees of the company and have opportunities
                        in career paths in accordance with company regulations.
                    </div>
                    <div class="col-sm-12" style="font-size: 12px">
                        <strong>Pekerja kontrak</strong> adalah pekerja yang dipekerjakan oleh perusahaan untuk jangka
                        waktu terbatas dan tidak memiliki kesempatan dalam jejang karir sesuai aturan perusahaan.
                    </div>
                    <div class="col-sm-12 fst-italic mb-2" style="font-size: 12px">
                        <strong>Contract workers</strong> are workers who are employed by the company for a limited
                        period of time and do not have career opportunities according to company regulations.
                    </div>
                    <div class="col-sm-12" style="font-size: 12px">
                        <strong>Pekerja outsourcing </strong> adalah pekerja yang direkrut dari perusahaan penyalur
                        tenaga kerja untuk jangka waktu pendek dan menangani pekerjaan khusus baik produksi maupun non
                        produksi.
                    </div>
                    <div class="col-sm-12 fst-italic mb-2" style="font-size: 12px">
                        <strong>Outsourced workers</strong> are workers who are recruited from labor supply companies
                        for a short time and handle special jobs, both production and non- production.
                    </div>

                </div>
            </td>
        </tr>
    </table>

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
                        <strong>301. Balas Jasa Pekerja Tetap dan Kontrak Termasuk Asing/
                            <span class="fst-italic">Compensation</span></strong>
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
                                <input type="number" class="form-control form-control-sm" id="gaji_pk_tetap"
                                    name="gaji_pk_tetap"
                                    value="{{ old('gaji_pk_tetap', $survey->gaji_pk_tetap) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="gaji_pk_kontrak"
                                    name="gaji_pk_kontrak"
                                    value="{{ old('gaji_pk_kontrak', $survey->gaji_pk_kontrak) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>b. Upah Lembur <br>
                                <span class="fst-italic">&nbsp; &nbsp; Overtime</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="lembur_pk_tetap"
                                    name="lembur_pk_tetap"
                                    value="{{ old('lembur_pk_tetap', $survey->lembur_pk_tetap) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="lembur_pk_kontrak"
                                    name="lembur_pk_kontrak"
                                    value="{{ old('lembur_pk_kontrak', $survey->lembur_pk_kontrak) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>c. Uang Transportasi dan Uang Makan<br>
                                <span class="fst-italic">&nbsp; &nbsp; Transportation and Meal</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="transport_pk_tetap"
                                    name="transport_pk_tetap"
                                    value="{{ old('transport_pk_tetap', $survey->transport_pk_tetap) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="transport_pk_kontrak"
                                    name="transport_pk_kontrak"
                                    value="{{ old('transport_pk_kontrak', $survey->transport_pk_kontrak) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>d. Hadiah, Bonus, dan Sejenisnya<br>
                                <span class="fst-italic">&nbsp; &nbsp; Reward, Bonus, etc</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bonus_pk_tetap"
                                    name="bonus_pk_tetap"
                                    value="{{ old('bonus_pk_tetap', $survey->bonus_pk_tetap) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bonus_pk_kontrak"
                                    name="bonus_pk_kontrak"
                                    value="{{ old('bonus_pk_kontrak', $survey->bonus_pk_kontrak) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>e. Iuaran Dana Pension dan Tunjangan Sosial<br>
                                <span class="fst-italic">&nbsp; &nbsp; Pension Contribution and Sosial Allowance</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="pensiun_pk_tetap"
                                    name="pensiun_pk_tetap"
                                    value="{{ old('pensiun_pk_tetap', $survey->pensiun_pk_tetap) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="pensiun_pk_kontrak"
                                    name="pensiun_pk_kontrak"
                                    value="{{ old('pensiun_pk_kontrak', $survey->pensiun_pk_kontrak) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>f. Asuransi Tenaga Kerja<br>
                                <span class="fst-italic">&nbsp; &nbsp; Labout Insurance</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="asuransi_pk_tetap"
                                    name="asuransi_pk_tetap"
                                    value="{{ old('asuransi_pk_tetap', $survey->asuransi_pk_tetap) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="asuransi_pk_kontrak"
                                    name="asuransi_pk_kontrak"
                                    value="{{ old('asuransi_pk_kontrak', $survey->asuransi_pk_kontrak) }}">
                            </td>
                        </tr>
                        <tr>
                            <th>g. JUMLAH/
                                <span class="fst-italic">TOTAL</span>
                            </th>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="jumlah_balas_jasa_pk_tetap" name="jumlah_balas_jasa_pk_tetap"
                                    value="{{ old('jumlah_balas_jasa_pk_tetap', $survey->jumlah_balas_jasa_pk_tetap) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="jumlah_balas_jasa_pk_kontrak" name="jumlah_balas_jasa_pk_kontrak"
                                    value="{{ old('jumlah_balas_jasa_pk_kontrak', $survey->jumlah_balas_jasa_pk_kontrak) }}">
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
                        <input type="number" class="form-control form-control-sm" id="biaya_outsourcing"
                            name="biaya_outsourcing"
                            value="{{ old('biaya_outsourcing', $survey->biaya_outsourcing) }}">
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
                                <input type="number" class="form-control form-control-sm" id="biaya_pengurasan"
                                    name="biaya_pengurasan"
                                    value="{{ old('biaya_pengurasan', $survey->biaya_pengurasan) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>b. Biaya angkutan migas ke penampungan utama di lokasi penambangan<br>
                                <span class="fst-italic">&nbsp; &nbsp; Transportation cost include of oil and gas field
                                    to the main storage</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="biaya_angkutan"
                                    name="biaya_angkutan"
                                    value="{{ old('biaya_angkutan', $survey->biaya_angkutan) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>c. Biaya penyimpanan<br>
                                <span class="fst-italic">&nbsp; &nbsp; Storage cost</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="biaya_penyimpanan"
                                    name="biaya_penyimpanan"
                                    value="{{ old('biaya_penyimpanan', $survey->biaya_penyimpanan) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>d. Biaya pekerjaan yang subkontrakan kepada pihak lain<br>
                                <span class="fst-italic">&nbsp; &nbsp; Cost of miningservices carried out by
                                    other</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="biaya_subkontrak"
                                    name="biaya_subkontrak"
                                    value="{{ old('biaya_subkontrak', $survey->biaya_subkontrak) }}">
                            </td>
                        </tr>
                        <tr>
                            <th>e. JUMLAH/
                                <span class="fst-italic">TOTAL</span>
                            </th>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="biaya_jumlah_produksi"
                                    name="biaya_jumlah_produksi"
                                    value="{{ old('biaya_jumlah_produksi', $survey->biaya_jumlah_produksi) }}">
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
                <div class="mb-1 row ">
                    <div class="col-sm-12 ps-0 fst-italic" style="font-size: 12px">
                        <strong>Depletion, collection and separation cost</strong>
                        include the cost of underground drainage and oil and gas field storage facilities process
                    </div>
                </div>
                <br>
                <div class="mb-1 row ">
                    <div class="col-sm-12 ps-0" style="font-size: 12px">
                        <strong>Biaya angkutan </strong>
                        mencakup pengiriman migas dari lapangan migas ke penyimpanan utama sebelum penjualan atau
                        pengolahan lebih lanjut
                    </div>
                </div>
                <div class="mb-1 row ">
                    <div class="col-sm-12 ps-0 fst-italic" style="font-size: 12px">
                        <strong>Transportation cost</strong>
                        include delivery of oil and gas from oil and gas field to the main storage before sale or
                        further processing
                    </div>
                </div> <br>
                <div class="mb-1 row ">
                    <div class="col-sm-12 ps-0" style="font-size: 12px">
                        <strong>Biaya penyimpanan </strong>
                        mencakup biaya penyimpanan migas di tempat penyimpanan utama
                    </div>
                </div>
                <div class="mb-1 row ">
                    <div class="col-sm-12 ps-0 fst-italic" style="font-size: 12px">
                        <strong>Storage costs </strong>
                        include the cost of oil and gas storage in the main storage
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
                            <th rowspan="2">Jenis Bahan Bakar dan Pelumas <br> <span class="fst-italic">Kind of
                                    Fuels
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
                                <input type="number" class="form-control form-control-sm" id="bb_avgas_volume"
                                    name="bb_avgas_volume"
                                    value="{{ old('bb_avgas_volume', $survey->bb_avgas_volume) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_avgas_nilai"
                                    name="bb_avgas_nilai"
                                    value="{{ old('bb_avgas_nilai', $survey->bb_avgas_nilai) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>b. Avtur/<span class="fst-italic">Avtur</span></td>
                            <td class="text-center">Liter</td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_avtur_volume"
                                    name="bb_avtur_volume"
                                    value="{{ old('bb_avtur_volume', $survey->bb_avtur_volume) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_avtur_nilai"
                                    name="bb_avtur_nilai"
                                    value="{{ old('bb_avtur_nilai', $survey->bb_avtur_nilai) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>c. Bensin/<span class="fst-italic">gasolin</span></td>
                            <td class="text-center">Liter</td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_bensin_volume"
                                    name="bb_bensin_volume"
                                    value="{{ old('bb_bensin_volume', $survey->bb_bensin_volume) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_bensin_nilai"
                                    name="bb_bensin_nilai"
                                    value="{{ old('bb_bensin_nilai', $survey->bb_bensin_nilai) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>d. Minyak Solar/Gas Oil/<span class="fst-italic">Automotive Diesel Oil</span></td>
                            <td class="text-center">Liter</td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_solar_volume"
                                    name="bb_solar_volume"
                                    value="{{ old('bb_solar_volume', $survey->bb_solar_volume) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_solar_nilai"
                                    name="bb_solar_nilai"
                                    value="{{ old('bb_solar_nilai', $survey->bb_solar_nilai) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>e. Minyak Diesel/<span class="fst-italic">Diesel Oil</span></td>
                            <td class="text-center">Liter</td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_diesel_volume"
                                    name="bb_diesel_volume"
                                    value="{{ old('bb_diesel_volume', $survey->bb_diesel_volume) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_diesel_nilai"
                                    name="bb_diesel_nilai"
                                    value="{{ old('bb_diesel_nilai', $survey->bb_diesel_nilai) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>f. Minyak Tanah/<span class="fst-italic">Kerosene</span></td>
                            <td class="text-center">Liter</td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_minyaktanah_volume"
                                    name="bb_minyaktanah_volume"
                                    value="{{ old('bb_minyaktanah_volume', $survey->bb_minyaktanah_volume) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_minyaktanah_nilai"
                                    name="bb_minyaktanah_nilai"
                                    value="{{ old('bb_minyaktanah_nilai', $survey->bb_minyaktanah_nilai) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>g. Elpiji/<span class="fst-italic">LPG</span></td>
                            <td class="text-center">Kg</td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_elpiji_volume"
                                    name="bb_elpiji_volume"
                                    value="{{ old('bb_elpiji_volume', $survey->bb_elpiji_volume) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_elpiji_nilai"
                                    name="bb_elpiji_nilai"
                                    value="{{ old('bb_elpiji_nilai', $survey->bb_elpiji_nilai) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>h. Gas Alam/<span class="fst-italic">Natural Gas</span></td>
                            <td class="text-center">MMSCF</td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_gasalam_volume"
                                    name="bb_gasalam_volume"
                                    value="{{ old('bb_gasalam_volume', $survey->bb_gasalam_volume) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_gasalam_nilai"
                                    name="bb_gasalam_nilai"
                                    value="{{ old('bb_gasalam_nilai', $survey->bb_gasalam_nilai) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>i. Minyak Bakar/<span class="fst-italic">Mini Fuel Oil</span></td>
                            <td class="text-center">Liter</td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_minyakbakar_volume"
                                    name="bb_minyakbakar_volume"
                                    value="{{ old('bb_minyakbakar_volume', $survey->bb_minyakbakar_volume) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_minyakbakar_nilai"
                                    name="bb_minyakbakar_nilai"
                                    value="{{ old('bb_minyakbakar_nilai', $survey->bb_minyakbakar_nilai) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>j. Batubara/<span class="fst-italic">Coal</span></td>
                            <td class="text-center">Ton</td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_batubara_volume"
                                    name="bb_batubara_volume"
                                    value="{{ old('bb_batubara_volume', $survey->bb_batubara_volume) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_batubara_nilai"
                                    name="bb_batubara_nilai"
                                    value="{{ old('bb_batubara_nilai', $survey->bb_batubara_nilai) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>k. Bahan Bakar Lainnya/<span class="fst-italic">Other Fuels</span></td>
                            <td class="text-center bg-secondary"></td>
                            <td class="bg-secondary">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_lainnnya_nilai"
                                    name="bb_lainnnya_nilai"
                                    value="{{ old('bb_lainnnya_nilai', $survey->bb_lainnnya_nilai) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>l. Pelumas/<span class="fst-italic">Lubricant</span></td>
                            <td class="text-center">Liter</td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_pelumas_volume"
                                    name="bb_pelumas_volume"
                                    value="{{ old('bb_pelumas_volume', $survey->bb_pelumas_volume) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_pelumas_nilai"
                                    name="bb_pelumas_nilai"
                                    value="{{ old('bb_pelumas_nilai', $survey->bb_pelumas_nilai) }}">
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3">e. JUMLAH/
                                <span class="fst-italic">TOTAL</span>
                            </th>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="bb_jumlah_nilai"
                                    name="bb_jumlah_nilai"
                                    value="{{ old('bb_jumlah_nilai', $survey->bb_jumlah_nilai) }}">
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
                        <input type="number" class="form-control form-control-sm" id="garam_volume"
                            name="garam_volume" value="{{ old('garam_volume', $survey->garam_volume) }}">
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
                        <input type="number" class="form-control form-control-sm" id="garam_volume"
                            name="garam_volume" value="{{ old('garam_volume', $survey->garam_volume) }}">
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
                                <input type="number" class="form-control form-control-sm"
                                    id="pengeluaran_sukucadang" name="pengeluaran_sukucadang"
                                    value="{{ old('pengeluaran_sukucadang', $survey->pengeluaran_sukucadang) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>b. Alat tulis kantor dan perlengkapan kantor <br>
                                <span class="fst-italic">&nbsp; &nbsp; Stationaries and computer supplies</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="pengeluaran_atk"
                                    name="pengeluaran_atk"
                                    value="{{ old('pengeluaran_atk', $survey->pengeluaran_atk) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>c. Pembelian peralatan dan perlengkapan pertambangan yang penggunaannya kurang dari satu
                                tahun<br>
                                <span class="fst-italic">&nbsp; &nbsp; Equipments purcashing which the period utility
                                    is
                                    less than one year</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="pengeluaran_peralatan_setahun" name="pengeluaran_peralatan_setahun"
                                    value="{{ old('pengeluaran_peralatan_setahun', $survey->pengeluaran_peralatan_setahun) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>d. Sewa kendaraan, mesin dan peralatan lainnya<br>
                                <span class="fst-italic">&nbsp; &nbsp; Rent expenditures for vehicles, machinery and
                                    other equipments</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="pengeluaran_sewa_kendaraan" name="pengeluaran_sewa_kendaraan"
                                    value="{{ old('pengeluaran_sewa_kendaraan', $survey->pengeluaran_sewa_kendaraan) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>e. Sewa tanah dan gedung kantor<br>
                                <span class="fst-italic">&nbsp; &nbsp; Land-fare and Rent expenditure for
                                    building</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="pengeluaran_sewa_tanah" name="pengeluaran_sewa_tanah"
                                    value="{{ old('pengeluaran_sewa_tanah', $survey->pengeluaran_sewa_tanah) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>f. Biaya jasa pertambangan yang dikerjakan pihak lain<br>
                                <span class="fst-italic">&nbsp; &nbsp; Cost of service carried out by other</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="pengeluaran_jasa_lain"
                                    name="pengeluaran_jasa_lain"
                                    value="{{ old('pengeluaran_jasa_lain', $survey->pengeluaran_jasa_lain) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>g. Asuransi barang modal<br>
                                <span class="fst-italic">&nbsp; &nbsp; Capital goods insurance</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="pengeluaran_asuransi"
                                    name="pengeluaran_asuransi"
                                    value="{{ old('pengeluaran_asuransi', $survey->pengeluaran_asuransi) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>h. Angkutan<br>
                                <span class="fst-italic">&nbsp; &nbsp; Transportation</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="pengeluaran_angkutan"
                                    name="pengeluaran_angkutan"
                                    value="{{ old('pengeluaran_angkutan', $survey->pengeluaran_angkutan) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>i. Pergudangan<br>
                                <span class="fst-italic">&nbsp; &nbsp; Warehousing</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="pengeluaran_pergudangan" name="pengeluaran_pergudangan"
                                    value="{{ old('pengeluaran_pergudangan', $survey->pengeluaran_pergudangan) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>j. Biaya pos dan telekomunikasi<br>
                                <span class="fst-italic">&nbsp; &nbsp; Post and telecommunication</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="pengeluaran_pos"
                                    name="pengeluaran_pos"
                                    value="{{ old('pengeluaran_pos', $survey->pengeluaran_pos) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>k. Perjalanan dinas<br>
                                <span class="fst-italic">&nbsp; &nbsp; Supervision</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="pengeluaran_perjalanan" name="pengeluaran_perjalanan"
                                    value="{{ old('pengeluaran_perjalanan', $survey->pengeluaran_perjalanan) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>l. Bunga pinjaman<br>
                                <span class="fst-italic">&nbsp; &nbsp; Loan Interest</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="pengeluaran_bunga_pinjaman" name="pengeluaran_bunga_pinjaman"
                                    value="{{ old('pengeluaran_bunga_pinjaman', $survey->pengeluaran_bunga_pinjaman) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>m. Pajak Pertanmbahan Nilai Barang dan Jasa(PPN)<br>
                                <span class="fst-italic">&nbsp; &nbsp; Goods and service Tax</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="pengeluaran_ppn"
                                    name="pengeluaran_ppn"
                                    value="{{ old('pengeluaran_ppn', $survey->pengeluaran_ppn) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>n. Pajak Penghasilan<br>
                                <span class="fst-italic">&nbsp; &nbsp; Income Tax</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="pengeluaran_pph"
                                    name="pengeluaran_pph"
                                    value="{{ old('pengeluaran_pph', $survey->pengeluaran_pph) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>o. Pajak dann Retribusi Lainnya<br>
                                <span class="fst-italic">&nbsp; &nbsp; Other Tax and Retribution</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="pengeluaran_pajak_lain" name="pengeluaran_pajak_lain"
                                    value="{{ old('pengeluaran_pajak_lain', $survey->pengeluaran_pajak_lain) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>p. Penyusutan dan amortisasi<br>
                                <span class="fst-italic">&nbsp; &nbsp; Deprecation and amortization</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="pengeluaran_penyusutan" name="pengeluaran_penyusutan"
                                    value="{{ old('pengeluaran_penyusutan', $survey->pengeluaran_penyusutan) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>q. Jasa akuntan, penasehat hukum dan sejenisnya<br>
                                <span class="fst-italic">&nbsp; &nbsp; Accountance, legal advisor and others
                                    services</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="pengeluaran_jasa_akuntan" name="pengeluaran_jasa_akuntan"
                                    value="{{ old('pengeluaran_jasa_akuntan', $survey->pengeluaran_jasa_akuntan) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>r. Pendidikan dan Pelatihan Sumber Daya Manusia<br>
                                <span class="fst-italic">&nbsp; &nbsp; Education and Training of Human
                                    Resources</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="pengeluaran_pendidikan" name="pengeluaran_pendidikan"
                                    value="{{ old('pengeluaran_pendidikan', $survey->pengeluaran_pendidikan) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>s. Lainnya, seperti : iklan, riset pemasaran kehumasan dan sejenisnya<br>
                                <span class="fst-italic">&nbsp; &nbsp; Other, i.o : promotion, market research,
                                    charity,
                                    etc</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="pengeluaran_lainnya" name="pengeluaran_lainnya"
                                    value="{{ old('pengeluaran_lainnya', $survey->pengeluaran_lainnya) }}">
                            </td>
                        </tr>
                        <tr>
                            <th>t. Jumlah<br>
                                <span class="fst-italic">&nbsp; &nbsp; Total</span>
                            </th>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="pengeluaran_jumlah"
                                    name="pengeluaran_jumlah"
                                    value="{{ old('pengeluaran_jumlah', $survey->pengeluaran_jumlah) }}">
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="biaya_pengurasan" class="col-sm-9 col-form-label">
                        <strong>307. Pengeluaran Terkait Investasi Lainnya/
                            <span class="fst-italic">Other investment</span></strong>
                    </label>
                </div>
                <div class="mb-1 row d-flex align-items-center" style="font-size:14px">
                    <div class="col-sm-9">&nbsp; &nbsp; a. Pengeluaran ekplorasi <br>
                        <span class="fst-italic">&nbsp; &nbsp; &nbsp; &nbsp; Exploration expenditures</span>
                    </div>
                    <div class="col-sm-1 text-end">Rp</div>
                    <div class="col-sm-2">
                        <input type="number" class="form-control form-control-sm" id="pengeluaran_eksplorasi"
                            name="pengeluaran_eksplorasi"
                            value="{{ old('pengeluaran_eksplorasi', $survey->pengeluaran_eksplorasi) }}">
                    </div>

                </div>
                <div class="mb-1 row d-flex align-items-center" style="font-size:14px">
                    <div class="col-sm-9">&nbsp; &nbsp; b. Pengeluaran pemulihan tata lingkungan <br>
                        <span class="fst-italic">&nbsp; &nbsp; &nbsp; &nbsp; Land Recovery</span>
                    </div>
                    <div class="col-sm-1 text-end">Rp</div>
                    <div class="col-sm-2">
                        <input type="number" class="form-control form-control-sm" id="pengeluaran_pemulihan"
                            name="pengeluaran_pemulihan"
                            value="{{ old('pengeluaran_pemulihan', $survey->pengeluaran_pemulihan) }}">
                    </div>
                </div>
                <div class="mb-1 row d-flex align-items-center" style="font-size:14px">
                    <div class="col-sm-9">&nbsp; &nbsp; c. Penelitian dan pengembangan <br>
                        <span class="fst-italic">&nbsp; &nbsp; &nbsp; &nbsp; Research and development</span>
                    </div>
                    <div class="col-sm-1 text-end">Rp</div>
                    <div class="col-sm-2">
                        <input type="number" class="form-control form-control-sm" id="pengeluaran_penelitian"
                            name="pengeluaran_penelitian"
                            value="{{ old('pengeluaran_penelitian', $survey->pengeluaran_penelitian) }}">
                    </div>
                </div>
                <br>
                <div class="mb-1 row ">
                    <div class="col-sm-12 ps-4" style="font-size: 12px">
                        <strong> Pengeluaran eksplorasi</strong>
                        meliputi biaya penyelidikan topografi, geologi, geofisika, pengeboran sumur eksplorasi, pemboran
                        sumur uji stratigrafi, pengembangan cadangan terbukti minyak dan gas bumi sampai siap
                        berproduksi
                    </div>
                    <div class="col-sm-12 ps-4 fst-italic" style="font-size: 12px">
                        <strong> Exploration expenditures</strong>
                        include the cost of the investigation topography, geology, geophysics, drilling exploration
                        wells, drilling of stratigraphic test wells, development of proven reserves of oil and gas until
                        ready for production
                    </div>
                    <div class="col-sm-12 ps-4" style="font-size: 12px">
                        <strong> Pengeluaran pemulihan</strong>
                        tata lingkungan adalah mengembalikan lahan rusak karena eksploitasi minyak
                        dan gas bumi, kembali ke posisi dan fungsi semula
                    </div>
                    <div class="col-sm-12 ps-4 fst-italic" style="font-size: 12px">
                        <strong> Land recovery</strong>
                        is kind of expenditure to restore land damaged caused by the exploitation of oil
                        and gas, back to the original function
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-borderless">
        <tr>
            <th class="border-dark border text-center">
                IV. KETENAGALISTRIKAN SELAMA TAHUN 2021 <br>
                <span class="fst-italic">ELECTRICITY DURING 2021</span>
            </th>
        </tr>
        <tr>
            <td>
                <div class="mb-1 row d-flex align-items-center">
                    <label for="gaji_pk_tetap" class="col-sm-8 col-form-label">
                        <strong>401. Tenaga Listrik yang Diproduksi, Dibeli dan Dijual <br>
                            <span class="fst-italic">Electricity Produced, Purcased and Sold</span></strong>
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="mb-1 row pe-0">
                    <table class="table table-bordered border-dark align-middle table-sm" style="font-size: 14px">
                        <tr class="text-center">
                            <th>Uraian/ <span class="fst-italic">/Description</span> </th>
                            <th>Volume <span class="fst-italic"></span>
                                <br>Volume
                            </th>
                            <th>Nilai <span class="fst-italic">/Value</span>
                                <br>(Rupiah)
                            </th>
                        </tr>
                        <tr class="text-center" style="font-size: 10px">
                            <td>(1)</td>
                            <td>(2)</td>
                            <td>(3)</td>
                        </tr>
                        <tr>
                            <td>1. Kapasitas mesin pembangkit listrik (KW) <br>
                                <span class="fst-italic">&nbsp; &nbsp; Capacity of engine power plant</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="kapasitas_pembangkit_listrik_volume"
                                    name="kapasitas_pembangkit_listrik_volume"
                                    value="{{ old('kapasitas_pembangkit_listrik_volume', $survey->kapasitas_pembangkit_listrik_volume) }}">
                            </td>
                            <td class="bg-secondary"></td>
                        </tr>
                        <tr>
                            <td>2. Tenaga listrik yang diproduksi sendiri (KWh) <br>
                                <span class="fst-italic">&nbsp; &nbsp; Own electricity generated</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="produksi_listrik_volume" name="produksi_listrik_volume"
                                    value="{{ old('produksi_listrik_volume', $survey->produksi_listrik_volume) }}">
                            </td>
                            <td><input type="number" class="form-control form-control-sm"
                                    id="produksi_listrik_nilai" name="produksi_listrik_nilai"
                                    value="{{ old('produksi_listrik_nilai', $survey->produksi_listrik_nilai) }}">
                            </td>
                        </tr>
                        <tr class="border-bottom-0">
                            <td colspan="3">3. Bahan Bakar yang digunakan/<span class="fst-italic">Fuel
                                    used</span>
                            </td>
                        </tr>
                        <tr class="border-0">
                            <td class="border-end-0"> &nbsp; &nbsp; a. Minyak Solar dan Minyak Diesel/
                                <span class="fst-italic">Diesel Oil</span>(Liter)
                            </td>
                            <td class="border-start-0 border-end-0">
                                <input type="number" class="form-control form-control-sm"
                                    id="bb_listrik_solar_volume" name="bb_listrik_solar_volume"
                                    value="{{ old('bb_listrik_solar_volume', $survey->bb_listrik_solar_volume) }}">
                            </td>
                            <td class="border-start-0">
                                <input type="number" class="form-control form-control-sm"
                                    id="bb_listrik_solar_nilai" name="bb_listrik_solar_nilai"
                                    value="{{ old('bb_listrik_solar_nilai', $survey->bb_listrik_solar_nilai) }}">
                            </td>
                        </tr>
                        <tr class="border-0">
                            <td class="border-end-0"> &nbsp; &nbsp; b. Batubara/
                                <span class="fst-italic">Coal</span>(Ton)
                            </td>
                            <td class="border-start-0 border-end-0">
                                <input type="number" class="form-control form-control-sm"
                                    id="bb_listrik_batubara_volume" name="bb_listrik_batubara_volume"
                                    value="{{ old('bb_listrik_batubara_volume', $survey->bb_listrik_batubara_volume) }}">
                            </td>
                            <td class="border-start-0">
                                <input type="number" class="form-control form-control-sm"
                                    id="bb_listrik_batubara_nilai" name="bb_listrik_batubara_nilai"
                                    value="{{ old('bb_listrik_batubara_nilai', $survey->bb_listrik_batubara_nilai) }}">
                            </td>
                        </tr>
                        <tr class="border-0">
                            <td class="border-end-0"> &nbsp; &nbsp; c. Gas Alam/
                                <span class="fst-italic">Natural Gas</span>(MMSCF)
                            </td>
                            <td class="border-start-0 border-end-0">
                                <input type="number" class="form-control form-control-sm"
                                    id="bb_listrik_gasalam_volume" name="bb_listrik_gasalam_volume"
                                    value="{{ old('bb_listrik_gasalam_volume', $survey->bb_listrik_gasalam_volume) }}">
                            </td>
                            <td class="border-start-0">
                                <input type="number" class="form-control form-control-sm"
                                    id="bb_listrik_gasalam_nilai" name="bb_listrik_gasalam_nilai"
                                    value="{{ old('bb_listrik_gasalam_nilai', $survey->bb_listrik_gasalam_nilai) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>4. Tenaga listrik yang<strong> DIBELI</strong>(KWh)<br>
                                <span class="fst-italic">&nbsp; &nbsp; Electricity purchased</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="listrik_dibeli_volume" name="listrik_dibeli_volume"
                                    value="{{ old('listrik_dibeli_volume', $survey->listrik_dibeli_volume) }}">
                            </td>
                            <td><input type="number" class="form-control form-control-sm"
                                    id="listrik_dibeli_nilai" name="listrik_dibeli_nilai"
                                    value="{{ old('listrik_dibeli_nilai', $survey->listrik_dibeli_nilai) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>5. Tenaga listrik yang<strong> DIJUAL</strong> kepada pihak lain (KWh)<br>
                                <span class="fst-italic">&nbsp; &nbsp; Electricity sold to other</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="listrik_dijual_volume" name="listrik_dijual_volume"
                                    value="{{ old('listrik_dijual_volume', $survey->listrik_dijual_volume) }}">
                            </td>
                            <td><input type="number" class="form-control form-control-sm"
                                    id="listrik_dijual_nilai" name="listrik_dijual_nilai"
                                    value="{{ old('listrik_dijual_nilai', $survey->listrik_dijual_nilai) }}">
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-borderless">
        <tr>
            <td class="py-0">
                <div class="mb-0 row ">
                    <table class="table table-bordered border-dark align-middle">
                        <tr>
                            <th class="border-dark border text-center">
                                V. STOK, PRODUKSI, PEMAKAIAN DAN PENJUALAN PADA TAHUN 2021 <br>
                                <span class="fst-italic">STOCK, PRODUCTIONN, USAGE AND SALES IN 2021</span>
                            </th>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="mb-1 row ">
                    <table class="table table-bordered border-dark align-middle table-sm" style="font-size: 14px">
                        <tr class="text-center">
                            <th>Uraian/<span class="fst-italic">Description</span></th>
                            <th>Minyak Mentah <br> <span class="fst-italic">Crude Oil</span> <br>(Barrel)</th>
                            <th>Konsendat <br> <span class="fst-italic">Condensate</span> <br>(Barrel)</th>
                            <th>Gas Bumi <br> <span class="fst-italic">Natural Gas</span> <br>(MMSCF)</th>
                        </tr>
                        <tr class="text-center" style="font-size: 10px">
                            <td>(1)</td>
                            <td>(2)</td>
                            <td>(3)</td>
                            <td>(4)</td>
                        </tr>
                        <tr>
                            <td>1. Volume Stok Awal<br>
                                <span class="fst-italic">&nbsp; &nbsp; Begining Stock</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="minyak_mentah_stok_awal" name="minyak_mentah_stok_awal"
                                    value="{{ old('minyak_mentah_stok_awal', $survey->minyak_mentah_stok_awal) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="kondensat_stok_awal" name="kondensat_stok_awal"
                                    value="{{ old('kondensat_stok_awal', $survey->kondensat_stok_awal) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="gas_bumi_stok_awal"
                                    name="gas_bumi_stok_awal"
                                    value="{{ old('gas_bumi_stok_awal', $survey->gas_bumi_stok_awal) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>2. Volume Produksi<br>
                                <span class="fst-italic">&nbsp; &nbsp; Production</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="minyak_mentah_stok_awal" name="minyak_mentah_stok_awal"
                                    value="{{ old('minyak_mentah_stok_awal', $survey->minyak_mentah_stok_awal) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="kondensat_stok_awal" name="kondensat_stok_awal"
                                    value="{{ old('kondensat_stok_awal', $survey->kondensat_stok_awal) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="gas_bumi_stok_awal"
                                    name="gas_bumi_stok_awal"
                                    value="{{ old('gas_bumi_stok_awal', $survey->gas_bumi_stok_awal) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>3. Volume Penjualan<br>
                                <span class="fst-italic">&nbsp; &nbsp; Sales</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="minyak_mentah_penjualan" name="minyak_mentah_penjualan"
                                    value="{{ old('minyak_mentah_penjualan', $survey->minyak_mentah_penjualan) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="kondensat_penjualan" name="kondensat_penjualan"
                                    value="{{ old('kondensat_penjualan', $survey->kondensat_penjualan) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="gas_bumi_penjualan"
                                    name="gas_bumi_penjualan"
                                    value="{{ old('gas_bumi_penjualan', $survey->gas_bumi_penjualan) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>4. Hilang/Susut<br>
                                <span class="fst-italic">&nbsp; &nbsp; Loss</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="minyak_mentah_hilang" name="minyak_mentah_hilang"
                                    value="{{ old('minyak_mentah_hilang', $survey->minyak_mentah_hilang) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="kondensat_hilang"
                                    name="kondensat_hilang"
                                    value="{{ old('kondensat_hilang', $survey->kondensat_hilang) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="gas_bumi_hilang"
                                    name="gas_bumi_hilang"
                                    value="{{ old('gas_bumi_hilang', $survey->gas_bumi_hilang) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>5. Stock Akhir<br>
                                <span class="fst-italic">&nbsp; &nbsp; Final Stock</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="minyak_mentah_stok_akhir" name="minyak_mentah_stok_akhir"
                                    value="{{ old('minyak_mentah_stok_akhir', $survey->minyak_mentah_stok_akhir) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="kondensat_stok_akhir" name="kondensat_stok_akhir"
                                    value="{{ old('kondensat_stok_akhir', $survey->kondensat_stok_akhir) }}">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="gas_bumi_stok_akhir" name="gas_bumi_stok_akhir"
                                    value="{{ old('gas_bumi_stok_akhir', $survey->gas_bumi_stok_akhir) }}">
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-borderless">
        <tr>
            <td class="py-0">
                <div class="mb-0 row ">
                    <table class="table table-bordered border-dark align-middle">
                        <tr>
                            <th class="border-dark border text-center">
                                VI. PENDAPATAN LAIN SELAMA TAHUN 2021 <br>
                                <span class="fst-italic">OTHER REVENUE DURING 2021</span>
                            </th>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="mb-1 row ">
                    <table class="table table-bordered border-dark align-middle table-sm" style="font-size: 14px">
                        <tr class="text-center">
                            <th>Jenis Pendapatan/<span class="fst-italic">Kind Of Revenue</span></th>
                            <th>Nilai/<span class="fst-italic">Value</span> <br>(Rupiah)</th>
                        </tr>
                        <tr class="text-center" style="font-size: 10px">
                            <td>(1)</td>
                            <td>(2)</td>
                        </tr>
                        <tr class="border-bottom-0">
                            <td>1. Pendapatan dari jasa/<span class="fst-italic">Income from services</span>
                            </td>
                            <td></td>
                        </tr>
                        <tr class="border-0">
                            <td> &nbsp; &nbsp; a. Jasa penambangan pihak lain
                                <span class="fst-italic">Mining service carried out of other</span>
                            </td>
                            <td class="border-start-0">
                                <input type="number" class="form-control form-control-sm"
                                    id="pendapatan_jasa_penambangan" name="pendapatan_jasa_penambangan"
                                    value="{{ old('pendapatan_jasa_penambangan', $survey->pendapatan_jasa_penambangan) }}">
                            </td>

                        </tr>
                        <tr class="border-0">
                            <td class=""> &nbsp; &nbsp; b. Transportasi penjualan hasil tambang/
                                <span class="fst-italic">Delivery changes</span>
                            </td>
                            <td class="border-start-0">
                                <input type="number" class="form-control form-control-sm"
                                    id="pendapatan_jasa_transportasi" name="pendapatan_jasa_transportasi"
                                    value="{{ old('pendapatan_jasa_transportasi', $survey->pendapatan_jasa_transportasi) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>2. Pendapatan dari penyewaan tanah, mesin dan peralatan, gedung dan bangunan<br>
                                <span class="fst-italic">&nbsp; &nbsp; Income from rent of land, machine and
                                    equipment,
                                    building, and ifrastucture</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm"
                                    id="pendapatan_penyewaan" name="pendapatan_penyewaan"
                                    value="{{ old('pendapatan_penyewaan', $survey->pendapatan_penyewaan) }}">
                            </td>

                        </tr>
                        <tr>
                            <td>3. Lainnya, seperti penjualan baranng<br>
                                <span class="fst-italic">&nbsp; &nbsp; Other income, i.e. goods sold</span>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="pendapatan_lainnya"
                                    name="pendapatan_lainnya"
                                    value="{{ old('pendapatan_lainnya', $survey->pendapatan_lainnya) }}">
                            </td>
                        </tr>
                        <tr>
                            <th>4. JUMLAH/<span class="fst-italic">TOTAL</span>
                            </th>
                            <td>
                                <input type="number" class="form-control form-control-sm" id="pendapatan_jumlah"
                                    name="pendapatan_jumlah"
                                    value="{{ old('pendapatan_jumlah', $survey->pendapatan_jumlah) }}">
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-borderless">
        <tr>
            <td class="py-0">
                <div class="mb-0 row ">
                    <table class="table table-bordered border-dark align-middle">
                        <tr>
                            <th class="border-dark border text-center">
                                LEGALISASI PENGISIAN DOKUMEN<br>
                                <span class="fst-italic">Questionare Legality</span>
                            </th>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="mb-1 row ">
                    <table class="table table-bordered border-dark align-middle table-sm" style="font-size: 14px">
                        <tr class="">
                            <td class="px-5">
                                <div class="mb-2 row">
                                    <div class="col-sm-12">Data dalam daftar isian ini diisi dengan sebenarnya dan
                                        menurut keadaan yang
                                        sesungguhnya: <br>
                                        <span class="fst-italic">
                                            Data started in this form has been filled out truthfully and
                                            accurately:</span>
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <div class="col-sm-12">
                                        1. Penanggung Jawab Isian Dokumen
                                        <br>
                                        <span class="fst-italic">
                                            &nbsp; &nbsp; Person in Charge of Document Content</span>
                                    </div>
                                </div>
                                <div class="mb-1 row d-flex align-items-center">
                                    <div class="col-sm-4  ">
                                        &nbsp; &nbsp; Nama/<span class="fst-italic">Name</span>
                                    </div>
                                    <div class="col-sm-1  text-end">
                                        :
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm"
                                            id="pj_dokumen_nama" name="pj_dokumen_nama"
                                            value="{{ old('pj_dokumen_nama', $survey->pj_dokumen_nama) }}">
                                    </div>
                                </div>
                                <div class="mb-1 row d-flex align-items-center">
                                    <div class="col-sm-4  ">
                                        &nbsp; &nbsp; Jabatan/<span class="fst-italic">Positionn</span>
                                    </div>
                                    <div class="col-sm-1  text-end">
                                        :
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm"
                                            id="pj_dokumen_jabatan" name="pj_dokumen_jabatan"
                                            value="{{ old('pj_dokumen_jabatan', $survey->pj_dokumen_jabatan) }}">
                                    </div>
                                </div>
                                <div class="mb-1 row d-flex align-items-center">
                                    <div class="col-sm-4  ">
                                        &nbsp; &nbsp;<span class="fst-italic">E-mail</span>
                                    </div>
                                    <div class="col-sm-1  text-end">
                                        :
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control form-control-sm"
                                            id="pj_dokumen_email" name="pj_dokumen_email"
                                            value="{{ old('pj_dokumen_email', $survey->pj_dokumen_email) }}">
                                    </div>
                                </div>
                                <br>
                                <div class="mb-1 row">
                                    <div class="col-sm-12">
                                        2. Pemberi Keterangan
                                        <br>
                                        <span class="fst-italic">
                                            &nbsp; &nbsp; Contact Person</span>
                                    </div>
                                </div>
                                <div class="mb-1 row d-flex align-items-center">
                                    <div class="col-sm-4  ">
                                        &nbsp; &nbsp; Nama/<span class="fst-italic">Name</span>
                                    </div>
                                    <div class="col-sm-1  text-end">
                                        :
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm"
                                            id="pemberi_keterangan_nama" name="pemberi_keterangan_nama"
                                            value="{{ old('pemberi_keterangan_nama', $survey->pemberi_keterangan_nama) }}">
                                    </div>
                                </div>

                                <div class="mb-1 row d-flex align-items-center">
                                    <div class="col-sm-4  ">
                                        &nbsp; &nbsp; Jabatan/<span class="fst-italic">Position</span>
                                    </div>
                                    <div class="col-sm-1  text-end">
                                        :
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm"
                                            id="pemberi_keterangan_jabatan" name="pemberi_keterangan_jabatan"
                                            value="{{ old('pemberi_keterangan_jabatan', $survey->pemberi_keterangan_jabatan) }}">
                                    </div>
                                </div>
                                <div class="mb-1 row d-flex align-items-center">
                                    <div class="col-sm-4  ">
                                        &nbsp; &nbsp; Telepon/<span class="fst-italic">Phone Number</span>
                                    </div>
                                    <div class="col-sm-1  text-end">
                                        :
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm"
                                            id="pemberi_keterangan_telp" name="pemberi_keterangan_telp"
                                            value="{{ old('pemberi_keterangan_telp', $survey->pemberi_keterangan_telp) }}">
                                    </div>
                                    <div class="col-sm-1  d-flex align-items-center text-end">
                                        Fax:
                                    </div>
                                    <div class="col-sm-3  text-end">
                                        <input type="text" class="form-control form-control-sm"
                                            id="pemberi_keterangan_fax" name="pemberi_keterangan_fax"
                                            value="{{ old('pemberi_keterangan_fax', $survey->pemberi_keterangan_fax) }}">
                                    </div>
                                </div>
                                <div class="mb-1 row d-flex align-items-center">
                                    <div class="col-sm-4  ">
                                        &nbsp; &nbsp;<span class="fst-italic">E-mail</span>
                                    </div>
                                    <div class="col-sm-1  text-end">
                                        :
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control form-control-sm"
                                            id="pemberi_keterangan_email" name="pemberi_keterangan_email"
                                            value="{{ old('pemberi_keterangan_email', $survey->pemberi_keterangan_email) }}">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-borderless">
        <tr>
            <td class="py-0">
                <div class="mb-0 row ">
                    <table class="table table-bordered border-dark align-middle">
                        <tr>
                            <th class="border-dark border text-center">
                                BAGIAN INI HANYA DIISI OLEH PETUGAS BPS<br>
                                <span class="fst-italic">For BPS Enumerator's Use Only</span>
                            </th>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="mb-1 row ">
                    <table class="table table-bordered border-dark align-middle table-sm" style="font-size: 14px">
                        <tr class="text-center">
                            <th class="bg-secondary"></th>
                            <th>Pencacah <br> <span class="fst-italic">Enumerator</span>
                            </th>
                            <th>Pemeriksa/Pengwas <br> <span class="fst-italic">Supervisor/investigator</span>
                            </th>
                        </tr>
                        <tr>
                            <td>1. Nama/<span class="fst-italic">Name</span></td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="pencacah_nama"
                                    name="pencacah_nama"
                                    value="{{ old('pencacah_nama', $survey->pencacah_nama) }}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="pengawas_nama"
                                    name="pengawas_nama"
                                    value="{{ old('pengawas_nama', $survey->pengawas_nama) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>2. Jabatan/<span class="fst-italic">Occupation</span></td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="pencacah_jabatan"
                                    name="pencacah_jabatan"
                                    value="{{ old('pencacah_jabatan', $survey->pencacah_jabatan) }}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="pengawas_jabatan"
                                    name="pengawas_jabatan"
                                    value="{{ old('pengawas_jabatan', $survey->pengawas_jabatan) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>3. No. HP/<span class="fst-italic">Phone Number</span></td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="pencacah_no_hp"
                                    name="pencacah_no_hp"
                                    value="{{ old('pencacah_no_hp', $survey->pencacah_no_hp) }}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="pengawas_no_hp"
                                    name="pengawas_no_hp"
                                    value="{{ old('pengawas_no_hp', $survey->pengawas_no_hp) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>4. Tanggal/<span class="fst-italic">Date</span></td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="pencacah_tanggal"
                                    name="pencacah_tanggal"
                                    value="{{ old('pencacah_tanggal', $survey->pencacah_tanggal) }}">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="pengawas_tanggal"
                                    name="pengawas_tanggal"
                                    value="{{ old('pengawas_tanggal', $survey->pengawas_tanggal) }}">
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-borderless">
        <tr>
            <td class="py-0">
                <div class="mb-0 row ">
                    <table class="table table-bordered border-dark align-middle">
                        <tr>
                            <th class="border-dark border text-center">
                                CATATAN PETUGAS
                                <span class="fst-italic">Enumerator's Notes</span>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Catatan" id="catatan_petugas" name="catatan_petugas">{{ old('catatan_petugas', $survey->catatan_petugas) }}</textarea>
                                    <label for="catatan_petugas">Catatan</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr>

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
