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
  <button class="btn-dark btn" onclick="window.location.reload()"><i class="bi bi-arrow-clockwise"></i>&nbsp; Reload</button>
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
     
        @foreach ($data as $d )
        
        @php
       
        
        $a = App\Http\Controllers\TaskController::pecahAngka($d->nomor_antrian);
        if($a['ratusan'] == 0 && $a['puluhan'] == 0){
          $a1=$a['satuan'];
          $a2 = "";
          $a3 = "";
        }else if($a['ratusan'] == 0){
          $a1 = $a['puluhan'];
          $a2 = ['satuan'];
          $a3 = '';
        }else{
        $a1 =$a['ratusan'];
        $a2 = $a['puluhan'];
        $a3 = $a['satuan'];
      }
     
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
        <script>
          
          function play(n) {
              var audio = document.getElementById(`audio`);
              audio.play();

              setTimeout(function() {
                  var audio2 = document.getElementById(`audio2`);
                  audio2.play();
              }, 2500);

              setTimeout(function() {
                  var audio3 = document.getElementById(`${n}audio3`);
                  audio3.play();
              }, 3000);

              setTimeout(function() {
                  var audio4 = document.getElementById(`${n}audio4`);
                  audio4.play();
              }, 4900);

              setTimeout(function() {
                  var audio5 = document.getElementById(`${n}audio5`);
                  audio5.play();
              }, 6900);
          }
      </script>
     
        <button  id="lefth" class="btn btn-dark btn-sm" onclick="play({{(int)$d->nomor_antrian}})" name="start"><i class="bi bi-megaphone" "></i>&nbsp;Pangil </button>
     
         <audio id="audio" src="{{ asset('file/audio/antrian.wav') }}"></audio>
      <audio id="audio2" src="{{ asset("file/audio/".$d->type.".wav") }}"></audio>
      <audio id="{{$d->nomor_antrian}}audio3" src="{{ asset("file/audio/".$a1.".wav") }}"></audio>
      <audio id="{{$d->nomor_antrian}}audio4" src="{{ asset("file/audio/".$a2.".wav") }}"></audio>
      <audio id="{{$d->nomor_antrian}}audio5" src="{{ asset("file/audio/".$a3.".wav") }}"></audio>

    
        <div class="d-flex" id="lefth">
              <a id="navbarDropdown" class="nav-link dropdown-toggle ml-auto" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-dark btn-sm"> <i class="bi bi-caret-right-fill"></i>  status</button>
              </a>
              <div class="dropdown-menu dropdown-menu-" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/m/update/{{$d->type}}/{{$d->id}}">
                  Terima Antrian
                     </a><a class="dropdown-item" href="/m/cancel/{{$d->type}}/{{$d->id}}">
                     Tolak ANtrian
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
