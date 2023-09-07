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

		@endforeach
	</table>    
	<div class="container">
    <br><div class="btn btn-sm btn-danger float-end"><i class="bi bi-x"></i>Tolak Antrian</div> 
    <div class="btn btn-sm btn-success float-end m-1 mt-0"><i class="bi bi-check-lg"></i>Terima Antrian</div> 
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