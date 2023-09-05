@extends('layout.template')
@section('content')
<br><br>
<div class="container ">
    <form action="/data_antrian" method="get">
        @csrf

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Exs: Rafly Radja" required name="nama">
      </div> 
         <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Alamat :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Exs: BentarGirang" required name="alamat">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Catatan :</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="(Opsional)" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-dark" >Submit</button>
    </form>
</div>

@endsection