@extends('layout.template')

@section('content')
@include('component.sidebar')
<br><br>
<div class="container text-center">
    <div class="row align-items-center">
      <div class="col" id="loket" >
<br>
<h4>Loket A</h4>
<br>
        <a href="/loket/A/" class="btn  btn-dark">Ke Loket A</a>
      </div>
      <div class="col" id="loket">
        <br>
        <h4>Loket B</h4>
        <br>
        <a href="/loket/B/" class="btn  btn-dark">Ke Loket B</a>
      </div>
      <div class="col" id="loket">
        <br>
        <h4>Loket C</h4>
        <br>
        <a href="/loket/C/" class="btn  btn-dark">Ke Loket C</a>
      </div>
    </div>
  </div>
  <div class="container text-center">
    <div class="row align-items-center">
      <div class="col" id="loket">
        <br>
        <h4>Loket D</h4>
        <br>
        <a href="/loket/D/" class="btn  btn-dark">Ke Loket D</a>
      </div>
      <div class="col" >
        
      </div>
      <div class="col" id="loket">
        <br>
        <h4>Loket E</h4>
        <br>
        <a href="/loket/E/" class="btn  btn-dark">Ke Loket E</a>
      </div>
    </div>
  </div>

@endsection