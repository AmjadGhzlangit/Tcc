<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\DailySchedule;
use App\Models\Grades;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getCourse($name)
    {
        $courses = Course::where('department', $name)->get();
        $dailySchedules = DailySchedule::where('department', $name)->get();
        return view('User.Pages.courses_show', compact('courses','dailySchedules'));
    }


    public function submit(Request $request)
    {
        $courseId =$request->get('course_id');
        $courses = Course::where('course_name', $courseId)->first();
        $dailySchedules = DailySchedule::where('department', $courses->department)->get();
        $grade = Grades::where('course_id', $courses->id)->first();
    
        // You may want to perform validation and store grades in the database here
    
        // Pass the data to the view
        return view('User.Pages.courses_show', compact('courses', 'dailySchedules' , 'grade'));
    }
}
