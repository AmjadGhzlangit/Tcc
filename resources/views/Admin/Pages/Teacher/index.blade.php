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
      <h4 class="card-title">Teachers Table</h4>
      <div class="table-responsive pt-3">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Teacher Number</th>
              <th>Teacher Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Major</th>
              <th>Contract Type</th>
              <th>Image</th>
              <th colspan="3" class="text-center">Options</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($teachers as $teacher)
              <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->teacher_number }}</td>
                <td>{{ $teacher->teacher_name }}</td>
                <td>{{ $teacher->phone }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->major }}</td>
                <td>{{ $teacher->contract_type }}</td>
                <td><img src="{{ asset('storage/'.$teacher->image) }}" alt="" width="30px" height="30px"></td>
                <td>
                  <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger btn-rounded btn-fw" value="Delete">
                  </form>
                </td>
                <td>
                  <form action="{{ route('teachers.edit', $teacher->id) }}" method="GET">
                    @csrf
                    <input type="submit" class="btn btn-success btn-rounded btn-fw" value="Edit">
                  </form>
                </td>
                <td>
                  <form action="{{ route('teachers.show', $teacher->id) }}" method="GET">
                    @csrf
                    <input type="submit" class="btn btn-secondary btn-rounded btn-fw" value="Show">
                  </form>
                </td>
              </tr>
            @empty
              <p>No Teachers found</p>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
