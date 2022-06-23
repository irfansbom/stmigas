@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>Daftar Role</h1>
        @include('alert')
        <div class="py-2">
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_tambah"> <i
                    class="bi bi-plus"></i>Tambah
            </button>
        </div>
        <div class="card">
            <div class="mx-4 my-2">
                <table class="table table-sm align-middle table-bordered " style="font-size: 12px">
                    <thead>
                        <tr class="text-center align-middle">
                            <th style="width: 5%">No</th>
                            <th>Role</th>
                            <th>Permissions</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_roles as $key => $role)
                            <tr>
                                <td class="text-center">{{ ++$key }}</td>
                                <td class="px-3">
                                    {{ $role['name'] }}
                                </td>
                                <td class="px-3">
                                    @foreach ($role['permissions'] as $permission)
                                        <span class="badge bg-primary">{{ $permission->name }}</span>
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-outline-warning btn-sm btn_edit" data-id="{{ $role['id'] }}"
                                        data-name="{{ $role['name'] }}" id="btn_edit" data-bs-toggle="modal"
                                        data-permission="{{ $role['permissions'] }}" data-bs-target="#modal_edit">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm btn_hapus" data-id="{{ $role['id'] }}"
                                        data-name="{{ $role['name'] }}" id="btn_hapus" data-bs-toggle="modal"
                                        data-bs-target="#modal_hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_tambah">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Roles</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ url('roles/add') }}" method="post" id="tambah_form">
                        @csrf
                        <div class="row col">
                            <div class="mb-3 col-6">
                                <label for="name_role" class="form-label">Nama Role</label>
                                <input type="text" class="form-control" id="name_role" name="name">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="guard_name" class="form-label">Guard Name</label>
                                <input type="text" class="form-control" id="guard_name" value="stmigas" readonly
                                    name="guard_name">
                            </div>
                        </div>
                        Permissions
                        @foreach ($data_permission as $perm)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $perm->name }}"
                                    name="permissions[]" id="{{ $perm->name }}">
                                <label class="form-check-label" for="{{ $perm->name }}">
                                    {{ $perm->name }}
                                </label>
                            </div>
                        @endforeach


                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="tambah_form">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_hapus">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Delete Roles</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ url('roles/delete') }}" method="post" id="hapus_form">
                        @csrf
                        <input class="form_input" type="text" name="id" id="role_id">
                        <br>
                        Yakin menghapus role :<b> <i><span id="role_name"> </span></i> </b>
                        <br>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="hapus_form">Submit</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_edit">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Roles<span></span></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ url('roles/edit') }}" method="post" id="edit_form">
                        @csrf
                        <div class="row col">
                            <input type="text" name="id" id="role_id">
                            <div class="mb-3 col-6">
                                <label for="name_role" class="form-label">Nama Role</label>
                                <input type="text" class="form-control" id="name_role" name="name">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="guard_name" class="form-label">Guard Name</label>
                                <input type="text" class="form-control" value="stmigas" readonly name="guard_name">
                            </div>
                        </div>
                        Permissions
                        @foreach ($data_permission as $perm)
                            <div class="form-check">
                                <input class="form-check-input permission" type="checkbox" value="{{ $perm->name }}"
                                    name="permissions[]" id="{{ $perm->name }}">
                                <label class="form-check-label" for="{{ $perm->name }}">
                                    {{ $perm->name }}
                                </label>
                            </div>
                        @endforeach
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="edit_form">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <script>
        $(".btn_hapus").click(function() {
            $('#role_id').val($(this).data("id"))
            $('#role_name').text($(this).data("name"))
        })
        $(".btn_edit").click(function() {
            $('#modal_edit').find('#role_id').val($(this).data("id"));
            $('#modal_edit').find('#name_role').val($(this).data("name"));
            // var permissions = $(this).data("permission");
            var permissions = [];
            $(this).data("permission").forEach(element => {
                permissions.push(element['name']);
            });
            console.log(permissions)
            $('#modal_edit').find('input[name="permissions[]"]').each(function() {
                if (permissions.includes(this.value)) {
                    $(this).prop('checked', true);
                } else {
                    $(this).prop('checked', false);
                }
            });
        })
    </script>
@endsection
