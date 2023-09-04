<nav class="navbar navbar-expand-lg fixed-top z-3" id="nav">
    <button class="toggle-button rounded mt-100" onclick="toggleSidebar()">
        <i class="bi bi-grid-1x2"></i>
    </button>
    <div class="container-fluid indexz z-3">
        <a class="navbar-brand" href="#">
            <img src="{{asset('asset/icon.jpg')}}" alt="Logo" width="35" height="35" class="d-inline-block align-text-top">
        </a>
        <a class="navbar-brand" href="#">BBPPMPV BMTI</a> <!-- Tambahkan ini -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
              
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
</nav>
<br><br><br>