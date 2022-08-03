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
    <form action="{{ url('updateblok2/' . \Crypt::encryptString($id)) }}" id="blok2_form" method="POST"
        class="needs-validation" novalidate>
        @csrf
        <fieldset>
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
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="fst-italic">Number of Permanent and
                                    Contracted
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
                                            <input type="text" class="form-control form-control-sm mask text-end"
                                                id="pekerja_lakilaki" name="pekerja_lakilaki" min="1"
                                                value="{{ old('pekerja_lakilaki', $survey->pekerja_lakilaki) }}">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>b. Perempuan/<span class="fst-italic">Female</span>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm mask text-end"
                                                id="pekerja_perempuan" name="pekerja_perempuan" min="1"
                                                value="{{ old('pekerja_perempuan', $survey->pekerja_perempuan) }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <strong> c. Jumlah/<span class="fst-italic">Total</span></strong>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm  mask text-end"
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
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="fst-italic">Number of Permanent and
                                    Contracted
                                    by
                                    Education</span>
                            </label>
                            <div class="ps-5 pe-0">
                                <table class="table table-sm table-bordered border-dark align-middle"
                                    style="font-size: 14px">
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
                                            <input type="text" class="form-control form-control-sm mask text-end"
                                                id="pekerja_sltp" min="1" name="pekerja_sltp"
                                                value="{{ old('pekerja_sltp', $survey->pekerja_sltp) }}">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>b. Sampai dengan SLTA/<span class="fst-italic">High School and lower</span>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm mask text-end"
                                                id="pekerja_slta" min="1" name="pekerja_slta"
                                                value="{{ old('pekerja_slta', $survey->pekerja_slta) }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> c. Diploma I/II/III
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm mask text-end"
                                                id="pekerja_diploma" name="pekerja_diploma" min="1"
                                                value="{{ old('pekerja_diploma', $survey->pekerja_diploma) }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> d. Sarjana dan Diploma IV/<span class="fst-italic">Undergraduate</span>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm mask text-end"
                                                id="pekerja_sarjana" name="pekerja_sarjana" min="1"
                                                value="{{ old('pekerja_sarjana', $survey->pekerja_sarjana) }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> e. Pasca Sarjana/<span class="fst-italic">Post Graduate</span>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm mask text-end"
                                                id="pekerja_pascasarjana" name="pekerja_pascasarjana" min="1"
                                                value="{{ old('pekerja_pascasarjana', $survey->pekerja_pascasarjana) }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <strong> f. Jumlah/<span class="fst-italic">Total</span></strong>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm mask text-end"
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
                                <input type="text" class="form-control form-control-sm mask text-end"
                                    id="pekerja_asing" name="pekerja_asing" min="1"
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
                                <input type="text" class="form-control form-control-sm mask text-end"
                                    id="pekerja_outsourcing" name="pekerja_outsourcing" min="1"
                                    value="{{ old('pekerja_outsourcing', $survey->pekerja_outsourcing) }}">
                            </div>
                            <div class="col-sm-2">
                                Orang/<span class="fst-italic">Person</span>
                            </div>
                        </div>
                        <br>
                        <div class="mb-1 row ms-4">
                            <div class="col-sm-12" style="font-size: 12px">
                                <strong>Pekerja Tetap</strong> adalah pekerja formal perusahaan dan memiliki kesempatan
                                dalam
                                jejang karir sesuai aturan perusahaan.
                            </div>
                            <div class="col-sm-12 fst-italic mb-2" style="font-size: 12px">
                                <strong>Permanent employees</strong> are formal employees of the company and have
                                opportunities
                                in career paths in accordance with company regulations.
                            </div>
                            <div class="col-sm-12" style="font-size: 12px">
                                <strong>Pekerja kontrak</strong> adalah pekerja yang dipekerjakan oleh perusahaan untuk
                                jangka
                                waktu terbatas dan tidak memiliki kesempatan dalam jejang karir sesuai aturan perusahaan.
                            </div>
                            <div class="col-sm-12 fst-italic mb-2" style="font-size: 12px">
                                <strong>Contract workers</strong> are workers who are employed by the company for a limited
                                period of time and do not have career opportunities according to company regulations.
                            </div>
                            <div class="col-sm-12" style="font-size: 12px">
                                <strong>Pekerja outsourcing </strong> adalah pekerja yang direkrut dari perusahaan penyalur
                                tenaga kerja untuk jangka waktu pendek dan menangani pekerjaan khusus baik produksi maupun
                                non
                                produksi.
                            </div>
                            <div class="col-sm-12 fst-italic mb-2" style="font-size: 12px">
                                <strong>Outsourced workers</strong> are workers who are recruited from labor supply
                                companies
                                for a short time and handle special jobs, both production and non- production.
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
                <button class="btn btn-primary btn-sm" type="submit" form="blok2_form">Simpan</button>
                <div class=" me-2" role="group" aria-label="First group">
                    <a class="btn btn-warning btn-sm"
                        href="{{ url('showblok1/' . \Crypt::encryptString($id)) }}">Kembali</a>
                    <a class="btn btn-warning btn-sm" href="{{ url('showblok3/' . \Crypt::encryptString($id)) }}">Lanjut
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

        $(document).ready(function() {
            $('.mask').mask('000.000.000.000.000', {
                reverse: true
            });
        });
    </script>
@endsection
