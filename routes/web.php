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
    return view('welcome');
});

Route::get('/person', function () {
    return view('InputPerson', ['patate' => 'ciao']);
});

Route::post('/person/add', 'App\Http\Controllers\PageController@person');

Route::get('/person/list', 'App\Http\Controllers\PageController@index');


