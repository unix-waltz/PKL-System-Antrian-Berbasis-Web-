@extends('layouts.app')

@section('content')
@if (isset($_GET['start']))
@foreach ($paginate as $item)
    <!-- Tampilkan data di sini -->
@endforeach

<!-- Tombol navigasi 'previous' (kiri) -->
@if ($data->previousPageUrl())
    <a href="{{ $data->previousPageUrl() }}" class="btn btn-primary float-left">Previous</a>
@endif

<!-- Tombol navigasi 'next' (kanan) -->
@if ($data->nextPageUrl())
    <a href="{{ $data->nextPageUrl() }}" class="btn btn-primary float-right">Next</a>
@endif

@else
<div class="container">
    <form action="" method="get">
  <button class="btn btn-dark" name="start"><i class="bi bi-caret-right-fill"></i>&nbsp;Mulai Antrian</button>
</form>
  <br>
  <h4 align="center">Data Antrean</h4>
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Catatan Penguna</th>
      </tr>
    </thead>
    <tbody>
        @php
            $num =1;
        @endphp
        @foreach ($data as $d )
            
      <tr>
        <th>{{$num++}}</th>
        <td>{{$d->nama}}</td>
        <td>{{$d->alamat}}</td>
        <td>{{$d->catatan}}</td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endif

@endsection
