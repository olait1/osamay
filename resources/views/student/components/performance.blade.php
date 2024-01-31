@extends('student.dashboard.dashboard')
@section('content')
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2 class="text-primary">Performance</h2>
             </div>
          </div>
       </div>
       <!-- row -->



       @unless(count($results)== 0)

       <div class="row column1">

<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="row">
        <div class="col-2 ">
            <img class="img-responsive m-5" height="80" src="{{asset('storage/logo/osamay logo.png')}}"  alt="#" />
        </div>
        <div class="col-8 pt-5">
    <h2 class="text-uppercase text-center" style="color: #444;">Osamay Academy Secondary School</h2>
    <p class="text-center mt-4">WAPI Secondary school, Calabar Cross-River State </p>
    <p class="text-center" style="margin-top: -1em;">Tel: <span class="mr-5">+2348134556906</span> E-mail: olait768@gmail.com </p>

</div>
{{-- <div class="col-2">


</div> --}}
    </div>
    <div class="row">
        <div class="col-12">
            <h4 class="u text-uppercase text-center " style="color: #444;"> <u> {{$results_term_session->subjects->terms->terms}} Term Students Performance reports </u></h4>
        </div>

            <div class="col-10 pl-5">
                <form>
                    <div class="row mt-5">

                      <div class="col">
                      <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Name:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control form-control-lg text-center text-uppercase" id="colFormLabelSm" disabled style=" background-color:transparent !important; border: none;
                          border-bottom: 2px solid #666;border-radius:0; " value="{{auth()->user()->name}}" >
                        </div>
                      </div>
                      </div>
                      <div class="col">
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Gender:</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control form-control-lg text-center text-uppercase" id="colFormLabelSm" disabled style=" background-color:transparent !important; border: none;
                              border-bottom: 2px solid #666;border-radius:0; " value="{{auth()->user()->gender}}" >
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="row mt-3">

                        <div class="col">
                        <div class="form-group row">
                          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Class:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control form-control-lg text-center text-uppercase" id="colFormLabelSm" disabled style=" background-color:transparent !important; border: none;
                            border-bottom: 2px solid #666; border-radius:0;" value="{{$student->classes->class_name}}" >
                          </div>
                        </div>
                        </div>
                        <div class="col">

                          <div class="form-group row">
                              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Session:</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control form-control-lg text-center text-uppercase" id="colFormLabelSm" disabled style=" background-color:transparent !important; border: none;
                                border-bottom: 2px solid #666;border-radius:0; " value="{{$results_term_session->subjects->sessions->session}}" >
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Admission No:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control form-control-lg text-center text-uppercase" id="colFormLabelSm" disabled style=" background-color:transparent !important; border: none;
                                  border-bottom: 2px solid #666; border-radius:0;" value="{{auth()->user()->student_id->student_id}}" >
                                </div>
                              </div>
                            </div>
                      </div>
                  </form>
            </div>
            <div class="col-2 pb-5">

                <img class="img-responsive " src="{{asset('storage/'.auth()->user()->passport)}}" height="100" alt="#" /></div>

            </div>

    </div>
       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
            {{-- <table class="table table-bordered">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-right ">Name</th>
                        <td class="text-uppercase" colspan="2"></td>
                        <th class="text-right ">Gender</th>
                        <td class="text-uppercase">{{auth()->user()->gender}}</td>
                        <th class="text-right ">Class</td>
                        <td class="text-uppercase">{{$student->classes->class_name}}</td>
                     </tr>
                     <tr>
                        <th class="text-right ">Term</th>
                        <td ></td>
                        <th class="text-right ">Session</th>
                        <td colspan="2"></td>
                        <th class="text-right">Admission No</td>

                        <td> {{auth()->user()->student_id->student_id}}</td>
                     </tr>
                </tbody>
             </table> --}}
             <table class="table table-bordered">
                <thead>
                   <tr>
                      <th >Subjects</th>
                      <th>C.A <br>40</th>
                      <th>Exam <br>60</th>
                      {{-- <th>1st <br> Term</th>
                      <th>2nd <br> Term</th>
                      <th>3rd <br> Term</th>
                      <th>Session <br> Average</th> --}}
                      <th>Total  <br/> 100</th>
                      <th>Grade</th>
                      {{-- <th>Subject <br> Position</th> --}}
                      <th> Remark</th>
                      <th>Class <br> Average</th>

                   </tr>
                </thead>
                <tbody>


                    @foreach ( $results as $result)
                   <tr>
                      <td>{{$result->subjects->course_name}}</td>
                      <td>{{$result->ca1}}</td>
                      <td>{{$result->exam }}</td>
                      <td>{{($result->exam + $result->ca1)}}</td>
                      {{-- <td>{{$performance->first_term}}</td>
                      <td>{{$performance->second_term}}</td>
                      <td>{{$performance->third_term}}</td>
                      <td>{{$performance->session_avg}}</td> --}}
 @foreach ( $grades as $grade)


                      @if (($result->exam + $result->ca1) >= $grade->excellent && ($result->exam + $result->ca1) <= 100 )
                      <td>A</td>
                      @elseif (($result->exam + $result->ca1) >= $grade->vgood && ($result->exam + $result->ca1) < $grade->excellent)
                        <td> B</td>
                        @elseif (($result->exam + $result->ca1) >= $grade->good   && ($result->exam + $result->ca1) < $grade->vgood)
                        <td>C</td>
                        @elseif (($result->exam + $result->ca1) >= $grade->satisfactory   && ($result->exam + $result->ca1) < $grade->good)
                        <td>D</td>
                        @elseif (($result->exam + $result->ca1) >= $grade->pass   && ($result->exam + $result->ca1) < $grade->satisfactory)
                        <td>E</td>
                        @elseif (($result->exam + $result->ca1) >= 0   && ($result->exam + $result->ca1) < $grade->pass)
                        <td>F</td>
                        @endif
                      @endforeach

                      @foreach ( $grades as $grade)


                      @if (($result->exam + $result->ca1) >= $grade->excellent && ($result->exam + $result->ca1) <= 100 )
                      <td>Excellent</td>
                      @elseif (($result->exam + $result->ca1) >= $grade->vgood && ($result->exam + $result->ca1) < $grade->excellent)
                        <td> Very Good</td>
                        @elseif (($result->exam + $result->ca1) >= $grade->good   && ($result->exam + $result->ca1) < $grade->vgood)
                        <td>Good</td>
                        @elseif (($result->exam + $result->ca1) >= $grade->satisfactory   && ($result->exam + $result->ca1) < $grade->good)
                        <td>Satisfactory</td>
                        @elseif (($result->exam + $result->ca1) >= $grade->pass   && ($result->exam + $result->ca1) < $grade->satisfactory)
                        <td>Pass</td>
                        @elseif (($result->exam + $result->ca1) >= 0   && ($result->exam + $result->ca1) < $grade->pass)
                        <td>Fail</td>
                        @endif
                      @endforeach
                      {{-- <td>{{$performance->subject_position}}</td> --}}

                     <td></td>
                      {{--  <td></td> --}}
                   </tr>
                   @endforeach


                </tbody>
             {{-- <tfoot>
                <tr>
                    <td colspan="11">

                    </td>
                </tr>
             </tfoot> --}}
            </table>
            <form action="{{route('student.oPermance')}}" method="get">
                <button class="btn btn-primary ">Other  performance</button>
                </form>
                <button class="btn btn-info float-right" onclick="window.print();">Print</button>
          </div>
       </div>
    </div>
 </div>

 @else
 <h3>Check later for your result</h3>
 @endunless
 <!-- table section -->
             </div>

@endsection
