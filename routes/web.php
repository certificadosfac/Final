<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificadosController;

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
    return view('certificados');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::post('/download', [CertificadosController::class, 'download'])->name('download');
Route::get('/search_document/{token}', [CertificadosController::class, 'search_document'])->name('search_document');
Route::get('/search', function () {
    return view('search');
});
