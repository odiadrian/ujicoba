@extends('backend.app')
@section('title','Gejala')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Gejala</h4>
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
                        <form method="POST" action="{{ route('store_gejala') }}" enctype="multipart/form-data">
                            @csrf

                            <div class=" form-group">
                                <label for="kode_gejala">Kode Gejala</label>
                                <input type="text" class="form-control" value="" id="kode_gejala" name="kode_gejala" placeholder="Kode Gejala">
                            </div>
                            <!-- <div class=" form-group">
                                <label for="id_penyakit">Penyakit</label>
                                <select class="form-control" id="id_penyakit" name="id_penyakit">
                                <option value="" disabled selected>Pilih Penyakit</option>
                                    @foreach($penyakit as $sakit)
                                        <option value="{{$sakit->id}}"{{ old('id_penyakit') == $sakit->id ? 'selected' : '' }}>{{$sakit->nama_penyakit  }}</option>
                                    @endforeach
                                </select>
                            </div> -->
                            <div class="form-group">
                                <label for="nama_gejala">Nama Gejala</label>
                                <input type="text" class="form-control" id="nama_gejala" name="nama_gejala" placeholder="Nama Gejala">
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
