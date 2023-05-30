<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;



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

// buat routing salam
Route::get('/salam', function () {
    return 'Halo Semua';
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

// buat routing pasien
Route::get('/pasien', function () {
    return view('pasien');
});

// buat routing form
Route::get('/form', [FormController::class, 'index']);

// buat routing hasil
Route::post('/hasil', [FormController::class, 'hasil']);


Route::get('/skill', function () {
    return view('skill');
});

// buat routing hasil skill
Route::get('/skill', [SkillController::class, 'index']);

// buat routing hasil skill
Route::post('/hasilskill', [SkillController::class, 'hasilskill']);





