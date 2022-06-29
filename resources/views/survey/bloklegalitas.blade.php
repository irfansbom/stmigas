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
    <form action="{{ url('updatebloklegalitas/' . \Crypt::encryptString($id)) }}" id="bloklegalitas_form" method="POST"
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
                    <a class="btn btn-warning btn-sm" href="{{ url('showblok5/' . \Crypt::encryptString($id)) }}"><i
                            class="bi bi-arrow-left"></i> Sebelumnya</a>
                    <button class="btn btn-primary btn-sm" type="submit" form="bloklegalitas_form">Simpan &
                        Keluar <i class="bi bi-arrow-right"></i> </button>

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
