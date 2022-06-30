<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TodoController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(TodoController::class)->group(function(){
	Route::get('/todos', 'index');
	Route::post('/todos', 'store');
	Route::get('todos/{id}', 'show');
	Route::put('todos/{id}', 'update');
	Route::delete('todos/{id}', 'delete');
	
});
