@extends('frontend.app')

@section('content')
<body>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body text-center">
            <h3 class="card-title">Hasil Diagnosa</h3>
        </div>
        <div class="card-body">
            @if(!empty($probabilitas))
                @php
                    // Menentukan probabilitas tertinggi
                    $highestProbability = max(array_column($probabilitas, 'probabilitas'));
                @endphp
                <div class="alert alert-success">
                    <h4>Hasil Diagnosis Tertinggi: </h4><br>
                    @foreach($probabilitas as $penyakit => $data)
                        @if($data['probabilitas'] == $highestProbability)
                            <div class="result-item">
                                <h5>{{ $penyakit }}</h5>
                                <p><strong>Probabilitas:</strong> {{ number_format($data['probabilitas'] * 100, 2) }}%</p>
                                <p><strong>Cara Penanganan:</strong> {{ $data['cara_penanganan'] }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Gejala yang Dipilih</h5>
                        <ul class="list-group">
                            @foreach($gejala_data as $gejala)
                                <li class="list-group-item">{{ $gejala->nama_gejala }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div><br>

                <div class="table-responsive mt-4">
                    <h5 class="card-title">Detail Probabilitas Keseluruhan Penyakit</h5>

                    <table class="table table-striped table-bordered no-wrap">
                        <thead class="bg-primary text-white">
                            <tr>
                                
                                <th class="text-center">Penyakit</th>
                                <th class="text-center">Probabilitas</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($probabilitas as $penyakit => $data)
                                <tr @if($data['probabilitas'] == $highestProbability) class="table-success" @endif>
                                    <td>{{ $penyakit }}</td>
                                    <td class="text-center">{{ number_format($data['probabilitas'] * 100, 2) }}%</td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-warning">
                    <p>Tidak ada hasil diagnosa.</p>
                </div>
            @endif

            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('diagnosa') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
