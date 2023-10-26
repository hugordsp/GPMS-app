<?php

use App\Http\Controllers\Api\V1\ProjectController;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;


Route::post('register', [AuthController::class, 'createUser']);
Route::post('login', [AuthController::class, 'loginUser']);

Route::group(['prefix' => 'v1', 'middleware' => 'auth:sanctum'], function() {
    Route::apiResource('projects', ProjectController::class);
});


//Route::group(['prefix' => 'v1'] ,  function() {
//   Route::apiResource('projects', ProjectController::class);
//});
