@extends('layout.template')
@section('content')
<br><br><br></br>

  <div class="kotak-bg rounded">
    <br><br><br><br><br><br><br><br><br><br><br>
    <h3 align="center" class="text-center">{{$nama}}</h3>
    <h1 align="center" class="text-centern f-9">{{$no}}</h1>
    <p align="center" class="text-center">{{$alamat}}</p>


</div>
<div class="container" id="hid">
<button class="btn btn-dark" align="center" id="printButton"><i class="bi bi-download"></i>&nbsp;Download</button>
</div>
@if ($nomor_antrian)
<script>
    window.onload = function () {
        printPage();
    };
</script>
@endif
@endsection
