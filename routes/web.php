<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Main@home')->name('home');

Route::get('/new_task', 'Main@new_task_form')->name('new_task_form');

Route::post('/new_task_submit', 'Main@new_task_submit')->name('new_task_submit');

Route::get('/context_home', 'Main@show_home')->name('context_home');
Route::get('/context_work', 'Main@show_work')->name('context_work');
Route::get('/context_computer', 'Main@show_computer')->name('context_computer');
Route::get('/context_shopping', 'Main@show_shopping')->name('context_shopping');