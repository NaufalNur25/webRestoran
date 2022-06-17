<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return redirect('home');
});

Route::get('addMenu', [ PostController::class, 'create' ]);
Route::post('addMenu/store', [ PostController::class, 'store' ])->name('post.store');

Route::get('addMenu/{post:id}', [ PostController::class, 'edit' ])->name('post.edit');
Route::put('addMenu/{post:id}/update', [ PostController::class, 'update' ])->name('post.update');


Route::get('delete/{post:id}', [ PostController::class, 'destroy' ])->name('post.delete');
Route::get('home', [ PostController::class, 'index' ])->name('home');
