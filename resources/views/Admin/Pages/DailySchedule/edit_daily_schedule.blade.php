@extends('Admin.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Daily Schedule</h4>
                    <p class="card-description">
                        Update daily schedule details
                    </p>
                    <form class="forms-sample" action="{{ route('dailySchedules.update', $dailySchedule->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="dayName">Day Name</label>
                            <input type="text" value="{{ $dailySchedule->day_name }}" class="form-control" id="dayName" name="day_name" placeholder="Day Name">
                        </div>
                        <div class="form-group">
                            <label for="courseId">Course</label>
                            <select class="form-control" id="courseId" name="course_id">
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}" @if($dailySchedule->course_id == $course->id) selected @endif>{{ $course->course_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="teacherId">Teacher</label>
                            <select class="form-control" id="teacherId" name="teacher_id">
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}" @if($dailySchedule->teacher_id == $teacher->id) selected @endif>{{ $teacher->teacher_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" value="{{ $dailySchedule->location }}" class="form-control" id="location" name="location" placeholder="Location">
                        </div>
                        <div class="form-group">
                            <label for="startTime">Start Time</label>
                            <input type="time" value="{{ \Carbon\Carbon::parse($dailySchedule->start_time)->format('H:i') }}" class="form-control" id="startTime" name="start_time">
                        </div>
                        <div class="form-group">
                            <label for="endTime">End Time</label>
                            <input type="time" value="{{ \Carbon\Carbon::parse($dailySchedule->end_time)->format('H:i') }}" class="form-control" id="endTime" name="end_time">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
