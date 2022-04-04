@extends('layout.main')

@section('content')

<div class="card m-5">
    @include('alert')
    <form action="{{url('profile/store')}}" method="POST">
        <fieldset class="p-5">
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
                    <input type="text" class="form-control" id="email" name="email" disabled
                        value="{{old('email', $user->email)}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#ubahpwmodal">ubah</button>
                </div>
            </div>
            <div class=" mb-3 row">
                <label for="alamat_kantor" class="col-sm-4 col-form-label">Alamat Kantor</label>
                {{-- <div> --}}
                    {{-- <input type="text" class="form-control" id="alamat_kantor" name="alamat_kantor"
                        value="{{old('alamat_kantor', $user->alamat_kantor)}}"> --}}
                    <div class=" col-sm-8">
                        <textarea name="alamat_kantor" id="alamat_kantor" rows="5"
                            class="form-control">{{old('alamat_kantor', $user->alamat_kantor)}}</textarea>
                    </div>
                    {{--
                </div> --}}
            </div>
            <div class="mb-3 row">
                <label for="alamat_pusat" class="col-sm-4 col-form-label">Alamat Pusat</label>
                {{-- <div> --}}
                    {{-- <input type="text" class="form-control" id="alamat_kantor" name="alamat_kantor"
                        value="{{old('alamat_kantor', $user->alamat_kantor)}}"> --}}
                    <div class=" col-sm-8">
                        <textarea name="alamat_pusat" id="alamat_pusat" rows="5"
                            class="form-control">{{old('alamat_pusat', $user->alamat_pusat)}}</textarea>
                    </div>
                    {{--
                </div> --}}
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                {{-- <button class="btn btn-warning" type="button">ubah</button> --}}
                {{-- <button class="btn btn-primary" type="submit">simpan</button> --}}
            </div>
        </fieldset>
    </form>
</div>
<div class="modal fade" id="ubahpwmodal" tabindex="-1" aria-labelledby="ubahpwmodallabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ubahpwmodallabel">Ubah Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" id="formubahpassword" action="{{url('/profile/ubahpassword')}}" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <label for="password_lama" class="form-label">Password Lama</label>
                        <input type="password" class="form-control" id="password_lama" name="password_lama" required>
                    </div>
                    <div class="col-md-12">
                        <label for="password" class="form-label">Password Baru</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="col-md-12">
                        <label for="password2" class="form-label">Konfirmasi Password Baru</label>
                        <input type="password" class="form-control" id="password2" name="password2" required>
                        <div class="invalid-feedback">
                            Password Berbeda
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary disabled" type="submit" id="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $("#password").on("focusout", function () {
  if ($(this).val() != $("#password2").val()) {
    $("#password2").removeClass("is-valid").addClass("is-invalid");
    $("#submit").addClass("disabled")
  } else {
    $("#password2").removeClass("is-invalid").addClass("is-valid");
    $("#submit").removeClass("disabled")
  }
});

$("#password2").on("keyup", function () {
  if ($("#password").val() != $(this).val()) {
    $(this).removeClass("is-valid").addClass("is-invalid");
    $("#submit").addClass("disabled")
  } else {
    $(this).removeClass("is-invalid").addClass("is-valid");
    $("#submit").removeClass("disabled")

  }
});
</script>
@endsection
