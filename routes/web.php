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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get( '/', 'App\Http\Controllers\WeglotController@index' )->name( 'weglot.index' );
route::get( '/weglot-load', 'App\Http\Controllers\WeglotController@weglotLoad' )->name( 'weglot.load' );
route::get( '/weglot-ajax', 'App\Http\Controllers\WeglotController@weglotAjax' )->name( 'weglot.ajax' );
route::get( '/weglot-ajax-autocomplete', 'App\Http\Controllers\WeglotController@weglotAjaxAutocomplete' )->name( 'weglot.ajax.autocomplete' );


