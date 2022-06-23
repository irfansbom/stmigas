@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>Profile Perusahaan</h1>
        @include('alert')
        <div class="card">
            <div class="mx-4 my-2">
                <form action="{{ url('perusahaan/store') }}" method="POST">
                    @csrf
                    <fieldset class="px-5 py-4">
                        <input type="text" name="id" id="id" hidden value="{{ old('id', $perusahaan->id) }}">
                        {{-- <h2>Profile Perusahaan</h2> --}}
                        <div class="mb-3 row">
                            <label for="nama_perusahaan" class="col-sm-4 col-form-label">Nama Perusahaan</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                                    value="{{ old('nama_perusahaan', $perusahaan->nama_perusahaan) }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email_perusahaan" class="col-sm-4 col-form-label">Email Perusahaan</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="email_perusahaan" name="email_perusahaan"
                                    value="{{ old('email_perusahaan', $perusahaan->email_perusahaan) }}">
                            </div>
                            {{-- <div class="col-sm-2">
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="popover"
                                    title="Fatal Kesalahan"
                                    data-bs-content="Edit email mungkin berakibat fatal karena penghubung user dan form berupa email tersebut. Hub. admin untuk lebih lanjut">Edit</button>
                            </div> --}}
                        </div>
                        <br>
                        <div class=" mb-3 row">
                            <label for="alamat_kantor" class="col-sm-4 col-form-label">Alamat Kantor</label>
                            <div class=" col-sm-6">
                                <textarea name="alamat_kantor" id="alamat_kantor" rows="3"
                                    class="form-control">{{ old('alamat_kantor', $perusahaan->alamat_kantor) }}</textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-1"></div>
                            <label for="telepon_perusahaan" class="col-sm-3 col-form-label">No Telepon Perusahaan</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="telepon_perusahaan" name="telepon_perusahaan"
                                    value="{{ old('telepon_perusahaan', $perusahaan->telepon_perusahaan) }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="alamat_pusat" class="col-sm-4 col-form-label">Alamat Pusat</label>

                            <div class=" col-sm-6">
                                <textarea name="alamat_pusat" id="alamat_pusat" rows="3"
                                    class="form-control">{{ old('alamat_pusat', $perusahaan->alamat_pusat) }}</textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-1"></div>
                            <label for="telepon_pusat" class="col-sm-3 col-form-label">No Telepon Pusat</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="telepon_pusat" name="telepon_pusat"
                                    value="{{ old('telepon_pusat', $perusahaan->telepon_pusat) }}">
                            </div>
                        </div>
                        <br>
                        <div class="mb-3 row">
                            <label for="cp_nama" class="col-sm-4 col-form-label">Contact Person</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="cp_nama" name="cp_nama"
                                    value="{{ old('cp_nama', $perusahaan->cp_nama) }}">
                            </div>

                        </div>
                        <div class="mb-3 row">
                            <label for="cp_no_hp" class="col-sm-4 col-form-label">No Hp</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="cp_no_hp" name="cp_no_hp"
                                    value="{{ old('cp_no_hp', $perusahaan->cp_no_hp) }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="kd_kab" class="col-sm-4 col-form-label">Kabupaten/Kota</label>
                            <div class="col-sm-6">
                                <select class="form-select" aria-label="Default select example" name="kd_kab">
                                    <option selected value="">Pilih Kabupaten/Kota</option>
                                    @foreach ($kabs as $kab)
                                        @if ($kab->kd_kab == $perusahaan->kd_kab)
                                            <option selected value="{{ $kab->kd_kab }}">{{ $kab->nama_kab }}</option>
                                        @else
                                            <option value="{{ $kab->kd_kab }}">{{ $kab->nama_kab }}</option>
                                        @endif
                                    @endforeach
                                </select>
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
                        <input type="text" name="id" id="id" hidden value="{{ old('id', $perusahaan->id) }}">
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
