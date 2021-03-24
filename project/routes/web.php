<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\IndexController;
use App\Http\Livewire\Users;
use App\Http\Livewire\Exams;
use App\Http\Livewire\NotificationCRUD;

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
//

//auth google api
Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

/*index page*/
/*lang->{location=array(string)}*/
Route::get('/lang/{lang}', [LanguageController::class, 'switchLang'])->name('language');
Route::get('/', [IndexController::class, 'index']);

//Route::get('user', [UserController::class, 'getAll'])->name('user')->middleware('admin');
//Route::get('/user/{id}', [UserController::class, 'edit']);

// Route::get('users', Users::class);
Route::get('exams', Exams::class);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('user/dashboard', function () {
        return view('dashboard');
    })->name('user.dashboard');
});

Route::middleware(['auth:sanctum', 'verified','admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/admin/users', Users::class)->name('admin.users');
});

Route::get('notification', NotificationCRUD::class);
