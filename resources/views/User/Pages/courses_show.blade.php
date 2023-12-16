@extends('User.user_dashboard')

@section('content')
<div class="site-wrap">
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <p>
                        <h2 class="text-center">Schedule</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Course</th>
                                    <th>Teacher</th>
                                    <th>Location</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dailySchedules as $schedule)
                                    <tr>
                                        <td>{{ $schedule->day_name }}</td>
                                        <td>{{ $schedule->course->course_name }}</td>
                                        <td>{{ $schedule->teacher->teacher_name }}</td>
                                        <td>{{ $schedule->location }}</td>
                                        <td>{{ $schedule->start_time }}</td>
                                        <td>{{ $schedule->end_time }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                
                    </p>
                </div>
                <div class="col-lg-4 ml-auto align-self-center">
                        <h2 class="section-title-underline mb-5">
                            <span>Course Details</span>
                        </h2>
                      
                        <ul class="ul-check primary list-unstyled mb-5">
                            <li>Programming one</li>
                            <li>Programming Two</li>
                            <li>Math one</li>
                            <li>Math Two</li>
                        </ul>
                        <form action="{{ route('submit.grades') }}" method="post">
                            @csrf                          
                            <!-- Grade input fields for each assignment/exam -->
                            <div class="form-group">
                                <label for="assignment_1">course Name</label>
                                <input type="text" name="course_id"  class="form-control">
                            </div>
            
                            <!-- Add more input fields as needed for other assignments/exams -->
                            @isset($grade)
                            <a href="#" class="big mr-3"> Your Mark <span class="text-lg">{{ $grade->marks }}</span></a>
                        @endisset
                            <button type="submit" class="btn btn-primary">Submit Grades</button>
                        </form>
                      
                       
                    </div>
            </div>
        </div>
    </div>
</div> 

@endsection