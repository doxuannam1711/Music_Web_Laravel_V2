<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicsController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () { 
//    return view('admin');
// });

Route::get('/admin', function () {
   return view('admin');
});

Route::get('/', function () {
   return view('music');
});


Route::prefix('user')->name('user.')->group(function () {
   Route::get('/', [UserController::class, 'index'])->name('index');
   // Route::get('/add', [MusicsController::class, 'add'])->name('add');
   // Route::post('add', [MusicsController::class, 'postAdd'])->name('post-add');
   // Route::get('/edit/{id}', [MusicsController::class, 'getEdit'])->name('edit');
   // Route::post('/update', [MusicsController::class, 'postEdit'])->name('post-edit');
   // Route::get('/delete/{id}', [MusicsController::class, 'delete'])->name('delete');
});


Route::prefix('admin')->name('admin.')->group(function () {
   Route::get('/', [MusicsController::class, 'index'])->name('index');
   Route::get('/add', [MusicsController::class, 'add'])->name('add');
   Route::post('add', [MusicsController::class, 'postAdd'])->name('post-add');
   Route::get('/edit/{id}', [MusicsController::class, 'getEdit'])->name('edit');
   Route::post('/update', [MusicsController::class, 'postEdit'])->name('post-edit');
   Route::get('/delete/{id}', [MusicsController::class, 'delete'])->name('delete');
});