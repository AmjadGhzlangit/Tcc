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
      <h4 class="card-title">Studnets table</h4>
      <div class="table-responsive pt-3">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Uesr Number</th>
              <th>Studnet Name</th>
              <th>Studnet Department</th>
              <th>Year</th>
              <th>Status</th>
              <th>Image</th>
              <th colspan="3" class="text-center">Options</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($users as $user )
            <tr>
              <td>
                {{ $user->id }}
              </td>
              <td>
                {{ $user->student_number }}
              </td>
              <td>
                {{ $user->first_name . ' ' . $user->last_name }}
              </td>
              <td>
                {{ $user->department }}
              </td>
              <td>  
                {{ $user->year }}
              </td>
              <td>
                {{ $user->status }}
              </td>
              <td><img src="{{ asset('storage/'.$user->image) }}" alt="" width="30px" height="30px"></td>
              <td>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('delete')
                <input type="submit" class="btn btn-danger btn-rounded btn-fw" value="Delete">
              </form>
            </td>
                <td>
                    <form action="{{ route('users.edit', $user->id) }}" method="GET">
                      @csrf
                  <input type="submit" class="btn btn-success btn-rounded btn-fw " value="Edit">
                </form>
                </td>
                <td>
                    <form action="{{ route('users.show', $user->id) }}" method="GET">
                      @csrf
                  <input type="submit" class="btn btn-secondary btn-rounded btn-fw" value="Show">
                </form>
                </td>
            </tr>
            @empty
              <p>No Users found</p>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection