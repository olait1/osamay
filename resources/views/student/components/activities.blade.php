
@extends('student.dashboard.dashboard')
@section('content')
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2 class="text-primary">Activities</h2>
                           </div>
                        </div>
                     </div>





     {{-- alert message for error --}}
     @if(session('error'))
     <div class="alert alert-danger text-dark" id="alertDiv">
         <span class=" float-right" onclick="  document.getElementById('alertDiv').style.display = 'none';" style="cursor: pointer;">&times;</span>
         {{ session('error') }}

     </div>

 @endif



<!-- row -->
<div class="row column4 graph">

          <div class="full gallery_section_inner padding_infor_info">

            <div class="row">
@php
      use App\Models\questions;
@endphp
                    {{-- check if activity is empty --}}
                @unless (count($activities))
                <h2>No activity to do</h2>
                                    @else
                    {{-- getting  activities datas--}}
                @foreach ($activities as $activity )

                <div class="col-sm-4 col-md-6 margin_bottom_30">

                    <div class="column p-4 " style="line-height: .5em">

                        <span  class="text-primary  h2"><i>{{$activity->exams->exam}}</i> </span></h4>
                    <h4 class="text-primary">
                        {{-- subject  name  --}}

                        {{$activity->subject->course_name}}
                        <span  class="text-primary float-right h6 "> Date | Time</span></h4>
                        {{-- number of question in an activity --}}
                        @php
                            $no_of_question = questions::where('s_code',$activity->s_code)
                            ->where('exam',$activity->exam)
                            ->count();
                        @endphp
                        <p class="text-primary ">The quize comprises of
                {{$no_of_question <= 1 ? $no_of_question. ' question' : $no_of_question. ' questions'}}
                        {{-- due date --}}
                <span class="text-primary float-right">
                    {{$activity->due_date}} |  {{$activity->time}}
                </span>
                </p>
                    {{-- getting the scode for each activity --}}
                <input type="hidden" class="s_code" value="{{$activity->s_code}}">
                <input type="hidden" class="exam" value="{{$activity->exam}}">
                </div>
                   <div class="heading_section p-3 pb-auto ">

                  <span class="float-right text-light">Never attempt the quiz</span>
@php

    $attempts=$attempted_user->where('attempteds.s_code', '=', $activity->s_code)->get()

@endphp

                  @foreach ($attempts as $key => $attempted)

                @if ($key >= 5)
                            @php
                                continue;
                            @endphp
                @else

                        @if ($key == 0)

                            <img src="{{ asset('storage/' . $attempted->passport) }}"
                            title="{{ $attempted->name }}" height="30" class="rounded-circle" alt="">
                        @else

                            <img src="{{ asset('storage/' . $attempted->passport) }}"
                             title="{{ $attempted->name }}" height="30" style="margin-left: -1.2em;" class="rounded-circle" alt="">
                        @endif
                @endif

                    @endforeach



                    <p class="mt-2 text-muted ">
                    @foreach ($attempts as $key => $attempted)
                        @if ($key>2)
                                @php
                                    continue;
                                @endphp
                        @else
                        {{-- stop display name if the number of attempted student is less than 3 --}}
                        @if (count($attempts)<3)
                                @php
                                    continue;
                                @endphp
                        @else
                                {{-- printing name of the first 3 that makes the attempt --}}
                                {{$attempted->name}}

                        @endif
                     {{-- end of stop display name if the number of attempted student is less than 3 --}}
                                {{-- check if the names are up to 3 --}}
                            @if ($key==2)
                                    @php
                                        continue;
                                    @endphp
                            @else
                            {{-- adding comma after each name --}}
                            ,
                            @endif
                             {{-- end of check if the names are up to 3 --}}
                        @endif
                    @endforeach

                    and
                    {{count($attempts)-3 < 1 ? ' ' : count($attempts)-3}}
                    others <a href="#" class="text-muted">Attempted the quize</a>

                  <button  class="btn btn-primary float-right scodeBtn"  data-toggle="modal" data-target="#exampleModalLong">start now</button>

                </p>

                    </div>
                </div>


                @endforeach

                @endunless
                <div class="modal fade bd-example-modal-lg" tabindex="-1" id="exampleModalLong" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Exam Regulations</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

        <div class="row ">
            <div class="col-md-12 container ">
            <div class="wrapper rounded bg-white p-5">
               <h4>
                    RULES AND REGULATIONS GOVERNING THIS EXAMINATION
            </h4>
            <ol>
                <li><h5>Page Reload</h5>
                <p>
Don't reload page when you start exam
    </p>
                </li>
                <li>  <h5>Network</h5>
                <p>      Always ensure you have a strong internet before starting your exam </p>
            </li>
            <li>
               <h5> Submission</h5>
          <p>
            Make sure you submit your answer before logging out or reload the page
         </p>

            </li>
            </ol>



            </div>

            </div>
        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            <form action="{{route('student.activity.question')}}"  method="get">
                                <input type="hidden" id="s_id" name="scode">
                                <input type="hidden" id="exam" name="exam">
                                <button type="submit" class="btn btn-primary" id="btn">Start</button>
                           </form>




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
</div>

@endsection


<script>

// passing each scode to request
document.addEventListener('DOMContentLoaded', function () {
    // Your code here

   const scode = document.getElementsByClassName('s_code');
   let exam = document.getElementsByClassName('exam');
   const scodeBtn = document.getElementsByClassName('scodeBtn');
const s_id = document.getElementById('s_id');
const exam_type = document.getElementById('exam');
for (let index = 0; index < scodeBtn.length; index++) {

     scodeBtn[index].onclick= ()=>{
        s_code=scode[index].value;
        s_id.value=s_code;
        exam=exam[index].value;
        // console.log(exam);
        exam_type.value=exam;



     }
    }
      // alert div
  document.getElementById('alertDiv').style.display = 'block';

// Set a timeout to hide the div after 10 seconds
setTimeout(function() {
  document.getElementById('alertDiv').style.display = 'none';
}, 5000);

});

</script>
