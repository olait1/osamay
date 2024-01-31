
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
                     <div class="row column1">
                        <div class="col-md-8 ">
                           <div class="full counter_section margin_bottom_30 " style="display: initial">
                            <h2 class=" mt-2 mr-3 text-primary">Overview</h2>
                            <hr>
                           <div class="row mt-4  mx-auto">
                            <div class="col-md-3 bg-primary mx-2 p-3  rounded text-white text-center">
                                <h4 class="text-light">Subject</h4>
                                {{-- @dd($teacher->levels->class_name) --}}
                                <h5 class="text-warning">{{$teacher->subjects->course_name}}</h5>
                            </div>
                            <div class="col-md-3 bg-warning mx-2 rounded text-center p-3">
                                 <h4 class="text-light">Class Teacher</h4>
                                <h5 class="text-primary">{{$teacher->levels->class_name ? $teacher->levels->class_name : ""}}</h5></div>
                            <div class="col-md-3 bg-success mx-2 rounded text-center p-3">
                                <h4 class="text-light">No Of Student</h4>

                                <h5 class="text-warning">{{$student_offer_course->count()}}</h5></div>
                           </div>

                           </div>
                        </div>
                        <div class="col-md-4">

           <!--Time table section -->

           <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
               <div class="heading1 margin_0">
                  <h2 class="text-primary">Level 1: Time Table</h2>
               </div>
            </div>
            <div class="table_section padding_infor_info">
               <div class="table-responsive-sm">
                  <table class="table table-bordered">

                     <tbody>
