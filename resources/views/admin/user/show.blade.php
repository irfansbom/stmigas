@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>Profile User</h1>
        @include('alert')
        <div class="card">
            <div class="mx-4 my-2">
                <form action="{{ url('user/update') }}" method="POST">
                    @csrf
                    <fieldset class="p-5">
                        <input type="text" name="id" id="id" hidden value="{{ old('id', $user->id) }}">
                        {{-- <h2>Profile Pengguna</h2> --}}
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-4 col-form-label">Nama User</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ old('nama', $user->nama) }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="email" name="email"
                                    value="{{ old('email', $user->email) }}" disabled>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="popover"
                                    title="Fatal Kesalahan"
                                    data-bs-content="Edit email mungkin berakibat fatal karena penghubung user dan form berupa email tersebut. Hub. admin untuk lebih lanjut">Edit</button>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#ubahpwmodal">Ubah</button>
                            </div>
                            @if (in_array('Super Admin', $auth->getRoleNames()->toArray()))
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#resetpwmodal">Reset</button>
                                </div>
                            @endif

                        </div>
                        <div class="mb-3 row">
                            <label for="perusahaan" class="col-sm-4 col-form-label">Perusahaan</label>
                            <div class="col-sm-6">
                                @foreach ($user->perusahaan->pluck('nama_perusahaan') as $perus)
                                    <li>
                                        {{ $perus }}
                                    </li>
                                @endforeach
                            </div>

                        </div>
                        <div class="mb-3 row">
                            <label for="divisi_fungsi" class="col-sm-4 col-form-label">Divisi/Fungsi</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="divisi_fungsi" name="divisi_fungsi"
                                    value="{{ old('divisi_fungsi', $user->divisi_fungsi) }}">
                            </div>

                        </div>
                        <div class="mb-3 row">
                            <label for="no_hp" class="col-sm-4 col-form-label">No Hp</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="no_hp" name="no_hp"
                                    value="{{ old('no_hp', $user->no_hp) }}">
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
    <div class="modal fade" id="resetpwmodal" tabindex="-1" aria-labelledby="resetpwmodallabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resetpwmodallabel">Reset Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" id="formresetpassword" action="{{ url('/user/resetpassword') }}" method="POST">
                        @csrf
                        apakah Anda yakin untuk mereset password? Password yang direset akan menjadi <i>password</i>
                        <input type="text" name="id" id="id" hidden value="{{ old('id', $user->id) }}">
                        {{-- <input type="text" class=""> --}}
                        <button class="btn btn-danger " type="submit" id="submit">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ubahpwmodal" tabindex="-1" aria-labelledby="ubahpwmodallabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pwmodallabel">Ubah Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation" id="formubahpassword"
                        action="{{ url('/user/ubahpassword') }}" method="POST">
                        @csrf
                        {{-- apakah Anda yakin untuk mereset password? Password yang direset akan menjadi <i>password</i> --}}
                        <input type="text" name="id" id="id" hidden
                            value="{{ old('id', $user->id) }}">
                        {{-- <input type="text" class="password"> --}}
                        <input type="text" class="form-control" name="password" value="{{ old('password') }}"
                            id="password">
                        <input type="text" class="form-control" name="password_confirm" id="password_confirm"
                            value="{{ old('password_confirm') }}">
                        <button class="btn btn-danger " type="submit" id="submit_ubah_pw">Ubah Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function() {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        matchPassword(event);
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })



        $(function() {
            // $('#submit_ubah_pw').click(function(e) {
            //     e.preventDefault()
            // })

            $('#password_confirm').on('keyup', function() {
                matchPassword();
                console.log(document.getElementById("password").value)
                console.log(document.getElementById("password_confirm").value)
            })
        })

        function matchPassword(event) {
            var pw1 = document.getElementById("password");
            var pw2 = document.getElementById("password_confirm");
            if (pw1.value != pw2.value) {
                $('#password_confirm').css("border", "1px solid red");
                $('#password_confirm').addClass('is-invalid')
                event.preventDefault()
                event.stopPropagation()
            } else {
                $('#password_confirm').css("border", "1px solid #dee2e6");
                $('#password_confirm').removeClass('is-invalid')
            }
        }
    </script>
@endsection
