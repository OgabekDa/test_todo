<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TasksController::class, 'show'])->name('tasks');

Route::get('/add', function(){
    return view('add');
})->name('add');

Route::post('/add_task', [TasksController::class, 'add']);  
Route::get('/done/{id}', [TasksController::class, 'done'])->name('done');
Route::get('/statist', [TasksController::class, 'sho'])->name('statist');
