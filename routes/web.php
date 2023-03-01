<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProjectController;
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

Route::middleware(['web'])->group(function(){
    Route::get('/', [Controller::class, 'login'])->name('login');
    Route::post('/postlogin', [Controller::class, 'postlogin'])->name('postlogin');
    Route::get('/logout', [Controller::class, 'logout'])->name('logout');
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['auth:web'])->group(function(){
        Route::get('/dashboard', function(){return view('back.pages.dashboard');})->name('dashboard');
        Route::resource('project', ProjectController::class);
    });
});