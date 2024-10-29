@extends('frontend.app')
@section('style')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
@section('content')
<body>
        @if(Session::has('sukses'))
        <div class="alert alert-success alert-dismissible" style="position: fixed; top: 100px; right: 10px; z-index: 1030;">
            <h5>
                <i class="icon fas fa-check"></i> Berhasil!
            </h5>
            {{ Session('sukses')}}
        </div>
        @endif 

        @if(Session::has('pesan'))
        <div class="alert alert-success alert-dismissible" style="position: fixed; top: 100px; right: 10px; z-index: 1030;">
            <h5>
                <i class="icon fas fa-check"></i> Berhasil!
            </h5>
            {{ Session('pesan')}}
        </div>
        @endif

        @if(Session::has('message'))
        <div class="alert alert-danger alert-dismissible" style="position: fixed; top: 100px; right: 10px; z-index: 1030;">
            <h5>
                <i class="icon fas fa-check"></i> Gagal!
            </h5>
            {{ Session('message')}}
        </div>
        @endif   

        @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible" style="position: fixed; top: 100px; right: 10px; z-index: 1030;">
            <h5>
                <i class="icon fas fa-check"></i> Gagal!
            </h5>
            {{ Session('error')}}
        </div>
        @endif   
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container"> 
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-5 pt-2 mb-5">                        
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="" src="assets/images/gigi2.png" width="470" height="400">
                        </div>                        
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="margin-bottom: 100px;">
                    <p class="section-title bg-white text-start text-primary pe-3">SiPaDiGi</p>
                    <h1 class="mb-4">Selamat Datang Di Aplikasi SiPaDiGi</h1>
                    <p class="mb-4">SiPaDiGi merupakan sistem pakar untuk mendiagnosa penyakit gigi berbasis Web</p>
                    <p class="mb-4">SiPaDiGi bertujuan untuk memberikan informasi kepada masyarakat luas apa saja 
                        penyakit gigi serta langkah apa saja yang harus dilakukan jika ada yang mengalami penyakit tersebut</p>
                    
                        @if(!auth()->check())
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Daftar
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLogin">
                            Login
                        </button>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLogin" tabindex="-1" aria-labelledby="exampleModalLabelLogin" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <h4 id="exampleModalLabelLogin">Silahkan Login</h4>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        <!-- <p class="text-center">Login</p> -->
                        <p><strong>Masukkan Email dan Password Anda untuk mengakses panel Diagnosa</strong></p>
                    </div>                   
                    <form method="post" action="{{route ('frontend.login')}}" class="pl-2 pr-2">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">Email </label>
                            <input class="form-control" type="email" name="email" id="email"
                                required="" placeholder="Masukan Email Anda">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password1">Password</label>
                            <input class="form-control" type="password" name="password" required=""
                                id="password1" placeholder="Masukan Password Anda">
                        </div>
                        <div class="modal-footer">                           
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-rounded btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <h4 id="exampleModalLabel">Silahkan Register</h4>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        <!-- <p class="text-center">Login</p> -->
                        <p><strong>Masukkan Nama, Umur, Alamat, Email dan Password Anda</strong></p>
                    </div>                   
                    <form method="post" action="{{route ('frontend.register')}}" class="pl-2 pr-2">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Nama </label>
                            <input class="form-control" type="name" name="name" id="name"
                                required="" placeholder="Masukan Nama Anda">
                        </div>
                        <div class="form-group mb-3">
                            <label for="umur">Umur</label>
                            <input class="form-control" type="number" name="umur" id="umur" placeholder="Masukkan Umur Anda" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat">Alamat</label>
                            <input class="form-control" type="text" name="alamat" required=""
                                id="alamat" placeholder="Masukan Alamat Anda">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email </label>
                            <input class="form-control" type="email" name="email" id="email"
                                required="" placeholder="Masukan Email Anda">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password1">Password</label>
                            <input class="form-control" type="password" name="password" required=""
                                id="password1" placeholder="Masukan Password Anda">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-rounded btn-primary" type="submit">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>

@endsection

    
