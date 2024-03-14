<?php

use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Storage;

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

Route::middleware('auth')->group(function () {
    Route::resource('estudiantes',StudentController::class);
});

Route::get('students', function(){
    return view ('students');
})->Middleware(['auth', 'verified'])->name('students');


Route::get('/admin', function () {
    return view('admin');
})->middleware(['age', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('formulario', [StudentController::class, 'formulario'])->name('formulario');

Route::post('formulario', [StudentController::class, 'store'])->name('formulario.store');

Route::view('/protegido', 'protegido')->name('protegido');

Route::resource('estudiantes',StudentController::class);

Route::get('/pdf', function(){
    //$pdf = App::make('dompdf.wrapper');
    //$pdf = app('dompdf.wrapper');

    $pdf =  PDF::loadView('reports/cardex', [
        'titulo' => 'este es mi titulo'
    ]);
    return $pdf -> stream();
});



Route::resource('asignaturas',SubjectController::class);
Route::get('reportes/{estudiantes}',[ReportsController::class,'print_cardex'])
->name('print_cardex');




require __DIR__.'/auth.php';
