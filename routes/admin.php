<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ImageController;



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




   
});
?>