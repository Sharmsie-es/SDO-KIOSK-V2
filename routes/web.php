<?php

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
    return view('web.homepage');
});
use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/homepage', function () {
    return view('web.homepage');
})->name('homepage');
Route::get('/citizen-charter', function () {
    return view('web.citizen-charter');
})->name('citizen-charter');
Route::get('/citizen-charter1', function () {
    return view('web.citizen-charter1');
})->name('citizen-charter1');
Route::get('/citizen-charter2', function () {
    return view('web.citizen-charter2');
})->name('citizen-charter2');


