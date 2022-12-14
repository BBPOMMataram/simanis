<?php

use App\Http\Controllers\DokumenController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Artisan;
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

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/documentform', [DokumenController::class, 'uploadform'])->name('doc.form');
    Route::post('/documentupload', [DokumenController::class, 'upload'])->name('doc.upload');

    Route::get('document/{menuId}', [DokumenController::class, 'index'])->name('doc.index');
});

Route::get('migrate/fresh/seed', function(){
    Artisan::call('migrate:fresh --seed');
});

Route::get('storagelink', function(){
    Artisan::call('storage:link');
});