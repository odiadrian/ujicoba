<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{

public function register(Request $request)
{
    // Validasi input dari form
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'umur' => 'required|integer|min:0', // Validasi umur sebagai integer
        'alamat' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:6',
    ]);

    // Gunakan Query Builder untuk menyisipkan data pengguna
    DB::table('users')->insert([
        'name' => $validatedData['name'],
        'umur' => $validatedData['umur'],
        'alamat' => $validatedData['alamat'],
        'email' => $validatedData['email'],
        'password' => \Hash::make($validatedData['password']),
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Redirect ke halaman beranda dengan pesan sukses
    return redirect()->route('home')->with('sukses', 'Anda Berhasil Registrasi');
}


    public function login(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if (Auth::attempt($user)) {
            $user = Auth::user();
            return redirect()->route('diagnosa')->with('message', 'Anda Berhasil Login');
        }else{
            return redirect()->route('home')->with('message', 'Daftar Dulu Biar Bisa Login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('pesan', 'Anda Berhasil Logout');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
