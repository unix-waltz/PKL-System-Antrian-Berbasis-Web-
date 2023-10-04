@extends('layout.template')

@section('content')
<style>
  #lefth{
    float: left;
  }
</style>
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
        <th scope=""><i class="bi bi-bezier fs-5"></i>&nbsp; Option</th>
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
       <td>
        <a href="" id="lefth" class="btn btn-dark btn-sm" name="start"><i class="bi bi-megaphone"></i>&nbsp;Pangil</a>

        <div class="d-flex" id="lefth">
              <a id="navbarDropdown" class="nav-link dropdown-toggle ml-auto" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-dark btn-sm"> <i class="bi bi-caret-right-fill"></i>  status</button>
              </a>
              <div class="dropdown-menu dropdown-menu-" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href=""">
                  bbbbbbbbbbbb
                     </a><a class="dropdown-item" href=""">
                      bbbbbbbbbbbb
                         </a><a class="dropdown-item" href=""">
                          bbbbbbbbbbbb
                             </a>
              </div>
      </div>


       </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@include('component.sidebar')


@endsection
