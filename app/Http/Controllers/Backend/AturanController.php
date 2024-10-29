<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class AturanController extends Controller
{
    public function index()
{
    $data = FacadesDB::table('penyakitdiagnosa')
    ->join('penyakit', 'penyakitdiagnosa.id_penyakit', '=', 'penyakit.id')
    ->join('gejala', 'penyakitdiagnosa.id_gejala', '=', 'gejala.id')
    ->select('penyakitdiagnosa.id', 'penyakit.nama_penyakit', 'gejala.nama_gejala', 'penyakitdiagnosa.bobot_nilai', 'penyakitdiagnosa.created_at', 'penyakitdiagnosa.updated_at')
    ->get();

return view('backend.aturan.index', compact('data'));
}
    public function create()
{
    $gejala = FacadesDB::table('gejala')->get(); // Pastikan nama kolom di sini benar
    $penyakit = FacadesDB::table('penyakit')->get(); // Pastikan nama kolom di sini benar
    return view('backend.aturan.create', compact('gejala', 'penyakit'));
}

    

public function store(Request $request)
{
    // Validasi input dari form
    $request->validate([
        'id_penyakit' => 'required|integer|exists:penyakit,id',
        'bobot_nilai' => 'required|numeric', // Pastikan bobot_nilai adalah angka
        'gejala' => 'required|array', // Validasi untuk memastikan bahwa 'gejala' adalah array
        'gejala.*' => 'integer|exists:gejala,id', // Pastikan setiap id gejala ada di tabel gejala
    ]);

    // Mulai transaksi
    FacadesDB::beginTransaction();

    try {
        // Simpan relasi penyakit dengan gejala
        foreach ($request->gejala as $gejalaId) {
            FacadesDB::table('penyakitdiagnosa')->insert([
                'id_penyakit' => $request->id_penyakit,
                'id_gejala' => $gejalaId,
                'bobot_nilai' => $request->bobot_nilai,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Commit transaksi
        FacadesDB::commit();

        // Redirect dengan pesan sukses
        return redirect()->route('aturan')->with('message', 'Data aturan berhasil disimpan');

    } catch (\Exception $e) {
        // Rollback transaksi jika terjadi kesalahan
        FacadesDB::rollback();

        // Log error untuk debugging
        \Log::error('Terjadi kesalahan saat menyimpan data aturan: ' . $e->getMessage());

        // Redirect dengan pesan error
        return redirect()->route('aturan')->with('error', 'Terjadi kesalahan saat menyimpan data aturan');
    }
}





public function edit($id)
{
    $aturan = FacadesDB::table('penyakitdiagnosa')->where('id', $id)->first();
    $penyakit = FacadesDB::table('penyakit')->get();
    $gejala = FacadesDB::table('gejala')->get();

    if (!$aturan) {
        return redirect()->route('aturan')->with('error', 'Aturan tidak ditemukan');
    }

    return view('backend.aturan.edit', compact('aturan', 'penyakit', 'gejala'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'id_penyakit' => 'required|exists:penyakit,id',
        'id_gejala' => 'required|exists:gejala,id',
        'bobot_nilai' => 'required|numeric',
    ]);

    $aturan = FacadesDB::table('penyakitdiagnosa')->where('id', $id)->first();

    if (!$aturan) {
        return redirect()->route('aturan')->with('error', 'Aturan tidak ditemukan');
    }

    FacadesDB::table('penyakitdiagnosa')
        ->where('id', $id)
        ->update([
            'id_penyakit' => $request->id_penyakit,
            'id_gejala' => $request->id_gejala,
            'bobot_nilai' => $request->bobot_nilai,
            'updated_at' => now(),
        ]);

    return redirect()->route('aturan')->with('success', 'Aturan berhasil diperbarui');
}

}
