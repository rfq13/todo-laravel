<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/**
* Show Todo Dashboard
*/
Route::group(['middleware'=>'auth'],function ()
{
  # code...
  Route::get('/', 'TodoController@index');
  
  /**
   *  Show create todo form
   */
  Route::get('/todos/create', 'TodoController@create');
  
  /**
   * Add Todo
   */
  Route::post('/todos','TodoController@store');
  
  /**
   * Show edit todo
   */
  Route::get('todos/{todo}/edit', 'TodoController@edit');
  
  /**
   * update todo
   */
  Route::put('todos/{todo}', 'TodoController@update');
  
  /**
   * Delete Todo
   */
  Route::get('/todos/{todo}/delete', 'TodoController@delete');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
