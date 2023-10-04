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