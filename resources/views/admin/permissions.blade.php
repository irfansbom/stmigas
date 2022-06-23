@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>Daftar Permission</h1>
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
                            <th>Permission</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permission as $key => $prms)
                            <tr>
                                <td class="text-center">{{ ++$key }}</td>
                                <td class="px-3">
                                    {{ $prms->name }}
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-outline-danger btn-sm btn_hapus" data-id="{{ $prms->id }}"
                                        data-name="{{ $prms->name }}" id="btn_hapus" data-bs-toggle="modal"
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
                    <h4 class="modal-title">Add Permission</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ url('permissions/add') }}" method="post">
                        @csrf
                        <div class="mb-3 col-6">
                            <label for="name_role" class="form-label">Nama Permission</label>
                            <input type="text" class="form-control" id="name_role" name="name">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="guard_name" class="form-label">Guard Name</label>
                            <input type="text" class="form-control" id="guard_name" value="stmigas" readonly
                                name="guard_name">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
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
                    <h4 class="modal-title">Delete Permission</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ url('permissions/delete') }}" method="post" id="hapus_form">
                        @csrf
                        <input class="form_input" type="text" name="id" id="permission_id" hidden>
                        <br>
                        Yakin menghapus permission :<b> <i><span id="permission_name"> </span></i> </b>
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

    <script>
        $(".btn_hapus").click(function() {
            $('#permission_id').val($(this).data("id"))
            $('#permission_name').text($(this).data("name"))
        })
    </script>
@endsection
