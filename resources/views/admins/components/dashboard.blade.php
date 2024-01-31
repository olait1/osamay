@extends('admins.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2 class="text-primary">Dashboard</h2>
             </div>
          </div>
       </div>
       <div class="row column1">
          <div class="col-md-6 col-lg-4">
             <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                   <div>
                      <i class="fa fa-user yellow_color"></i>
                   </div>
                </div>
                <div class="counter_no">
                   <div>
                      <p class="total_no">{{$noStudents}}</p>
                      <p class="head_couter">Total Student</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-4">
             <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                   <div>
                      <i class="fa fa-users blue1_color"></i>
                   </div>
                </div>
                <div class="counter_no">
                   <div>
                      <p class="total_no">{{$noParents}}</p>
                      <p class="head_couter">Total Parent</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-4">
             <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                   <div>
                      <i class="fa fa-desktop green_color"></i>
                   </div>
                </div>
                <div class="counter_no">
                   <div>
                      <p class="total_no">{{$noTeachers}}</p>
                      <p class="head_couter">Total Teacher</p>
                   </div>
                </div>
             </div>
          </div>

       </div>



       <div class="row column1">
        <div class="col-md-12 ">
           <div class="full counter_section margin_bottom_30 " style="display: initial">
            <h5 class=" mt-2 mr-3 text-primary">School Management System Quick icon</h5>
            <hr>
            <div class="row mt-4  mx-auto">
                <div class="col-md-2 bg-primary  mx-2 p-3  rounded text-white text-center">
            <a href="{{route('admin.student')}}">
                    <div class="couter_icon">
                     <div>
                        <i class="fa fa-user white_color"></i>
                     </div>
                  </div>
                  <h5 class="text-warning">Students</h5>
                </a>
                </div>
                <div class="col-md-2 bg-warning mx-2 rounded text-center p-3">
                    <a href="{{ route('admin.parent')}}">
                    <div class="couter_icon">
                     <div>
                        <i class="fa fa-users white_color"></i>
                     </div>
                  </div>
                    <h5 class="text-primary">Parents </h5>
                    </a>
                </div>
                <div class="col-md-2 bg-success mx-2 rounded text-center p-3">
                  <a href="{{route('admin.teacher')}}">
                    <div class="couter_icon">
                     <div>
                        <i class="fa fa-desktop white_color"></i>
                     </div>
                  </div>
                    <h5 class="text-warning">Teachers</h5>
                  </a>
                </div>
                    <div class="col-md-2 bg-primary mx-2 p-3  rounded text-white text-center">
                    <a href="{{route('admin.subject')}}">
                        <div class="couter_icon">
                        <div>
                           <i class="fa fa-tasks white_color"></i>
                        </div>
                     </div>
                        <h5 class="text-warning">Subjects</h5>
                        </a>
                    </div>
                    <div class="col-md-2 bg-warning mx-2 rounded text-center p-3">
                    <a href="{{route('admin.section')}}">
                        <div class="couter_icon">
                        <div>
                           <i class="fa fa-ticket white_color"></i>
                        </div>
                     </div>
                        <h5 class="text-primary">Sections</h5>
                    </a>
                    </div>

               </div>
           <div class="row mt-4  mx-auto">
            <div class="col-md-2 bg-warning mx-2 p-3  rounded text-white text-center">
                <a href="{{route('admin.class')}}">
                <div class="couter_icon">
                    <div>
                       <i class="fa fa-sitemap white_color"></i>
                    </div>
                 </div>
                <h5 class="text-primary">Class</h5>
                </a>
            </div>
            <div class="col-md-2 bg-success mx-2 rounded text-center p-3">
            <a href="">
                <div class="couter_icon">
                    <div>
                       <i class="fa fa-clock-o white_color"></i>
                    </div>
                 </div>
                <h5 class="text-white">Manage Attendance</h5>
            </a>
            </div>
            <div class="col-md-2 bg-primary mx-2 rounded text-center p-3">
            <a href="{{route('admin.exam')}}">
                <div class="couter_icon">
                    <div>
                       <i class="fa fa-graduation-cap white_color"></i>
                    </div>
                 </div>
                <h5 class="text-warning">Exams</h5>
            </a>
                </div>
                <div class="col-md-2 bg-warning mx-2 p-3  rounded text-white text-center">
                <a href="{{route('admin.manage.mark')}}">
                    <div class="couter_icon">
                        <div>
                           <i class="fa fa-edit white_color"></i>
                        </div>
                     </div>
                    <h5 class="text-success">Manage Marks</h5>
                </a>
                </div>
                <div class="col-md-2 bg-success mx-2 rounded text-center p-3">
                <a href="">
                    <div class="couter_icon">
                        <div>
                           <i class="fa fa-credit-card white_color"></i>
                        </div>
                     </div>
                    <h5 class="text-white">Payments</h5></div>
                </a>
           </div>
           <div class="row mt-4  mx-auto">
            <div class="col-md-2 bg-primary mx-2 p-3  rounded text-white text-center">
        <a href="{{route('admin.event')}}">
                <div class="couter_icon">
                    <div>
                       <i class="fa fa-briefcase white_color"></i>
                    </div>
                 </div>
                <h5 class="text-warning">Event</h5>
            </a>
            </div>
            <div class="col-md-2 bg-warning mx-2 rounded text-center p-3">
                <a href="">
                <div class="couter_icon">
                    <div>
                       <i class="fa fa-book white_color"></i>
                    </div>
                 </div>
                <h5 class="text-primary">library</h5>
            </a>
            </div>
            <div class="col-md-2 bg-success mx-2 rounded text-center p-3">
                <a href="{{route('admin.chat')}}">
                <div class="couter_icon">
                    <div>
                       <i class="fa fa-comments white_color"></i>
                    </div>
                 </div>
                <h5 class="text-warning">Chat</h5>
            </a>
            </div>


           </div>
           </div>
        </div>





 </div>
@endsection
