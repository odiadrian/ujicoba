@extends('frontend.app')
@section('content')

<body>
@if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" style="position: fixed; top: 100px; right: 10px; z-index: 1030;">
            <h5>
                <i class="icon fas fa-check"></i> Sukses!
            </h5>
            {{ Session('message')}}
        </div>
        @endif
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end" >                
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="container-fluid">
                        <div class="row justify-content-center g-5 pt-2 mb-5">
                            <div class="col-sm-11 ">
                                <img class="img-fluid mb-4" src="assets/images/bg-gigi2.png">
                            </div>
                        </div>
                    </div> 
                </div>      
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">              
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-12">
                            <img class="img-fluid mb-4" width="150" height="150" src="assets/service.png" >                            
                            <h5 class="mb-3">Diagnosa</h5>
                            <p> Selamat Datang </p>
                            <p> Disini anda akan melakukan diagnosa untuk mengetahui penyakit apa yang anda derita 
                            <br>Anda dapat memilih gejala-gejala yang sudah disediakan sesuai gejala yang anda alami </p>
                            <a class="btn btn-primary" 
                            href="{{ route('diagnosa.penyakit')}}">Mulai Diagnosa</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- About End -->
                
</body>
@endsection