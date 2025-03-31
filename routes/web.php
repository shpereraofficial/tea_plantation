<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login'); // Redirect to login page
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/supplier', function () {
    return view('supplier.index');
})->name('supplier.index');

Route::get('/suppliers', function () {
    return view('supplier.list');
})->name('supplier.list');

Route::get('/suppliers/add', function () {
    return view('supplier.add');
})->name('supplier.add');


require __DIR__.'/auth.php';
