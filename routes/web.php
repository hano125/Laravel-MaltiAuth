<?php

use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Back\backController;
use App\Http\Controllers\frontController;
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

//FRONT DESGIN
Route::prefix("front")->name('front.')->middleware('auth')->group(function(){
    Route::get("/",frontController::class)->name('index');
    Route::get("/register",function(){
        return view('back.register');
    });
    Route::get("/login",function(){
        return view('back.login');
    });
});
require __DIR__.'/auth.php';
//ADMIN DESGIN




Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

