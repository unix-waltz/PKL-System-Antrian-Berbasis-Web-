@extends('layout.template')

@section('content')

<br><br><br><br>

<div class="container">

  <a href="/nomor/antrian/{{$type}}/start?page=" class="btn btn-dark" name="start"><i class="bi bi-caret-right-fill"></i>&nbsp;Mulai Antrian</a>

  <br>
  <h4 align="center">Data Antrean</h4>
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Nomer Antrian</th>
        <th scope="col">Loket</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
        @php
            $num =1;
        @endphp
        @foreach ($data as $d )
            @php
              switch ($d->status){
                case "Antrian Ditolak" :
                $col = 'danger';
                break;
                case "Selesai Mengantri" :
                $col = 'success';
                break;
                default :
                $col = 'secondary';

              }
            @endphp
      <tr>
        <th>{{$d->nomor_antrian}}</th>
        <td>{{$d->type}}</td>
        <td>
          <span class="badge text-bg-{{$col}}">{{$d->status}}</span>
         </td>
       
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@include('component.sidebar')


@endsection
