<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', function () {
    $data = App\Models\Task::all();
    return view('task')->with('tasks', $data);
    // return view('task');
});

Route::post('/savetask', [TaskController::class, 'storedata']);

Route::get('/markascompleted/{id}', [TaskController::class, 'UpdateTask']);

Route::get('/markasnotcompleted/{id}', [TaskController::class, 'UpdateTaskAsNotCompleted']);

Route::get('/deletetask/{id}', [TaskController::class, 'DeleteTask']);

Route::get('/udpatedesctask/{id}', [TaskController::class, 'UpdateTaskDesc']);

// Route::post('/saveupdatedtask', [TaskController::class, 'SaveUpdatedTaskDesc']);

Route::post('/update',[TaskController::class, 'SaveUpdatedTaskDesc']);
