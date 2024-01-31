@extends('parent.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">

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



     </div>


          <div class="full gallery_section_inner padding_infor_info">
             <div class="row">
                @unless (count($events)>0)
                <h3>No upcoming event for now check later!!!</h3>

@else
                @foreach ($events as $event )


                <div class="col-sm-4 col-md-3 margin_bottom_30">
                   <div class="column">
                        <img class="img-responsive" src="{{asset('storage/'.$event->e_img)}}" alt="#" />
                   </div>
                   <div class="heading_section">
                      <h4>{{$event->e_name}}</h4>
                    <div class="pb-5 mx-3"> <span class=" text-light">{{$event->e_date}}</span>
                     <span  class=" float-right text-light">{{$event->e_time}}</span>
                    </div>

{{-- modal for edit --}}
<div class="modal fade" id="events" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Events - Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin.event.update')}}" method="post"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="modal-body">

            <input type="hidden" id="event_id" name="event_id">
          <div class="form-group">
            <label for="Event-name" class="col-form-label">Event Name:</label>
            <input type="text" name="event_name" class="form-control" id="event_name">
          </div>
          <div class="form-group">
            <label for="Event-time" class="col-form-label">Event Time:</label>
            <input type="time" name="event_time" class="form-control" id="event_time">
          </div>
          <div class="form-group">
            <label for="Event-date" class="col-form-label">Event Date:</label>
            <input type="date" name="event_date" class="form-control" id="event_date">
          </div>
          <div class="form-group">
            <label for="image" class="col-form-label">Event Image:</label>
            <input type="file" name="event_img" class="form-control" id="img">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
    </div>
  </div>
</div>
                    </div>

                </div>

                @endforeach

                @endunless

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

<script>

    // passing each scode to request
document.addEventListener('DOMContentLoaded', function () {
const events_id = document.getElementsByClassName('event_id');
let event;
const event_id_update=document.getElementById('event_id');
const events_id_btn = document.getElementsByClassName('event_id_btn');
for (let index = 0; index < events_id.length; index++) {
   events_id_btn[index].onclick=()=>{
  event=events_id[index].value;
  event_id_update.value=event;

   }

    }
      // alert div
    document.getElementById('alertDiv').style.display = 'block';
    // Set a timeout to hide the div after 10 seconds
    setTimeout(function() {
    document.getElementById('alertDiv').style.display = 'none';
    }, 5000);

})

</script>
