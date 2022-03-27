@extends('layout.main')

@section('content')
<div class="container my-5">
    <h1>List Survey</h1>
    @include('alert')
    <div class="card">
        <div class="m-5">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                {{-- <button class="btn btn-warning" type="button">ubah</button> --}}
                <a class="btn btn-success" href="{{url('form')}}">Tambah</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Pengupdate</th>
                        <th>Update</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($survey as $key => $sur)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$sur->tahun}}</td>
                        <td>{{$sur->email}}</td>
                        <td>{{$sur->updated_at}}</td>
                        <td><a class="btn btn-warning"
                                href="{{url('form-edit/' .  \Crypt::encryptString($sur->id) )}}">Edit</a>
                            <a class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</div>
@endsection
