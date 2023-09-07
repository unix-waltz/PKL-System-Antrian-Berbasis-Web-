@extends('layouts.app')

@section('content')
<br><br><br>


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
			<td>{{ $p->catatan }}</td>
      </div>
		</tr>
  
    
  
  
  </div>
		@endforeach
	</table>
	
    <div class="page-wrapper">{{ $page->links('vendor.pagination.default') }}</div>
 

@endsection