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
    <form action="{{ url('updateblok5/' . \Crypt::encryptString($id)) }}" id="blok5_form" method="POST"
        class="needs-validation" novalidate>
        @csrf
        <fieldset>
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
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="minyak_mentah_stok_awal" name="minyak_mentah_stok_awal"
                                            value="{{ old('minyak_mentah_stok_awal', $survey->minyak_mentah_stok_awal) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="kondensat_stok_awal" name="kondensat_stok_awal"
                                            value="{{ old('kondensat_stok_awal', $survey->kondensat_stok_awal) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="gas_bumi_stok_awal" name="gas_bumi_stok_awal"
                                            value="{{ old('gas_bumi_stok_awal', $survey->gas_bumi_stok_awal) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>2. Volume Produksi<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Production</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="minyak_mentah_stok_awal" name="minyak_mentah_stok_awal"
                                            value="{{ old('minyak_mentah_stok_awal', $survey->minyak_mentah_stok_awal) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="kondensat_stok_awal" name="kondensat_stok_awal"
                                            value="{{ old('kondensat_stok_awal', $survey->kondensat_stok_awal) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="gas_bumi_stok_awal" name="gas_bumi_stok_awal"
                                            value="{{ old('gas_bumi_stok_awal', $survey->gas_bumi_stok_awal) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>3. Volume Penjualan<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Sales</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="minyak_mentah_penjualan" name="minyak_mentah_penjualan"
                                            value="{{ old('minyak_mentah_penjualan', $survey->minyak_mentah_penjualan) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="kondensat_penjualan" name="kondensat_penjualan"
                                            value="{{ old('kondensat_penjualan', $survey->kondensat_penjualan) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="gas_bumi_penjualan" name="gas_bumi_penjualan"
                                            value="{{ old('gas_bumi_penjualan', $survey->gas_bumi_penjualan) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>4. Hilang/Susut<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Loss</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="minyak_mentah_hilang" name="minyak_mentah_hilang"
                                            value="{{ old('minyak_mentah_hilang', $survey->minyak_mentah_hilang) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="kondensat_hilang" name="kondensat_hilang"
                                            value="{{ old('kondensat_hilang', $survey->kondensat_hilang) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask" id="gas_bumi_hilang"
                                            name="gas_bumi_hilang"
                                            value="{{ old('gas_bumi_hilang', $survey->gas_bumi_hilang) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>5. Stock Akhir<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Final Stock</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="minyak_mentah_stok_akhir" name="minyak_mentah_stok_akhir"
                                            value="{{ old('minyak_mentah_stok_akhir', $survey->minyak_mentah_stok_akhir) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="kondensat_stok_akhir" name="kondensat_stok_akhir"
                                            value="{{ old('kondensat_stok_akhir', $survey->kondensat_stok_akhir) }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
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
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pendapatan_jasa_penambangan" name="pendapatan_jasa_penambangan"
                                            value="{{ old('pendapatan_jasa_penambangan', $survey->pendapatan_jasa_penambangan) }}">
                                    </td>

                                </tr>
                                <tr class="border-0">
                                    <td class=""> &nbsp; &nbsp; b. Transportasi penjualan hasil tambang/
                                        <span class="fst-italic">Delivery changes</span>
                                    </td>
                                    <td class="border-start-0">
                                        <input type="text" class="form-control form-control-sm mask"
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
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pendapatan_penyewaan" name="pendapatan_penyewaan"
                                            value="{{ old('pendapatan_penyewaan', $survey->pendapatan_penyewaan) }}">
                                    </td>

                                </tr>
                                <tr>
                                    <td>3. Lainnya, seperti penjualan baranng<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Other income, i.e. goods sold</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pendapatan_lainnya" name="pendapatan_lainnya"
                                            value="{{ old('pendapatan_lainnya', $survey->pendapatan_lainnya) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>4. JUMLAH/<span class="fst-italic">TOTAL</span>
                                    </th>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="pendapatan_jumlah" name="pendapatan_jumlah"
                                            value="{{ old('pendapatan_jumlah', $survey->pendapatan_jumlah) }}">
                                    </td>
                                </tr>
                            </table>
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
                    <a class="btn btn-warning btn-sm" href="{{ url('showblok4/' . \Crypt::encryptString($id)) }}"><i
                            class="bi bi-arrow-left"></i> Sebelumnya</a>
                    <button class="btn btn-primary btn-sm" type="submit" form="blok5_form">Simpan &
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
