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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/se-co', function () {
    return view('se-co');
});

Route::get('/connection', function () {
    return view('connection');
});

Route::get('/compte-client', function () {
    return view('compte-client');
});

Route::get('/compte-artiste', function () {
    return view('compte-artiste');
});

Route::get('/info', function () {
    return view('info');
});
