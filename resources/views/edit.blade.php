@extends('layout.main')

@section('content')
<br>
<h4 class="text-center">SURVEI TAHUNAN PERUSAHAAN PERTAMBANGAN MIGAS
    <br> <span class="fst-italic">ANNUAL SURVEY OF OIL AND GAS MINING COMPANY</span>
    <br> TAHUN {{$tahun}}
</h4>
<br>
@include('alert')
<form action="{{url('updateform/' .  \Crypt::encryptString($id)) }}" method="POST">
    @include('form')
</form>
@endsection
