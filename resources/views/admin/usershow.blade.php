@extends('layout.main')

@section('content')

<div class="container my-5">
    <h1>Daftar User</h1>
    @include('alert')
    <div class="card">
        <div class="mx-4 my-2">
            <form action="{{url('user/store')}}" method="POST">
                @csrf
                <fieldset class="p-5">
                    <input type="text" name="id" id="id" hidden value="{{old('id', $user->id)}}">
                    <h2>Profile Pengguna</h2>
                    <div class="mb-3 row">
                        <label for="nama_perusahaan" class="col-sm-4 col-form-label">Nama Perusahaan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                                value="{{old('nama_perusahaan', $user->nama_perusahaan)}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="email" name="email"
                                value="{{old('email', $user->email)}}" disabled>

                        </div>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="popover"
                                title="Fatal Kesalahan"
                                data-bs-content="Edit email mungkin berakibat fatal karena penghubung user dan form berupa email tersebut. Hub. admin untuk lebih lanjut">Edit</button>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#ubahpwmodal">Reset</button>
                        </div>
                    </div>
                    <div class=" mb-3 row">
                        <label for="alamat_kantor" class="col-sm-4 col-form-label">Alamat Kantor</label>

                        <div class=" col-sm-8">
                            <textarea name="alamat_kantor" id="alamat_kantor" rows="3"
                                class="form-control">{{old('alamat_kantor', $user->alamat_kantor)}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat_pusat" class="col-sm-4 col-form-label">Alamat Pusat</label>

                        <div class=" col-sm-8">
                            <textarea name="alamat_pusat" id="alamat_pusat" rows="3"
                                class="form-control">{{old('alamat_pusat', $user->alamat_pusat)}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="cp_nama" class="col-sm-4 col-form-label">Contact Person</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="cp_nama" name="cp_nama"
                                value="{{old('cp_nama', $user->cp_nama)}}">
                        </div>

                    </div>
                    <div class="mb-3 row">
                        <label for="cp_no_hp" class="col-sm-4 col-form-label">No Hp</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="cp_no_hp" name="cp_no_hp"
                                value="{{old('cp_no_hp', $user->cp_no_hp)}}">

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
                <form class="row g-3" id="formubahpassword" action="{{url('/user/resetpassword')}}" method="POST">
                    @csrf
                    apakah Anda yakin untuk mereset password? Password yang direset akan menjadi <i>password</i>
                    <input type="text" name="id" id="id" hidden value="{{old('id', $user->id)}}">
                    <button class="btn btn-danger " type="submit" id="submit">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>
@endsection
