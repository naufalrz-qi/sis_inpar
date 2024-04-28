<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\AdminController;
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

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/dashboard', 'dashboard')->name('admin.dashboard');
    });
});


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(DestinationsController::class)->group(function () {
        Route::get('/view/destinations', 'view')->name('view.destinations');
        Route::get('/add/destination', 'add')->name('add.destination');
        Route::post('/store/destination', 'store')->name('store.destination');
        Route::put('/update/destination/{id}', 'update')->name('update.destination');
        Route::get('/edit/destination/{id}', 'edit')->name('edit.destination');
        Route::get('/delete/destination/{id}', 'delete')->name('delete.destination');

    });
});

Route::controller(DestinationsController::class)->group(function () {
    Route::get('/destinations', 'viewMore')->name('viewmore.destinations');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
