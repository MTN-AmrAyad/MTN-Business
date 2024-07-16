<?php

use App\Http\Controllers\BiGrowthBookController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::controller(TaskController::class,)->group(function () {
    // Route::get('tasks', 'index');
    // Route::get('/tasks/{id}', 'show');
    // Route::post('/tasks/{id}', 'update');
    // Route::delete('/tasks/{id}', 'destroy');

    Route::get('allTasks/{dep}', 'allTasks');
    Route::post('tasks', 'store');
});
// api for request book 
Route::controller(BiGrowthBookController::class,)->group(function () {

    Route::get('biGrowthBook', 'index');
    Route::post('biGrowthBook', 'store');
});
