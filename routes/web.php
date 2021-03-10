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

//Route::post('/person/add', 'App\Http\Controllers\Person\PageController@person');

Route::get('/person/list', 'App\Http\Controllers\Person\ListController@run');

Route::put('/person/add', 'App\Http\Controllers\Person\AddController@run');

Route::put('/book/add', 'App\Http\Controllers\Book\AddController@run');

Route::get('/book/search', 'App\Http\Controllers\book\SearchController@run');

Route::get('/ristorante/ristorante', 'App\Http\Controllers\RistoranteApiController@getMenu');

Route::put('/ristorante/add', 'App\Http\Controllers\AddRistoranteController@run');

Route::post('', 'App\Http\Controllers\@run');

