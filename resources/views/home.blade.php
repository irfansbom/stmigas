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
                        $auth->getPermissionsViaRoles()->pluck('name')->toArray()))
                        <button class="btn btn-primary btn-sm" href="{{ url('form') }}" data-bs-toggle="modal"
                            data-bs-target="#modaltambah">ISI FORM</button>
                    @endif
                </div>
                <br>
                <table class="table table-bordered border-dark text-center" style="font-size: 12px">
                    <thead>
                        <tr class="text-center align-middle">
                            <th rowspan="1">No</th>
                            <th rowspan="1">Nama Perusahaan</th>
                            <th rowspan="1">Tahun</th>
                            <th colspan="1">Diperbaharui</th>
                            <th rowspan="1">Status</th>
                            <th rowspan="1">Aksi</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($survey as $key => $sur)
                            <tr class="align-middle">
                                <td>{{ ++$key }}</td>
                                <td>{{ $sur->nama_perusahaan }}</td>
                                <td>{{ $sur->tahun }}</td>
                                <td><u>{{ $sur->user->nama }}</u> <br>{{ $sur->updated_at }} </td>
                                <td>{!! $sur->badge_status($sur->status_skk) !!}
                                    @if (in_array(
                                        'Status Form',
                                        $auth->getPermissionsViaRoles()->pluck('name')->toArray()))
                                        <button class="btn btn-outline-dark btn-sm status_btn" data-bs-toggle="modal"
                                            data-bs-target="#modalstatus" id="status_btn"
                                            data-id="{{ $sur->id }}"data-nm_perusahaan="{{ $sur->nama_perusahaan }}"
                                            data-status_skk="{{ $sur->status_skk }}">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    @endif
                                </td>
                                <td><a class="btn btn-warning btn-sm"
                                        href="{{ url('showblok0/' . \Crypt::encryptString($sur->id)) }}">Edit</a>
                                    @if (in_array('Super Admin', $auth->getRoleNames()->toArray()))
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            id="hapus_btn" data-bs-target="#modalhapus" data-id="{{ $sur->id }}">
                                            Hapus
                                        </button>
                                    @endif
                                    <a class="btn btn-success btn-sm"
                                        href="{{ url('form-print/' . \Crypt::encryptString($sur->id)) }}"
                                        target="_blank"><i class="bi bi-eye"></i> / <i class="bi bi-printer"></i> </a>
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

    <div class="modal fade" id="modalstatus" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1"aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Ubah Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('ubah_status_skk') }}" id="form-status" method="post">
                        @csrf
                        <input type="text" name="id" id="status-id" hidden> <br>
                        <label for="">Ubah Status Formulir dari <span id="nm_perusahaan"
                                class="text-danger"></span> </label>
                        <br />
                        <br>
                        <select name="status_skk" id="status_skk" class="form-select">
                            {{-- <option value=""></option> --}}
                            <option value="">Menunggu Persetujuan SKK</option>
                            <option value="Dalam Proses">Sedang Dalam Proses Pemeriksaan</option>
                            <option value="Disetujui">Setuju</option>
                        </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" form="form-status">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#hapus_btn").click(function() {
            $("#hapus-id").val($(this).data("id"));
        })

        $(".status_btn").click(function() {
            console.log($(this).data("id"));
            $("#modalstatus").find('#status-id').val($(this).data("id"));
            $("#modalstatus").find('#nm_perusahaan').text($(this).data("nm_perusahaan"));
            $('#modalstatus').find('#status_skk').val($(this).find(':selected').data('status_skk'))
        })
    </script>
@endsection
