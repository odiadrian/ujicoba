<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;


class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data dari tabel gejala dengan pagination
        $Gejala = FacadesDB::table('gejala')
                    ->select('id', 'kode_gejala', 'nama_gejala', 'created_at', 'updated_at')
                    ->paginate(30);
    
        // Kirim data ke view
        return view('backend.gejala.index', compact('Gejala'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penyakit = FacadesDB::table('penyakit')->get();
        return view('backend.gejala.create', compact('penyakit'));
    }
    


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the input
    $request->validate([
        'kode_gejala' => 'required|string|max:255',
        'nama_gejala' => 'required|string|max:255',
        // 'id_penyakit' => 'required|integer|exists:penyakit,id' // Remove or comment out this line if id_penyakit is not in the gejala table
    ]);

    // Insert the data into the gejala table
    FacadesDB::table('gejala')->insert([
        'kode_gejala' => $request->kode_gejala,
        'nama_gejala' => $request->nama_gejala,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),
    ]);

    // Redirect with success message
    return redirect()->route('gejala')->with('message', 'Data Gejala Berhasil Disimpan');
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
        $Gejala= FacadesDB::table('gejala')->where('id', $id)->first();

        return view('backend.gejala.edit', compact('Gejala'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        FacadesDB::table('gejala')->where ('id',$id)->update([
            'kode_gejala' =>$request->kode_gejala,
            'nama_gejala' =>$request->nama_gejala
           
        ]);

        return redirect()->route('gejala')->with('message','Data Gejala Berhasil Diupdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FacadesDB::table('gejala')->where('id', $id)->delete();

        return redirect()->route('gejala')->with('message','Data Gejala Berhasil Dihapus');
    }
}
