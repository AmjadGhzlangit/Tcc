<?php

namespace App\Http\Controllers\Teacher\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Grades;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;

class TeacherController extends Controller
{
    /**
     * return courses for teacher
     *
     */
    /**
     * return courses for teacher
     */
    public function index()
    {
        $teacherId = auth()->user()->id;
        $courses = Course::where('courseable_id',$teacherId)->get();

        return view('Teacher.courses.index', compact('courses'));
    }

    public function getStudent()
    {
        $teacherId = auth()->user()->id;
        $teacher = Teacher::with('courses.grades.user')->where('id',$teacherId)->first();

        $course = $teacher->courses->first();
        $users = $course->grades->map(function ($grade) {
            return $grade->user;
        });
        $marks = $course->grades->map(function ($grade) {
            return $grade->marks;
        });
        return view('Teacher.students.index', compact('users','marks'));
    }

    // public function ()
    // {
           
    // }
}
