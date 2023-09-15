@extends('layout.template')
@section('content')
<br><br>
<div class="container ">
    <form action="/data_antrian" method="get">
        @csrf
        <input type="hidden" name="status" value="Dalam Antrian">
      <button type="submit" class="btn btn-dark" >Ambil Nomor Antrian</button>
    </form>
</div>

@endsection