@extends('Admin.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description">
                        Basic form elements
                    </p>
                    <form class="forms-sample" action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data">
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
                            <label for="exampleInputFirstName">First Name</label>
                            <input type="text" value="{{ $user->first_name }}" class="form-control" id="exampleInputFirstName" name="first_name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputLastName">Last Name</label>
                            <input type="text" class="form-control" value="{{ $user->last_name }}" name="last_name" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFatherName">Father's Name</label>
                            <input type="text" class="form-control" value="{{ $user->father_name }}"  name="father_name" placeholder="Father's Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputMotherName">Mother's Name</label>
                            <input type="text" class="form-control" value="{{ $user->mother_name }}"  name="mother_name" placeholder="Mother's Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDateOfBirth">Date of Birth</label>
                            <input type="date" class="form-control" value="{{ $user->date_birth }}" name="date_birth">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputStudentNumber">Email</label>
                            <input type="text" class="form-control" value="{{ $user->email }}" name="email" placeholder="User email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputStudentNumber">Password</label>
                            <input type="password" class="form-control" value="{{ $user->password }}" name="password" placeholder="User Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputGender">Gender</label>
                            <select class="form-control" value="{{ $user->gender }}" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">Address</label>
                            <input type="text" class="form-control" value="{{ $user->address }}" name="address" placeholder="Address">
                        </div>
                    
                            <div class="form-group">
                                <label for="exampleInputStudentNumber">Student Image</label>
                                <input type="file" class="form-control" value="{{ $user->image }}" name="image" placeholder="Student Imgae">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputStudentNumber">Student Phone</label>
                                <input type="text" class="form-control" value="{{ $user->phone }}" name="phone" placeholder="Student Phone">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputStudentNumber">Student Number</label>
                                <input type="text" class="form-control" value="{{ $user->student_number }}" name="student_number" placeholder="Student Number">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputStudentEmail">Student Email</label>
                                <input type="email" class="form-control" value="{{ $user->student_email }}" name="student_email" placeholder="Student Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDepartment">Department</label>
                                <input type="text" class="form-control" value="{{ $user->department }}" name="department" placeholder="Department">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputStatus">Status</label>
                                <input type="text" class="form-control" value="{{ $user->status }}" name="status" placeholder="Status">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputYear">Year</label>
                                <input type="text" class="form-control" value="{{ $user->year }}" name="year" placeholder="Year">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputSemester">Semester</label>
                                <input type="text" class="form-control" value="{{ $user->semester }}" name="semester" placeholder="Semester">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
