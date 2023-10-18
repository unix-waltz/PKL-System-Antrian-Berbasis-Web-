@php
  use App\Models\typeA;
use App\Models\typeB;
use App\Models\typeC;
use App\Models\typeD;
use App\Models\typeE;
use App\Models\TypeF;

$modelA = new typeA;
$modelB = new typeB;
$modelC = new typeC;
$modelD = new typeD;
$modelE = new typeE;
$modelF = new TypeF;
date_default_timezone_set(env('ADD_REGION_TIME'));
$waktu_sekarang = (int)date('H');

$result = App\Http\Controllers\Helper::riwayat($modelA, $modelB, $modelC, $modelD, $modelE, $modelF);
// @dd($result);
@endphp



@extends('layout.template')
@section('content')
<br><br>
<div class="container ">

    <div>
      @csrf
    <button type="submit" class="btn btn-dark" >Pilih Pelayanan Anda</button>
  </div>
</div>

<br><br>
<div class="container text-center">
    <div class="row align-items-center">
      <form action="/data_antrian" method="get" class="col" id="loket" >
        @csrf
      <div class="col"  >
<br>
<h4>{{$data->name_loket_a}}</h4>
<br>
      <input type="hidden" name="status" value="Dalam Antrian">
      <input type="hidden" name="key" value="1">

        <button type="submit" class="btn  btn-dark">Ambil Nomor Antrian</button>
      </div>
      </form>

      <form action="/data_antrian" method="get" class="col" id="loket" >
        @csrf
      <div class="col"  >
<br>
<h4>{{$data->name_loket_b}}</h4>
<br>
      <input type="hidden" name="status" value="Dalam Antrian">
      <input type="hidden" name="key" value="2">

        <button type="submit" class="btn  btn-dark">Ambil Nomor Antrian</button>
      </div>
      </form>

      <form action="/data_antrian" method="get" class="col" id="loket" >
        @csrf
      <div class="col"  >
<br>
<h4>{{$data->name_loket_c}}</h4>
<br>
      <input type="hidden" name="status" value="Dalam Antrian">
      <input type="hidden" name="key" value="3">

        <button type="submit" class="btn  btn-dark">Ambil Nomor Antrian</button>
      </div>
      </form>
    </div>
  </div>
  <div class="container text-center">
    <div class="row align-items-center">
      <form action="/data_antrian" method="get" class="col" id="loket" >
        @csrf
      <div class="col"  >
<br>
<h4>{{$data->name_loket_d}}</h4>
<br>
      <input type="hidden" name="status" value="Dalam Antrian">
      <input type="hidden" name="key" value="4">

        <button type="submit" class="btn  btn-dark">Ambil Nomor Antrian</button>
      </div>
      </form>
      <form action="/data_antrian" method="get" class="col" id="loket" >
        @csrf
      <div class="col"  >
<br>
<h4>{{$data->name_loket_e}}</h4>
<br>
      <input type="hidden" name="status" value="Dalam Antrian">
      <input type="hidden" name="key" value="5">

        <button type="submit" class="btn  btn-dark">Ambil Nomor Antrian</button>
      </div>
      </form>
      <form action="/data_antrian" method="get" class="col" id="loket" >
        @csrf
      <div class="col"  >
<br>
<h4>{{$data->name_loket_f}}</h4>
<br>
      <input type="hidden" name="status" value="Dalam Antrian">
      <input type="hidden" name="key" value="6">

        <button type="submit" class="btn  btn-dark">Ambil Nomor Antrian</button>
      </div>
      </form>
    </div>
  </div>


@endsection