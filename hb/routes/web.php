<?php

use App\Http\Controllers\LibrosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\UserController;


Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
       
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
       
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

Route::get('libros',[LibrosController::class,'index'])->name('libros.index');
Route::get('libros/create',[LibrosController::class,'create'])->name('libros.create');
Route::post('libros',[LibrosController::class,'store'])->name('libros.store');
Route::get('libros/{libro}',[LibrosController::class,'show'])->name('libros.show');

Route::get('libros/{libro}/edit',[LibrosController::class,'edit'])->name('libros.edit');
Route::put('libros/{libro}',[LibrosController::class,'update'])->name('libros.update');//Laravel recomiendo usar el metodo put siempre que vayamos a actualizar un formulario

Route::get('suscribirse',[SubController::class,'index'])->name('sub.index');

Route::get('user',[UserController::class,'index'])->name('user.index');