@extends('layout.main')

@section('content')

<div class="card m-5">
    @include('alert')
    <form action="{{url('profile/store')}}" method="POST">
        <fieldset class="p-5">
            <h2>Profile Pengguna</h2>
            <div class="mb-3 row">
                <label for="nama_perusahaan" class="col-sm-4 col-form-label">Nama Perusahaan</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                        value="{{old('nama_perusahaan', $user->nama_perusahaan)}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="email" name="email" disabled
                        value="{{old('email', $user->email)}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-4">
                    <button class="btn btn-warning" type="button">ubah</button>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat_kantor" class="col-sm-4 col-form-label">Alamat Kantor</label>
                {{-- <div> --}}
                    {{-- <input type="text" class="form-control" id="alamat_kantor" name="alamat_kantor"
                        value="{{old('alamat_kantor', $user->alamat_kantor)}}"> --}}
                    <div class=" col-sm-8">
                        <textarea name="" id="" rows="5"
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
                        <textarea name="" id="" rows="5"
                            class="form-control">{{old('alamat_pusat', $user->alamat_pusat)}}</textarea>
                    </div>
                    {{--
                </div> --}}
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                {{-- <button class="btn btn-warning" type="button">ubah</button> --}}
                <button class="btn btn-primary" type="submit">simpan</button>
            </div>
        </fieldset>
    </form>
</div>

@endsection
