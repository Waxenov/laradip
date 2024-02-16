<?php
use App\Livewire\Counter;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/loading', function () {
        return view('loading');
    })->name('loading');

    Route::get('/orders', function () {
        return view('orders');
    })->name('orders');

    Route::get('/cargo', function () {
        return view('cargo');
    })->name('cargo');

    Route::get('/truck', function () {
        return view('truck');
    })->name('truck');

    Route::get('/auction', function () {
        return view('auction');
    })->name('auction');
});
