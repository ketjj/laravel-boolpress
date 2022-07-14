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







// tutte ruote che gestische l'aravel: (quindi facciamo un controllo che siano legati al Backend)
Auth::routes();

// auth ruote: 
Route::middleware('auth')
    ->namespace('Admin')
    ->prefix('admin')
    ->name('admin.')
    ->group(function(){
      Route::get('/', 'HomeController@index')->name('index');

      Route::resource('posts', 'PostController');
    });
    // ->get('/admin', 'HomeController@index')->name('admin');

    // ============================================================

    // devo connrollare che tutte queste ruote atternano al front -> guest.home

    Route::get('{any?}', function(){
      return view('guest.home');
    })->where('any', '.*')->name('home');


  // //dobbiamo cancellare
  // Route::get('/', function () {
  //     return view('guest.home');
  // });

  // -----------------------------------


