<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKostController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\ProfileController;
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
    return view('landing-page.index');
})->name('landing-page');

//Authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/post', [AuthController::class, 'login_post'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/post', [AuthController::class, 'registerpost'])->name('register.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [AuthController::class, 'forgotpassword'])->name('forgotpassword');


Route::group(['middleware' => ['auth', 'checkRole:admin,mahasiswa']], function(){

    //Dashboard
    Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');

    //Data Kost
    Route::get('/dashboard/data-kost', [DataKostController::class, 'index'])->name('datakost.index');
    Route::post('/dashboard/data-kost/insert', [DataKostController::class, 'insert'])->name('datakost.insert');
    Route::post('/dashboard/data-kost/update/{id}', [DataKostController::class, 'update'])->name('datakost.update');
    Route::get('/dashboard/data-kost/delete/{id}', [DataKostController::class, 'delete'])->name('datakost.delete');

    //Data Kriteria
    Route::get('/dashboard/kriteria', [KriteriaController::class, 'index'])->name('kriteria.index');
    Route::post('/dashboard/kriteria/insert', [KriteriaController::class, 'insert'])->name('kriteria.insert');
    Route::post('/dashboard/kriteria/update/{id}', [KriteriaController::class, 'update'])->name('kriteria.update');
    Route::get('/dashboard/kriteria/delete/{id}', [KriteriaController::class, 'delete'])->name('kriteria.delete');

    //Data Alternatif
    Route::get('/dashboard/alternatif', [AlternatifController::class, 'index'])->name('alternatif.index');
    Route::post('/dashboard/alternatif/insert', [AlternatifController::class, 'insert'])->name('alternatif.insert');
    Route::post('/dashboard/alternatif/update/{id}', [AlternatifController::class, 'update'])->name('alternatif.update');
    Route::get('/dashboard/alternatif/delete/{id}', [AlternatifController::class, 'delete'])->name('alternatif.delete');

    //Profil
    Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/dashboard/profile/changepassword', [ProfileController::class, 'changepassword'])->name('profile.changepassword');
    Route::post('/dashboard/profile/changeavatar', [ProfileController::class, 'changeavatar'])->name('profile.changeavatar');
});
