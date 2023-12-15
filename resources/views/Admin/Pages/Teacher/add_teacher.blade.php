@extends('Admin.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Teacher</h4>
                    <p class="card-description">Fill in the details below to add a new teacher.</p>
                    <form class="forms-sample" action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label for="teacherNumber">Teacher Number</label>
                            <input type="text" class="form-control" id="teacherNumber" name="teacher_number" placeholder="Teacher Number">
                        </div>
                        <div class="form-group">
                            <label for="teacherName">Teacher Name</label>
                            <input type="text" class="form-control" id="teacherName" name="teacher_name" placeholder="Teacher Name">
                        </div>
                        <div class="form-group">
                            <label for="teacherPhone">Phone</label>
                            <input type="text" class="form-control" id="teacherPhone" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label for="teacherEmail">Email</label>
                            <input type="text" class="form-control" id="teacherEmail" name="email" placeholder="Teacher Email">
                        </div>
                        <div class="form-group">
                            <label for="teacherMajor">Major</label>
                            <input type="text" class="form-control" id="teacherMajor" name="major" placeholder="Major">
                        </div>
                        <div class="form-group">
                            <label for="contractType">Contract Type</label>
                            <input type="text" class="form-control" id="contractType" name="contract_type" placeholder="Contract Type">
                        </div>
                        <div class="form-group">
                            <label for="teacherImage">Teacher Image</label>
                            <input type="file" class="form-control" id="teacherImage" name="image" placeholder="Teacher Image">
                        </div>

                        <!-- Additional fields for user information (assuming relation with User model) -->
                        <div class="form-group">
                            <label for="userEmail">User Email</label>
                            <input type="text" class="form-control" id="userEmail" name="email" placeholder="User Email">
                        </div>
                        <div class="form-group">
                            <label for="userPassword">User Password</label>
                            <input type="password" class="form-control" id="userPassword" name="password" placeholder="User Password">
                        </div>
                        <div class="form-group">
                            <label for="userGender">User Gender</label>
                            <select class="form-control" id="userGender" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userAddress">User Address</label>
                            <input type="text" class="form-control" id="userAddress" name="address" placeholder="User Address">
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
