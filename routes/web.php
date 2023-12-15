<?php

use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\Teacher\TeacherController;
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

Route::resource(
    'users' , UserController::class,
);
Route::resource(
    'teachers' , TeacherController::class,
);
