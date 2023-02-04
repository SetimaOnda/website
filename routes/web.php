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
    return view('home');
});
Route::get('/sobre-nos', function () {
    return view('sobrenos');
});
Route::get('/tours/{id}', [App\Http\Controllers\PageController::class, 'tours'])->name('tours');
Route::get('/contactoy', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::get('/contact', function () {
    return view('contact');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
