<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\formations;
use App\Http\Controllers\ProfileController;
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


Route::get('/', [Controller::class, 'index_home2'])->name('index');


Route::get('/login', [Controller::class, 'index'])->name('login');
Route::get('/register', [Controller::class, 'register'])->name('register');

Route::get('/about', function () {
    return view('front.about');
});
Route::get('/reglement', function () {
    return view('front.reglement');
});
Route::get('/campus', function () {
    return view('front.campus');
});
Route::get('/contact', function () {
    return view('front.contact');
});

Route::get('/admission', function () {
    return view('front.admission');
});
Route::get('/admission-2', function () {
    return view('front.admission-2');
});

Route::get('/formation/{type_formation}', [formations::class, 'index_home']);
Route::get('/formation/{id}/{titre}', [formations::class, 'index_details']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/admin/formation', [formations::class, 'index_admin'])->name('formation_admin')->middleware('admin');
    Route::get('/admin/admission', [formations::class, 'admission_admin'])->name('admission_admin')->middleware('admin');
    Route::get('/admin/televerser', [formations::class, 'televerser_admin'])->name('televerser_admin')->middleware('admin');
    Route::get('/telechargement', [formations::class, 'telechargement'])->name('telechargement');
});

require __DIR__ . '/auth.php';
