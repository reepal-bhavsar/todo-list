<?php

use Illuminate\Support\Facades\Route;
use App\Models\todo_list;
use App\Http\Controllers\TodoListController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\TodoListController@index');

Route::get('create_task_page','App\Http\Controllers\TodoListController@create');

Route::get('create_new_task','App\Http\Controllers\TodoListController@store');

Route::get('delete_task/{id}','App\Http\Controllers\TodoListController@destroy');

Route::get('edit_task_page/{id}','App\Http\Controllers\TodoListController@edit');

Route::get('update_task/{id}','App\Http\Controllers\TodoListController@update');
