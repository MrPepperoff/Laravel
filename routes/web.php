<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
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

Route::controller(IndexController::class)->group(function(){
    Route::get('/','index') ->name('index');
    Route::get('/about','about') ->name('about');
    Route::get('/contact','contact') ->name('contact');
    Route::get('/portfolio','portfolio') ->name('portfolio');
    Route::get('/skills','skills') ->name('skills');  
    Route::get('/posts', 'posts')->name('posts'); 
});


Route::controller(AdminController::class)->group(function(){
    Route::get('/admin','index')->name('admin');

});
