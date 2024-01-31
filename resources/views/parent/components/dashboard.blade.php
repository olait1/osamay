
@extends('parent.dashboard.dashboard')
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
                                <h4 class="text-light"> Principal</h4>
                                {{-- @dd(auth()->guard('parents')->user()->students->classes->teacher->user->name) --}}

                                <h5 class="text-warning">{{  auth()->guard('parents')->user()->students->classes->teacher->user->name}}</h5>
                                <h6 class="text-light">{{  auth()->guard('parents')->user()->students->classes->teacher->user->Phone_no}}</h6>


                            </div>
                            {{-- @dd(auth()->guard('parents')->user()->p_name) --}}
                            <div class="col-md-3 bg-warning mx-2 rounded text-center p-3">
                                 <h4 class="text-light">Class Teacher</h4>
                                <h5 class="text-primary">{{  auth()->guard('parents')->user()->students->classes->teacher->user->name}}</h5>
                                <h6 class="text-primary">{{  auth()->guard('parents')->user()->students->classes->teacher->user->Phone_no}}</h6>
                            </div>
                            <div class="col-md-3 bg-success mx-2 rounded text-center p-3">
                                <h4 class="text-light">Level</h4>
                                <h5 class="text-warning">Year 1</h5>
                                </div>
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


                                           <tr>
                                              <th>Mon</th>


                                              <td>{{$d1_1st ? $d1_1st->subjects->course_name : ''}}</td>
                                              <td>{{$d1_2nd ? $d1_2nd->subjects->course_name : ''}}</td>
                                              <td>{{$d1_3rd ? $d1_3rd->subjects->course_name : ''}}</td>
                                              <td>{{$d1_4th ? $d1_4th->subjects->course_name : ''}}</td>
                                              <td>{{$d1_5th ? $d1_5th->subjects->course_name : ''}}</td>
                                              <td>{{$d1_6th ? $d1_6th->subjects->course_name : ''}}</td>
                                              <td>{{$d1_7th ? $d1_7th->subjects->course_name : ''}}</td>
                                              <td>{{$d1_8th ? $d1_8th->subjects->course_name : ''}}</td>

                                           </tr>
                                                 <tr>
                                              <th>Tues</th>

                                              <td>{{$d2_1st ? $d2_1st->subjects->course_name : ''}}</td>
                                              <td>{{$d2_2nd ? $d2_2nd->subjects->course_name : ''}}</td>
                                              <td>{{$d2_3rd ? $d2_3rd->subjects->course_name : ''}}</td>
                                              <td>{{$d2_4th ? $d2_4th->subjects->course_name : ''}}</td>
                                              <td>{{$d2_5th ? $d2_5th->subjects->course_name : ''}}</td>
                                              <td>{{$d2_6th ? $d2_6th->subjects->course_name : ''}}</td>
                                              <td>{{$d2_7th ? $d2_7th->subjects->course_name : ''}}</td>
                                              <td>{{$d2_8th ? $d2_8th->subjects->course_name : ''}}</td>

                                           </tr>
                                           <tr>

                                                <th>Wed</th>
                                            <td>{{$d3_1st ? $d3_1st->subjects->course_name : ''}}</td>
                                            <td>{{$d3_2nd ? $d3_2nd->subjects->course_name : ''}}</td>
                                            <td>{{$d3_3rd ? $d3_3rd->subjects->course_name : ''}}</td>
                                            <td>{{$d3_4th ? $d3_4th->subjects->course_name : ''}}</td>
                                            <td>{{$d3_5th ? $d3_5th->subjects->course_name : ''}}</td>
                                            <td>{{$d3_6th ? $d3_6th->subjects->course_name : ''}}</td>
                                            <td>{{$d3_7th ? $d3_7th->subjects->course_name : ''}}</td>
                                            <td>{{$d3_8th ? $d3_8th->subjects->course_name : ''}}</td>


                                         </tr>
                                         <tr>
                                            <th>Thurs</th>
                                            <td>{{$d4_1st ? $d4_1st->subjects->course_name : ''}}</td>
                                            <td>{{$d4_2nd ? $d4_2nd->subjects->course_name : ''}}</td>
                                            <td>{{$d4_3rd ? $d4_3rd->subjects->course_name : ''}}</td>
                                            <td>{{$d4_4th ? $d4_4th->subjects->course_name : ''}}</td>
                                            <td>{{$d4_5th ? $d4_5th->subjects->course_name : ''}}</td>
                                            <td>{{$d4_6th ? $d4_6th->subjects->course_name : ''}}</td>
                                            <td>{{$d4_7th ? $d4_7th->subjects->course_name : ''}}</td>
                                            <td>{{$d4_8th ? $d4_8th->subjects->course_name : ''}}</td>
                                         </tr>
                                         <tr>
                                          <th>Fri</th>
                                          <td>{{$d5_1st ? $d5_1st->subjects->course_name : ''}}</td>
                                          <td>{{$d5_2nd ? $d5_2nd->subjects->course_name : ''}}</td>
                                          <td>{{$d5_3rd ? $d5_3rd->subjects->course_name : ''}}</td>
                                          <td>{{$d5_4th ? $d5_4th->subjects->course_name : ''}}</td>
                                          <td>{{$d5_5th ? $d5_5th->subjects->course_name : ''}}</td>
                                          <td>{{$d5_6th ? $d5_6th->subjects->course_name : ''}}</td>
                                          <td>{{$d5_7th ? $d5_7th->subjects->course_name : ''}}</td>
                                          <td>{{$d5_8th ? $d5_8th->subjects->course_name : ''}}</td>

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
                                 <h2 class="text-primary">Payments</h2>
                              </div>
                           </div>
                           <div class="table_section padding_infor_info">
                              <div class="table-responsive-sm">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th>SN</th>
                                          <th>Description</th>
                                          <th>Amount</th>
                                          <th>Date</th>
                                          <th>Time</th>

                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>1</td>
                                          <td>Anna</td>
                                          <td>Pitt</td>
                                          <td>35</td>
                                          <td>New York</td>

                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>

               </div>
               @endsection
