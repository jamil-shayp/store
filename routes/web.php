<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProfileController;
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
//composer require laravel/breeze --dev
// php artisan breeze:install

Route::get('/dashboard/index',[DashboardController::class,'index' ])
->name('dashboard.index');
//->middleware('auth');

Route::get('/dashboard/login',[DashboardController::class,'index']);

// ------------------------- Add Sana's route test start

Route::get('/test', function () {
    return view('sana test');
});

// ------------------------- Add Sana's route test End

// ------------------------- Add route test start
Route::get('/test', function () {
    return 'test route';
});

// ------------------------- Add route test end

Route::get('/', function () {
    return view('welcome');
});

// ------------------------- Add Raghad's route test start
Route::get('/raghadpage', function () {
    return view('raghadpage');
});
// ------------------------- Add Raghad's route test end

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
