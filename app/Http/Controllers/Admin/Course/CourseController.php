<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\StoreCourseRequest;
use App\Http\Requests\Admin\Course\UpdateCourseRequest;
use App\Models\Course;
use App\Models\Teacher;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('Admin.Pages.Course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::all(); // Retrieve all teachers

        return view('Admin.Pages.Course.add_course', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $course_data = $request->validated();

        $courses =  Course::create($course_data);
        return redirect()->route('courses.index', compact('courses'))->with('message', 'Course Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('Admin.Pages.Course.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('Admin.Pages.Course.edit_course', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course_data = $request->validated();

        $course->update($course_data);
        return redirect()->route('courses.index')->with('message', 'Course Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')->with('delete', 'Course deleted Successfully');;
    }
}
