@extends('layout.template')

@section('content')
<br>
@php
$x = intval($_GET['page']);
@endphp
@if ($x == $count)
<div class="container">
  <div class="alert alert-warning alert-dismissible fade show " role="alert">
    Ini Data Antrian Terakhir!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>

@endif
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (count($page) > 0)
  

@foreach($page as $p)

		<tr>
      
      <div class="kotak-bg rounded">
    

			<td>      
        <h3 align="center" class="text-center"><br><br><br><br><br><br><br><br><br>{{$p->nama}}</h3>
      </td>
      <td>
        <p align="center" class="text-center">{{$p->alamat}}</p>
      </td>
			<td>
        <h1 align="center" class="text-centern f-9">{{ $p->type }}{{$p->nomor_antrian}}</h1>
      </td>
			<td>
        <p align="center">{{ $p->catatan }}</p></td>
      </div>
		</tr>
  
    
  
  
  </div>

<script>
  function play() {
    var audio = document.getElementById("audio");
    audio.play();

    setTimeout(function(){
      var audio2 = document.getElementById("audio2");
    audio2.play();
}, 2500);
    
setTimeout(function(){
      var audio3 = document.getElementById("audio3");
    audio3.play();
}, 3000);

setTimeout(function(){
      var audio4 = document.getElementById("audio4");
    audio4.play();
}, 4900);

setTimeout(function(){
      var audio5 = document.getElementById("audio5");
    audio5.play();
}, 6900);
  }
</script>


		@endforeach
	</table>    
	<div class="container">
    <br>

    <form method="POST" action="{{ route('canceled', ['id' => $p->id]) }}">
      
      @csrf
      @method('put')
      <div class="btn btn-sm btn-danger float-end">
          <button class="btn btn-sm btn-danger float-end" type="submit"><i class="bi bi-x"></i> Tolak Antrian</button>
      </div>
  </form>
  
  <form method="POST" action="{{ route('update', ['id' => $p->id]) }}">
      @csrf
      @method('put')
      <div class="btn btn-sm btn-primary float-end m-1 mt-0">
          <button class="btn btn-sm btn-primary float-end  mt-0" type="submit"><i class="bi bi-check-lg"></i> Tandai Selesai</button>
      </div>
  </form>
  {{var_dump($p->id);}}
  <div class="btn float-end m-1 mt-0 p-1">
  <input type="button" class="btn btn-dark float-end  mt-0" value="Panggil Sekarang" onclick="play()">
  <audio id="audio" src="{{ asset('file/audio/antrian.wav') }}"></audio>
  <audio id="audio2" src="{{ asset('file/audio/a.wav') }}"></audio>
 <audio id="audio3" src="{{ asset('file/audio/delapanratus.wav') }}"></audio>
  <audio id="audio4" src="{{ asset('file/audio/delapanpuluh.wav') }}"></audio>
   <audio id="audio5" src="{{ asset('file/audio/delapan.wav') }}"></audio>

  </div>
  </div>
    <div class="page-wrapper">{{ $page->links('vendor.pagination.default') }}</div>
    @else
    <tr>
      
      <div class="kotak-bg rounded">
    

			<td>      
        <h3 align="center" class="text-center"><br><br><br><br><br><br><br><br><br></h3>
      </td>
      <td>
        <p align="center" class="text-center"></p>
      </td>
			<td>
        <h1 align="center" class="text-centern f-9">Antrian Kosong</h1>
      </td>
			<td></td>
      </div>
		</tr>
  
    
  
  
  </div>
	
	</table>

 @endif
    @include('component.sidebar')

@endsection