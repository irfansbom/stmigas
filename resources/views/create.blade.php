@extends('layout.main')

@section('content')
<br>
<div class="mb-1 row">
    <div class="col-sm-2 d-flex  align-items-center">
        <table class="table text-center table-bordered border-dark">
            <tr>
                <td>RAHASIA</td>
            </tr>
            <tr>
                <td class="table-dark">CONFIDENTIAL</td>
            </tr>
        </table>
    </div>
    <div class="col-sm-8 text-center">
        <img src="{{asset('/images/pancasila.png')}}" class="" alt="..." width="70px">
        <br>
        <span style="font-size:13px; font-family: 'Arial'">
            <strong>
                REPUBLIK INDONESIA <br>
                BADAN PUSAT STATISTIK</strong>
        </span>
    </div>
    <div class="col-sm-2 d-flex  align-items-center">
        <table class="table text-center table-borderless">
            <tr>
                <th rowspan="2" class="bg-danger text-light" style="font-size: 20px">MIGAS</th>
            </tr>
        </table>
    </div>
</div>
<br>
<h4 class="text-center">SURVEI TAHUNAN PERUSAHAAN PERTAMBANGAN MIGAS
    <br> <span class="fst-italic">ANNUAL SURVEY OF OIL AND GAS MINING COMPANY</span>
    <br> TAHUN {{$tahun}}
</h4>
<br>
@include('alert')
<form action="{{url('storeform')}}" method="POST" class="needs-validation" novalidate>
    @include('form')
</form>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
          console.log(form);
            form.addEventListener('invalid', (e)=>{
                console.log('invalid')
            },true)
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
@endsection
