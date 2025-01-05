<?php

use App\Http\Controllers\ProfileController;
use App\Models\Character;
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

require __DIR__.'/auth.php';

//home
Route::get('/', function () {
    return view('home');
});
//
Route::get('/active/support', function () {
    return view('active/support');
})->name('support');
Route::get('/active/contact', function () {
    return view('active/contact');
})->name('contact');

Route::get('query/orm', function () {
    $characters = Character::get();
    // $products = Product::where('price', '>', 100)->get();
    return view('chart', compact('characters'));
});

