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
    <form action="{{ url('updateblok4/' . \Crypt::encryptString($id)) }}" id="blok4_form" method="POST"
        class="needs-validation" novalidate>
        @csrf
        <fieldset>
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
                                        <input type="text" class="form-control form-control-sm  mask"
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
                                        <input type="text" class="form-control form-control-sm  mask"
                                            id="produksi_listrik_volume" name="produksi_listrik_volume"
                                            value="{{ old('produksi_listrik_volume', $survey->produksi_listrik_volume) }}">
                                    </td>
                                    <td><input type="text" class="form-control form-control-sm  mask"
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
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_listrik_solar_volume" name="bb_listrik_solar_volume"
                                            value="{{ old('bb_listrik_solar_volume', $survey->bb_listrik_solar_volume) }}">
                                    </td>
                                    <td class="border-start-0">
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_listrik_solar_nilai" name="bb_listrik_solar_nilai"
                                            value="{{ old('bb_listrik_solar_nilai', $survey->bb_listrik_solar_nilai) }}">
                                    </td>
                                </tr>
                                <tr class="border-0">
                                    <td class="border-end-0"> &nbsp; &nbsp; b. Batubara/
                                        <span class="fst-italic">Coal</span>(Ton)
                                    </td>
                                    <td class="border-start-0 border-end-0">
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_listrik_batubara_volume" name="bb_listrik_batubara_volume"
                                            value="{{ old('bb_listrik_batubara_volume', $survey->bb_listrik_batubara_volume) }}">
                                    </td>
                                    <td class="border-start-0">
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_listrik_batubara_nilai" name="bb_listrik_batubara_nilai"
                                            value="{{ old('bb_listrik_batubara_nilai', $survey->bb_listrik_batubara_nilai) }}">
                                    </td>
                                </tr>
                                <tr class="border-0">
                                    <td class="border-end-0"> &nbsp; &nbsp; c. Gas Alam/
                                        <span class="fst-italic">Natural Gas</span>(MMSCF)
                                    </td>
                                    <td class="border-start-0 border-end-0">
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_listrik_gasalam_volume" name="bb_listrik_gasalam_volume"
                                            value="{{ old('bb_listrik_gasalam_volume', $survey->bb_listrik_gasalam_volume) }}">
                                    </td>
                                    <td class="border-start-0">
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="bb_listrik_gasalam_nilai" name="bb_listrik_gasalam_nilai"
                                            value="{{ old('bb_listrik_gasalam_nilai', $survey->bb_listrik_gasalam_nilai) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>4. Tenaga listrik yang<strong> DIBELI</strong>(KWh)<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Electricity purchased</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="listrik_dibeli_volume" name="listrik_dibeli_volume"
                                            value="{{ old('listrik_dibeli_volume', $survey->listrik_dibeli_volume) }}">
                                    </td>
                                    <td><input type="text" class="form-control form-control-sm mask"
                                            id="listrik_dibeli_nilai" name="listrik_dibeli_nilai"
                                            value="{{ old('listrik_dibeli_nilai', $survey->listrik_dibeli_nilai) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>5. Tenaga listrik yang<strong> DIJUAL</strong> kepada pihak lain (KWh)<br>
                                        <span class="fst-italic">&nbsp; &nbsp; Electricity sold to other</span>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm mask"
                                            id="listrik_dijual_volume" name="listrik_dijual_volume"
                                            value="{{ old('listrik_dijual_volume', $survey->listrik_dijual_volume) }}">
                                    </td>
                                    <td><input type="text" class="form-control form-control-sm mask"
                                            id="listrik_dijual_nilai" name="listrik_dijual_nilai"
                                            value="{{ old('listrik_dijual_nilai', $survey->listrik_dijual_nilai) }}">
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
                    <a class="btn btn-warning btn-sm" href="{{ url('showblok3/' . \Crypt::encryptString($id)) }}"><i
                            class="bi bi-arrow-left"></i> Sebelumnya</a>
                    <button class="btn btn-primary btn-sm" type="submit" form="blok4_form">Simpan &
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
