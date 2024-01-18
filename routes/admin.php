<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\TeacherController;

Route::prefix('admin')->group(function () {
    Route::get('addtest',[TestimonialController::class,'create'])->name('addtest');
    Route::post('imageUpload',[ImageController::class,'upload'])->name('imageUpload');
    Route::post('insert',[TestimonialController::class,'store'])->name('insert');
    Route::get('testimonials',[TestimonialController::class,'index'])->name('testimonials');
    Route::get('viewTestimoninals/{id}',[TestimonialController::class,'show'])->name('viewTestimoninals');
    Route::get('editTestimoninals/{id}',[TestimonialController::class,'edit'])->name('editTestimoninals');
    Route::put('updateTestimoninals/{id}',[TestimonialController::class,'update'])->name('updateTestimoninals');
    Route::get('deleteTestimoninals/{id}',[TestimonialController::class,'destroy']);
    Route::get('trashed',[TestimonialController::class,'trashed'])->name('trashed');
    Route::get('forceDelete/{id}',[TestimonialController::class,'forceDelete'])->name('forceDelete');
    Route::get('restoreTestimoninals/{id}',[TestimonialController::class,'restore'])->name('restoreTestimoninals');
    ///////////////////////
    Route::get('appointments',[AppointmentController::class,'index'])->name('appointments');
    Route::get('viewappointments/{id}',[AppointmentController::class,'show'])->name('viewappointments');
    Route::get('deleteAppointments/{id}',[AppointmentController::class,'destroy']);
    Route::get('trashedAppointments',[AppointmentController::class,'trashed'])->name('trashedAppointments');
    Route::get('forceDelete/{id}',[AppointmentController::class,'forceDelete'])->name('forceDelete');
    Route::get('restoreAppointments/{id}',[AppointmentController::class,'restore'])->name('restoreAppointments');
    ///////////////////////////
    Route::get('addClasse',[ClassesController::class,'create'])->name('addClasse');
    Route::post('storeClasses',[ClassesController::class,'store'])->name('storeClasses');
    Route::get('classeslist',[ClassesController::class,'index'])->name('classeslist');
    Route::get('showClasses/{id}',[ClassesController::class,'show'])->name('showclasses');
    Route::get('editClasses/{id}',[ClassesController::class,'edit'])->name('editClasses');
    Route::put('updateClasses/{id}',[ClassesController::class,'update'])->name('updateClasses');
    Route::get('deleteClasses/{id}',[ClassesController::class,'destroy']);
    Route::get('trashedclasses',[ClassesController::class,'trashed'])->name('trashedclasses');
    Route::get('forceDelete/{id}',[ClassesController::class,'forceDelete'])->name('forceDelete');
    Route::get('restoreclasses/{id}',[ClassesController::class,'restore'])->name('restoreclasses');
    //////////////////////////////////////

Route::get('addTeacher',[TeacherController::class,'create'])->name('addTeacher');
Route::post('storeTeacher',[TeacherController::class,'store'])->name('storeTeacher');
Route::get('teacherlist',[TeacherController::class,'index'])->name('teacherlist');
Route::get('editteachers/{id}',[TeacherController::class,'edit'])->name('editteachers');
Route::put('updateachers/{id}',[TeacherController::class,'update'])->name('updateachers');
 Route::get('showteacher/{id}',[TeacherController::class,'show'])->name('showteacher');
Route::get('deleteteacher/{id}',[TeacherController::class,'destroy']);
Route::get('trashedteacher',[TeacherController::class,'trashed'])->name('trashedteacher');
Route::get('forceDelete/{id}',[TeacherController::class,'forceDelete'])->name('forceDelete');
Route::get('restoreteacher/{id}',[TeacherController::class,'restore'])->name('restoreteacher');


   
});
?>