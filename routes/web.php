<?php

use App\Http\Controllers\Admin\CourseOutlineController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Admin\CousreController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CousreController as AdminCousreController;
use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\CousreController as PagesCousreController;
use App\Http\Controllers\RatingController;
use App\Models\Courses\CourseOutline;

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/contact',[ContactController::class,'index'])->name('pages.contact');
Route::post('/contact',[ContactController::class,'store'])->name('pages.contact.store');

Route::get('/course',[PagesCousreController::class,'index'])->name('pages.courses');
Route::get('/course/{id}',[PagesCousreController::class,'show'])->name('pages.course_details');

Route::get('about',[AboutController::class,'index'])->name('pages.about');

Route::post('/review/{id}', [RatingController::class,'store'])->name('course.review');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['middleware' => ['auth', 'adminstration']], function() {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.index');


    Route::get('/courses',[CousreController::class,'index'])->name('admin.view_courses');
    Route::get('/courses/create',[CousreController::class,'create'])->name('admin.create_courses');
    Route::post('/courses',[CousreController::class,'store'])->name('admin.store_courses');
    Route::get('/courses/{id}/edit',[CousreController::class,'edit'])->name('admin.edit_courses');
    Route::put('/courses/{id}/update',[CousreController::class,'update'])->name('admin.update_courses');
    Route::get('/courses/{id}',[CousreController::class,'destroy'])->name('admin.delete_courses');


    Route::get('/courses-outline',[CourseOutlineController::class,'index'])->name('admin.view_course_outlines');
    Route::get('/courses-outline/create',[CourseOutlineController::class,'create'])->name('admin.create_course_outlines');
    Route::post('/courses-outline',[CourseOutlineController::class,'store'])->name('admin.store_course_outlines');
    Route::get('/courses-outline/{id}/edit',[CourseOutlineController::class,'edit'])->name('admin.edit_course_outlines');
    Route::put('/courses-outline/{id}/update',[CourseOutlineController::class,'update'])->name('admin.update_course_outlines');
    Route::get('/courses-outline/{id}',[CourseOutlineController::class,'destroy'])->name('admin.delete_course_outlines');
  });

require __DIR__.'/auth.php';
