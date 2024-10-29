@extends('backend.app')
@section('title','Penyakit')
@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-2">Data Penyakit</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('penyakit')}}" class="text-muted">Applications</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Data Penyakit</li>
                    </ol>                   
                </nav>
            </div>
        </div>
        <div class="col-6 align-self-center">
            <div class="customize-input float-right">
                <a href="{{route ('tambah_penyakit')}}" type="button" class="btn btn-success btn-rounded">
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
                    <h4 class="card-title">Daftar Penyakit</h4>    
                    <div class="table-responsive">                
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">                        
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Kode Penyakit</th>
                                    <th class="text-center">Nama Penyakit</th>
                                    <th class="text-center">Cara Penanganannya</th>
                                    <!-- <th class="text-center">Gambar</th> -->
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($Penyakit as $penyakit)
                                <tr>
                                    <!-- <th scope="row">{{ $loop->iteration }}</th> -->
                                    <td class="text-center" >{{ $Penyakit->firstItem() + $loop->index }}</td>                                    
                                    <td>{{ $penyakit->kode_penyakit }}</td>
                                    <td>{{ $penyakit->nama_penyakit }}</td>
                                    <td>{{ $penyakit->cara_penanganan }}</td>
                                    <!-- <td>{{ $penyakit->image }}</td> -->
                                    <td>
                                        
                                        <a href="{{ route('edit_penyakit', $penyakit->id) }}" 
                                        class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ route('delete_penyakit', $penyakit->id) }}"
                                            onclick="return confirm('Apa kamu yakin')" 
                                            class="btn btn-sm btn-danger">Hapus</a>
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
                        </div>
                        {{ $Penyakit->links() }}   
                    </div>                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection