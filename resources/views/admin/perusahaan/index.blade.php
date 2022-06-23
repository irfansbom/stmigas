@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>Daftar Perusahaan</h1>
        <div class="row">
            <div class="col">
                <h1>Daftar Perusahaan</h1>
            </div>
            <div class="col d-flex align-items-center justify-content-end">
                <a class="btn btn-warning btn-sm " href="{{ url('perusahaan/create') }}">Tambah</a>
            </div>
        </div>
        @include('alert')
        <div class="card">
            <div class="mx-4 my-2">
                <table class="table table-sm align-middle" style="font-size: 12px">
                    <thead>
                        <tr class="text-center align-middle">
                            <th>No</th>
                            <th style="width:30%">Nama Perusahaan</th>
                            <th>No Telp/HP</th>
                            <th>Email</th>
                            <th>Kabupaten</th>
                            <th>Alamat Kantor </th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perusahaan as $key => $perus)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td> {{ $perus->nama_perusahaan }} </td>
                                <td class="text-center">{{ $perus->cp_no_hp }}</td>
                                <td>{{ $perus->email_perusahaan }}</td>
                                <td class="text-center">{{ $perus->kd_kab }}</td>
                                <td class="">{{ $perus->alamat_kantor }}</td>
                                <td class="text-center">
                                    <a class="btn btn-outline-primary btn-sm "
                                        href="{{ url('perusahaan/' . \Crypt::encryptString($perus->id)) }}">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $perusahaan->links() }}
            </div>
        </div>
    </div>
@endsection
