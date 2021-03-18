<?php

use App\Http\Controllers\PageController;
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

Route::get('/', 'App\Http\Controllers\PageController@index')->name('home');

Route::get('/laravel', 'App\Http\Controllers\PageController@showLaravel')->name('laravel.index');

Route::get('/livewire', 'App\Http\Controllers\PageController@showLivewire')->name('livewire.index');

Route::get('/vue', 'App\Http\Controllers\PageController@showVue')->name('vue.index');

Route::get('/quiz', 'App\Http\Controllers\PageController@showQuiz')->name('quiz.index');
