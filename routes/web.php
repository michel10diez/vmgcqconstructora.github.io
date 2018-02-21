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
//Rutas publicas
Route::get('/', 'PostsController@index');
Route::get('/project', 'PostsController@showProjects');
Route::get('/project-uno', 'PostsController@secondProject');
Route::get('/contact', ['uses' => 'PostsController@contact']);
Route::post('/contact', ['uses' => 'PostsController@store', 'as' => 'contact.store']);
Route::get('/ejemplo', 'PostsController@ejemplo');
Route::post('/enviar', 'PostsController@enviaContacto');