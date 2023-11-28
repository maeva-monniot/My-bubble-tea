<?php

use App\Http\Controllers\BubbleController;
use App\Http\Controllers\Inscription;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Order;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Models\User;
use \App\Models\Bubble;
use App\Http\Controllers\Login;


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

Route::get('/order', [BubbleController::class, 'show'])->name('order');
Route::post('/order', [BubbleController::class, 'store']);

// dabord on get pour return la view en question, puis on post pour recup les donnée
Route::get('/register', [UserController::class, 'show']);
Route::post('/register', [UserController::class, 'store'])->name('register');

//Route::get('/profile', [UserController::class, 'show']);
//Route::post('/profile', [UserController::class, 'update']);

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::get('/orders', function () {
    return view('orders');
});


Route::get('/modal', function () {
    return view('modal');
});

Route::get('/cart', function () {
    return view('carttest');
});


// dabord on get pour return la view en question, puis on post pour recup les donnée 
Route::get('/register', [UserController::class, 'show']);
Route::post('/register', [UserController::class, 'store'])->name('register');


Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::get('/profile',function(){
    return view('profile');

});