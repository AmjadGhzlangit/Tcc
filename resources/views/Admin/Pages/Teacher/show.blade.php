@extends('Admin.admin_dashboard')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title" style="font-weight: bold; font-size: 20px;">Teacher Details</h4>
      <div class="form-group">
          <label for="teacherNumber" style="font-weight: bold; font-size: 16px;">Teacher Number</label>
          <p style="font-size: 18px;">{{ $teacher->teacher_number }}</p>
      </div>
      <div class="form-group">
          <label for="teacherName" style="font-weight: bold; font-size: 16px;">Teacher Name</label>
          <p style="font-size: 18px;">{{ $teacher->teacher_name }}</p>
      </div>
      <!-- Add other fields as needed -->
      <div class="form-group">
          <label for="teacherImage" style="font-weight: bold; font-size: 16px;">Teacher Image</label>
          <br>
          <img src="{{ asset('storage/'.$teacher->image) }}" alt="Teacher Image" width="100px" height="100px">
      </div>
      <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
    </div>
  </div>
</div>

@endsection
