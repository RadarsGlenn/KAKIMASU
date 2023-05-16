<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
    return view('home');
});

Route::get('/se-co', function () {
    return view('se-co');
});

Route::match(['get', 'post'], '/compte', function ($pseudo = null) {
    return view('compte', compact('pseudo'));
})->name('compte');



Route::get('/connexion', function () {
    return view('connexion');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/home', function () {
    return view('home');
});

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::apiResource('products', ProductsController::class);
});