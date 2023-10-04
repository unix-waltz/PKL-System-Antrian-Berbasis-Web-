@php
$c = Auth()->user()->role;
    $r = App\Http\Controllers\Helper::AdminDisplay($c);
@endphp
<button class="toggle-button rounded mt-100" onclick="toggleSidebar()">
    <i class="bi bi-grid-1x2"></i>
</button>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 sidebar" id="sidebar">
            <br><br>    
            <div class="list-group">
                <div class="list-group text-left">
                    <a href="/home" class="text-left"> <i class="bi bi-layout-split"></i>&nbsp;Home</a>
                    <a style="{{$r}}" href="/pendaftaran-Admin" class="text-left"> <i class="bi bi-layout-split"></i>&nbsp;Tambah Admin/Petugas</a>
                    <a style="{{$r}}" href="/main-title" class="text-left"> <i class="bi bi-layout-split"></i>&nbsp;Ubah Website</a>
                    <a style="{{$r}}" href="/pengaturan-layanan" class="text-left"> <i class="bi bi-layout-split"></i>&nbsp;Layanan</a>
                </div>
            </div>
        </div>
        
    </div>
</div>

