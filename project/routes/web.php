<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\IndexController;
use App\Http\Livewire\Users;
use App\Http\Livewire\Exams;

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
Route::middleware(['auth:sanctum', 'verified'])->get('user/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified','admin'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard.admin');

//auth google api
Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

/*index page*/
/*lang->{location=array(string)}*/
Route::get('/lang/{lang}', [LanguageController::class, 'switchLang'])->name('language');
Route::get('/', [IndexController::class, 'index']);

//Route::get('user', [UserController::class, 'getAll'])->name('user')->middleware('admin');
//Route::get('/user/{id}', [UserController::class, 'edit']);

Route::get('users', Users::class);
Route::get('exams', Exams::class);

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');

