<!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5" style="border-bottom: solid 1px #e7e7e7">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">SiPaDiGi</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                <a href="{{ route ('tentang') }}" class="nav-item nav-link">Penyakit Gigi</a>
                <a href="{{ route ('diagnosa') }}" class="nav-item nav-link">Diagnosa</a> 
                <!-- <a href="{{ route ('tentang') }}" class="nav-item nav-link">Tentang Aplikasi</a> -->

                @if(Auth::check())               
                <a href="{{route ('frontend.logout') }}" class="nav-item nav-link"> Logout</a>
                @else
                <!-- <a href="{{route ('frontend.login') }}" class="nav-item nav-link"> Login</a> -->
                @endif
                <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
            </div>
        </div>
    </nav>
<!-- Navbar End -->