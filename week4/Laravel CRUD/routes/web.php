<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

// Route::get('/data-tables', function () {
//     return view('items.table');
// });

// Route::get('/index', function () {
//     return view('items.index');
// });

// name untuk menamai saja => php artisan route:list
// Route::get('/questions', 'QuestionsController@index')->name('ques.index');
// Route::get('/questions/create', 'QuestionsController@create');
// Route::post('/questions', 'QuestionsController@store');
// Route::get('/questions/{id}', 'QuestionsController@show');
// Route::get('/questions/{id}/edit', 'QuestionsController@edit');
// Route::put('/questions/{id}', 'QuestionsController@update');
// Route::delete('/questions/{id}', 'QuestionsController@destroy');


// with command => php artisan make:controller UserController --resource
// from laravel => controller -> resource
// route otomatis akan dibuatkan
Route::resource('user', 'UserController');

Route::get('/', 'QuestionsController@index');
// change route question agar lebih simple
Route::resource('questions', 'QuestionsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
