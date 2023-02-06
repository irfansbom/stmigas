@extends('layout.main')

@section('content')
    <div class=" my-5 card">
        <div class="card-header">
            <div class="row mb-3">
                <div class="col">
                    <h1>Daftar Perusahaan</h1>
                </div>
                <div class="col d-flex align-items-center justify-content-end">
                    <div class="p-2">
                        <a class="btn btn-success btn-sm" id="btn_export" href="{{ url('perusahaan_export') }}">Export</a>
                    </div>
                    <div class="p-2">
                        <a class="btn btn-warning btn-sm " href="{{ url('perusahaan/create') }}">Tambah <i
                                class="bi bi-plus-square"></i></a>
                    </div>
                </div>
            </div>

            <form action="">
                <div class="row">
                    <div class="mb-3 col-2">

                        <input type="text" class="form-control" id="filter_nama" name="filter_nama"
                            placeholder="Nama Perusahaan"
                            @if ($request->filter_nama) value="{{ $request->filter_nama }}" @endif>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary">Cari</button>
                    </div>

                </div>
            </form>
        </div>
        @include('alert')
        <div class="card-body">
            <div class="mx-4 my-2">
                <table class="table table-bordered align-middle" style="font-size: 12px">
                    <thead>
                        <tr class="text-center align-middle">
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Admin</th>
                            <th>Alamat</th>
                            <th style="width:15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perusahaan as $key => $perus)
                            <tr>
                                <td class="text-center">{{ ++$key }}</td>
                                <td> {{ $perus->nama_perusahaan }} </td>
                                <td>
                                    <ul>
                                        @foreach ($perus->user as $user)
                                            <li>
                                                {{ $user->nama }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="">{{ $perus->alamat_perusahaan }}</td>
                                <td class="text-center">
                                    <a class="btn btn-outline-primary"
                                        href="{{ url('perusahaan/' . \Crypt::encryptString($perus->id)) }}">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <button class="btn btn-outline-danger  btn_hapus" data-id="{{ $perus->id }}"
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
                    <form action="{{ url('perusahaan') }}" method="POST" id="form_hapus">
                        @csrf
                        @method('delete')
                        <div class="row">
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
            var base_url = "{{ url('/perusahaan') }}"
            // console.log(base_url)
            $('#modal_hapus').find('#hapus_id').val($(this).data("id"));
            $('#modal_hapus').find('#form_hapus').attr('action', base_url + '/' + $(this).data('id'));
            $('#modal_hapus').find('#hapus_nama').val($(this).data("nama"));
        })
    </script>
@endsection
