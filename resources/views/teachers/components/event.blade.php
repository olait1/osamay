@extends('teachers.dashboard.dashboard')
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
                      <a data-fancybox="gallery" href="images/layout_img/g1.jpg">
                        <img class="img-responsive" src="{{asset('storage/images/'.$event->e_img)}}" alt="#" /></a>
                   </div>
                   <div class="heading_section">
                      <h4>{{$event->e_name}}</h4>
                    <div class="mb-5 mx-3"> <span class=" text-light">{{$event->e_date}}</span>
                     <span  class=" float-right text-light">{{$event->e_time}}</span>
                    </div>
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
