@extends('Admin.admin_dashboard')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Teacher</h4>
      <form class="forms-sample" action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
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
              <label for="teacherNumber">Teacher Number</label>
              <input type="text" class="form-control" id="teacherNumber" name="teacher_number" value="{{ old('teacher_number', $teacher->teacher_number) }}" placeholder="Teacher Number">
          </div>
          <div class="form-group">
              <label for="teacherName">Teacher Name</label>
              <input type="text" class="form-control" id="teacherName" name="teacher_name" value="{{ old('teacher_name', $teacher->teacher_name) }}" placeholder="Teacher Name">
          </div>
          <!-- Add other fields as needed -->

          <div class="form-group">
              <label for="teacherImage">Teacher Image</label>
              <input type="file" class="form-control" id="teacherImage" name="image" placeholder="Teacher Image">
             
          </div>

          <button type="submit" class="btn btn-primary me-2">Update</button>
      </form>
      <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>

    </div>
  </div>
</div>

@endsection
