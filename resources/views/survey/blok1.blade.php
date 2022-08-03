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
    <form action="{{ url('updateblok1/' . \Crypt::encryptString($id)) }}" id="blok1_form" method="POST"
        class="needs-validation" novalidate>
        @csrf
        <fieldset>
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
                                <input type="text" class="form-control form-control-sm text-end" id="kbli"
                                    name="kbli" value="{{ old('kbli', $survey->kbli) }}" maxlength="5">
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
                                <input type="number" class="form-control text-end" id="bentuk_kerjasama"
                                    name="bentuk_kerjasama" max="4" min="1"
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
                                <input type="number" class="form-control form-control-sm text-end" id="pemodalan_pem_pusat"
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
                                <input type="number" class="form-control form-control-sm text-end"
                                    id="pemodalan_pem_daerah" name="pemodalan_pem_daerah" min="1" max="100"
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
                                <input type="number" class="form-control form-control-sm text-end" id="pemodalan_swasta"
                                    name="pemodalan_swasta" value="{{ old('pemodalan_swasta', $survey->pemodalan_swasta) }}"
                                    maxlength="3" min="1" max="100"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            </div>
                            %
                        </div>
                        <div class="mb-1 row d-flex align-items-center">
                            <div class=" col-sm-5">
                                d. Asing/ <span class="fst-italic">Foreign</span>
                            </div>
                            <div class="col-sm-2">
                                <input type="number" class="form-control form-control-sm text-end" id="pemodalan_asing"
                                    name="pemodalan_asing" value="{{ old('pemodalan_asing', $survey->pemodalan_asing) }}"
                                    maxlength="3" min="1" max="100"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            </div>
                            {{-- <div class="col-sm-1">%</div> --}}
                            %
                            <div class="col-sm-4" style="font-size: 12px">&rarr; <strong> (Jika terisi lanjut ke R103 /
                                    <span class="fst-italic">If filled, continue
                                        to R 103</span>)</strong></div>

                        </div>
                        <div class="mb-3 row d-flex align-items-center">
                            <div class=" col-sm-5">
                                e. jumlah/ <span class="fst-italic">Total</span>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm text-end" id="pemodalan_jumlah"
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
        </fieldset>
        <br>
        <br>
        <br>
    </form>
    <div class="fixed-bottom bg-dark">
        <div class="container px-1">
            <div class="container py-2 px-3 d-flex justify-content-between">
                <a class="btn btn-danger btn-sm" href="{{ url('dashboard') }}">Keluar </a>
                <button class="btn btn-primary btn-sm" type="submit" form="blok1_form">Simpan</button>
                <div class=" me-2" role="group" aria-label="First group">
                    <a class="btn btn-warning btn-sm" href="{{ url('showblok0/' . \Crypt::encryptString($id)) }}">
                        Kembali</a>
                    <a class="btn btn-warning btn-sm" href="{{ url('showblok2/' . \Crypt::encryptString($id)) }}">Lanjut
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .form-select:focus,
        .form-control:focus {
            background-color: rgba(255, 230, 7, 0.767)
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
    </script>
@endsection
