@extends('layout.main')

@section('content')
    <br>
    <div class="mb-1 row">
        <div class="col-sm-2 d-flex  align-items-center">
            <table class="table text-center table-bordered border-dark">
                <tr>
                    <td>RAHASIA</td>
                </tr>
                <tr>
                    <td class="table-dark">CONFIDENTIAL</td>
                </tr>
            </table>
        </div>
        <div class="col-sm-8 text-center">
            <img src="{{ asset('/images/pancasila.png') }}" class="" alt="..." width="70px">
            <br>
            <span style="font-size:13px; font-family: 'Arial'">
                <strong>
                    REPUBLIK INDONESIA <br>
                    BADAN PUSAT STATISTIK</strong>
            </span>
        </div>
        <div class="col-sm-2 d-flex  align-items-center">
            <table class="table text-center table-borderless">
                <tr>
                    <th rowspan="2" class="bg-danger text-light" style="font-size: 20px">MIGAS</th>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <h4 class="text-center">SURVEI TAHUNAN PERUSAHAAN PERTAMBANGAN MIGAS
        <br> <span class="fst-italic">ANNUAL SURVEY OF OIL AND GAS MINING COMPANY</span>
        <br> TAHUN {{ $tahun }}
    </h4>
    <br>
    @include('alert')
    <form action="{{ url('updateblok3/' . \Crypt::encryptString($id)) }}" id="blok3_form" method="POST"
        class="needs-validation" novalidate>
        @csrf
        <fieldset>
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
                                        <input type="text" class="form-control form-control-sm mask" id="gaji_pk_tetap"
                                            name="gaji_pk_tetap" value="{{ old('gaji_pk_tetap', $survey->gaji_pk_tetap) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask" id="gaji_pk_kontrak"
                                            name="gaji_pk_kontrak"
                                            value="{{ old('gaji_pk_kontrak', $survey->gaji_pk_kontrak) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>b. Upah Lembur <br>
                                        <span class="fst-italic">&nbsp; &nbsp; Overtime</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask" id="lembur_pk_tetap"
                                            name="lembur_pk_tetap"
                                            value="{{ old('lembur_pk_tetap', $survey->lembur_pk_tetap) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="lembur_pk_kontrak" name="lembur_pk_kontrak"
                                            value="{{ old('lembur_pk_kontrak', $survey->lembur_pk_kontrak) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>c. Uang Transportasi dan Uang Makan<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Transportation and Meal</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="transport_pk_tetap" name="transport_pk_tetap"
                                            value="{{ old('transport_pk_tetap', $survey->transport_pk_tetap) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="transport_pk_kontrak" name="transport_pk_kontrak"
                                            value="{{ old('transport_pk_kontrak', $survey->transport_pk_kontrak) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>d. Hadiah, Bonus, dan Sejenisnya<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Reward, Bonus, etc</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask" id="bonus_pk_tetap"
                                            name="bonus_pk_tetap"
                                            value="{{ old('bonus_pk_tetap', $survey->bonus_pk_tetap) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bonus_pk_kontrak" name="bonus_pk_kontrak"
                                            value="{{ old('bonus_pk_kontrak', $survey->bonus_pk_kontrak) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>e. Iuaran Dana Pension dan Tunjangan Sosial<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Pension Contribution and Sosial
                                            Allowance</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pensiun_pk_tetap" name="pensiun_pk_tetap"
                                            value="{{ old('pensiun_pk_tetap', $survey->pensiun_pk_tetap) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pensiun_pk_kontrak" name="pensiun_pk_kontrak"
                                            value="{{ old('pensiun_pk_kontrak', $survey->pensiun_pk_kontrak) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>f. Asuransi Tenaga Kerja<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Labout Insurance</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="asuransi_pk_tetap" name="asuransi_pk_tetap"
                                            value="{{ old('asuransi_pk_tetap', $survey->asuransi_pk_tetap) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="asuransi_pk_kontrak" name="asuransi_pk_kontrak"
                                            value="{{ old('asuransi_pk_kontrak', $survey->asuransi_pk_kontrak) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>g. JUMLAH/
                                        <span class="fst-italic">TOTAL</span>
                                    </th>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="jumlah_balas_jasa_pk_tetap" name="jumlah_balas_jasa_pk_tetap"
                                            value="{{ old('jumlah_balas_jasa_pk_tetap', $survey->jumlah_balas_jasa_pk_tetap) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
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
                                <input type="text" class="form-control form-control-sm mask" id="biaya_outsourcing"
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
                            <table class="table table-bordered border-dark align-middle table-sm mask"
                                style="font-size: 14px">
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
                                        <span class="fst-italic">&nbsp; &nbsp; Depletion, collection and separation
                                            cost</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="biaya_pengurasan" name="biaya_pengurasan"
                                            value="{{ old('biaya_pengurasan', $survey->biaya_pengurasan) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>b. Biaya angkutan migas ke penampungan utama di lokasi penambangan<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Transportation cost include of oil and gas
                                            field
                                            to the main storage</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="biaya_angkutan" name="biaya_angkutan"
                                            value="{{ old('biaya_angkutan', $survey->biaya_angkutan) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>c. Biaya penyimpanan<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Storage cost</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="biaya_penyimpanan" name="biaya_penyimpanan"
                                            value="{{ old('biaya_penyimpanan', $survey->biaya_penyimpanan) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>d. Biaya pekerjaan yang subkontrakan kepada pihak lain<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Cost of miningservices carried out by
                                            other</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="biaya_subkontrak" name="biaya_subkontrak"
                                            value="{{ old('biaya_subkontrak', $survey->biaya_subkontrak) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>e. JUMLAH/
                                        <span class="fst-italic">TOTAL</span>
                                    </th>
                                    <td>
                                        <input type="text" class="form-control form-control-sm  mask"
                                            id="biaya_jumlah_produksi" name="biaya_jumlah_produksi"
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
                                    <th colspan="2">Total Pemakaian <br><span class="fst-italic">Total Usage</span>
                                    </th>

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
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_avgas_volume" name="bb_avgas_volume"
                                            value="{{ old('bb_avgas_volume', $survey->bb_avgas_volume) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_avgas_nilai" name="bb_avgas_nilai"
                                            value="{{ old('bb_avgas_nilai', $survey->bb_avgas_nilai) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>b. Avtur/<span class="fst-italic">Avtur</span></td>
                                    <td class="text-center">Liter</td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_avtur_volume" name="bb_avtur_volume"
                                            value="{{ old('bb_avtur_volume', $survey->bb_avtur_volume) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_avtur_nilai" name="bb_avtur_nilai"
                                            value="{{ old('bb_avtur_nilai', $survey->bb_avtur_nilai) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>c. Bensin/<span class="fst-italic">gasolin</span></td>
                                    <td class="text-center">Liter</td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_bensin_volume" name="bb_bensin_volume"
                                            value="{{ old('bb_bensin_volume', $survey->bb_bensin_volume) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_bensin_nilai" name="bb_bensin_nilai"
                                            value="{{ old('bb_bensin_nilai', $survey->bb_bensin_nilai) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>d. Minyak Solar/Gas Oil/<span class="fst-italic">Automotive Diesel Oil</span></td>
                                    <td class="text-center">Liter</td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_solar_volume" name="bb_solar_volume"
                                            value="{{ old('bb_solar_volume', $survey->bb_solar_volume) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_solar_nilai" name="bb_solar_nilai"
                                            value="{{ old('bb_solar_nilai', $survey->bb_solar_nilai) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>e. Minyak Diesel/<span class="fst-italic">Diesel Oil</span></td>
                                    <td class="text-center">Liter</td>
                                    <td>
                                        <input type="text"' class="form-control form-control-sm mask"
                                            id="bb_diesel_volume" name="bb_diesel_volume"
                                            value="{{ old('bb_diesel_volume', $survey->bb_diesel_volume) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_diesel_nilai" name="bb_diesel_nilai"
                                            value="{{ old('bb_diesel_nilai', $survey->bb_diesel_nilai) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>f. Minyak Tanah/<span class="fst-italic">Kerosene</span></td>
                                    <td class="text-center">Liter</td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_minyaktanah_volume" name="bb_minyaktanah_volume"
                                            value="{{ old('bb_minyaktanah_volume', $survey->bb_minyaktanah_volume) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_minyaktanah_nilai" name="bb_minyaktanah_nilai"
                                            value="{{ old('bb_minyaktanah_nilai', $survey->bb_minyaktanah_nilai) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>g. Elpiji/<span class="fst-italic">LPG</span></td>
                                    <td class="text-center">Kg</td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_elpiji_volume" name="bb_elpiji_volume"
                                            value="{{ old('bb_elpiji_volume', $survey->bb_elpiji_volume) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_elpiji_nilai" name="bb_elpiji_nilai"
                                            value="{{ old('bb_elpiji_nilai', $survey->bb_elpiji_nilai) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>h. Gas Alam/<span class="fst-italic">Natural Gas</span></td>
                                    <td class="text-center">MMSCF</td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_gasalam_volume" name="bb_gasalam_volume"
                                            value="{{ old('bb_gasalam_volume', $survey->bb_gasalam_volume) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_gasalam_nilai" name="bb_gasalam_nilai"
                                            value="{{ old('bb_gasalam_nilai', $survey->bb_gasalam_nilai) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>i. Minyak Bakar/<span class="fst-italic">Mini Fuel Oil</span></td>
                                    <td class="text-center">Liter</td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_minyakbakar_volume" name="bb_minyakbakar_volume"
                                            value="{{ old('bb_minyakbakar_volume', $survey->bb_minyakbakar_volume) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_minyakbakar_nilai" name="bb_minyakbakar_nilai"
                                            value="{{ old('bb_minyakbakar_nilai', $survey->bb_minyakbakar_nilai) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>j. Batubara/<span class="fst-italic">Coal</span></td>
                                    <td class="text-center">Ton</td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_batubara_volume" name="bb_batubara_volume"
                                            value="{{ old('bb_batubara_volume', $survey->bb_batubara_volume) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_batubara_nilai" name="bb_batubara_nilai"
                                            value="{{ old('bb_batubara_nilai', $survey->bb_batubara_nilai) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>k. Bahan Bakar Lainnya/<span class="fst-italic">Other Fuels</span></td>
                                    <td class="text-center bg-secondary"></td>
                                    <td class="bg-secondary">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_lainnnya_nilai" name="bb_lainnnya_nilai"
                                            value="{{ old('bb_lainnnya_nilai', $survey->bb_lainnnya_nilai) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>l. Pelumas/<span class="fst-italic">Lubricant</span></td>
                                    <td class="text-center">Liter</td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_pelumas_volume" name="bb_pelumas_volume"
                                            value="{{ old('bb_pelumas_volume', $survey->bb_pelumas_volume) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_pelumas_nilai" name="bb_pelumas_nilai"
                                            value="{{ old('bb_pelumas_nilai', $survey->bb_pelumas_nilai) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="3">e. JUMLAH/
                                        <span class="fst-italic">TOTAL</span>
                                    </th>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_jumlah_nilai" name="bb_jumlah_nilai"
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
                                <input type="text" class="form-control form-control-sm mask" id="garam_volume"
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
                                <input type="text" class="form-control form-control-sm  mask" id="garam_volume"
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
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_sukucadang" name="pengeluaran_sukucadang"
                                            value="{{ old('pengeluaran_sukucadang', $survey->pengeluaran_sukucadang) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>b. Alat tulis kantor dan perlengkapan kantor <br>
                                        <span class="fst-italic">&nbsp; &nbsp; Stationaries and computer supplies</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_atk" name="pengeluaran_atk"
                                            value="{{ old('pengeluaran_atk', $survey->pengeluaran_atk) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>c. Pembelian peralatan dan perlengkapan pertambangan yang penggunaannya kurang dari
                                        satu
                                        tahun<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Equipments purcashing which the period
                                            utility
                                            is
                                            less than one year</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_peralatan_setahun" name="pengeluaran_peralatan_setahun"
                                            value="{{ old('pengeluaran_peralatan_setahun', $survey->pengeluaran_peralatan_setahun) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>d. Sewa kendaraan, mesin dan peralatan lainnya<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Rent expenditures for vehicles, machinery
                                            and
                                            other equipments</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
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
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_sewa_tanah" name="pengeluaran_sewa_tanah"
                                            value="{{ old('pengeluaran_sewa_tanah', $survey->pengeluaran_sewa_tanah) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>f. Biaya jasa pertambangan yang dikerjakan pihak lain<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Cost of service carried out by other</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_jasa_lain" name="pengeluaran_jasa_lain"
                                            value="{{ old('pengeluaran_jasa_lain', $survey->pengeluaran_jasa_lain) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>g. Asuransi barang modal<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Capital goods insurance</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_asuransi" name="pengeluaran_asuransi"
                                            value="{{ old('pengeluaran_asuransi', $survey->pengeluaran_asuransi) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>h. Angkutan<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Transportation</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_angkutan" name="pengeluaran_angkutan"
                                            value="{{ old('pengeluaran_angkutan', $survey->pengeluaran_angkutan) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>i. Pergudangan<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Warehousing</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_pergudangan" name="pengeluaran_pergudangan"
                                            value="{{ old('pengeluaran_pergudangan', $survey->pengeluaran_pergudangan) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>j. Biaya pos dan telekomunikasi<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Post and telecommunication</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_pos" name="pengeluaran_pos"
                                            value="{{ old('pengeluaran_pos', $survey->pengeluaran_pos) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>k. Perjalanan dinas<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Supervision</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_perjalanan" name="pengeluaran_perjalanan"
                                            value="{{ old('pengeluaran_perjalanan', $survey->pengeluaran_perjalanan) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>l. Bunga pinjaman<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Loan Interest</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_bunga_pinjaman" name="pengeluaran_bunga_pinjaman"
                                            value="{{ old('pengeluaran_bunga_pinjaman', $survey->pengeluaran_bunga_pinjaman) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>m. Pajak Pertanmbahan Nilai Barang dan Jasa(PPN)<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Goods and service Tax</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_ppn" name="pengeluaran_ppn"
                                            value="{{ old('pengeluaran_ppn', $survey->pengeluaran_ppn) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>n. Pajak Penghasilan<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Income Tax</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_pph" name="pengeluaran_pph"
                                            value="{{ old('pengeluaran_pph', $survey->pengeluaran_pph) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>o. Pajak dann Retribusi Lainnya<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Other Tax and Retribution</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_pajak_lain" name="pengeluaran_pajak_lain"
                                            value="{{ old('pengeluaran_pajak_lain', $survey->pengeluaran_pajak_lain) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>p. Penyusutan dan amortisasi<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Deprecation and amortization</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
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
                                        <input type="text" class="form-control form-control-sm mask"
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
                                        <input type="text" class="form-control form-control-sm mask"
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
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_lainnya" name="pengeluaran_lainnya"
                                            value="{{ old('pengeluaran_lainnya', $survey->pengeluaran_lainnya) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>t. Jumlah<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Total</span>
                                    </th>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pengeluaran_jumlah" name="pengeluaran_jumlah"
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
                                <input type="text" class="form-control form-control-sm mask"
                                    id="pengeluaran_eksplorasi" name="pengeluaran_eksplorasi"
                                    value="{{ old('pengeluaran_eksplorasi', $survey->pengeluaran_eksplorasi) }}">
                            </div>

                        </div>
                        <div class="mb-1 row d-flex align-items-center" style="font-size:14px">
                            <div class="col-sm-9">&nbsp; &nbsp; b. Pengeluaran pemulihan tata lingkungan <br>
                                <span class="fst-italic">&nbsp; &nbsp; &nbsp; &nbsp; Land Recovery</span>
                            </div>
                            <div class="col-sm-1 text-end">Rp</div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm mask"
                                    id="pengeluaran_pemulihan" name="pengeluaran_pemulihan"
                                    value="{{ old('pengeluaran_pemulihan', $survey->pengeluaran_pemulihan) }}">
                            </div>
                        </div>
                        <div class="mb-1 row d-flex align-items-center" style="font-size:14px">
                            <div class="col-sm-9">&nbsp; &nbsp; c. Penelitian dan pengembangan <br>
                                <span class="fst-italic">&nbsp; &nbsp; &nbsp; &nbsp; Research and development</span>
                            </div>
                            <div class="col-sm-1 text-end">Rp</div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm mask"
                                    id="pengeluaran_penelitian" name="pengeluaran_penelitian"
                                    value="{{ old('pengeluaran_penelitian', $survey->pengeluaran_penelitian) }}">
                            </div>
                        </div>
                        <br>
                        <div class="mb-1 row ">
                            <div class="col-sm-12 ps-4" style="font-size: 12px">
                                <strong> Pengeluaran eksplorasi</strong>
                                meliputi biaya penyelidikan topografi, geologi, geofisika, pengeboran sumur eksplorasi,
                                pemboran
                                sumur uji stratigrafi, pengembangan cadangan terbukti minyak dan gas bumi sampai siap
                                berproduksi
                            </div>
                            <div class="col-sm-12 ps-4 fst-italic" style="font-size: 12px">
                                <strong> Exploration expenditures</strong>
                                include the cost of the investigation topography, geology, geophysics, drilling exploration
                                wells, drilling of stratigraphic test wells, development of proven reserves of oil and gas
                                until
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
        </fieldset>
        <br>
        <br>
        <br>
    </form>
    <div class="fixed-bottom bg-dark">
        <div class="container px-1">
            <div class="container py-2 px-3 d-flex justify-content-between">
                <a class="btn btn-danger btn-sm" href="{{ url('dashboard') }}">Keluar </a>
                <div class="btn-group me-2" role="group" aria-label="First group">
                    <a class="btn btn-warning btn-sm" href="{{ url('showblok2/' . \Crypt::encryptString($id)) }}"><i
                            class="bi bi-arrow-left"></i> Sebelumnya</a>
                    <button class="btn btn-primary btn-sm" type="submit" form="blok3_form">Simpan &
                        Lanjutkan <i class="bi bi-arrow-right"></i> </button>

                </div>
            </div>
        </div>
    </div>

    <style>
        .form-select:focus,
        .form-control:focus {
            background-color: rgba(255, 230, 7, 0.767)
        }

        .mask {
            text-align: right;
        }
    </style>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                            console.log(form);
                            form.addEventListener('invalid', (e) => {
                                console.log('invalid')
                                $('.form-control:invalid').filter(":first").focus()
                            }, true)
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        $(document).ready(function() {
            $('.mask').mask('000.000.000.000.000', {
                reverse: true
            });
        });
    </script>
@endsection
