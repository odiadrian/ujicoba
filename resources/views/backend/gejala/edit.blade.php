@extends('backend.app')
@section('title','Gejala')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Gejala</h4>
                    <!-- basic table -->
                    <section class="content">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form method="POST" action="{{ route('update_gejala', $Gejala->id) }}" enctype="multipart/form-data">
                            @csrf
                                <div class=" form-group">
                                    <label for="kode_gejala">Kode Gejala</label>
                                    <input type="text" class="form-control" value="{{$Gejala->kode_gejala}}" id="kode_gejala"
                                        name="kode_gejala" placeholder="Kode Gejala">
                                </div>
                                <div class="form-group">
                                    <label for="nama_gejala">Nama Gejala</label>
                                    <input type="text" class="form-control" value="{{$Gejala->nama_gejala}}" id="nama_gejala" name="nama_gejala"
                                        placeholder="Nama Gejala">
                                </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('gejala') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection