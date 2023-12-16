<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Teacher\StoreTeacherRequest;
use App\Http\Requests\Admin\Teacher\UpdateTeacherRequest;
use App\Models\Teacher;

class TeacherController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $teachers= Teacher::all();
         return view('Admin.Pages.Teacher.index' ,compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Pages.Teacher.add_Teacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {
        $Teacher_data = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storePubliclyAs('public', $imageName);
            $Teacher_data['image'] = $imageName;
        }
        $Teachers =  Teacher::create($Teacher_data);
        return redirect()->route('teachers.index',compact('Teachers'))->with('message','Teacher Added  Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('Admin.Pages.Teacher.show' ,compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('Admin.Pages.Teacher.edit_teacher' ,compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        $teacher_data = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storePubliclyAs('public', $imageName);
            $teacher_data['image'] = $imageName;
        }
        $teacher->update($teacher_data);
        return redirect()->route('teachers.index')->with('message','Teacher Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('teacher.index')->with('delete','Teacher deleted Successfully');;
    }
}
