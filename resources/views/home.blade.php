@php
$c = Auth()->user()->id;
    $r = App\Http\Controllers\Helper::loket($c);
    if ( $r['title'] == 404) {
      // return  $r['title'];
    }
@endphp

@extends('layout.template')

@section('content')
@include('component.sidebar')
<br><br>
<div class="container text-center">
    <div class="row align-items-center">
      <form action="">
      <div class="col" id="loket" >
<br>
<h4>{{$r['title']}}</h4>
<br>
        <a href="/loket/{{$r['loket']}}/" class="btn  btn-dark">Ke Loket {{$r['loket']}}</a>
      </div>
    </form>
      
    </div>
  </div>

@endsection