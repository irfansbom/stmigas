@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>Profile User</h1>
        @include('alert')
        <div class="card">
            <div class="mx-4 my-2">
                <form action="{{ url('user/store') }}" method="POST">
                    @csrf
                    <fieldset class="p-5">
                        <input type="text" name="id" id="id" hidden value="{{ old('id', $user->id) }}">
                        {{-- <h2>Profile Pengguna</h2> --}}
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-4 col-form-label">Nama User</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ old('nama', $user->nama) }}" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="email" name="email"
                                    value="{{ old('email', $user->email) }}" autocomplete="off" required>
                            </div>
                            {{-- <div class="col-sm-2">
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="popover"
                                    title="Fatal Kesalahan"
                                    data-bs-content="Edit email mungkin berakibat fatal karena penghubung user dan form berupa email tersebut. Hub. admin untuk lebih lanjut">Edit</button>
                            </div> --}}
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-6">
                                {{-- <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#ubahpwmodal">Reset</button> --}}
                                <input type="password" class="form-control" id="password" name="password"
                                    value="{{ old('password', $user->password) }}" required autocomplete="off">
                            </div>
                        </div>
                        {{-- <div class="mb-3 row">
                            <label for="perusahaan" class="col-sm-4 col-form-label">Perusahaan</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="perusahaan" name="perusahaan"
                                    value="{{ old('perusahaan', $user->perusahaan) }}" readonly>
                            </div>

                        </div> --}}
                        <div class="mb-3 row">
                            <label for="divisi_fungsi" class="col-sm-4 col-form-label">Divisi/Fungsi</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="divisi_fungsi" name="divisi_fungsi"
                                    value="{{ old('divisi_fungsi', $user->divisi_fungsi) }}" autocomplete="off">
                            </div>

                        </div>
                        <div class="mb-3 row">
                            <label for="no_hp" class="col-sm-4 col-form-label">No Hp</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="no_hp" name="no_hp"
                                    value="{{ old('no_hp', $user->no_hp) }}" autocomplete="off">
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
                    <form class="row g-3" id="formubahpassword" action="{{ url('/user/resetpassword') }}" method="POST">
                        @csrf
                        apakah Anda yakin untuk mereset password? Password yang direset akan menjadi <i>password</i>
                        <input type="text" name="id" id="id" hidden value="{{ old('id', $user->id) }}">
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
