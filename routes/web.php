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
Route::get('/',function(){
    return view('index');
});

Route::get('/todos', [
    'uses'=>'todosController@index',
    'as'=>'todos'
]);

Route::get('/todos/edit/{id}',[
    'uses'=>'TodosController@edit',
    'as'=>'todos.edit'
]);

Route::post('/todos/update/{id}',[
    'uses'=>'TodosController@update',
    'as'=>'todos.update'
]);

Route::get('todos/delete/{id}',[
    'uses'=>'TodosController@destroy',
    'as'=>'todos.delete'
]);

Route::post('todos/store',[
    'uses'=>'TodosController@store',
    'as'=>'todos.store'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
