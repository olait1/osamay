
@extends('teachers.dashboard.dashboard')
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

<!-- table section -->
<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
       <div class="full graph_head">
          <div class="heading1 margin_0">
             <h2 class="text-primary">Level 1: Students</h2>
          </div>
       </div>
       <div class="table_section padding_infor_info">
        <div class="table-responsive-sm">
           <table class="table table-hover">
              <thead>
                 <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Adm. No</th>


                 </tr>
              </thead>
              <tbody>
@foreach ( $students as $student )


                 <tr>
                    <td>{{ ucfirst($student->user->name)}}</td>
                    <td>{{ ucfirst($student->user->gender)}}</td>
                    <td>{{ ucfirst($student->students->student_id)}}</td>



                 </tr>
                 @endforeach
              </tbody>
           </table>
        </div>

<form action="{{route('teacher.class')}}" method="get">
    <button type="submit" class="btn btn-danger">Back</button>
    </form>
     </div>

    </div>
                </div>
             </div>
                </div>



    @endsection
