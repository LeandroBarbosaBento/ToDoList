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
Route::get('/home_done_tasks', 'Main@home_done_tasks')->name('home_done_tasks');
Route::get('/home_deleted_tasks', 'Main@home_deleted_tasks')->name('home_deleted_tasks');


Route::get('/new_task', 'Main@new_task_form')->name('new_task_form');

Route::post('/new_task_submit', 'Main@new_task_submit')->name('new_task_submit');

Route::get('/context_home', 'Main@show_home')->name('context_home');
Route::get('/context_work', 'Main@show_work')->name('context_work');
Route::get('/context_computer', 'Main@show_computer')->name('context_computer');
Route::get('/context_shopping', 'Main@show_shopping')->name('context_shopping');

Route::get('task_done/{id}', 'Main@task_done')->name('task_done');
Route::get('task_undone/{id}', 'Main@task_undone')->name('task_undone');
Route::get('task_edit/{id}', 'Main@task_edit')->name('task_edit');
Route::post('task_edit_submit', 'Main@task_edit_submit')->name('task_edit_submit');
Route::get('task_delete/{id}', 'Main@task_delete')->name('task_delete');
Route::get('task_see_description/{id}', 'Main@task_see_description')->name('task_see_description');