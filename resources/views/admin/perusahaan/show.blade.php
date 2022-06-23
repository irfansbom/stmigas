@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>Profile Perusahaan</h1>
        @include('alert')
        <div class="card">
            <div class="mx-4 my-2">
                <form action="{{ url('perusahaan/update') }}" method="POST">
                    @csrf
                    <fieldset class="px-3 py-3">
                        {{-- <h2>Profile Perusahaan</h2> --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-1">
                                    <label for="nama_perusahaan" class=" col-form-label">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                                        value="{{ old('nama_perusahaan', $perusahaan->nama_perusahaan) }}">
                                </div>
                                <div class="mb-1">
                                    <label for="email_perusahaan" class=" col-form-label">Email Perusahaan</label>
                                    <input type="email" class="form-control" id="email_perusahaan" name="email_perusahaan"
                                        value="{{ old('email_perusahaan', $perusahaan->email_perusahaan) }}">
                                </div>

                                <div class="mb-1">
                                    <label for="alamat_kantor" class=" col-form-label">Alamat Kantor Sumsel</label>
                                    <textarea name="alamat_kantor" id="alamat_kantor" rows="3" class="form-control">{{ old('alamat_kantor', $perusahaan->alamat_kantor) }}</textarea>
                                </div>
                                <div class="mb-1 ">
                                    <label for="telepon_perusahaan" class=" col-form-label">No Telepon
                                        Sumsel</label>
                                    <input type="text" class="form-control" id="telepon_perusahaan"
                                        name="telepon_perusahaan"
                                        value="{{ old('telepon_perusahaan', $perusahaan->telepon_perusahaan) }}">

                                </div>

                            </div>
                            <div class="col">
                                <div class="mb-1">
                                    <label for="kd_kab" class=" col-form-label">Kabupaten/Kota</label>
                                    <select class="form-select" aria-label="Default select example" name="kd_kab">
                                        <option selected value="">Pilih Kabupaten/Kota</option>
                                        @foreach ($kabs as $kab)
                                            @if ($kab->kd_kab == $perusahaan->kd_kab)
                                                <option selected value="{{ $kab->kd_kab }}">{{ $kab->nama_kab }}
                                                </option>
                                            @else
                                                <option value="{{ $kab->kd_kab }}">{{ $kab->nama_kab }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-1">
                                    <label for="" class="col-form-label" style="visibility :hidden">a</label>
                                    <input class="form-control" style="visibility :hidden">
                                </div>

                                <div class="mb-1">
                                    <label for="alamat_pusat" class=" col-form-label">Alamat Kantor Pusat</label>
                                    <textarea name="alamat_pusat" id="alamat_pusat" rows="3" class="form-control">{{ old('alamat_pusat', $perusahaan->alamat_pusat) }}</textarea>
                                </div>
                                <div class="mb-1 ">
                                    <label for="telepon_pusat" class=" col-form-label">No Telepon Pusat</label>
                                    <input type="text" class="form-control" id="telepon_pusat" name="telepon_pusat"
                                        value="{{ old('telepon_pusat', $perusahaan->telepon_pusat) }}">
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
    </script>
@endsection
