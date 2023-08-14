<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Management\ClassController;
use App\Http\Controllers\Management\ScheduleController;
use App\Http\Controllers\Management\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Tuition\TuitionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|------------------------HomeController-----------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to theHomeController "web" middleware group. Make something great!
|
*/

// TEST
Route::get('', [HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('Clients.home');
// })->name('home');


//Đăng nhập - Đăng ký
Route::get('login', function (){
    return view('Admin.Pages.Login.login');
})->name('login');

Route::get('register', function (){
    return view('Admin.Pages.Register.register');
})->name('register');

// Quản lý lớp học
Route::get('class', [ClassController::class, 'index'])->name('class');
Route::get('addclass', [ClassController::class, 'create'])->name('addclass');

// Quản lý học sinh
Route::get('student', [StudentController::class, 'index'])->name('student');
Route::get('addstudent', [StudentController::class, 'create'])->name('addstudent');

// Quản lý thời khóa biểu
Route::get('schedule', [ScheduleController::class, 'index'])->name('schedule');

//Quản lý việc thu học phí
Route::get('tuition', [TuitionController::class, 'index'])->name('tuition');
Route::get('addtuition', [TuitionController::class, 'create'])->name('addtuition');

