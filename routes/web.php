<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Create something great!
|
*/

Route::get('/', [TodosController::class, 'liste']);
Route::post('/action/add', [TodosController::class, "saveTodo"]);
