@extends('layout.main')

@section('content')
    <div class="container my-5">
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
                                    <button class="btn btn-outline-danger btn-sm btn_hapus" data-id="{{ $perus->id }}"
                                        data-nama="{{ $perus->nama_perusahaan }}" data-bs-toggle="modal"
                                        data-bs-target="#modal_hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $perusahaan->links() }}
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_hapus">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus User<span></span></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('perusahaan/delete') }}" method="post" id="form_hapus">
                        @csrf
                        <div class="row ">
                            <input type="text" name="id" id="hapus_id" hidden>
                            <div class="mb-3 ">
                                <label for="hapus_nama" class="form-label">Nama Perusahaan</label>
                                <input type="text" class="form-control" id="hapus_nama" name="name" readonly>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="form_hapus">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.btn_hapus').click(function() {
            console.log($(this).data("id"))
            $('#modal_hapus').find('#hapus_id').val($(this).data("id"));
            $('#modal_hapus').find('#hapus_nama').val($(this).data("nama"));
        })
    </script>
@endsection
