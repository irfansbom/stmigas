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
    <form action="{{ url('storeblok0') }}" id="blok0_form" method="POST" class="needs-validation" novalidate>
        @csrf
        <fieldset>
            <input type="text" id="id_form" name="id_form" value="{{ old('id_form', $survey->id) }}" hidden />
            <input type="text" id="id_perusahaan" name="id_perusahaan"
                value="{{ old('id_perusahaan', $survey->id_perusahaan) }}" hidden>
            <input type="text" id="id_user" name="id_user" value="{{ old('id_user', $survey->id_user) }}" hidden>
            <input type="text" id="tahun" name="tahun" value="{{ old('tahun', $survey->tahun) }}" hidden>
            <input type="text" id="tipe_form" name="tipe_form" value="{{ old('tipe_form', $survey->tipe_form) }}" hidden>
            <input type="text" id="email" name="email" value="{{ old('email', $survey->email) }}" hidden>
            <div class="mb-1 row ">
                <label for="kip" class="col-sm-1 col-form-label">KIP</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm text-end" id="kip" name="kip"
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
                            <input type="text" name="provinsi" id="provinsi" value="Sumatera Selatan" hidden>
                            <div class="col-sm-8 d-flex align-items-center">
                                <select class="form-select " aria-label="Default select" id="provinsi" name="provinsi"
                                    disabled>
                                    <option value="Sumatera Selatan" selected>Sumatera Selatan</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-1 row d-flex align-items-center">
                            <label for="kabkot" class="col-sm-4 col-form-label">
                                <strong>2. Kabupaten/Kota*)</strong> <br>
                                <span class="fst-italic">&nbsp; &nbsp; Regency/ Municipality</span>
                            </label>
                            <div class="col-sm-8">
                                <select name="kabkot" id="kabkot" class="form-select" required>
                                    <option value="">Pilih Kabupaten</option>
                                    @foreach ($kabs as $kab)
                                        @if ($survey->kd_kab == $kab->id_kab)
                                            <option value="{{ $kab->nama_kab }}" data-id="{{ $kab->id_kab }}" selected>
                                                {{ $kab->nama_kab }}
                                            </option>
                                        @else
                                            <option value="{{ $kab->nama_kab }}" data-id="{{ $kab->id_kab }}">
                                                {{ $kab->nama_kab }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-1 row d-flex align-items-center">
                            <label for="kecamatan" class="col-sm-4 col-form-label">
                                <strong>3. Kecamatan</strong> <br>
                                <span class="fst-italic">&nbsp; &nbsp; Sub-district</span>
                            </label>
                            <div class="col-sm-8">
                                <select name="kecamatan" id="kecamatan" class="form-select" required>
                                    <option value="">Pilih Kecamatan</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-1 row d-flex align-items-center">
                            <label for="kelurahan" class="col-sm-4 col-form-label">
                                <strong>4. Kelurahan</strong> <br>
                                <span class="fst-italic">&nbsp; &nbsp; Village</span>
                            </label>
                            <div class="col-sm-8">
                                <select name="kelurahan" id="kelurahan" class="form-select" required>
                                    <option value="">Pilih kelurahan</option>
                                </select>
                            </div>
                        </div>
                    </td>
                    <td class="px-2 py-0" style="width:15%">
                        <div class="mb-2 row text-center">
                            <span style="font-size: 8px">Diisi oleh BPS <br>
                                <span class="fst-italic">Filled by
                                    BPS</span>
                            </span>
                        </div>
                        <div class=" mb-4 row">
                            <div class="col-sm-12 d-flex align-items-center">
                                <input type="number" class="form-control text-end" name="kd_prov" id="kd_prov"
                                    maxlength="2" value="16"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    readonly>

                            </div>
                        </div>
                        <div class=" mb-4 row">
                            <div class="col-sm-12 d-flex align-items-center">
                                <input type="number" class="form-control text-end" name="kd_kab" id="kd_kab"
                                    maxlength="2"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    readonly>
                            </div>
                        </div>
                        <div class=" mb-4 row">
                            <div class="col-sm-12 d-flex align-items-center">
                                <input type="number" class="form-control mt-1 text-end" name="kd_kec" id="kd_kec"
                                    maxlength="3"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    readonly>
                            </div>
                        </div>
                        <div class=" mb-4 row">
                            <div class="col-sm-12 d-flex align-items-center">
                                <input type="number" class="form-control mt-1 text-end" name="kd_desa" id="kd_desa"
                                    maxlength="3"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    readonly>
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
                            <label for="nib" class="col-sm-3 col-form-label">
                                <strong>6. Nomor Izin Berusaha</strong> <br>
                                <span class="fst-italic">&nbsp; &nbsp; Number</span>
                            </label>
                            <div class="col-sm-9 d-flex align-items-center">
                                <input type="text" class="form-control" id="nib" name="nib"
                                    value="{{ old('nib', $survey->nib) }}" required>
                            </div>
                        </div>
                        <div class="mb-1 row">
                            <label for="alamat_perusahaan" class="col-sm-3 col-form-label">
                                <strong>7. Alamat perusahaan</strong><br>
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
                                <strong>8. Alamat kantor pusat</strong><br>
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
                        <div class="mb-1 row">
                            <label for="nib" class="col-sm-3 col-form-label">
                                <strong>9. Lokasi Penambangan</strong> <br>
                                <span class="fst-italic">&nbsp; &nbsp; Minning Site</span>
                            </label>
                            <div class="col-sm-5 d-flex align-items-center">
                                <select name="lokasi_penambangan" id="lokasi_penambangan" class="form-select" required>
                                    <option value="">Pilih Lokasi Penambangan</option>
                                    <option value="Pesisir/Laut" @if ($survey->lokasi_penambangan == 'Pesisir/Laut') selected @endif>
                                        Pesisir/Laut <i> [Coast/Sea] </i>
                                    </option>
                                    <option value="Sungai" @if ($survey->lokasi_penambangan == 'Sungai') selected @endif>
                                        Sungai [River]
                                    </option>
                                    <option value="Bukit/Gunung" @if ($survey->lokasi_penambangan == 'Bukit/Gunung') selected @endif>
                                        Bukit/Gunung [Hill/Mountain]
                                    </option>
                                    <option value="Hutan" @if ($survey->lokasi_penambangan == 'Hutan') selected @endif>
                                        Hutan [Forest]
                                    </option>
                                    <option value="Lainnya" @if ($survey->lokasi_penambangan == 'Lainnya') selected @endif>
                                        Lainnya [Others]
                                    </option>
                                </select>
                            </div>
                            <div class="col-sm-4 d-flex align-items-center">
                                <input type="text" class="form-control" id="lokasi_lainnya" name="lokasi_lainnya"
                                    placeholder="lainnya" value="{{ old('lokasi_lainnya', $survey->lokasi_lainnya) }}"
                                    @if ($survey->lokasi_lainnya != 'lainnya') disabled @endif>
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
                            <div class="col-sm-8">Memperoleh data Statistik pertambangan Migas untuk perencanaan dan
                                evaluasi
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
                            <div class="col-sm-8">Identitas dan seluruh informasi perusahaan akan tetap dirahasiakan dan
                                tidak
                                akan dipublikasikan secara individu sesuai UU No. 16 tahun 1997 Tentang Statistik.</div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-sm-3 fst-italic"><strong>Data Confidentiality Guarantee</strong></div>
                            <div class="col-sm-1 text-end"><strong>:</strong></div>
                            <div class="col-sm-8 fst-italic">Identity and all company information will remain secret and
                                will
                                not be published individually based on Law No. 16 of 1997 on Statistics.</div>
                        </div>
                        <br>
                        <div class="row mb-1">
                            <div class="col-sm-3"><strong>Biaya Survei</strong></div>
                            <div class="col-sm-1 text-end"><strong>:</strong></div>
                            <div class="col-sm-8">Survei ini tidak memungut biaya apapun dan tidak ada kaitannya dengan
                                pajak.
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-sm-3 fst-italic"><strong>Charge of the Survey
                                </strong></div>
                            <div class="col-sm-1 text-end"><strong>:</strong></div>
                            <div class="col-sm-8 fst-italic">The survey is free of charge and has no related with taxes.
                            </div>
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
    </form>
    <div class="fixed-bottom bg-dark">
        <div class="container px-1">
            <div class="container py-2 px-3 d-flex justify-content-between">
                <a class="btn btn-danger btn-sm" href="{{ url('dashboard') }}">Keluar </a>
                <button class="btn btn-primary btn-sm" type="submit" form="blok0_form">Simpan</button>
                <div class="me-3" role="group" aria-label="First group">
                    <button class="btn btn-warning btn-sm" disabled>Kembali</button>
                    <button class="btn btn-warning btn-sm" disabled>Lanjut</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
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

        var kab = @json($survey->kabkot);
        var kec = @json($survey->kecamatan);
        var desa = @json($survey->kelurahan);

        $(document).ready(function() {

            $('#kabkot').val(kab).change();
            $('#kd_kab').val($('[name="kabkot"]').find(':selected ').data('id'))
            getkec()

            setTimeout(function() {
                $('#kecamatan').val(kec).change()
                $('#kd_kec').val($('[name="kecamatan"]').find(':selected ').data('id'))
                getdesa()
            }, 700);
            setTimeout(function() {
                $('#kelurahan').val(desa).change()
                $('#kd_desa').val($('[name="kelurahan"]').find(':selected').data('id'))
            }, 1700);

            $("#kabkot").change(function() {
                $('#kd_kab').val($(this).find(':selected').data('id'))
                getkec();
            })

            $("#kabkot").change(function() {
                $('#kd_kab').val($(this).find(':selected').data('id'))
                getkec();
            })

            $("#kecamatan").change(function() {
                $('#kd_kec').val($(this).find(':selected').data('id'))
                getdesa();
            })
            $("#kelurahan").change(function() {
                $('#kd_desa').val($(this).find(':selected').data('id'))
            })

            $("#lokasi_penambangan").change(function() {
                if ($('#lokasi_penambangan').val() != 'Lainnya') {
                    $('#lokasi_lainnya').prop('disabled', true);
                    $('#lokasi_lainnya').val('');
                } else {
                    $('#lokasi_lainnya').prop('disabled', false);
                }

            })

        });


        function getkec() {
            $.ajax({
                    asycn: false,
                    type: "get",
                    url: "{{ url('listkec') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id_kab": $('#kd_kab').val()
                    }
                })
                .done(function(res) {
                    $('[name = "kecamatan"]').html('<option value="">Kecamatan</option>');
                    res.kec.forEach(element => {
                        var option_kec = '<option value="' + element.nama_kec + '"  data-id="' +
                            element.id_kec + '">' +
                            element.nama_kec +
                            '</option> '
                        $('[name="kecamatan"]').append(option_kec);
                    })
                });
        }

        function getdesa() {
            $.ajax({
                    asycn: false,
                    type: "get",
                    url: "{{ url('listdesa') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id_kab": $('#kd_kab').val(),
                        "id_kec": $('#kd_kec').val()
                    }
                })
                .done(function(res) {
                    $('[name = "kelurahan"]').html('<option value="">Desa</option>');
                    res.desa.forEach(element => {
                        var option_desa = '<option value="' + element.nama_desa + '" data-id="' + element
                            .id_desa + '" >' + element
                            .nama_desa +
                            '</option> '
                        $('[name="kelurahan"]').append(option_desa);
                    })
                });
        }
    </script>
    <style>
        .form-select:focus,
        .form-control:focus {
            background-color: rgba(255, 230, 7, 0.767)
        }
    </style>
@endsection
