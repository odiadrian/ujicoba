<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Backend\RiwayatController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/',function(){
//     // return view('welcome');
//     return view('auth.login');

// });

    // Route Login Custom admin
    Route::get('login', [CustomAuthController::class, 'index'])->name('login');
    Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::group(['namespace' => 'App\Http\Controllers'], function() {

    // Route Frontend
    Route::get('/', 'Frontend\HomeController@index')->name('home');
    Route::get('/tentang', 'Frontend\TentangController@index')->name('tentang');
    Route::get('/diagnosa', 'Frontend\DiagnosaController@index')->name('diagnosa');
    Route::get('/diagnosapenyakit', 'Frontend\DiagnosaPenyakitController@index')->name('diagnosa.penyakit');
    Route::get('/diagnosa/hasil', 'Frontend\DiagnosaPenyakitController@showResults')->name('diagnosa.hasil');
    Route::get('/diagnosa/results', [DiagnosaPenyakitController::class, 'showResults'])->name('diagnosa.results');
    Route::post('/diagnosa/store', 'Frontend\DiagnosaPenyakitController@store')->name('diagnosa.store');
    //Login user
    Route::post('registrasi', 'Frontend\LoginController@register')->name('frontend.register');
    Route::post('front-login', 'Frontend\LoginController@login')->name('frontend.login');
    Route::get('front-logout', 'Frontend\LoginController@logout')->name('frontend.logout');

});
Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::group(['middleware' => ['auth']], function (){

        // Route Backend
        // Route Penyakit
        Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard');
        Route::get('/penyakit', 'Backend\PenyakitController@index')->name('penyakit');
        Route::get('/tambah-penyakit', 'Backend\PenyakitController@create')->name('tambah_penyakit');
        Route::POST('/store-penyakit', 'Backend\PenyakitController@store')->name('store_penyakit');
        Route::get('/delete-penyakit/{id}', 'Backend\PenyakitController@destroy')->name('delete_penyakit');
        Route::get('/edit-penyakit/{id}', 'Backend\PenyakitController@edit')->name('edit_penyakit');      
        Route::post('/update-penyakit/{id}', 'Backend\PenyakitController@update')->name('update_penyakit');
        
        // Route Gejala
        Route::get('/gejala', 'Backend\GejalaController@index')->name('gejala');
        Route::get('/tambah-gejala', 'Backend\GejalaController@create')->name('tambah_gejala');
        Route::POST('/store-gejala', 'Backend\GejalaController@store')->name('store_gejala');
        Route::get('/delete-gejala/{id}', 'Backend\GejalaController@destroy')->name('delete_gejala');
        Route::get('/edit-gejala/{id}', 'Backend\GejalaController@edit')->name('edit_gejala');      
        Route::post('/update-gejala/{id}', 'Backend\GejalaController@update')->name('update_gejala');
        
        // Route aturan
        Route::get('/aturan', 'Backend\AturanController@index')->name('aturan');
        Route::get('/tambah-aturan', 'Backend\AturanController@create')->name('tambah_aturan');
        Route::POST('/store-aturan', 'Backend\AturanController@store')->name('store_aturan');
        Route::get('/aturan/{id}/edit', 'Backend\AturanController@edit')->name('edit_aturan');
        Route::put('/aturan/{id}', 'Backend\AturanController@update')->name('aturan.update');
        Route::delete('/aturan/{id}', 'Backend\AturanController@delete')->name('delete_aturan');
        //Route riwayat
        Route::get('/riwayat', 'Backend\RiwayatController@index')->name('riwayat');
        Route::get('/riwayat/cetak/{id}', [RiwayatController::class, 'cetak'])->name('riwayat.cetak');
        Route::delete('/riwayat/hapus/{id}', [RiwayatController::class, 'hapus'])->name('riwayat.hapus');
    });
});