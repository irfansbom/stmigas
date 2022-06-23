@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>Daftar Perusahaan</h1>
        @include('alert')
        <div class="card">
            <div class="mx-4 my-2">
                <table class="table table-sm align-middle" style="font-size: 12px">
                    <thead>
                        <tr class="text-center align-middle">
                            <th style="width:30%">Nama</th>
                            <th>Email</th>
                            <th>Kabupaten</th>
                            <th>Alamat Kantor </th>
                            <th>No HP CP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perusahaan as $perus)
                            <tr>
                                <td>
                                    {{ $perus->nama_perusahaan }}
                                </td>
                                <td>{{ $perus->email_perusahaan }}</td>
                                <td class="text-center">{{ $perus->kabupaten }}</td>
                                <td class="">{{ $perus->alamat_kantor }}</td>
                                <td class="text-center">{{ $perus->cp_no_hp }}</td>
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
            </div>
        </div>
    </div>
@endsection
