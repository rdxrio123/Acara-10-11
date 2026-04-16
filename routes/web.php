<?php

use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\DashboardController;
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

// Route::get('user', [ManagementUserController::class, 'index']);
Route::resource('user', ManagementUserController::class);

// Route::get("/home", function(){
//     return view("home");
// });


Route::resource('home', HomeController::class);
Route::resource('dashboard', DashboardController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
