
@extends('parent.dashboard.dashboard')
@section('content')


<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2 class="text-primary">Subject Teachers</h2>
             </div>
          </div>
       </div>



<!-- table section -->
<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
       <div class="full graph_head">
          <div class="heading1 margin_0">
             <h2 class="text-primary">Teachers</h2>
          </div>
       </div>
       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
             <table class="table">
                <thead>
                   <tr>
                      <th>SN</th>
                      <th>Name</th>
                      <th>Subject</th>
                      <th>Phone No</th>


                   </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
            @foreach ($parents as $parent )


@foreach ( $parent->registered_course as $registered_course )
{{-- @dd($parent->registered_course) --}}
             <tr>
                      <td>{{$i}}</td>
                      <td>{{$registered_course->subject->subject_teacher->user->name }}</td>
                      <td>{{$registered_course->subject->subject_teacher->subjects->course_name }}</td>
                      <td> <a href="tel:{{$registered_course->subject->subject_teacher->user->Phone_no }}">{{$registered_course->subject->subject_teacher->user->Phone_no }}</a> </td>
                   </tr>
                   @php
                       $i++;
                   @endphp
                   @endforeach

                   @endforeach
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>



    </div>
</div>



@endsection
