<?php

namespace App\Http\Controllers\Admin\DailySchedule;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DailySchedule\StoreDailyScheduleRequest;
use App\Http\Requests\Admin\DailySchedule\UpdateDailyScheduleRequest;
use App\Models\Course;
use App\Models\DailySchedule;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DailyScheduleController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $dailySchedules = DailySchedule::all();
         return view('Admin.Pages.DailySchedule.index' ,compact('dailySchedules'));
    }

    public function create()
    {
        $courses = Course::all();
        $teachers = Teacher::all();
    
        return view('Admin.Pages.DailySchedule.add_daily_schedule', compact('courses', 'teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDailyScheduleRequest $request)
    {
        $dailySchedule_data = $request->validated();
        $dailySchedules =  DailySchedule::create($dailySchedule_data);
        return redirect()->route('dailySchedules.index',compact('dailySchedules'))->with('message','DailySchedule Added  Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DailySchedule $dailySchedule)
    {
        $courses = Course::all();
        $teachers = Teacher::all();
        return view('Admin.Pages.DailySchedule.edit_daily_schedule' ,compact('dailySchedule','courses', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDailyScheduleRequest $request, DailySchedule $dailySchedule)
    {
        $dailySchedule_data = $request->validated();
        $dailySchedule->update($dailySchedule_data);
        return redirect()->route('dailySchedules.index')->with('message','DailySchedule Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DailySchedule $dailySchedule)
    {
        $dailySchedule->delete();

        return redirect()->route('dailySchedules.index')->with('delete','DailySchedule deleted Successfully');;
    }
}
