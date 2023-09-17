@extends('layout.template')

@section('content')
@include('component.sidebar')
<div class="container">
    <br><br>
    @if (session()->has('massage'))
    <div class="container-sm">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{ session()->get('massage') }}
     </div>
    </div>
    @endif
    <h1 align="center">Ubah Title Web</h1>
    <form action="/main_title_update" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title Lama</label>
            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="" disabled>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title Baru</label>
            <input type="text" class="form-control" name="main_title" id="exampleFormControlInput1" placeholder="" required>
          </div>
                  <button type="submit" class="btn btn-dark">Ubah</button>  
    </form>
</div>
@endsection