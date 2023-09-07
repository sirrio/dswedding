<?php

use App\Http\Controllers\AttendanceController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Landing', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'users' => \App\Models\User::all()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/gallery', [\App\Http\Controllers\GalleryController::class, 'show'])->name('gallery');

require __DIR__ . '/auth.php';
