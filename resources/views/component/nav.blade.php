<nav class="navbar navbar-expand-lg fixed-top z-3" id="nav">
    
    <div class="container-fluid indexz z-3">
        <a class="navbar-brand" href="#">
            <img src="{{asset('asset/icon.jpg')}}" alt="Logo" width="35" height="35" class="d-inline-block align-text-top">
        </a>
        <a class="navbar-brand" href="#">BBPPMPV BMTI</a> <!-- Tambahkan ini -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    @guest
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                    @else
                      <a class="nav-link" aria-current="page" href="/home">Home</a> 
                    @endguest
                   
                    
                </li>
                <li class="nav-item">
                    @guest
                      <a class="nav-link" href="/about">Tentang Kami</a>  
                    @endguest
                    
                </li>
                <li class="nav-item dropdown">
                    @guest
                       @else 
                    
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    @endguest
                </li>
              
            </ul>
            <div class="d-flex">
                
                @guest
            
                @else
                    <a id="navbarDropdown" class="nav-link dropdown-toggle ml-auto" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
            
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                   
                @endguest
            </div>
       
        </div>
     
    </div>
</nav>
<br><br><br>