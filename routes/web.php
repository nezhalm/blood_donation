<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;


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
    return view('auth.login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/navbar', function () {
    return view('navbar');
});
Route::get('/centres', function () {
    return view('admin.centres');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class , 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class , 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class , 'destroy'])->name('profile.destroy');
    Route::get('users', [adminController::class , 'users'])->name('users.users');
    Route::get('centres', [adminController::class , 'centres'])->name('centres.centres');
    Route::get('add_centre', [adminController::class , 'formec'])->name('add_centre.formec');
    Route::post('addCentre', [adminController::class , 'add'])->name('addCentre.add');
    Route::post('centre.archive/{id}', [adminController::class , 'archive'])->name('centre.archive');
    Route::delete('delete_centre/{id}', [adminController::class , 'delete'])->name('delete_centre.delete');
    Route::get('rendez-vous', [adminController::class , 'index'])->name('rendez-vous.index');

});


require __DIR__.'/auth.php';
