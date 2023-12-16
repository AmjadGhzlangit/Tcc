<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Course\CourseController;
use App\Http\Controllers\Admin\DailySchedule\DailyScheduleController;
use App\Http\Controllers\Admin\Teacher\TeacherController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Teacher\Student\StudentController;
use App\Http\Controllers\Teacher\Student\TeacherController as StudentTeacherController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\UserController as UserUserController;
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

Route::prefix('samer')->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    });
});


Route::get('/course/{name}', [UserUserController::class , 'getCourse'])->name('course.show');
Route::post('/submit-grades', [UserUserController::class , 'submit'])->name('submit.grades');
Route::get('course/single', function () {
    return view('User.Pages.course-single');
})->name('home');
Route::get('/', function () {
    return view('User.index');
})->name('home');

Route::prefix('user')->group(function () {
    Route::get('login', [AuthController::class,'create'])->name('user.create');  
    Route::post('login', [AuthController::class,'login'])->name('user.login');  
});

Route::prefix('teacher')->group(function () {
    // Route::resource('students', StudentController::class)->names('students');
    Route::resource('courses', StudentTeacherController::class)->names('courses');
    Route::get('get-student',[StudentTeacherController::class,'getStudent']);
    // Route::resource('dailySchedules', DailyScheduleController::class)->names('dailySchedules');
});
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
