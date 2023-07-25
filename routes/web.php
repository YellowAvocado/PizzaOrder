<?php

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

Route::get('/pizzas', [\App\Http\Controllers\PizzaController::class, 'index'])->name('pizzas.index');
Route::get('/pizzas/{id}', [\App\Http\Controllers\PizzaController::class, 'show'])->name('pizzas.show');
/*
Route::get('/carts', [\App\Http\Controllers\CartController::class, 'index'])->name('carts.index');
Route::get('/carts', [\App\Http\Controllers\CartController::class, 'create'])->name('carts.create');
Route::post('/carts', [\App\Http\Controllers\CartController::class, 'store'])->name('carts.store');*/

Route::post('/orders', [\App\Http\Controllers\OrderController::class,'store'])->name('orders.store');
Route::get('/carts', [\App\Http\Controllers\OrderController::class, 'show'])->name('carts.index');


require __DIR__.'/auth.php';
