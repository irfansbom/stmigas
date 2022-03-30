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
                        <th rowspan="2">No</th>
                        <th rowspan="2">Tahun</th>
                        <th colspan="2">Dibuat</th>
                        <th colspan="2">Diupdate</th>
                        <th rowspan="2">Aksi</th>
                    </tr>
                    <tr>
                        <th>Oleh</th>
                        <th>Tanggal</th>
                        <th>Oleh</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($survey as $key => $sur)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$sur->tahun}}</td>
                        <td>{{$sur->created_by}}</td>
                        <td>{{$sur->created_at}}</td>
                        <td>{{$sur->updated_by}}</td>
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
