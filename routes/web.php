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
    return view('welcome');
});
Route::get('index', function () {
    return view('index');
})->name('index');
Route::get('404', function () {
    return view('404');
})->name('404');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('testimonial', function () {
    return view('testimonial');
})->name('testimonial');
Route::get('team', function () {
    return view('team');
})->name('team');
Route::get('classes', function () {
    return view('classes');
})->name('classes');
Route::get('appointment', function () {
    return view('appointment');
})->name('appointment');
Route::get('facilities', function () {
    return view('facilities');
})->name('facilities');
Route::get('callAction', function () {
    return view('callAction');
})->name('callAction');






