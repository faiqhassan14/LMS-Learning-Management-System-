<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
// Protected Routes
// Route grouop for teacher dashboard
Route::prefix('/teacher')->middleware('auth')->group(function (){
    Route::view('/dashboard', 'teachers.pages.Dashboard')->name('dashboard');
    Route::view('upload', 'teachers.pages.upload-assignment')->name('upload-assignment');
    Route::view('/attendance', 'teachers.pages.attendence')->name('attendance');

    Route::post('/upload-assignment', [AssignmentController::class, 'UploadAssignment']);
});
// Protected Routes
// Route for Admin-Dashboard
Route::prefix('/admin')->middleware('auth')->group(function (){
    Route::view('/add-user', 'admin.pages.add-user');
    Route::post('/add-user', [AdminController::class, 'AddUser']);
});


// Public Routes
Route::view('/', 'welcome')->name('home')->middleware('guest');

Route::prefix('/user')->group(function(){
    Route::post('/login',[UserController::class, 'Login']);
});