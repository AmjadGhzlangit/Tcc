@extends('Admin.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Course</h4>
                    <p class="card-description">
                        Update course details
                    </p>
                    <form class="forms-sample" action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
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
                            <label for="courseName">Course Name</label>
                            <input type="text" value="{{ $course->course_name }}" class="form-control" id="courseName" name="course_name" placeholder="Course Name">
                        </div>
                        <div class="form-group">
                            <label for="courseableType">Courseable Type</label>
                            <select class="form-control" id="courseableType" name="courseable_type">
                                <option value="App\Models\Teacher" @if($course->courseable_type == 'App\Models\Teacher') selected @endif>Teacher</option>
                                <!-- Add other types as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="courseableId">Courseable ID</label>
                            <input type="number" class="form-control" value="{{ $course->courseable_id }}" id="courseableId" name="courseable_id" placeholder="Courseable ID">
                        </div>
                        <div class="form-group">
                            <label for="courseYear">Year</label>
                            <input type="date" class="form-control" value="{{ $course->year }}" id="courseYear" name="year" placeholder="Year">
                        </div>
                        <div class="form-group">
                            <label for="courseSemester">Semester</label>
                            <select class="form-control" id="courseSemester" name="semester">
                                <option value="Semester One" @if($course->semester == 'Semester One') selected @endif>Semester One</option>
                                <option value="Semester Two" @if($course->semester == 'Semester Two') selected @endif>Semester Two</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
