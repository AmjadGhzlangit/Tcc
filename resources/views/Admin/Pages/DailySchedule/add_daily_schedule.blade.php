@extends('Admin.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daily Schedule Creation Form</h4>
                    <p class="card-description">Fill in the details to create a new daily schedule.</p>
                    <form class="forms-sample" action="{{ route('dailySchedules.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                            <input type="text" class="form-control" id="dayName" name="day_name" placeholder="Day Name">
                        </div>
                        <div class="form-group">
                            <label for="courseSemester">Department</label>
                            <select class="form-control" id="courseSemester" name="department">
                                <option value="Software Engineering">Software Engineering</option>
                                <option value="Software Engineering">Network Engineering</option>
                                <option value="Software Engineering">Computer Engineering</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="courseId">Course</label>
                            <select class="form-control" id="courseId" name="course_id">
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="teacherId">Teacher</label>
                            <select class="form-control" id="teacherId" name="teacher_id">
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Location">
                        </div>
                        <div class="form-group">
                            <label for="startTime">Start Time</label>
                            <input type="time" class="form-control" id="startTime" name="start_time" placeholder="Start Time">
                        </div>
                        <div class="form-group">
                            <label for="endTime">End Time</label>
                            <input type="time" class="form-control" id="endTime" name="end_time" placeholder="End Time">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
