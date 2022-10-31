<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\IzinsiswaController;
use App\Http\Controllers\PenilaianController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
Route::get('user', function () { return view('user'); })->middleware(['checkRole:user,admin']);
//student controller

//crud
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/tambah', [SiswaController::class, 'tambah']);
Route::post('/siswa/store', [SiswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
Route::put('/siswa/update/{id}', [SiswaController::class, 'update']);
Route::get('/siswa/hapus/{id}', [SiswaController::class, 'delete']);

//pdf
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/cetak_pdf', [SiswaController::class, 'cetak_pdf']);

//izinsiswa
Route::get('/izinsiswa', [IzinsiswaController::class, 'index']);
Route::get('/izinsiswa/tambahsiswa', [IzinsiswaController::class, 'tambahsiswa']);
Route::post('/izinsiswa/store', [IzinsiswaController::class, 'store']);
Route::get('/izinsiswa/hapus/{id}', [IzinsiswaController::class, 'delete']);

//penilaian
Route::get('/penilaiansiswa', [PenilaianController::class, 'index']);
Route::get('penilaian/procces', [PenilaianController::class, 'procces']); 
Route::post('/penilaian/store', [PenilaianController::class, 'store']);
Route::get('/penilaian/cetak_pdf', [PenilaianController::class, 'cetak_pdf']);
Route::get('/penilaian/hapus/{id}', [PenilaianController::class, 'delete']);







// Route::get('/', function() {
//     return redirect(route('login'));
// });

// Auth::routes(['register' => false]);

// Route::group(['middleware' => 'auth'], function(){
    
//     //settings
//     Route::group(['middleware' => ['role:admin']], function() {
//         Route::resource('setting', 'SettingController');        
//     });

    
    
//     Route::group(['middleware' => ['permission:manajemen users|manajemen roles']], function() {
//         Route::get('/roles/search','RoleController@search')->name('roles.search');
//         Route::resource('users', 'UserController');
//         Route::resource('roles', 'RoleController');
//         // Route::resource('setting', 'SettingController');        
//     });

//     // Produk
//     Route::group(['middleware' => ['permission:manajemen siswa']], function() {
//         Route::get('/siswa/search','ProdukController@search')->name('siswa.search');
//         Route::get('/siswa/pdf','ProdukController@reportPdf')->name('siswa.pdf');
//         Route::get('/siswa/export/', 'ProdukController@export')->name('siswa.export');
//         Route::post('/siswa/import/', 'ProdukController@import')->name('siswa.import');
//         Route::resource('siswa', 'ProdukController');        
//     });

//     // Kategori
//     Route::group(['middleware' => ['permission:manajemen kategori']], function() {         
//         Route::resource('kategori', 'KategoriController');         
//     });
    
//     //profile
//     Route::resource('/profile', 'ProfileController');

//     Route::get('/home', [Homecontroller::class, 'index'])->name('home');
// });



