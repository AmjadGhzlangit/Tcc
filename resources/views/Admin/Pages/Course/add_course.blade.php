@extends('Admin.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Course Creation Form</h4>
                    <p class="card-description">Fill in the details to create a new course.</p>
                    <form class="forms-sample" action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label for="courseName">Course Name</label>
                            <input type="text" class="form-control" id="courseName" name="course_name" placeholder="Course Name">
                        </div>
                        <div class="form-group" id="courseableTypeGroup" style="display: none;">
                            <label for="courseableType">Courseable Type</label>
                            <select class="form-control" id="courseableType" name="courseable_type">
                                <option value="App\Models\Teacher">Teacher</option>
                                <!-- Add other types as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="courseableId">Teacher</label>
                            <select class="form-control" id="courseableId" name="courseable_id">
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="courseYear">Year</label>
                            <input type="date" class="form-control" id="courseYear" name="year" placeholder="Year">
                        </div>
                        <div class="form-group">
                            <label for="courseSemester">Semester</label>
                            <select class="form-control" id="courseSemester" name="semester">
                                <option value="Semester One">Semester One</option>
                                <option value="Semester Two">Semester Two</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="courseSemester">Department</label>
                            <select class="form-control" id="courseSemester" name="department">
                                <option value="Software Engineering">Software Engineering</option>
                                <option value="Software Engineering">Network Engineering</option>
                                <option value="Software Engineering">Computer Engineering</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
