<?php

/**
* Show Todo Dashboard
*/

Route::get('/', 'TodoController@index');
Route::get('/todos/create', 'TodoController@create');

/**
 * Add Todo
 */
Route::post('/todos','TodoController@store');

/**
 * Show edit todo
 */
Route::get('todos/{todo}/todo', function(){

});

/**
 * update todo
 */
Route::put('todos/{todo}', function(){

});

/**
 * Delete Todo
 */
Route::get('/todos/{todo}/delete', 'TodoController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index');
