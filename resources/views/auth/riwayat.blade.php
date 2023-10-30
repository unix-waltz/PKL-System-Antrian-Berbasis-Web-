@php
$c = Auth()->user()->role;
    $r = App\Http\Controllers\Helper::AdminDisplay($c);
@endphp
@extends('layout.template')
@section('content')
@include('component.sidebar')
<br>
@if (session()->has('message'))
<div class="container-sm">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session()->get('message') }}
    </div>
</div>
@endif
<br>
<div class="container" style="{{$r}}">
@foreach ($data as $d )
<table class="table">
    <thead class="thead-dark table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Loket</th>
        <th scope="col">Total</th>
        <th scope="col">Waktu</th>
        <th scope="col">Opsi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">-</th>
        <td>{{$d->loket_a}} <br>
        {{$d->loket_b}}<br>
        {{$d->loket_c}}<br>
        {{$d->loket_d}}<br>
        {{$d->loket_e}}<br>
        {{$d->loket_f}} </td>
        <td>Total Antrian Hari Ini : {{$d->total}}</td>
        <td>{{$d->tangal}}</td>
        <td style="
        cursor: pointer;
        ">
        (&nbsp; <a href="/riwayat/del/{{$d->id}}" style="color:red;"> Hapus</a> &nbsp;)
    </td>
      </tr>
     
    </tbody>
  </table>
  
@endforeach
</div>
@endsection