@php
$day =['Mon','Tues',"Wed","Thurs","Fri"];
@endphp

                        <tr>
                         <th>Day/Time</th>
                         <th>1st
                             <br>
                             08:10-08:50
                         </th>
                         <th>2nd
                             <br>
                             08:50-09:30
                         </th>
                         <th>3rd
                             <br>
                             09:30-10:10</th>
                         <th>4th
                             <br>
                             10:10-10:50
                         </th>
                         <th>5th
                             <br>
                             10:50-11:30
                         </th>
                         <th style="background: red" class="text-light" rowspan="6">
                             Break
                             <br>
                             11:30-12:00
                         </th>
                         <th>6th
                             <br>
                             12:00-12:40
                         </th>
                         <th>7th
                             <br>
                             12:40-01:20
                         </th>
                         <th>8th
                             <br>
                             01:20-02:00
                         </th>
                      </tr>
{{--
@dd($timetable['d1_2nd']->levels->class_name) --}}
                        <tr>
                           <th>Mon</th>

                           <td>{{$timetable['d1_1st'] ? $timetable['d1_1st']->levels->class_name : ''}}</td>
                           <td>{{$timetable['d1_2nd'] ? $timetable['d1_2nd']->levels->class_name : ''}}</td>
                           <td>{{$timetable['d1_3rd'] ? $timetable['d1_3rd']->levels->class_name : ''}}</td>
                           <td>{{$timetable['d1_4th'] ? $timetable['d1_4th']->levels->class_name : ''}}</td>
                           <td>{{$timetable['d1_5th'] ? $timetable['d1_5th']->levels->class_name : ''}}</td>
                           <td>{{$timetable['d1_6th'] ? $timetable['d1_6th']->levels->class_name : ''}}</td>
                           <td>{{$timetable['d1_7th'] ? $timetable['d1_7th']->levels->class_name : ''}}</td>
                           <td>{{$timetable['d1_8th'] ? $timetable['d1_8th']->levels->class_name : ''}}</td>

                        </tr>
                              <tr>
                           <th>Tues</th>

                           <td>{{$timetable['d2_1st'] ? $timetable['d2_1st']->levels->class_name : ''}}</td>
                           <td>{{$timetable['d2_2nd'] ? $timetable['d2_2nd']->levels->class_name : ''}}</td>
                           <td>{{$timetable['d2_3rd'] ? $timetable['d2_3rd']->levels->class_name : ''}}</td>
                           <td>{{$timetable['d2_4th'] ? $timetable['d2_4th']->levels->class_name : ''}}</td>
                           <td>{{$timetable['d2_5th'] ? $timetable['d2_5th']->levels->class_name : ''}}</td>
                           <td>{{$timetable['d2_6th'] ? $timetable['d2_6th']->levels->class_name : ''}}</td>
                           <td>{{$timetable['d2_7th'] ? $timetable['d2_7th']->levels->class_name : ''}}</td>
                           <td>{{$timetable['d2_8th'] ? $timetable['d2_8th']->levels->class_name : ''}}</td>

                        </tr>
                        <tr>
                         <th>Wed</th>
                         <td>{{$timetable['d3_1st'] ? $timetable['d3_1st']->levels->class_name : ''}}</td>
                         <td>{{$timetable['d3_2nd'] ? $timetable['d3_2nd']->levels->class_name : ''}}</td>
                         <td>{{$timetable['d3_3rd'] ? $timetable['d3_3rd']->levels->class_name : ''}}</td>
                         <td>{{$timetable['d3_4th'] ? $timetable['d3_4th']->levels->class_name : ''}}</td>
                         <td>{{$timetable['d3_5th'] ? $timetable['d3_5th']->levels->class_name : ''}}</td>
                         <td>{{$timetable['d3_6th'] ? $timetable['d3_6th']->levels->class_name : ''}}</td>
                         <td>{{$timetable['d3_7th'] ? $timetable['d3_7th']->levels->class_name : ''}}</td>
                         <td>{{$timetable['d3_8th'] ? $timetable['d3_8th']->levels->class_name : ''}}</td>


                      </tr>
                      <tr>
                         <th>Thurs</th>
                         <td>{{$timetable['d4_1st'] ? $timetable['d4_1st']->levels->class_name : ''}}</td>
                         <td>{{$timetable['d4_2nd'] ? $timetable['d4_2nd']->levels->class_name : ''}}</td>
                         <td>{{$timetable['d4_3rd'] ? $timetable['d4_3rd']->levels->class_name : ''}}</td>
                         <td>{{$timetable['d4_4th'] ? $timetable['d4_4th']->levels->class_name : ''}}</td>
                         <td>{{$timetable['d4_5th'] ? $timetable['d4_5th']->levels->class_name : ''}}</td>
                         <td>{{$timetable['d4_6th'] ? $timetable['d4_6th']->levels->class_name : ''}}</td>
                         <td>{{$timetable['d4_7th'] ? $timetable['d4_7th']->levels->class_name : ''}}</td>
                         <td>{{$timetable['d4_8th'] ? $timetable['d4_8th']->levels->class_name : ''}}</td>
                      </tr>
                      <tr>
                       <th>Fri</th>
                       <td>{{$timetable['d5_1st'] ? $timetable['d5_1st']->levels->class_name : ''}}</td>
                       <td>{{$timetable['d5_2nd'] ? $timetable['d5_2nd']->levels->class_name : ''}}</td>
                       <td>{{$timetable['d5_3rd'] ? $timetable['d5_3rd']->levels->class_name : ''}}</td>
                       <td>{{$timetable['d5_4th'] ? $timetable['d5_4th']->levels->class_name : ''}}</td>
                       <td>{{$timetable['d5_5th'] ? $timetable['d5_5th']->levels->class_name : ''}}</td>
                       <td>{{$timetable['d5_6th'] ? $timetable['d5_6th']->levels->class_name : ''}}</td>
                       <td>{{$timetable['d5_7th'] ? $timetable['d5_7th']->levels->class_name : ''}}</td>
                       <td>{{$timetable['d5_8th'] ? $timetable['d5_8th']->levels->class_name : ''}}</td>

                    </tr>



                     </tbody>
                  </table>
               </div>
            </div>

      </div>    </div>


                     </div>
                     <!-- table section -->
                     <div class="col-md-12">
                        <div class="white_shd full margin_bottom_30">
                           <div class="full graph_head">
                              <div class="heading1 margin_0">
                                 <h2 class="text-primary">Students</h2>
                              </div>
                           </div>
                           <div class="table_section padding_infor_info">
                              <div class="table-responsive-sm">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th>SN</th>
                                          <th>Name</th>
                                          <th>Class</th>
                                          <th>Adm No</th>
                                          <th>Gender</th>

                                       </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($student_offer_course as $student)


                                       <tr>
                                          <td>1</td>
                                          <td>{{$student->user ? $student->user->name : " "}}</td>
                                          <td>{{$student->students ? $student->students->classes->class_name : ""}}</td>
                                          <td>{{$student->students ? $student->students->student_id : ""}}</td>
                                          <td>{{$student->user ? $student->user->gender : " "}}</td>

                                       </tr>
                                       @endforeach
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>

               </div>
               @endsection
