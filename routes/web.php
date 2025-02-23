<?php

use App\Http\Controllers\AdminApplicantController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ApplicantController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/apply', [ApplicantController::class, 'create'])->name('create');


Route::post('/create', [ApplicantController::class, 'store'])->name('apply');
Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/applicants', [AdminApplicantController::class, 'index'])->name('admin.dashboard');
    Route::get('/applicants/{id}/edit', [AdminApplicantController::class, 'edit'])->name('admin.applicants.edit');
    Route::post('/applicants/{id}/update', [AdminApplicantController::class, 'update'])->name('admin.applicants.update');
    Route::post('/applicants/{id}/delete', [AdminApplicantController::class, 'destroy'])->name('admin.applicants.destroy');
});

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
