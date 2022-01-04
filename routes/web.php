<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomRegiController;
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
    return view('welcome');
});

Route::get('/registration',[CustomRegiController::class,'create']);
Route::post('/user/create',[CustomRegiController::class,'store'])->name('user.create');
Route::get('/user-list',[CustomRegiController::class,'userList'])->name('user.list');
Route::get('/user-edit/{id}',[CustomRegiController::class,'editUser'])->name('user.edit');
Route::post('/user-update',[CustomRegiController::class,'updateUser'])->name('user.update');
Route::get('/user-delete/{id}',[CustomRegiController::class,'deleteUser'])->name('user.delete');


