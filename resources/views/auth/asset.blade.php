@php
$c = Auth()->user()->role;
if($c != env('ENV_LOGGING_ROLE')){
        return 404;
        }
@endphp

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
    <h1 align="center">Ubah Web</h1>
    <form action="/main_title_update" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <input type="hidden" name="old_img" value="{{$old->favicon}}">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title Lama</label>
            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="{{$old->main_title}}" disabled>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title Baru</label>
            <input type="text" class="form-control" name="main_title" value="{{$old->main_title}}" id="exampleFormControlInput1" placeholder="" >
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">favicon</label>
            <input class="form-control" name="favicon" value="kontol" type="file" id="formFile">
          </div>
                  <button type="submit" class="btn btn-dark">Ubah</button>  
    </form>
</div>
@endsection