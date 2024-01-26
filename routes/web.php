<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', [TodoController::class, 'Index']);
Route::get('/new-todo', [TodoController::class, 'Create']);
Route::post('/store-todo', [TodoController::class, 'Store']);
Route::get('/todos/{id}', [TodoController::class, 'Show']);
Route::get('/todos/edit/{id}', [TodoController::class, 'Edit']);
Route::post('/todos/update/{id}', [TodoController::class, 'Update']);
Route::get('/todos/delete/{id}', [TodoController::class, 'Destroy']);
Route::get('/todos/complete/{id}', [TodoController::class, 'Complete']);
