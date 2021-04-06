<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\IndexController;
use App\Http\Livewire\Users;
use App\Http\Livewire\Exams;
use App\Http\Livewire\Admin\Banner\Banner;
use App\Http\Livewire\Admin\Components\PreviewExam;
use App\Http\Controllers\PDFController;

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


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('user/dashboard', function () { return view('dashboard');})->name('user.dashboard');
});

Route::middleware(['auth:sanctum', 'verified','admin'])->group(function () {
    Route::get('/admin/dashboard', function () {return view('admin.dashboard');})->name('admin.dashboard');
    Route::view('/admin/dashboard/users', 'admin.list-user')->name('admin.list-user');

//    Route::get('/admin/send', [NotificationController::class,'sendNotification']);

    Route::get('/admin/send', [NotificationController::class,'sendNotification']);
    Route::get('/admin/dashboard/exam', function () {return view('admin.list-exam');})->name('admin.exam');
    Route::get('/admin/preview/{slug}', [PreviewExam::class, 'showPre'])->name('admin.preview');
    Route::get('/admin/dashboard/exam-category', function () {return view('admin.exam-category');})->name('admin.exam-category');
    Route::get('/admin/banner', function (){return view('livewire.admin.banner.banner');})->name('admin.banner');
    Route::get('/admin/dashboard/generate-pdf', [PDFController::class, 'generatePDF']);
});
