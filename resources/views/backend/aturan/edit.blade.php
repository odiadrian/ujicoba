@extends('backend.app')
@section('title', 'Edit Aturan')
@section('content')



<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Aturan</h4>
                    <form method="POST" action="{{ route('aturan.update', $aturan->id) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="id_penyakit">Nama Penyakit</label>
                            <select id="id_penyakit" name="id_penyakit" class="form-control">
                                @foreach($penyakit as $item)
                                    <option value="{{ $item->id }}" {{ $aturan->id_penyakit == $item->id ? 'selected' : '' }}>{{ $item->nama_penyakit }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="id_gejala">Nama Gejala</label>
                            <select id="id_gejala" name="id_gejala" class="form-control">
                                @foreach($gejala as $item)
                                    <option value="{{ $item->id }}" {{ $aturan->id_gejala == $item->id ? 'selected' : '' }}>{{ $item->nama_gejala }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="bobot_nilai">Bobot Nilai</label>
                            <input type="text" id="bobot_nilai" name="bobot_nilai" class="form-control" value="{{ $aturan->bobot_nilai }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('aturan') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
