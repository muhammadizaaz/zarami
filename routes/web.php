<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TablesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/activity-list', function () {
    return view('activity-list');   
});

//test route

Route::get('/test', function () {
    return view('test');
});

Route::get('/upload-file', function () {
    return view('student.upload-file');
});

Route::get('/profile', function () {
    return view('lecturer.profile');
});

Route::get('/table', function () {
    return view('lecturer.applicant');
});

Route::get('/dashboard', function () {
    return view('lecturer.dashboard');
});


//auth route for lecturer
Route::group(['middleware' => ['auth', 'role:lecturer']], function() { 
    Route::get('/lecturer/dashboard',[DashboardController::class,'index'])->name('lecturer.dashboard');
    Route::get('/lecturer/profile',[DashboardController::class,'edit'])->name('lecturer.profile');
    Route::put('/lecturer/profile',[DashboardController::class,'update'])->name('lecturer.profile.update');
    
    //activity
    Route::get('/lecturer/my-activity',[ActivityController::class,'index'])->name('lecturer.my-activity');
    Route::get('/lecturer/my-activity/create',[ActivityController::class,'create'])->name('lecturer.my-activity.create');
    Route::post('/lecturer/my-activity',[ActivityController::class,'store'])->name('lecturer.my-activity.store');
    Route::get('/lecturer/my-activity/{id}/edit',[ActivityController::class,'edit'])->name('lecturer.my-activity.edit');
    Route::put('/lecturer/my-activity/{id}',[ActivityController::class,'update'])->name('lecturer.my-activity.update');
    Route::delete('/lecturer/my-activity/{id}',[ActivityController::class,'destroy'])->name('lecturer.my-activity.destroy');
});

// for student
Route::group(['middleware' => ['auth', 'role:student']], function() { 
    Route::get('/student/dashboard', [DashboardController::class, 'index'])->name('student.dashboard');
    Route::get('/student/profile',[DashboardController::class,'profile'])->name('student.profile');
});

require __DIR__.'/auth.php';
