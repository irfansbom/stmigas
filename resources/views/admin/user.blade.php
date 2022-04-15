@extends('layout.main')

@section('content')

<div class="container my-5">
    <h1>Daftar User</h1>
    @include('alert')
    <div class="card">
        <div class="mx-4 my-2">
            <table class="table table-sm align-middle" style="font-size: 12px">
                <thead>
                    <tr class="text-center align-middle">
                        <th style="width:30%">Nama Perusahaan</th>
                        <th>Kabupten</th>
                        <th>CP</th>
                        <th>No HP CP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $usr)
                    <tr>
                        <td>
                            {{$usr->nama_perusahaan}}
                        </td>
                        <td>[{{$usr->kd_kab}}] {{$usr->kabs[0]->alias}}</td>
                        <td class="text-center">{{$usr->cp_nama}}</td>
                        <td class="text-center">{{$usr->cp_no_hp}}</td>
                        <td class="text-center">
                            <a class="btn btn-outline-primary btn-sm "
                                href="{{url('user/' .  \Crypt::encryptString($usr->id))}}">
                                <i class="bi bi-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
