@extends('Admin.admin_dashboard')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Teacher Details</h4>
      <div class="form-group">
          <label for="teacherNumber">Teacher Number</label>
          <p>{{ $teacher->teacher_number }}</p>
      </div>
      <div class="form-group">
          <label for="teacherName">Teacher Name</label>
          <p>{{ $teacher->teacher_name }}</p>
      </div>
      <!-- Add other fields as needed -->
      <div class="form-group">
          <label for="teacherImage">Teacher Image</label>
          <br>
          <img src="{{ asset('storage/'.$teacher->image) }}" alt="Teacher Image" width="100px" height="100px">
      </div>
      <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
    </div>
  </div>
</div>

@endsection
