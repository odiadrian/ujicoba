<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use App\Models\Gejala;

use App\Models\PasienDiagnosis;
use App\Models\PenyakitDiagnosa; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;

class DiagnosaPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Gejala = FacadesDB::table('gejala')->select('gejala.*')
        ->get();
        
        return view ('frontend.beranda.diagnosapenyakit', compact('Gejala'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
{
     // Cek apakah pengguna sudah login
     if (!auth()->check()) {
        return redirect()->route('home')->with('error', 'Anda harus login untuk melakukan diagnosa.');
    }
    $gejalaInput = $request->input('gejala'); // Array of gejala IDs

    // Fetch all penyakit and their gejala with weights
    $penyakitList = Penyakit::with('gejala')->get();
    $result = [];

    foreach ($penyakitList as $penyakit) {
        $likelihood = 1;

        foreach ($gejalaInput as $gejalaId) {
            $gejala = $penyakit->gejala->firstWhere('id', $gejalaId);

            if ($gejala) {
                // Check if bobot_nilai exists and is numeric
                $bobotNilai = $gejala->pivot->bobot_nilai ?? 0;
                $likelihood *= is_numeric($bobotNilai) ? $bobotNilai : 0.01;
            } else {
                // Jika gejala tidak ditemukan pada penyakit ini, kita anggap bobot rendah
                $likelihood *= 0.01; // Asumsi bobot rendah
            }
        }

        $result[$penyakit->nama_penyakit] = [
            'probabilitas' => $likelihood,
            'cara_penanganan' => $penyakit->cara_penanganan,
        ];
    }

    // Normalisasi hasil
    $totalLikelihood = array_sum(array_column($result, 'probabilitas'));
    if ($totalLikelihood > 0) {
        foreach ($result as $key => $value) {
            $result[$key]['probabilitas'] = $value['probabilitas'] / $totalLikelihood;
        }
    }

    // Temukan penyakit dengan probabilitas tertinggi
    $highestProbability = max(array_column($result, 'probabilitas'));
    $topDiagnosis = array_filter($result, function($value) use ($highestProbability) {
        return $value['probabilitas'] === $highestProbability;
    });

    // Simpan hasil perhitungan ke tabel hasil_diagnosa
    FacadesDB::table('hasil_diagnosa')->insert([
        'user_id' => Auth::id(), // Ambil ID pengguna yang sedang login
        'gejala_dipilih' => json_encode($gejalaInput), // Simpan gejala yang dipilih
        'hasil_perhitungan' => json_encode($result),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    
    // Ambil data gejala yang dipilih
    $gejalaData = FacadesDB::table('gejala')
        ->whereIn('id', $gejalaInput)
        ->get();
        

    return view('frontend.beranda.diagnosis.result', [
        'diagnosis' => 'Hasil Diagnosis',
        'gejala_data' => $gejalaData,
        'probabilitas' => $result,
        'top_diagnosis' => $topDiagnosis,
    ]);
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
