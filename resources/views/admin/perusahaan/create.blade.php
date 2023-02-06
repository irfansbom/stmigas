@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>Profile Perusahaan</h1>
        @include('alert')
        <div class="card">
            <div class="mx-4 my-2">
                <form action="{{ url('perusahaan/' . $perusahaan->id) }}" method="POST">
                    @csrf
                    <fieldset class="px-3 py-3">
                        {{-- <h2>Profile Perusahaan</h2> --}}
                        {{-- <input type="text" name="id" id="" value="{{ $perusahaan->id }}" hidden> --}}
                        <div class="row mb-2">
                            <div class="col">
                                <div class="mb-1">
                                    <label for="nama_perusahaan" class=" col-form-label">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                                        value="{{ old('nama_perusahaan', $perusahaan->nama_perusahaan) }}">
                                </div>
                                <div class="mb-1">
                                    <label for="nib" class=" col-form-label">Nomor Induk Berusaha(NIB)</label>
                                    <input type="text" class="form-control" id="nib" name="nib"
                                        value="{{ old('nib', $perusahaan->nib) }}">
                                </div>

                            </div>
                            <div class="col ">
                                <div class="mb-1">
                                    <label for="kd_kab" class=" col-form-label">Kabupaten/Kota</label>
                                    <select class="form-select" aria-label="Default select example" name="kd_kab"
                                        id="kd_kab">
                                        <option selected value="">Pilih Kabupaten/Kota</option>
                                        @foreach ($kabs as $kab)
                                            @if ($kab->kd_kab == $perusahaan->kd_kab)
                                                <option selected value="{{ $kab->id_kab }}">{{ $kab->nama_kab }}
                                                </option>
                                            @else
                                                <option value="{{ $kab->id_kab }}">{{ $kab->nama_kab }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-1">
                                    <label for="kd_kec" class=" col-form-label">Kecamatan</label>
                                    <select class="form-select" aria-label="Default select example" name="kd_kec"
                                        id="kd_kec">
                                        <option selected value="">Pilih Kecamatan</option>
                                    </select>
                                </div>
                                <div class="mb-1">
                                    <label for="kd_desa" class=" col-form-label">Desa/Kelurahan</label>
                                    <select class="form-select" aria-label="Default select example" name="kd_desa"
                                        id="kd_desa">
                                        <option selected value="">Pilih Desa/Kelurahan</option>

                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="row border">
                            <div class="col border">
                                <div class="mb-1">
                                    <label for="alamat_perusahaan" class=" col-form-label">Alamat Kantor Sumsel</label>
                                    <textarea name="alamat_perusahaan" id="alamat_perusahaan" rows="3" class="form-control">{{ old('alamat_perusahaan', $perusahaan->alamat_perusahaan) }}</textarea>
                                </div>
                                <div class="mb-1">
                                    <label for="kode_pos_perusahaan" class=" col-form-label">Kode Pos Perusahaan</label>
                                    <input type="number" class="form-control" id="kode_pos_perusahaan"
                                        name="kode_pos_perusahaan"
                                        value="{{ old('kode_pos_perusahaan', $perusahaan->kode_pos_perusahaan) }}">
                                </div>
                                <div class="mb-1">
                                    <label for="email_perusahaan" class=" col-form-label">Email Perusahaan</label>
                                    <input type="email" class="form-control" id="email_perusahaan" name="email_perusahaan"
                                        value="{{ old('email_perusahaan', $perusahaan->email_perusahaan) }}">
                                </div>
                                <div class="mb-1 ">
                                    <label for="telepon_perusahaan" class=" col-form-label">No Telepon
                                        Perusahaan</label>
                                    <input type="text" class="form-control" id="telepon_perusahaan"
                                        name="telepon_perusahaan"
                                        value="{{ old('telepon_perusahaan', $perusahaan->telepon_perusahaan) }}">
                                </div>
                                <div class="mb-1 ">
                                    <label for="fax_perusahaan" class=" col-form-label">Fax Perusahaan
                                    </label>
                                    <input type="text" class="form-control" id="fax_perusahaan" name="fax_perusahaan"
                                        value="{{ old('fax_perusahaan', $perusahaan->fax_perusahaan) }}">
                                </div>
                            </div>
                            <div class="col border">
                                <div class="mb-1">
                                    <label for="alamat_pusat" class=" col-form-label">Alamat Kantor Pusat</label>
                                    <textarea name="alamat_pusat" id="alamat_pusat" rows="3" class="form-control">{{ old('alamat_pusat', $perusahaan->alamat_pusat) }}</textarea>
                                </div>
                                <div class="mb-1 ">
                                    <label for="kode_pos_pusat" class=" col-form-label">Kode Pos Kantor Pusat</label>
                                    <input type="number" class="form-control" id="kode_pos_pusat" name="kode_pos_pusat"
                                        value="{{ old('kode_pos_pusat', $perusahaan->kode_pos_pusat) }}">
                                </div>
                                <div class="mb-1">
                                    <label for="email_pusat" class=" col-form-label">Email kantor Pusat</label>
                                    <input type="email" class="form-control" id="email_pusat" name="email_pusat"
                                        value="{{ old('email_pusat', $perusahaan->email_pusat) }}">
                                </div>
                                <div class="mb-1 ">
                                    <label for="telepon_pusat" class=" col-form-label">No Telepon Kantor Pusat</label>
                                    <input type="text" class="form-control" id="telepon_pusat" name="telepon_pusat"
                                        value="{{ old('telepon_pusat', $perusahaan->telepon_pusat) }}">
                                </div>
                                <div class="mb-1 ">
                                    <label for="fax_pusat" class=" col-form-label">Fax Kantor Pusat</label>
                                    <input type="text" class="form-control" id="fax_pusat" name="fax_pusat"
                                        value="{{ old('fax_pusat', $perusahaan->fax_pusat) }}">
                                </div>

                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary" type="submit">simpan</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ubahpwmodal" tabindex="-1" aria-labelledby="ubahpwmodallabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahpwmodallabel">Reset Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" id="formubahpassword" action="{{ url('/perusahaan/resetpassword') }}"
                        method="POST">
                        @csrf
                        apakah Anda yakin untuk mereset password? Password yang direset akan menjadi <i>password</i>
                        <input type="text" name="id" id="id" hidden
                            value="{{ old('id', $perusahaan->id) }}">
                        <button class="btn btn-danger " type="submit" id="submit">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })

        $(document).ready(function() {
            $("#kd_kab").change(function() {
                // $('#kd_kab').val($(this).find(':selected').data('id'))
                getkec();
            })

            $("#kd_kec").change(function() {
                // $('#kd_kec').val($(this).find(':selected').data('id'))
                getdesa();
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
                    $('[name = "kd_kec"]').html('<option value="">Kecamatan</option>');
                    res.kec.forEach(element => {
                        var option_kec = '<option value="' + element.id_kec + '"  data-id="' +
                            element.id_kec + '">' +
                            element.nama_kec +
                            '</option> '
                        $('[name="kd_kec"]').append(option_kec);
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
                    $('[name = "kd_desa"]').html('<option value="">Desa</option>');
                    res.desa.forEach(element => {
                        var option_desa = '<option value="' + element.id_desa + '" data-id="' + element
                            .id_desa + '" >' + element
                            .nama_desa +
                            '</option> '
                        $('[name="kd_desa"]').append(option_desa);
                    })
                });
        }
    </script>
@endsection
