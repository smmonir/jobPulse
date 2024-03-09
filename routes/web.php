<?php

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
    return view('pages.welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/jobs', function () {
    return view('pages.jobs');
});
Route::get('/contact', function () {
    return view('pages.contact');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admindashboard', [App\Http\Controllers\AdmindashboardController::class, 'index'])->name('admindashboard');