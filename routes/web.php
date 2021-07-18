<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\Kadai2Controller;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\BoardController;


Route::get('hello', [HelloController::class, 'index']);
Route::get('hello/add', [HelloController::class, 'add']);
Route::post('hello/add', [HelloController::class, 'create']);
Route::get('hello/edit/{id?}', [HelloController::class, 'edit']);
Route::post('hello/edit/{id?}', [HelloController::class, 'update']);
Route::get('hello/del/{id?}', [HelloController::class, 'del']);
Route::post('hello/del/{id?}', [HelloController::class, 'remove']);

//Person
Route::get('person', [PersonController::class, 'index']);

Route::get('person/find',[PersonController::class, 'find']);
Route::post('person/find',[PersonController::class, 'search']);

Route::get('person/add',[PersonController::class, 'add']);
Route::post('person/add',[PersonController::class, 'create']);

Route::get('person/edit/{id?}',[PersonController::class, 'edit']);
Route::post('person/edit/{id?}',[PersonController::class, 'update']);

Route::get('person/del/{id?}',[PersonController::class, 'delete']);
Route::post('person/del/{id?}',[PersonController::class, 'remove']);

//Boards
Route::get('board', [BoardController::class, 'index']);

Route::get('board/add', [BoardController::class, 'add']);
Route::post('board/add', [BoardController::class, 'careate']);


Route::get('kadai2', [Kadai2Controller::class, 'index']);
Route::post('kadai2',[Kadai2Controller::class, 'jyanken']);
