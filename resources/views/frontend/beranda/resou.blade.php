@extends('frontend.app')

@section('content')
<body>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body text-center">
            <h3 class="card-title">Hasil Diagnosa</h3>
        </div>
        <div class="card-body">
            <div class="alert alert-success">
                <h4>Diagnosis: {{ $diagnosis }}</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered no-wrap">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="text-center">Penyakit</th>
                            <th class="text-center">Probabilitas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($probabilitas as $penyakit => $nilai)
                        <tr>
                            <td>{{ $penyakit }}</td>
                            <td class="text-center">{{ number_format($nilai * 100, 2) }}%</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('diagnosa.create') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
