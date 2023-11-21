<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProfileController;

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
    
});

Route::middleware('role:admin')->group(function () {
    Route::get('/halamana');
});

Route::middleware('role:user')->group(function () {
    //semua route untuk user disini
});

Route::middleware('role:petugas')->group(function () {
    //semua route untuk petugas disini
});

Route::resource('faculties', FacultyController::class);
Route::resource('prodis', ProdiController::class);
require __DIR__.'/auth.php';
