<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function (){
    Route::view('/new-view', 'paymentView')->name('paymentView');
});

Route::middleware('auth')->group(function () {
    Route::get('/products', [productController::class, 'addProducts']);
    Route::get('/products/add', [productController::class, 'addProducts']);
    Route::post('/products/store', [productController::class, 'store']);
    Route::get('/products/edit/{id}', [productController::class, 'edit']);
    Route::put('/products/update/{id}', [productController::class, 'update']);
    Route::get('/products/delete/{id}', [productController::class, 'destroy']);
    Route::get('/stocks', [stockController::class, 'index' ]);
    Route::get('/stocks/add', [stockController::class, 'addStock']);
    Route::post('/stocks/store', [stockController::class, 'store']);
    Route::get('/stocks/edit/{id}', [stockController::class, 'edit']);
    Route::put('/stocks/update/{id}', [stockController::class, 'update']);
    Route::get('/stocks/delete/{id}', [stockController::class, 'destroy']);
});

require __DIR__.'/auth.php';
