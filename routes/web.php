<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Course\CourseController;
use App\Http\Controllers\Admin\DailySchedule\DailyScheduleController;
use App\Http\Controllers\Admin\Teacher\TeacherController;
use App\Http\Controllers\Admin\User\UserController;
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
    return view('auth.login');
});

// Route::get('/home', function () {
//     return view('auth.login');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth' , 'is_admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('users', UserController::class)->names('users');
        Route::resource('teachers', TeacherController::class)->names('teachers');
        Route::resource('courses', CourseController::class)->names('courses');
        Route::resource('dailySchedules', DailyScheduleController::class)->names('dailySchedules');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
