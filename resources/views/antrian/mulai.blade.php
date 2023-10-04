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
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (count($page) > 0)
        @foreach ($page as $p)
        @php
          $a = App\Http\Controllers\TaskController::pecahAngka($p->nomor_antrian);
        
          if($a['ratusan'] == 0 && $a['puluhan'] == 0){
            $a1=$a['satuan'];
            $a2 = "";
            $a3 = "";
          }else if($a['ratusan'] == 0){
            $a1 = $a['puluhan'];
            $a2 = $a['satuan'];
            $a3 = '';
          }else{
          $a1 =$a['ratusan'];
          $a2 = $a['puluhan'];
          $a3 = $a['satuan'];
        }
        @endphp
        
            <tr>

                <div class="kotak-bg rounded">


                    <td>
                        <h3 align="center" class="text-center"><br><br><br><br><br><br><br><br><br>{{ $p->nama }}</h3>
                    </td>
                    <td>
                        <p align="center" class="text-center">{{ $p->alamat }}</p>
                    </td>
                    <td>
                        <h1 align="center" class="text-centern f-9">{{ $p->type }}{{ $p->nomor_antrian }}</h1>
                    </td>
                    <td>
                        <p align="center">{{ $p->catatan }}</p>
                    </td>
                </div>
            </tr>




            </div>

            <script>
                function play() {
                    var audio = document.getElementById("audio");
                    audio.play();

                    setTimeout(function() {
                        var audio2 = document.getElementById("audio2");
                        audio2.play();
                    }, 2500);

                    setTimeout(function() {
                        var audio3 = document.getElementById("audio3");
                        audio3.play();
                    }, 3000);

                    setTimeout(function() {
                        var audio4 = document.getElementById("audio4");
                        audio4.play();
                    }, 4900);

                    setTimeout(function() {
                        var audio5 = document.getElementById("audio5");
                        audio5.play();
                    }, 6900);
                }
            </script>
        @endforeach
        </table>
        <div class="container">
            <br>

           
            <div class="btn btn-sm btn-danger float-end">
                <a href=" /cancel/{{$p->type}}/{{$p->id}}" class="btn btn-sm btn-danger float-end" type="submit"><i class="bi bi-x"></i> Tolak
                    Antrian</a>
            </div>
            

            <div class="btn btn-sm btn-primary float-end">
                <a href="/update/{{$p->type}}/{{$p->id}} " class="btn btn-sm btn-primary float-end" type="submit"><i class="bi bi-x"></i> Terima
                    Antrian</a>
            </div>
            <div class="btn float-end m-1 mt-0 p-1">
                <input type="button" class="btn btn-dark float-end  mt-0" value="Panggil Sekarang" onclick="play()">
                <audio id="audio" src="{{ asset('file/audio/antrian.wav') }}"></audio>
                <audio id="audio2" src="{{ asset("file/audio/".$p->type.".wav") }}"></audio>
                <audio id="audio3" src="{{ asset("file/audio/".$a1.".wav") }}"></audio>
                <audio id="audio4" src="{{ asset("file/audio/".$a2.".wav") }}"></audio>
                <audio id="audio5" src="{{ asset("file/audio/".$a3.".wav") }}"></audio>

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
