<?php

use App\Http\Controllers\CaisseController;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\HommeController;
use App\Http\Controllers\MaladeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployersController;
use App\Http\Controllers\PharmacieController;
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

Route::get('/test', function () {
    return view('welcome');
})->name('test');


// Route::get('/', [HommeController::class, 'index'])->name('welcome');

//home
Route::get('/', [EmployersController::class, 'listedocteur'])->name('listedoc');

Route::get('/dashboard',  [MaladeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboarde',  [MaladeController::class, 'index2'])->middleware(['auth', 'verified'])->name('dashboarde');

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

//Pharmacie
Route::get('/pharmacie', [PharmacieController::class, 'index'])->name('pharmacie.index');
Route::post('/pharmacies', [PharmacieController::class, 'store'])->name('pharmacie.store');
Route::put('/pharmacies/{id}', [PharmacieController::class, 'update'])->name('pharmacie.update');


//Malade
Route::post('/malade', [MaladeController::class, 'store'])->name('malade');
// Route::get('/', [MaladeController::class, 'index'])->name('malade');


//route chambres

Route::get('/client', [MaladeController::class, 'index2'])->name('client');

//suppression 

Route::delete('/malade/{id}', [MaladeController::class, 'destroy'])->name('malade.destroy');

// Route::get('/chambre-status/{id}', [MaladeController::class, 'getChambreStatus']);

// Route::post('/mark-room-as-free/{id}', [MaladeController::class, 'markRoomAsFree'])->name('mark-room-as-free');

//payment
Route::post('/caisse.addMoney', [CaisseController::class, 'addMoney'])->name('caisse.addMoney');
// Route::get('/dashboard', [ChambreController::class, 'accueil'])->name('process');
// routes/web.php

Route::post('/medicament/update-quantities', [MaladeController::class, 'updateQuantities'])->name('medicament.updateQuantities');


require __DIR__.'/auth.php';
