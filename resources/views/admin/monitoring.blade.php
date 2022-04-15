@extends('layout.main')

@section('content')

<div class="container my-5">
    <h1>Progres Pengisian</h1>
    @include('alert')
    <div class="card">
        <div class="mx-4 my-2">
            <table class="table table-sm align-middle" style="font-size: 12px">
                <thead>
                    <tr class="text-center align-middle">
                        <th style="width:30%">Nama Perusahaan</th>
                        <th>Kabupten</th>
                        <th>Progress</th>
                        <th>Waktu Pengisian terakhir</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $usr)
                    <tr>
                        <td>
                            {{$usr->nama_perusahaan}}
                        </td>
                        <td>[{{$usr->kd_kab}}] {{$usr->kabs[0]->alias}}</td>
                        <td class="text-center">{{sizeof($usr->survey)}}/1</td>
                        @if(sizeof($usr->survey)>0)
                        <td class="text-center">{{$usr->survey[0]->updated_at}}</td>
                        @else
                        <td class="text-center">Null</td>
                        @endif

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
