<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/descontos', 'DescontoController@index');
Route::get('/descontos/{id}', 'DescontoController@show');
Route::post('/descontos', 'DescontoController@store');
Route::put('/descontos/{id}', 'DescontoController@update');
Route::delete('/descontos/{id}', 'DescontoController@destroy');

Route::get('/produtos', 'ProdutosController@index');
Route::get('/produtos/{id}', 'ProdutosController@show');
Route::post('/produtos', 'ProdutosController@store');
Route::put('/produtos/{id}', 'ProdutosController@update');
Route::delete('/produtos/{id}', 'ProdutosController@destroy');

Route::get('/campanhas', 'CampanhasController@index');
Route::get('/campanhas/{id}', 'CampanhasController@show');
Route::post('/campanhas', 'CampanhasController@store');
Route::put('/campanhas/{id}', 'CampanhasController@update');
Route::delete('/campanhas/{id}', 'CampanhasController@destroy');

Route::get('/cidades', 'CidadesController@index');
Route::get('/cidades/{id}', 'CidadesController@show');
Route::post('/cidades', 'CidadesController@store');
Route::put('/cidades/{id}', 'CidadesController@update');
Route::delete('/cidades/{id}', 'CidadesController@destroy');

Route::get('/grupo', 'GrupoCidadesController@index');
Route::get('/grupo/{id}', 'GrupoCidadesController@show');
Route::post('/grupo', 'GrupoCidadesController@store');
Route::put('/grupo/{id}', 'GrupoCidadesController@update');
Route::delete('/grupo/{id}', 'GrupoCidadesController@destroy');