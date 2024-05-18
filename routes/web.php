<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\Usercontroller;
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



// User routes
Route::get('/adduser', [UserController::class, 'addUser'])->name('adduser');
Route::post('/storeuser', [UserController::class, 'storeUser'])->name('userstore');
Route::get('/viewadduser', [UserController::class, 'viewAddUser'])->name('viewadduser');
// Task routes
Route::get('/addtask', [UserController::class, 'createTask'])->name('createTask');
Route::post('/storetask', [UserController::class, 'storeTask'])->name('storetask');
Route::get('/tasklist', [UserController::class, 'taskList'])->name('tasklist');
