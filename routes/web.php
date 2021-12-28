<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
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

/*Route::get('/', function () {
    return view('front-page');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/users', function () {
//     return view('users');
// })->middleware(['auth'])->name('users');

Route::get('/users', [UserController::class, 'show'])->middleware(['auth'])->name('users');
Route::get('/show', [UserController::class, 'show'])->middleware(['auth'])->name('show');
Route::get('/create', [UserController::class, 'create'])->middleware(['auth'])->name('create');
Route::get('/edit/{id}', [UserController::class, 'edit'])->middleware(['auth'])->name('edit');
Route::patch('/update/{id}', [UserController::class, 'update'])->middleware(['auth'])->name('update');
Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->middleware(['auth'])->name('destroy');
Route::post('/store', [UserController::class, 'store'])->middleware(['auth'])->name('store');
//Route::get('/create', [UserController::class, 'roles'])->middleware(['auth'])->name('create');
//Route::get('changepassword', function() { $user = \App\Models\User::where('email', 'test@test.com')->first(); $user->password = Hash::make('123456'); $user->save();  echo 'Password changed successfully.'; });

//Route for products
Route::get('/', [ProductController::class, 'show']);
Route::resource('products', \App\Http\Controllers\ProductController::class);
//Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products');
//Route::get('/products', [UserController::class, 'show'])->middleware(['auth'])->name('products');
//Route::get('/show', [UserController::class, 'show'])->middleware(['auth'])->name('show');
//Route::get('/create', [UserController::class, 'create'])->middleware(['auth'])->name('create');
//Route::get('/edit/{id}', [UserController::class, 'edit'])->middleware(['auth'])->name('edit');
//Route::patch('/update/{id}', [UserController::class, 'update'])->middleware(['auth'])->name('update');
//Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->middleware(['auth'])->name('destroy');
//Route::post('/store', [UserController::class, 'store'])->middleware(['auth'])->name('store');


require __DIR__.'/auth.php';
