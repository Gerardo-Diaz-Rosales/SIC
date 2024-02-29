<?php

use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/dashboard', [AuthenticatedSessionController::class, 'dashboard'])
    ->middleware(['auth'])
    ->name('dashboard');


// Ruta para mostrar el formulario de registro de usuarios
Route::get('/register', [StudentController::class, 'index'])->middleware(['auth', 'verified'])->name('register');

// Ruta para procesar el formulario de registro de usuarios
Route::post('/register', [StudentController::class, 'store'])->middleware(['auth', 'verified']);

Route::get('students', function(){
    return view ('students');
})->Middleware(['auth', 'verified'])->name('students');


Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
