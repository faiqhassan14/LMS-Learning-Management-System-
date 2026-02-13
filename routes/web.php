<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
// Protected Routes
// Route grouop for teacher dashboard
Route::prefix('/teacher')->middleware('auth')->group(function (){
    Route::view('/dashboard', 'teachers.pages.Dashboard')->name('dashboard');
    Route::view('/upload', 'teachers.pages.upload-assignment')->name('upload-assignment');
    Route::get('/get-relevant-batches', [BatchController::class, 'getRelevantBatches']);
    Route::view('/attendance', 'teachers.pages.attendence')->name('attendance');
    

    Route::post('/upload-assignment', [AssignmentController::class, 'UploadAssignment']);
});
// Protected Routes
// Route for Admin-Dashboard
Route::prefix('/admin')->middleware(['auth', 'admin'])->group(function (){
    Route::view('/add-user', 'admin.pages.add-user');
    Route::view('/dashboard', 'admin.pages.admin-dashboard');
    Route::view('/add-courses', 'admin.pages.add-course');
    Route::view('/add-batches', 'admin.pages.add-batches');

    Route::get('/add-batches', [CourseController::class, 'GetCourses']);
    Route::get('/add-user', [CourseController::class, 'GetCoursesUser']);
    Route::get('/get-relevant-batches', [BatchController::class, 'getRelevantBatches']);
    Route::get('/get-teachers', [BatchController::class,'getTeacher']);
    Route::get('/get-my-batches',[BatchController::class,'getMyBatches']);

    Route::post('/add-user', [AdminController::class, 'AddUser']);
    Route::post('add-course', [CourseController::class, 'AddCourse']);
    Route::post('/add-batch', [BatchController::class, 'AddBatch']);
});

Route::post('/logout', [UserController::class,'Logout']);


// Public Routes
Route::view('/', 'welcome')->name('login')->middleware('guest');

Route::prefix('/user')->group(function(){
    Route::post('/login',[UserController::class, 'Login']);
});

Route::prefix('/student')->middleware(['auth'])->group(function (){
    Route::view('/dashboard', 'student.pages.dashboard');
});