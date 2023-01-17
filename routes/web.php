<?php

use App\Http\Controllers\CatatanPerjalananController;
use App\Http\Controllers\ProfileController;
use App\Models\CatatanPerjalanan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
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

require __DIR__.'/auth.php';


// get, post, put, delete
Route::get('/home', [CatatanPerjalananController::class, 'index'])->name('home');
Route::get('/input', [CatatanPerjalananController::class, 'create'])->name('input');
Route::post('/input-store',[CatatanPerjalananController::class, 'store'])->name('input-store');
Route::get('/home/{id}', [CatatanPerjalananController::class, 'show'])->name('show');
