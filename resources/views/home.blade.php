@extends('layouts.app')

@section('content')
@if (isset($_GET['start']))


@foreach($page as $p)
		<tr>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->alamat }}</td>
			<td>{{ $p->catatan }}</td>
			<td>{{ $p->type }}{{$p->nomor_antrian}}</td>
		</tr>
		@endforeach
	</table>
 
	<br/>
	Halaman : {{ $page->currentPage() }} <br/>
	Jumlah Data : {{ $page->total() }} <br/>
	Data Per Halaman : {{ $page->perPage() }} <br/>
 
 
	{{ $page->links() }}
@else
<div class="container">
    <form action="" method="get">
  <button class="btn btn-dark" name="start"><i class="bi bi-caret-right-fill"></i>&nbsp;Mulai Antrian</button>
</form>
  <br>
  <h4 align="center">Data Antrean</h4>
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Catatan Penguna</th>
      </tr>
    </thead>
    <tbody>
        @php
            $num =1;
        @endphp
        @foreach ($data as $d )
            
      <tr>
        <th>{{$num++}}</th>
        <td>{{$d->nama}}</td>
        <td>{{$d->alamat}}</td>
        <td>{{$d->catatan}}</td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endif

@endsection
