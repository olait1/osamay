@php
    use App\Models\teacher;
    use\App\Models\registered_course;
@endphp
@extends('teachers.dashboard.dashboard')
@section('content')
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2 class="text-primary">Class</h2>
             </div>
          </div>
       </div>

<!-- table section -->
<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
       <div class="full graph_head">
          <div class="heading1 margin_0">
             <h2 class="text-primary">English Language</h2>
          </div>
       </div>
       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
             <table class="table table-hover">
                <thead>
                   <tr>
                      <th>Class Name</th>
                      <th>Class Population</th>
                      <th>Class Teacher</th>
                      <th>Action</th>
                   </tr>
                </thead>
                <tbody>
                 @foreach ($classes as $class )
                 @php
                     $student = registered_course::where('level',$class->id)->get();
                 @endphp
                 <form action="/teacher/class/student/{{$class->id}}" method="get">
                   <tr>
                    @php

                        $class_teacher = teacher::where('c_id',$class->id)
                        ->latest()
                        ->first();

                    @endphp
                      <td>{{$class->class_name}}</td>
                      <td>{{$student->count()}}</td>

                            {{-- @dd($class_teacher->user->name) --}}
                            {{-- {{ $class_teacher->user ? $class_teacher->user->name : '' }} --}}
                            <td>{{ $class_teacher->user->name ?? '' }}
                            </td>
                            <td>
                       <button class="btn btn-primary">More</button>

                    </td>
                   </tr>
                </form>
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
