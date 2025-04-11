<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormPendaftaranController;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/team', function () {
    return view('DepartemenTech');
});
Route::get('/privasi', function () {
    return view('privasi');
});
Route::get('/customerService', function () {
    return view('customerService');
});
Route::get('/contactUs', function () {
    return view('contactUs');
});
Route::get('/form-pendaftaran/thank-you', function () {
    return view('Pendaftaran.thankyouPage');
})->name('formPendaftaran.thankYou');
Route::get('/perizinan', function () {
    return view('perizinan');
});

Route::get('/Signup', function () {
    return view('loginArtikel/signup');
});


Route::get('/pengumuman', [StudentController::class, 'index'])->name('input-nim');
Route::post('/check', [StudentController::class, 'check'])->name('check-nim');

Route::get('/weonqpawjr9a4ocdsl', [ImportController::class, 'showImportForm'])->name('import.form');
Route::post('/weonqpawjr9a4ocdsl', [ImportController::class, 'import'])->name('import.data');

Route::get('/form-pendaftaran', [FormPendaftaranController::class, 'create'])->name('formPendaftaran.create');
Route::post('/form-pendaftaran', [FormPendaftaranController::class, 'store'])->name('formPendaftaran.store');
Route::get('/sdbpkdfoahsfdadqhw', [FormPendaftaranController::class, 'show'])->name('form-pendaftaran.show');

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');
