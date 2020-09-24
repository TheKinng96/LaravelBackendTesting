<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('main');
});

Route::get('products', [ProductController::class, 'Index'])->name('product.index');

Route::get('create', [ProductController::class, 'Create'])->name('create.product');

Route::get('edit/product/{id}', [ProductController::class, 'Edit']);

Route::post('store', [ProductController::class, 'Store'])->name('product.store');

Route::post('update/product/{id}', [ProductController::class, 'Update']);

Route::get('delete/product/{id}', [ProductController::class, 'Delete']);

Route::get('show/product/{id}', [ProductController::class, 'Show']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
