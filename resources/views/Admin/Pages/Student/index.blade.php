@extends('Admin.admin_dashboard')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Studnets table</h4>
      <div class="table-responsive pt-3">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Student Number</th>
              <th>Student Name</th>
              <th>Department</th>
              <th>Year</th>
              <th>Status</th>
              <th colspan="3" class="text-center">Options</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($students as $student )
            <tr>
              <td>
                {{ $student->id }}
              </td>
              <td>
                {{ $student->student_number }}
              </td>
              <td>
                {{ $student->user->first_name . ' ' . $student->user->last_name }}
              </td>
              <td>
                {{ $student->department }}
              </td>
              <td>  
                {{ $student->year }}
              </td>
              <td>
                {{ $student->status }}
              </td>
              <td>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('delete')
                <input type="submit" class="btn btn-danger btn-rounded btn-fw" value="Delete">
              </form>
            </td>
                <td>
                    <form action="{{ route('students.edit', $student->id) }}" method="GET">
                      @csrf
                  <input type="submit" class="btn btn-success btn-rounded btn-fw " value="Edit">
                </form>
                </td>
                <td>
                    <form action="{{ route('students.show', $student->id) }}" method="GET">
                      @csrf
                  <input type="submit" class="btn btn-secondary btn-rounded btn-fw" value="Show">
                </form>
                </td>
            </tr>
            @empty
              <p>No student found</p>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection