@extends('layout.template')

@section('content')
@include('component.sidebar')
<div class="container">
    <br><br>
    @if (session()->has('message'))
    <div class="container-sm">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session()->get('message') }}
        </div>
    </div>
    @endif
    <h1 align="center">Ubah Nama Layanan</h1>
    <form action="{{ route('pengaturan_layanan') }}" method="post">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="nameA" class="form-label">Loket A</label>
            <input type="text" class="form-control @error('nameA') is-invalid @enderror" name="nameA" value="{{ old('nameA') }}" id="nameA" placeholder="">
            @error('nameA')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nameB" class="form-label">Loket B</label>
            <input type="text" class="form-control @error('nameB') is-invalid @enderror" name="nameB" value="{{ old('nameB') }}" id="nameB" placeholder="">
            @error('nameB')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nameA" class="form-label">Loket C</label>
            <input type="text" class="form-control @error('nameC') is-invalid @enderror" name="nameC" value="{{ old('nameC') }}" id="nameC" placeholder="">
            @error('nameC')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nameB" class="form-label">Loket D</label>
            <input type="text" class="form-control @error('nameD') is-invalid @enderror" name="nameD" value="{{ old('nameD') }}" id="nameD" placeholder="">
            @error('nameD')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
            <div class="mb-3">
            <label for="nameA" class="form-label">Loket E</label>
            <input type="text" class="form-control @error('nameE') is-invalid @enderror" name="nameE" value="{{ old('nameE') }}" id="nameE" placeholder="">
            @error('nameE')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nameB" class="form-label">Loket F</label>
            <input type="text" class="form-control @error('nameF') is-invalid @enderror" name="nameF" value="{{ old('nameF') }}" id="nameF" placeholder="">
            @error('nameF')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <br>
        <button type="submit" class="btn btn-dark">Ubah</button>
    </form>
</div>
@endsection
