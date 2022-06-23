@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>List Form</h1>
        @include('alert')
        <div class="card">
            <div class="mx-4 my-2">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    {{-- <button class="btn btn-warning" type="button">ubah</button> --}}
                    @if (in_array(
                        'Tambah Form',
                        $auth->getPermissionsViaRoles()->pluck('name')->toArray(),
                    ))
                        <button class="btn btn-success btn-sm" href="{{ url('form') }}" data-bs-toggle="modal"
                            data-bs-target="#modaltambah">Tambah</button>
                    @endif
                </div>
                <br>
                <table class="table table-bordered border-dark text-center" style="font-size: 12px">
                    <thead>
                        <tr class="text-center align-middle">
                            <th rowspan="2">No</th>
                            <th rowspan="2">Nama Perusahaan</th>
                            <th rowspan="2">Tahun</th>
                            <th rowspan="2">Form</th>
                            <th colspan="2">Dibuat</th>
                            <th colspan="2">Diupdate</th>
                            <th rowspan="2">Aksi</th>
                        </tr>
                        <tr class="text-center">
                            <th>Oleh</th>
                            <th>Tanggal</th>
                            <th>Oleh</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($survey as $key => $sur)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $sur->nama_perusahaan }}</td>
                                <td>{{ $sur->tahun }}</td>
                                <td>{{ $sur->tipe_form }}</td>
                                <td>{{ $sur->created_by }}</td>
                                <td>{{ $sur->created_at }}</td>
                                <td>{{ $sur->updated_by }}</td>
                                <td>{{ $sur->updated_at }}</td>
                                <td><a class="btn btn-warning btn-sm"
                                        href="{{ url('form-edit/' . \Crypt::encryptString($sur->id)) }}">Edit</a>
                                    @if (in_array('Super Admin', $auth->getRoleNames()->toArray()))
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            id="hapus_btn" data-bs-target="#modalhapus" data-id="{{ $sur->id }}">
                                            Hapus
                                        </button>
                                    @endif
                                    <a class="btn btn-success btn-sm"
                                        href="{{ url('form-print/' . \Crypt::encryptString($sur->id)) }}"
                                        target="_blank"><i class="bi bi-eye"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>
    <div class="modal fade" id="modalhapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Hapus Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('hapusform') }}" id="hapusform" method="post">
                        @csrf
                        <input type="text" name="id" id="hapus-id" hidden>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                            <label class="form-check-label" for="flexCheckDefault">
                                Dengan ini saya menyatakan untuk menghapus form ini
                            </label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" form="hapusform">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Pilih Perusahaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('form') }}" id="formtambah" method="get">
                        {{-- @csrf --}}
                        <select name="id_perusahaan" id="id_perusahaan" class="form-select" required>
                            @foreach ($perusahaan as $perus)
                                <option value="{{ $perus->id }}">{{ $perus->nama_perusahaan }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" form="formtambah">Tambah</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#hapus_btn").click(function() {
            $("#hapus-id").val($(this).data("id"));
        })
    </script>
@endsection
