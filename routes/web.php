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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{todoId}' , 'TaskController@show') ;
Route::get('/create' , 'TaskController@create') ;
Route::post('/create' , 'TaskController@store') ;
Route::get('/tasks/{todoId}/edit' , 'TaskController@edit') ;
Route::post('/tasks/{todoId}' , 'TaskController@update') ;

Route::get('/tasks/{todoId}/delete' , 'TaskController@destroy') ;
