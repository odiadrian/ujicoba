@extends('backend.app')
@section('title', 'Konsultasi')
@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-2">Data Riwayat Diagnosa</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('riwayat') }}" class="text-muted">Applications</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Data Riwayat Diagnosa</li>
                    </ol>                   
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Riwayat Diagnosa</h4>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Pasien</th>
                                    <th class="text-center">Hasil Diagnosa</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($riwayatDiagnosa as $index => $diagnosa)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td class="text-center">{{ $diagnosa['nama_pasien'] }}</td>
                                        <td class="text-center">
                                            {{ $diagnosa['highest_diagnosis'] }}
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('riwayat.cetak', $diagnosa['hasil_id']) }}" class="btn btn-info">Cetak</a>
                                            <form action="{{ route('riwayat.hapus', $diagnosa['hasil_id']) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
