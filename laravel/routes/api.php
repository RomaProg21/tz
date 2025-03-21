<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\apiControllers\users\getUsersController;
use App\Http\Controllers\apiControllers\users\getInfoUserController;
use App\Http\Controllers\apiControllers\users\editDataUserController;
use App\Http\Controllers\apiControllers\users\createUserController;

use App\Http\Controllers\apiControllers\tasks\getAllTasksController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/getUsers', getUsersController::class);

Route::get('/getInfoUser', getInfoUserController::class);

Route::post('/editDataUser', editDataUserController::class);

Route::post('/createUser', createUserController::class);

Route::get('/getAllTasks', getAllTasksController::class);