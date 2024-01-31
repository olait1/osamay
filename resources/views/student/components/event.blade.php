@extends('student.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2 class="text-primary">Events</h2>
             </div>
          </div>
       </div>
<!-- row -->
<div class="row column4 graph">
    <!-- Gallery section -->
    <div class="col-md-12">
       <div class="white_shd full margin_bottom_30">
          <div class="full graph_head">
             <div class="heading1 margin_0">
                <h2 class="text-primary">Upcoming Events</h2>
             </div>
          </div>
          <div class="full gallery_section_inner padding_infor_info">
             <div class="row">
                @foreach ($events as $event )


                <div class="col-sm-4 col-md-3 margin_bottom_30">
                   <div class="column">

                        <img class="img-responsive" src="{{asset('storage/'.$event->e_img)}}" alt="#" />
                   </div>
                   <div class="heading_section">
                      <h4>{{$event->e_name}}</h4>

                    </div>
                    <div class="mb-5 p-3 bg-dark"> <span class=" text-light">{{$event->e_date}}</span>
                        <span  class=" float-right text-light">{{$event->e_time}}</span>
                       </div>
                </div>
                @endforeach



             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- footer -->

</div>
<!-- end dashboard inner -->
</div>

@endsection
