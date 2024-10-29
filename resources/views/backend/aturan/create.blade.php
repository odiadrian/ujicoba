@extends('backend.app')
@section('title','Tambah Aturan Penyakit')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Aturan</h4>
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
                        <form method="POST" action="{{ route('store_aturan') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="id_penyakit">Nama Penyakit</label>
                                <select class="form-control" id="id_penyakit" name="id_penyakit">
                                    <option value="" disabled selected>Pilih Penyakit</option>
                                    @foreach($penyakit as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_penyakit }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Gejala</label>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Gejala</th>
                                            <th>Pilih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($gejala as $item)
                                        <tr>
                                            <td>{{ $item->nama_gejala }}</td>
                                            <td class="text-center">
                                                <input type="checkbox" name="gejala[]" value="{{ $item->id }}">
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group">
                                <label for="bobot_nilai">Bobot Nilai</label>
                                <input type="text" class="form-control" id="bobot_nilai" name="bobot_nilai" placeholder="Bobot Nilai" value="{{ old('bobot_nilai') }}">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('aturan') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
