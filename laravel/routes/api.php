<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\apiControllers\users\getUsersController;
use App\Http\Controllers\apiControllers\users\getInfoUserController;
use App\Http\Controllers\apiControllers\users\editDataUserController;
use App\Http\Controllers\apiControllers\users\createUserController;

use App\Http\Controllers\apiControllers\tasks\getAllTasksController;

use App\Http\Controllers\apiControllers\tasks\getDataTaskController;

use App\Http\Controllers\apiControllers\tasks\updateDataTaskController;

use App\Http\Controllers\apiControllers\tasks\createTaskController;

use App\Http\Controllers\apiControllers\comments\getCommentsController;

use App\Http\Controllers\apiControllers\comments\addCommentController;

use App\Http\Controllers\apiControllers\notifications\getNotificationsController;

use App\Http\Controllers\apiControllers\notifications\checkNotificationController;






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['auth', 'verified'])->group(function () {

Route::get('/getUsers', getUsersController::class);

Route::get('/getInfoUser', getInfoUserController::class);

Route::post('/editDataUser', editDataUserController::class);

Route::post('/createUser', createUserController::class);

Route::get('/getAllTasks', getAllTasksController::class);


Route::get('/getDataTask', getDataTaskController::class);

Route::post('/updateDataTask',updateDataTaskController::class);

Route::post('/createTask', createTaskController::class);


Route::get('/getComments',getCommentsController::class);

Route::post('/addComment', addCommentController::class);


Route::get('/getNotifications', getNotificationsController::class);

Route::post('/checkNotification', checkNotificationController::class);

});