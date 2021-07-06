<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\Kadai2Controller;

Route::get('hello', [HelloController::class, 'index']);
Route::get('hello/add', [HelloController::class, 'add']);
Route::post('hello/add', [HelloController::class, 'create']);
Route::get('hello/edit/{id?}', [HelloController::class, 'edit']);
Route::post('hello/edit/{id?}', [HelloController::class, 'update']);
Route::get('hello/del/{id?}', [HelloController::class, 'del']);
Route::post('hello/del/{id?}', [HelloController::class, 'remove']);

Route::get('kadai2', [Kadai2Controller::class, 'index']);
Route::post('kadai2',[Kadai2Controller::class, 'jyanken']);
