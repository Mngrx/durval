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

/*
 * As rotas estão simplificadas por ser apenas uma página
 *
 */
Route::get('/', 'FaleConoscoController@index');
Route::post('/create', 'FaleConoscoController@create');
