<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Quando lo crei, php artisan make:controller Api/PageController
//---->ti crea automaticalmente una cartella, con il nome Api..e dentro PageContoller.php
//Quindi qua, lo devi indicare il percorso.


// Route::get('posts', 'Api\PageController@index');



Route::namespace('Api')
  ->prefix('posts')
  ->group(function(){
    Route::get('/', 'PageController@index');
    Route::get('/{slug}', 'PageController@show');

  });

//'posts'--> corrisponde alla variabile, creato nel index(), a cui viene assegnato tutti I post query.
