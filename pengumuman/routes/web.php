<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ContactController;

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

Route::get('/pengumuman', [StudentController::class, 'index'])->name('input-nim');
Route::post('/check', [StudentController::class, 'check'])->name('check-nim');

Route::get('/import', [ImportController::class, 'showImportForm'])->name('import.form');
Route::post('/import', [ImportController::class, 'import'])->name('import.data');

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');
