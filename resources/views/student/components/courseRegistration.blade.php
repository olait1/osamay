
@extends('student.dashboard.dashboard')
@section('content')
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2 class="text-primary">Course Registration</h2>
                           </div>
                        </div>
                     </div>




                     <div class="row column4 graph">
                        <!-- Gallery section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">

                              <div class="full gallery_section_inner padding_infor_info">
                                {{-- alert message for message --}}
                            @if(session('message'))
                            <div class="alert alert-success text-dark" id="alertDiv">
                                <span class=" float-right" onclick="  document.getElementById('alertDiv').style.display = 'none';" style="cursor: pointer;">&times;</span>
                                {{ session('message') }}

                            </div>

                        @endif
                              {{-- alert message for error --}}
                              @if(session('error'))
                              <div class="alert alert-danger text-dark" id="alertDiv">
                                  <span class=" float-right" onclick="  document.getElementById('alertDiv').style.display = 'none';" style="cursor: pointer;">&times;</span>
                                  {{ session('error') }}

                              </div>

                          @endif



                                    <form action="{{route('student.course.registration.post')}}" method="post">
                                        @csrf
                            <h4  class="text-muted">Session:</h4>
                                    <select name="session" class="form-control" style="border-top: none; border-left:none; border-right:none; " id="">
                                    @foreach ($sessions as $session)
                                        <option value="{{$session->id}}">{{$session->session}}</option>
                                        @endforeach

                                    </select>
                                    <h4 class="text-muted mt-4">Term:</h4>
                                    <select name="term" class="form-control" style="border-top: none; border-left:none; border-right:none; " id="">
                                        @foreach ($terms as $term)
                                        <option value="{{$term->id}}">{{$term->terms}}</option>
                                        @endforeach

                                    </select>
                                    <h4 class="text-muted mt-4">Level:</h4>
                                    <select name="level" class="form-control" style="border-top: none; border-left:none; border-right:none; " id="">
                                       @foreach ($classes as $class )


                                        <option value="{{$class->id}}">{{$class->class_name}}</option>

                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary float-right mt-3">Display</button>
                                </form>
                              </div>
                           </div>
                        </div>
                     </div>




                     <div class="col-md-12">
                        <div class="white_shd full margin_bottom_30">
                           <div class="full graph_head bg-primary">
                              <div class="heading1 margin_0">
                                 <h2 class="text-light">Courses</h2>
                              </div>
                           </div>
                           <div class="table_section padding_infor_info">
                              <div class="table-responsive-sm">
                        <form action="{{route('student.course.registered.course')}}" method="post">
                            @csrf

                                <table class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th>Subject Name</th>
                                          <th>Subject Code</th>
                                          <th>Session</th>
                                          <th>Level</th>
                                          <th>Term</th>
                                          <th>Tick</th>
                                       </tr>
                                    </thead>
                                    <tbody>

                                        @if (isset($register_courses))
                                        @foreach ($register_courses as $course )

                                       <tr>
                                          <td>{{$course->course_name}}</td>
                                          <input type="hidden" name="course_name" value="{{$course->course_name}}">
                                          <td>{{$course->course_code}}</td>
                                          <input type="hidden" name="course_code" value="{{$course->course_code}}">
                                          <td>{{$course->sessions->session}}</td>
                                          <input type="hidden" name="session" value="{{$course->session}}">
                                          <td>{{$course->levels->class_name}}</td>
                                          <input type="hidden" name="level" value="{{$course->level}}">
                                          <td>{{$course->terms->terms}}
                                          <input type="hidden" name="term" value="{{$course->term}}">

                                          <td><input type="checkbox" name="tick" value="1" class="form-control" id=""></td>
                                       </tr>
                                       @endforeach
                                       @endif
                                    </tbody>
                                 </table>
                            <button type="submit" class="float-right btn btn-primary">Register</button>
                            </form>
                            </div>
                              <p>Tick the check box and click on register</p>
                           </div>
                        </div>
                     </div>



             </div>
            </div>
         </div>
      </div>
   </div>

    </div>
  </div>

  @endsection
  <script>
    // passing each scode to request
document.addEventListener('DOMContentLoaded', function () {
         // alert div
  document.getElementById('alertDiv').style.display = 'block';

// Set a timeout to hide the div after 10 seconds
setTimeout(function() {
  document.getElementById('alertDiv').style.display = 'none';
}, 5000);

});

  </script>

