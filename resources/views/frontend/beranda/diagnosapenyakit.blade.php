@extends('frontend.app')

@section('content')
<body>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body text-center">
            <h3 class="card-title">Sistem Pakar Diagnosa Gigi</h3>
            <h6 class="card-title">Pilih sesuai dengan yang anda alami</h6>
        </div>
        <div class="card-body">
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('diagnosa.store') }}">
                @csrf
                <table class="table table-striped table-bordered no-wrap">
                    <thead class="bg-primary text-white">
                    <tr>                        
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Gejala</th>                                            
                        <th class="text-center">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($Gejala as $gejala)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>                                                
                            <td>{{ $gejala->nama_gejala }}</td>                                                
                            <td class="text-center">
                                <input type="checkbox" name="gejala[]" value="{{ $gejala->id }}">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
               
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" style="margin-right: 5px;">Diagnosa</button>
                    <a href="{{ route('diagnosa') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
@endsection
