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
Route::get('/estabelecimento/ec4863a7-ba7e-437b-9886-37fa7dbd6ea3', [App\Http\Controllers\PageController::class, 'estabelecimento'])->name('estabelecimento');
Route::get('/contactoy', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/politica', function () {
    return view('politica');
});
Route::get('/termos', function () {
    return view('termos');
});
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
