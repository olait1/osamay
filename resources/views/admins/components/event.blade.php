@extends('admins.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2 class="text-primary">Events</h2>
                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#add">Add New</button>
                {{-- modal for Add --}}
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Events - Add New</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('admin.event.post')}}" method="post"  enctype="multipart/form-data">
            @csrf

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
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
    </div>


    </div>
  </div>
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

               {{-- alert message for error --}}
     @if(session('error'))
     <div class="alert alert-danger text-dark" id="alertDiv">
         <span class=" float-right" onclick="  document.getElementById('alertDiv').style.display = 'none';" style="cursor: pointer;">&times;</span>
         {{ session('error') }}

     </div>

 @endif
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
                    <div class="mb-5 mx-3"> <span class=" text-light">{{$event->e_date}}</span>
                     <span  class=" float-right text-light">{{$event->e_time}}</span>
                    </div>
                    <div class="bg-dark text-light p-3">
                        <input type="hidden" class="event_id" value="{{$event->id}}">

                        <form action="/event/{{$event->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="javascript:void(0);" class="text-light event_id_btn"  data-toggle="modal" data-target="#events" ><i class="fa fa-edit text-light mr-2"></i>Edit </a>
                            <button type="submit" class="btn btn-danger ml-3 px-2"><i class="fa fa-trash  mr-2"></i>Delete</button>
                        </form>

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
