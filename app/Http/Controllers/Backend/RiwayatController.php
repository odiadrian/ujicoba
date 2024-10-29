<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Penyakit;
use App\Models\Gejala;
use App\Models\User;
use App\Models\HasilDiagnosa;
use App\Models\PenyakitDiagnosa; 
use Barryvdh\DomPDF\Facade\Pdf;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  
     public function index()
     {
         // Mengambil data dari tabel hasil_diagnosa dan mengaitkannya dengan user
         $riwayatDiagnosa = HasilDiagnosa::with('user') // Asumsi relasi sudah didefinisikan di model HasilDiagnosa
             ->get()
             ->map(function ($diagnosa) {
                 // Mengambil hasil_perhitungan dari JSON dan menemukan penyakit dengan probabilitas tertinggi
                 $results = json_decode($diagnosa->hasil_perhitungan, true);
     
                 // Menentukan penyakit dengan probabilitas tertinggi
                 $highestDiagnosis = collect($results)
                     ->map(function ($value, $key) {
                         return [
                             'nama_penyakit' => $key,
                             'probabilitas' => $value['probabilitas'],
                             'cara_penanganan' => $value['cara_penanganan']
                         ];
                     })
                     ->sortByDesc('probabilitas')
                     ->first();
     
                 return [
                     'hasil_id' => $diagnosa->id,
                     'nama_pasien' => $diagnosa->user->name,
                     'highest_diagnosis' => $highestDiagnosis ? $highestDiagnosis['nama_penyakit'] : 'Tidak Diketahui', // Nama penyakit
                     'probabilitas' => $highestDiagnosis ? $highestDiagnosis['probabilitas'] : null, // Probabilitas tertinggi
                     'cara_penanganan' => $highestDiagnosis ? $highestDiagnosis['cara_penanganan'] : null, // Cara penanganan
                 ];
             });
     
         return view('backend.riwayat.index', ['riwayatDiagnosa' => $riwayatDiagnosa]);
     }
     
     
    

     public function cetak($id)
    {
        // Mengambil data dari tabel hasil_diagnosa berdasarkan ID
        $diagnosa = HasilDiagnosa::with('user')->findOrFail($id);

        // Mengambil hasil_perhitungan dari JSON
        $results = json_decode($diagnosa->hasil_perhitungan, true);

        // Menentukan penyakit dengan probabilitas tertinggi
        $highestDiagnosis = collect($results)
            ->map(function($value, $key) {
                return [
                    'nama_penyakit' => $key,
                    'probabilitas' => $value['probabilitas'],
                    'cara_penanganan' => $value['cara_penanganan']
                ];
            })
            ->sortByDesc('probabilitas')
            ->first();

        // Menyiapkan data untuk ditampilkan di PDF
        $data = [
            'no_diagnosa' => $diagnosa->id,
            'nama_pasien' => $diagnosa->user->name,
            'umur' => $diagnosa->user->umur,
            'alamat' => $diagnosa->user->alamat,
            'tanggal_pemeriksaan' => $diagnosa->created_at->format('d M Y'),
            'gejala' => $this->getGejala($diagnosa->gejala_dipilih),
            'highest_diagnosis' => $highestDiagnosis,
        ];

        // Menggunakan Blade untuk membuat PDF
        $pdf = Pdf::loadView('backend.riwayat.cetak', $data);

        return $pdf->download('laporan_hasil_diagnosa.pdf');
    }

    private function getGejala($gejalaDipilih)
    {
        // Mengambil gejala berdasarkan ID
        $gejalaIds = json_decode($gejalaDipilih, true);
        return \App\Models\Gejala::whereIn('id', $gejalaIds)
            ->get()
            ->map(function ($gejala) {
                return [
                    'no' => $gejala->id,
                    'gejala' => $gejala->nama_gejala,
                ];
            });
    }


     public function hapus($id)
     {
         $hasil = HasilDiagnosa::find($id);
 
         if ($hasil) {
             $hasil->delete();
             return redirect()->route('riwayat')->with('success', 'Data berhasil dihapus.');
         } else {
             return redirect()->route('riwayat')->with('error', 'Data tidak ditemukan.');
         }
     }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
