@extends('backend.app')
@section('title', 'Penyakit')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Penyakit</h4>
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
                        <form method="POST" action="{{ route('store_penyakit') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="kode_penyakit">Kode Penyakit</label>
                                <input type="text" class="form-control" id="kode_penyakit" name="kode_penyakit" placeholder="Kode Penyakit" value="{{ old('kode_penyakit') }}">
                            </div>
                            <div class="form-group">
                                <label for="nama_penyakit">Nama Penyakit</label>
                                <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit" placeholder="Nama Penyakit" value="{{ old('nama_penyakit') }}">
                            </div>
                            <!-- <div class="form-group">
                                <label>Gejala</label>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Gejala</th>
                                            <th>Pilih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($gejala as $gejala)
                                        <tr>
                                            <td>{{ $gejala->nama_gejala }}</td>
                                            <td class="text-center">
                                                <input type="checkbox" name="gejala[]" value="{{ $gejala->id }}">
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> -->
                            <div class="form-group">
                                <label for="cara_penanganan">Cara Penanganan</label>
                                <input type="text" class="form-control" id="cara_penanganan" name="cara_penanganan" placeholder="Cara Penanganan" value="{{ old('cara_penanganan') }}">
                            </div>
                            <div class="form-group">
                                <label for="image">Upload Gambar</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('penyakit') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
