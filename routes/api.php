<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('profile','ProfileController@index');
Route::post('profile','ProfileController@create');
Route::put('/profile/{id}','ProfileController@update');
Route::delete('/profile/{id}','ProfileController@delete');

Route::get('posting','PostingController@index');
Route::post('posting','PostingController@create');
Route::put('/posting/{id}','PostingController@update');
Route::delete('/posting/{id}','PostingController@delete');

Route::get('portofolio','PortofolioController@index');
Route::post('portofolio','PortofolioController@create');
Route::put('/portofolio/{id}','PortofolioController@update');
Route::delete('/portofolio/{id}','PortofolioController@delete');

Route::get('agenda','AgendaController@index');
Route::post('agenda','AgendaController@create');
Route::put('/agenda/{id}','AgendaController@update');
Route::delete('/agenda/{id}','AgendaController@delete');

Route::get('subagenda','SubagendaController@index');
Route::post('subagenda','SubagendaController@create');
Route::put('/subagenda/{id}','SubagendaController@update');
Route::delete('/subagenda/{id}','SubagendaController@delete');

Route::get('chat','ChatController@index');
Route::post('chat','ChatController@create');
Route::put('/chat/{id}','ChatController@update');
Route::delete('/chat/{id}','ChatController@delete');
