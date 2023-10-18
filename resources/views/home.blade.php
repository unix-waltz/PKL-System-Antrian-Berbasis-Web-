@php
$c = Auth()->user()->id;
    $r = App\Http\Controllers\Helper::loket($c);
    if ( $r['title'] == 404) {
      // return  $r['title'];
    }




    $a = Auth()->user()->role;
    $b = App\Http\Controllers\Helper::AdminDisplay($a);
// @dd($b);

@endphp

@extends('layout.template')

@section('content')
@include('component.sidebar')
<br><br>
<br><br>
<div class="container ">
<button class="btn btn-dark"><i class="bi bi-arrow-clockwise"></i> Reset Antrian</button>
</div>
@if ($b !== null)
  
<div class="container text-center">
    <div class="row align-items-center">
      <form action="">
      <div class="col" id="loket" >
<br>
<h4>{{$r['title']}}</h4>
<br>
        <a href="/loket/{{$r['loket']}}/" class="btn  btn-dark">Periksa Loket {{$r['loket']}}</a>
      </div>
    </form>
      
    </div>
  </div>
@endif

{{-- if --}}


<section style="{{$b}}">


<br><br>
<div class="container text-center">
    <div class="row align-items-center">
     
      <div class="col" id="loket" >
<br>
<a href="/loket/A/" class="btn  btn-dark">Periksa Loket A</a>
<br>
      <input type="hidden" name="status" value="Dalam Antrian">
      <input type="hidden" name="key" value="1">

       
      </div>
     

     
      <div class="col" id="loket" >
<br>
<a href="/loket/B/" class="btn  btn-dark">Periksa Loket B</a>
<br>
      <input type="hidden" name="status" value="Dalam Antrian">
      <input type="hidden" name="key" value="2">


      </div>
     

     
      <div class="col" id="loket" >
<br>
<a href="/loket/C/" class="btn  btn-dark">Periksa Loket C</a>
<br>
      <input type="hidden" name="status" value="Dalam Antrian">
      <input type="hidden" name="key" value="3">


      </div>
      </form>
    </div>
  </div>
  <div class="container text-center">
    <div class="row align-items-center">
     
      <div class="col"  id="loket">
<br>
<a href="/loket/D/" class="btn  btn-dark">Periksa Loket D</a>
<br>
      <input type="hidden" name="status" value="Dalam Antrian">
      <input type="hidden" name="key" value="4">


      </div>
      </form>
     
      <div class="col"  id="loket">
<br>
<a href="/loket/E/" class="btn  btn-dark">Periksa Loket E</a>
<br>
      <input type="hidden" name="status" value="Dalam Antrian">
      <input type="hidden" name="key" value="5">


      </div>
      </form>
     
      <div class="col" id="loket" >
<br>
<a href="/loket/F/" class="btn  btn-dark">Periksa Loket F</a>
<br>
      <input type="hidden" name="status" value="Dalam Antrian">
      <input type="hidden" name="key" value="6">


      </div>
      </form>
    </div>
  </div>
</section>

@endsection
