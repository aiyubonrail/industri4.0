<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
        return view('welcome',
            [
                'title' => "An even cooler way to do the title"
            ]
        );
    });

 Route::get('/page', function () {
        return view('page',
            [
                'title' => "Aplikasi Revolusi Industri 4.0",
                'author' => json_encode([
                        "name" => "Muhammad Aiyub",
                        "role" => "Software Enginner",
                        "code" => "Always keeping it clean"
                ])
            ]
        );
    });

  Route::get('/{any}', function(){
            return view('vueapp');
    })->where('any', '.*');