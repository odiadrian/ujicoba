@extends('backend.app')
@section('title','Gejala')
@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-2">Data Gejala</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('gejala')}}" class="text-muted">Applications</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Data Gejala</li>
                    </ol>                   
                </nav>
            </div>
        </div>
        <div class="col-6 align-self-center">
            <div class="customize-input float-right">
                <a href="{{route ('tambah_gejala')}}" type="button" class="btn btn-success btn-rounded">
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
                    <h4 class="card-title">Daftar Gejala</h4>
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Kode Gejala</th>
                                  
                                    <th class="text-center">Nama Gejala</th> 
                                    <th class="text-center">Aksi</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($Gejala as $gejala)
                                <tr>
                                    <!-- <th scope="row">{{ $loop->iteration }}</th> -->
                                    <td>{{ $Gejala->firstItem() + $loop->index }}</td>
                                    <td>{{ $gejala->kode_gejala }}</td>
                                                                   
                                    <td>{{ $gejala->nama_gejala }}</td>
                                    <td>
                                        
                                        <a href="{{ route('edit_gejala', $gejala->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ route('delete_gejala', $gejala->id) }}"
                                            onclick="return confirm('Apa kamu yakin')" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="13" class="text-center">
                                        Tidak Ada Penyakit
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $Gejala->links() }}   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection