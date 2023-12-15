<?php

use App\Http\Controllers\Admin\Course\CourseController;
use App\Http\Controllers\Admin\DailySchedule\DailyScheduleController;
use App\Http\Controllers\Admin\Student\StudentController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\TeacherController;
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
    return view('Admin.Pages.User.index');
});

Route::resources([
    'users' => UserController::class,
    'teachers' => TeacherController::class,
    'courses' => CourseController::class,
    'dailySchedules' => DailyScheduleController::class,
]);

