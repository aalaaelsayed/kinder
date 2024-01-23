<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\KinderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeacherController;

use App\Http\Controllers\ClassesController;




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
// Route::get('index', function () {
//     return view('index');
// })->name('index');
//////////////////////////
Route::fallback(function () {
    return view('404');
});
//////////////////////
// Route::get('about', function () {
//     return view('about');
// })->name('about');
// Route::get('contact', function () {
//     return view('contact');
// })->name('contact');
// Route::get('testimonial', function () {
//     return view('testimonial');
// })->name('testimonial');
// Route::get('team', function () {
//     return view('team');
// })->name('team');
// Route::get('classes', function () {
//     return view('classes');
// })->name('classes');
// Route::get('appointment', function () {
//     return view('appointment');
// })->name('appointment');
// Route::get('facilities', function () {
//     return view('facilities');
// })->name('facilities');
// Route::get('callAction', function () {
//     return view('callAction');
// })->name('callAction');



//////////////////////////////
Route::get('/index', [KinderController::class, 'index'])->name('index');
Route::get('/team', [KinderController::class, 'team'])->name('team');
Route::get('/about', [KinderController::class, 'about'])->name('about');
Route::get('/contact', [KinderController::class, 'contact'])->name('contact');
Route::get('/facilities', [KinderController::class, 'facilities'])->name('facilities');
Route::get('/testimonial', [KinderController::class, 'testimonial'])->name('testimonial');
Route::get('/appointment', [KinderController::class, 'appointment'])->name('appointment');
Route::get('/classess', [KinderController::class, 'classes'])->name('classess');
Route::get('callAction', [KinderController::class, 'action'])->name('callAction');
//Route::fallback('/404', [KinderController::class, 'error'])->name('404');
Route::post('imageUpload',[ImageController::class,'upload'])->name('imageUpload');
////////////////////////////////////////////////////////////////////
Route::get('Appointmentindex', [AppointmentController::class, 'create'])->name('Appointmentindex');
Route::get('appointmentindexxx',[AppointmentController::class,'index']);
Route::post('Appointmentlist', [AppointmentController::class, 'store'])->name('Appointmentlist');
Route::post('test30',[AppointmentController::class,'sandemail'])->name('test30');


/////////////////////////////////
Route::post('test60',[ContactController::class,'sandemail'])->name('test60');

//////////////////////////////////

Route::get('callAction', [KinderController::class, 'action'])->name('callAction');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//////////////////////////////

