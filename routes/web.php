<?php

/**
* Show Todo Dashboard
*/

Route::get('/', function () {
    return 'halaman dashboard todo';
});

/**
 * Add Todo
 */
Route::post('/todos', function () {
    //
});

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
Route::delete('/todos/{todo}', function () {
    //
});