<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;


class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Penyakit = FacadesDB::table('penyakit')->select('penyakit.*')
        ->paginate(10);
        
        return view ('backend.penyakit.index', compact('Penyakit'));
    }
    /**
     * Show the form for creating a new resource.
     */
   
        public function create()
        {
            $gejala = FacadesDB::table('gejala')->get(); // Ambil data gejala dari database
            $penyakit = FacadesDB::table('penyakit')->get(); // Ambil data penyakit dari database
            return view('backend.penyakit.create', compact('gejala', 'penyakit')); // Kirim variabel ke view
        }
        
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'kode_penyakit' => 'required|string|max:255|unique:penyakit,kode_penyakit',
            'nama_penyakit' => 'required|string|max:255',
            'cara_penanganan' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gejala' => 'array',
            'gejala.*' => 'integer|exists:gejala,id',
        ]);
    
        // Simpan data penyakit dan ambil ID-nya
        $imagePath = $request->file('image')->store('assets/backend/image', 'public');
    
        try {
            $penyakitId = FacadesDB::table('penyakit')->insertGetId([
                'kode_penyakit' => $request->kode_penyakit,
                'nama_penyakit' => $request->nama_penyakit,
                'cara_penanganan' => $request->cara_penanganan,
                'image' => $imagePath,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
    
            // Simpan data diagnosa jika gejala dipilih
            if ($request->has('gejala')) {
                foreach ($request->gejala as $gejalaId) {
                    FacadesDB::table('penyakitdiagnosa')->insert([
                        'id_gejala' => $gejalaId,
                        'id_penyakit' => $penyakitId,
                        'created_at' => \Carbon\Carbon::now(),
                        'updated_at' => \Carbon\Carbon::now(),
                    ]);
                }
            }
    
            // Redirect dengan pesan sukses
            return redirect()->route('penyakit')->with('message', 'Data penyakit berhasil disimpan');
    
        } catch (\Illuminate\Database\QueryException $e) {
            // Rollback transaksi jika terjadi kesalahan
            FacadesDB::rollback();
    
            // Log error untuk debugging
            \Log::error('Terjadi kesalahan saat menyimpan data penyakit: ' . $e->getMessage());
    
            // Redirect dengan pesan error
            return redirect()->route('penyakit')->with('error', 'Kode penyakit sudah ada.');
        }
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
    public function edit($id)
    {
        // Fetch the penyakit data
        $Penyakit = FacadesDB::table('penyakit')->where('id', $id)->first();
    
        // Fetch all gejala data
        $Gejala = FacadesDB::table('gejala')->get();
    
        // Fetch the IDs of gejala associated with this penyakit
        $selectedGejala = FacadesDB::table('penyakitdiagnosa')
            ->where('id_penyakit', $id)
            ->pluck('id_gejala')
            ->toArray();
    
        return view('backend.penyakit.edit', compact('Penyakit', 'Gejala', 'selectedGejala'));
    }
    
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validate the incoming request data
    $request->validate([
        'kode_penyakit' => 'required|string|max:255',
        'nama_penyakit' => 'required|string|max:255',
        'cara_penanganan' => 'required|string|max:255',
        'gejala' => 'array', // Gejala should be an array
        'gejala.*' => 'integer|exists:gejala,id', // Each gejala ID should be an integer and exist in the gejala table
        // 'bobot_nilai' => 'required|numeric', // Ensure bobot_nilai is numeric and required
    ]);

    // Update the penyakit record
    FacadesDB::table('penyakit')->where('id', $id)->update([
        'kode_penyakit' => $request->kode_penyakit,
        'nama_penyakit' => $request->nama_penyakit,
        'cara_penanganan' => $request->cara_penanganan,
    ]);

    // Remove existing associations between penyakit and gejala
    FacadesDB::table('penyakitdiagnosa')->where('id_penyakit', $id)->delete();

    // Insert new associations
    if ($request->has('gejala')) {
        foreach ($request->gejala as $gejalaId) {
            FacadesDB::table('penyakitdiagnosa')->insert([
                'id_penyakit' => $id,
                'id_gejala' => $gejalaId,
                // 'bobot_nilai' => $request->bobot_nilai, // Include bobot_nilai
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }

    return redirect()->route('penyakit')->with('message', 'Data Penyakit Berhasil Diupdate');
}

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FacadesDB::table('penyakit')->where('id', $id)->delete();
        FacadesDB::table('penyakitdiagnosa')->where('id_penyakit', $id)->delete();
        return redirect()->route('penyakit')->with('message','Data Penyakit Berhasil Dihapus');
    }
}
