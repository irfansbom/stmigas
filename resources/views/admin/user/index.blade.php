@extends('layout.main')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <h1 class="col">Daftar User</h1>
            </div>
            <div class="col d-flex align-items-center justify-content-end">
                <a class="btn btn-warning btn-sm " href="{{ url('user_create') }}">Tambah</a>
            </div>
        </div>

        @include('alert')
        <div class="card">
            <div class="mx-4 my-2">
                <table class="table table-sm align-middle table-bordered" style="font-size: 12px">
                    <thead>
                        <tr class="text-center align-middle">
                            <th>No</th>
                            <th style="">Nama</th>
                            <th colspan="2">Perusahaan</th>
                            <th colspan="2">Roles</th>
                            <th>Email</th>
                            <th>No Hp </th>
                            <th style="width: 8%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $key => $usr)
                            <tr>
                                <td class="text-center">{{ ++$key }}</td>
                                <td>
                                    {{ $usr->nama }}
                                </td>
                                <td style="">
                                    <ul class="m-0">
                                        @foreach ($usr->perusahaan->pluck('nama_perusahaan') as $perus)
                                            <li>{{ $perus }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="text-center">
                                    @if (in_array('Super Admin', $auth->getRoleNames()->toArray()))
                                        <button
                                            class="btn btn-outline-secondary btn-sm btn_perusahaan"data-bs-toggle="modal"
                                            data-bs-target="#modal_edit_perusahaan" data-id="{{ $usr->id }}"
                                            data-perusahaan="{{ $usr->perusahaan }}" data-nama="{{ $usr->nama }}">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    @else
                                        <button class="btn btn-outline-secondary"> <i class="bi bi-pencil"></i></button>
                                    @endif
                                </td>
                                <td style="">
                                    <ul class="m-0">
                                        @foreach ($usr->roles->pluck('name') as $role)
                                            <li>{{ $role }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="text-center">
                                    @if (in_array('Super Admin', $auth->getRoleNames()->toArray()))
                                        <button class="btn btn-outline-secondary btn-sm btn_roles"data-bs-toggle="modal"
                                            data-bs-target="#modal_edit_roles" data-id="{{ $usr->id }}"
                                            data-roles="{{ $usr->roles }}" data-nama="{{ $usr->nama }}">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    @else
                                        <button class="btn btn-outline-secondary"> <i class="bi bi-pencil"></i></button>
                                    @endif
                                </td>
                                <td class="" style="word-break: break-word; overflow-wrap: break-word;">
                                    {{ $usr->email }}</td>
                                <td class="text-center">{{ $usr->no_hp }}</td>
                                <td class="text-center">
                                    <a class="btn btn-outline-primary btn-sm "
                                        href="{{ url('user/' . \Crypt::encryptString($usr->id)) }}">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <button class="btn btn-outline-danger btn-sm btn_hapus" data-id="{{ $usr->id }}"
                                        data-nama="{{ $usr->nama }}" data-bs-toggle="modal"
                                        data-bs-target="#modal_hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $user->links() }}
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_edit_roles">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Roles<span></span></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ url('user_roles') }}" method="post" id="edit_form_roles">
                        @csrf
                        <div class="row ">
                            <input type="text" name="user_id" id="user_id" hidden>
                            <div class="mb-3 ">
                                <label for="nama_user" class="form-label">Nama user</label>
                                <input type="text" class="form-control" id="user_name" name="nama" readonly>
                            </div>

                        </div>
                        Roles
                        @foreach ($data_roles as $role)
                            <div class="form-check">
                                <input class="form-check-input roles" type="checkbox" value="{{ $role->name }}"
                                    name="roles[]" id="{{ $role->name }}">
                                <label class="form-check-label" for="{{ $role->name }}">
                                    {{ $role->name }}
                                </label>
                            </div>
                        @endforeach

                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="edit_form_roles">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_edit_perusahaan">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Perusahaan<span></span></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ url('user_perusahaan') }}" method="post" id="edit_form_perusahaan">
                        @csrf
                        <div class="row ">
                            <input type="text" name="user_id" id="user_id" hidden>
                            <div class="mb-3 ">
                                <label for="nama_user" class="form-label">Nama user</label>
                                <input type="text" class="form-control" id="user_name" name="nama" readonly>
                            </div>

                        </div>
                        Perusahaan
                        <div class="row">
                            @foreach ($data_perusahaan as $perus)
                                <div class=" col-6">
                                    <div class="form-check">
                                        <input class="form-check-input roles" type="checkbox"
                                            value="{{ $perus->id }}" name="perusahaan[]"
                                            id="{{ $perus->nama_perusahaan }}">
                                        <label class="form-check-label" for="{{ $perus->nama_perusahaan }}">
                                            {{ $perus->nama_perusahaan }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="edit_form_perusahaan">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

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
                    <form action="{{ url('user_delete') }}" method="post" id="form_hapus">
                        @csrf
                        <div class="row ">
                            <input type="text" name="user_id" id="user_id" hidden>
                            <div class="mb-3 ">
                                <label for="nama_user" class="form-label">Nama user</label>
                                <input type="text" class="form-control" id="user_name" name="nama" readonly>
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

    <script>
        $('.btn_perusahaan').click(function() {
            console.log($(this).data("id"))
            $('#modal_edit_perusahaan').find('#user_id').val($(this).data("id"));
            $('#modal_edit_perusahaan').find('#user_name').val($(this).data("nama"));
            var perusahaan = [];
            $(this).data("perusahaan").forEach(element => {
                perusahaan.push(element['id_perusahaan']);
            });
            $('#modal_edit_perusahaan').find('input[name="perusahaan[]"]').each(function() {
                if (perusahaan.includes(this.value)) {
                    $(this).prop('checked', true);
                } else {
                    $(this).prop('checked', false);
                }
            });
        })
        $('.btn_roles').click(function() {
            console.log($(this).data("id"))
            $('#modal_edit_roles').find('#user_id').val($(this).data("id"));
            $('#modal_edit_roles').find('#user_name').val($(this).data("nama"));
            var roles = [];
            $(this).data("roles").forEach(element => {
                roles.push(element['name']);
            });
            $('#modal_edit_roles').find('input[name="roles[]"]').each(function() {
                if (roles.includes(this.value)) {
                    $(this).prop('checked', true);
                } else {
                    $(this).prop('checked', false);
                }
            });
        })

        $('.btn_hapus').click(function() {
            console.log($(this).data("id"))
            $('#modal_hapus').find('#user_id').val($(this).data("id"));
            $('#modal_hapus').find('#user_name').val($(this).data("nama"));

        })
    </script>
@endsection
