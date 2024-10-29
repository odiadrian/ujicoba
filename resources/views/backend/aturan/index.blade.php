@extends('backend.app')
@section('title','Penyakit')
@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-2">Data Aturan</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('penyakit')}}" class="text-muted">Applications</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Data Aturan</li>
                    </ol>                   
                </nav>
            </div>
        </div>
        <div class="col-6 align-self-center">
            <div class="customize-input float-right">
                <a href="{{ route('tambah_aturan') }}" type="button" class="btn btn-success btn-rounded">
                    <i class="fas fa-plus-circle"></i> Tambah
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- basic table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Aturan</h4>    
                    <div class="table-responsive">                
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">                        
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Penyakit</th>
                                    <th class="text-center">Nama Gejala</th>
                                    <th class="text-center">Bobot Nilai</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $index => $item)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td class="text-center">{{ $item->nama_penyakit }}</td>
                                        <td class="text-center">{{ $item->nama_gejala }}</td>
                                        <td class="text-center">{{ $item->bobot_nilai }}</td>
                                        <td class="text-center">
                                            <!-- Tambahkan aksi yang diperlukan, seperti edit dan delete -->
                                            <a href="{{ route('edit_aturan', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('delete_aturan', $item->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Delete</button>
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
