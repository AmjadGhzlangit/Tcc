@extends('Admin.admin_dashboard')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
 
  <div class="card">
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
    <div class="card-body">
      <h4 class="card-title">Daily Schedules Table</h4>
      <div class="table-responsive pt-3">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Day Name</th>
              <th>Course Name</th>
              <th>Teacher Name</th>
              <th>Location</th>
              <th>Start Time</th>
              <th>End Time</th>
              <th colspan="3" class="text-center">Options</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($dailySchedules as $schedule)
            <tr>
              <td>{{ $schedule->day_name }}</td>
              <td>{{ $schedule->course->course_name }}</td>
              <td>{{ $schedule->teacher->teacher_name }}</td>
              <td>{{ $schedule->location }}</td>
              <td>{{ $schedule->start_time }}</td>
              <td>{{ $schedule->end_time }}</td>
              <td>
                <form action="{{ route('dailySchedules.destroy', $schedule->id) }}" method="POST">
                  @csrf
                  @method('delete')
                  <input type="submit" class="btn btn-danger btn-rounded btn-fw" value="Delete">
                </form>
              </td>
              <td>
                <form action="{{ route('dailySchedules.edit', $schedule->id) }}" method="GET">
                  @csrf
                  <input type="submit" class="btn btn-success btn-rounded btn-fw " value="Edit">
                </form>
              </td>
            </tr>
            @empty
              <p>No Daily Schedules found</p>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
