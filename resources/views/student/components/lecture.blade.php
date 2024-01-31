@extends('student.dashboard.dashboard')
@section('content')
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2 class="text-primary">Lecture</h2>
                           </div>
                        </div>
                     </div>





<!-- row -->
<div class="row column4 graph">

    <div class="full gallery_section_inner padding_infor_info">
       <div class="row">


        @unless (count($lectures) == 0)

@foreach ($lectures as $lecture)

          <div class="col-sm-4 col-md-4 margin_bottom_30">
             <div class="column  " >


                        <video  loop muted autoplay class="w-100">
<source src="{{asset('storage/'.$lecture->l_path)}}" type="video/mp4">
<source src="{{asset('storage/'.$lecture->l_path)}}" type="video/ogg">

</video>
          </div>
             <div class="heading_section p-3 pb-5 ">
                <h5 class="text-white">
                    {{-- @dd($lecture->lecture_subject) --}}
                    {{$lecture->lecture_subject->course_name}} | {{$lecture->classes->class_name}}
                </h5>
                <p class="text-light text-center ">{{$lecture->l_title}}</p>
              {{-- <span class="float-right text-light">Never attempt the quiz</span> --}}

              {{-- <img src="{{asset('storage/passport/HthzS0NJ0x5pQBdRfX5gBlLmXLCLVvy02TxSXncR.jpg')}}" title="" height="30" class="rounded-circle" alt="">

               <img src="{{asset('storage/passport/wXxYtAo7fI5CRBSpUoxjXJn9vA4qfEKLcfTjvb8Z.jpg')}}" height="30" style="margin-left: -1.2em;" class="rounded-circle" alt="">
             <p class="mt-2 text-muted">and 56 others <a href="#" class="text-muted">Attempted the quize</a>--}}
                <p class="mt-2 text-muted">
                    <form action="/student/lecture/video/{{$lecture->id}}" method="get">
                    <button class="btn btn-primary float-right">watch now</button>
                </form>
                </p>
              </div>
          </div>
@endforeach
@else
<h2>No lecture to watch</h2>

@endunless


       </div>
    </div>
 </div>




                  </div>
</div>
@endsection
