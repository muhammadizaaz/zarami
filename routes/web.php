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
    return view('manager.upload-file');
});

Route::get('/profile', function () {
    return view('admin.profile');
});

Route::get('/table', function () {
    return view('admin.applicant');
});

Route::get('/dashboard', function () {
    return view('manager.dashboard');
});

Route::get('/marketing/index', function() {
    return view('manager.marketing.index');
});

Route::get('/production/index', function() {
    return view('manager.production.index');
});

Route::get('/finance/index', function() {
    return view('manager.finance.index');
});

//auth route for admin
Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('/admin/profile',[DashboardController::class,'edit'])->name('admin.profile');
    Route::put('/admin/profile',[DashboardController::class,'update'])->name('admin.profile.update');



});

// for manager
Route::group(['middleware' => ['auth', 'role:manager']], function() { 
    Route::get('/manager/dashboard', [DashboardController::class, 'index'])->name('manager.dashboard');
    Route::get('/manager/profile',[DashboardController::class,'profile'])->name('manager.profile');
});


//for staff
Route::group(['middleware' => ['auth', 'role:staff']], function() { 
    Route::get('/staff/dashboard', [DashboardController::class, 'index'])->name('staff.dashboard');
    Route::get('/staff/profile',[DashboardController::class,'profile'])->name('staff.profile');
});


require __DIR__.'/auth.php';