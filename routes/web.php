<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/halamanutama', function () {
    return view('welcome');
});

Route::get('/halamankedua', function () {
    return view('halamankedua');
});

// Route::get('/data', function() {
//     return view('data',[
//         "sepatu" => "Nike Air Jordan",
//         "baju1" => "Uniqlo",
//         "baju2" => "Matahari",
//         "baju3" => "H&M",
//         "baju4" => "baju croptop",
//     ]);
// });

Route::get('/data', [ProductController::class, 'index']);

Route::get('/halamanketiga', function () {
    return view('halamanketiga', [
        //Associative Array
        //key       //value
        "sepatu" => "Nike Air Jordan",
        "baju1" => "Baju Polo",
        "baju2" => "Baju Uniqlo",
        "judul" => "Menu Roti"
    ]);
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);

Route::post('/mahasiswa', [MahasiswaController::class, 'store']);

Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);

Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);

Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);
