<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/homee', function () {
    return view('homee');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/halo/{nama?}', function ($nama='default') {
    return '<h1>Halo ' . $nama . '</h1>';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post',[App\Http\Controllers\PostController::class, 'index']);
Route::get('/post/create',[App\Http\Controllers\PostController::class, 'create']);
Route::post('/post/store',[App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/post/{id}',[App\Http\Controllers\PostController::class, 'show']);
Route::get('/post/{id}/edit',[App\Http\Controllers\PostController::class, 'edit']);
Route::post('/post/{id}',[App\Http\Controllers\PostController::class, 'update'])->name('update.blog');
Route::get('/delete/{id}',[App\Http\Controllers\PostController::class, 'destroy'])->name('delete');
