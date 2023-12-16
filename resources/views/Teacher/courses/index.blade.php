@extends('Admin.admin_dashboard')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    @if (session('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
    @endif
    @if (session('delete'))
      <div class="alert alert-danger">
          {{ session('delete') }}
      </div>
    @endif
    <div class="card-body">
      <h4 class="card-title">Course table</h4>
      <div class="table-responsive pt-3">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Course Name</th>
              <th>Teacher Name</th> 
              <th>Course Department</th>
              <th>Course Year</th>
              <th>Course Semester</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($courses as $course )
              <tr>
                <td>{{ $course->course_name }}</td>
                <td>
                  @if ($course->courseable)
                      {{ $course->courseable->teacher_name }}
                  @else
                      N/A 
                  @endif
              </td> 
                <td>{{ $course->department }}</td>
                <td>{{ $course->year }}</td>
                <td>{{ $course->semester }}</td>
              </tr>
            @empty
              <p>No Course found</p>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
