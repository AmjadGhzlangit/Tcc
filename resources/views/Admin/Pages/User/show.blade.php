@extends('Admin.admin_dashboard')

@section('content')
<div class=" d-flex grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-wrap justify-content-between">
         <h4 class="card-title mb-3">Student Infomation</h4>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="row">
              <div class="">
                <div id="circleProgress6" class="progressbar-js-circle rounded p-2"></div>
              </div>
              <div class="">
                <ul class="session-by-channel-legend">
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">First Name</p></div>
                    <div class="font-weight-bold">{{$user->first_name}}</div>
                  </li>
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">Last Name</p></div>
                    <div class="font-weight-bold">{{$user->last_name}}</div>
                  </li>
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">Mother Name</p></div>
                    <div class="font-weight-bold">{{$user->mother_name}}</div>
                  </li>
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">Father Name</p></div>
                    <div class="font-weight-bold">{{$user->father_name}}</div>
                  </li>
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">Date Birth</p></div>
                    <div class="font-weight-bold">{{$user->date_birth}}</div>
                  </li>
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">Gender</p></div>
                    <div class="font-weight-bold">{{$user->gender}}</div>
                  </li>
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">Address</p></div>
                    <div class="font-weight-bold">{{$user->address}}</div>
                  </li>
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">Image</p></div>
                    <div class="font-weight-bold">{{$user->Image}}</div>
                  </li>
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">Phone Number</p></div>
                    <div class="font-weight-bold">{{$user->phone}}</div>
                  </li>
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">Email</p></div>
                    <div class="font-weight-bold">{{$user->email}}</div>
                  </li>
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">Student Number</p></div>
                    <div class="font-weight-bold">{{$user->student_number}}</div>
                  </li>
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">Student Email</p></div>
                    <div class="font-weight-bold">{{$user->student_email}}</div>
                  </li>
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">Student Email</p></div>
                    <div class="font-weight-bold">{{$user->student_email}}</div>
                  </li>
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">Department</p></div>
                    <div class="font-weight-bold">{{$user->department}}</div>
                  </li>
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">Status</p></div>
                    <div class="font-weight-bold">{{$user->status}}</div>
                  </li>
                  <li>
                    <div style="margin-right: 100px"><p class="font-weight-bold ">Year</p></div>
                    <div class="font-weight-bold">{{$user->year}}</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection