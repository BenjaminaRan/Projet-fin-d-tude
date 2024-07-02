<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Employee
Route::get('/employee', [EmployersController::class, 'index'])->name('employees.index');
Route::post('/employers', [EmployersController::class, 'store'])->name('employees.store');
Route::put('/employers/{id}', [EmployersController::class, 'update'])->name('employees.update');
Route::delete('/employers/{id}', [EmployersController::class, 'destroy'])->name('employees.destroy');

require __DIR__.'/auth.php';
