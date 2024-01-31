@extends('admins.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2 class="text-primary">Sections</h2>

            </div>
          </div>
       </div>




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
                <form action="{{route('admin.section.post')}}" method="post"  enctype="multipart/form-data">
                    @csrf

                  <div class="modal-body">
{{--
                        <input type="hidden" id="event_id" name="event_id"> --}}
                      <div class="form-group">
                        <label for="Term-name" class="col-form-label">Term:</label>
                        <input type="text" name="term" class="form-control" >
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


          <div class="row column4 graph">
            <!-- Gallery section -->
            <div class="col-md-12">
               <div class="white_shd full margin_bottom_30">
                  <div class="full graph_head">
                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#add">Add New</button>
                     <div class="heading1 margin_0">

                        <h2 class="text-primary">Term</h2>
                     </div>
                  </div>





                  <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                       <table class="table">
                          <thead>

                             <tr>
                                <th>#</th>
                                <th>Term</th>


                                <th>Action</th>

                             </tr>
                          </thead>
                          <tbody>
                              @php
                                  $i=1;
                              @endphp
                              @foreach ($terms as $term )

                             <tr>
                            <td>{{$i}}</td>
                                <td>
                                {{-- <input type="hidden" name="subject_id" value="
                                {{$subject->id}}
                                "> --}}
                                {{$term->terms}}

                              </td>
                            <td>
                                  <form action="{{route('admin.section.delete')}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <a href="javascript:void(0);" class="text-primary event_id_btn"  data-toggle="modal" data-target="#events" >
                                          <i class="fa fa-edit text-primary mr-2"></i>Edit </a>
                                          <input type="hidden" name="id" class="event_id" value="{{$term->id}}">
                                      <button type="submit" class="btn btn-danger ml-3 px-2"><i class="fa fa-trash  mr-2"></i>Delete</button>
                                  </form>
                                </td>

                                </tr>
                             @php
                                 $i++;
                             @endphp
                             @endforeach
                          </tbody>
                       </table>
                    </div>
                 </div>





{{-- modal for edit Term --}}
<div class="modal fade" id="events" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Terms - Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('admin.section.term.edit')}}" method="post"  enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <div class="modal-body">

              <input type="hidden" id="event_id" name="id">
            <div class="form-group">
              <label for="Event-name" class="col-form-label">Term:</label>
              <input type="text" name="term" class="form-control" id="event_name">
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



          </div>



          <div class="row column4 graph">
            <!-- Gallery section -->
            <div class="col-md-12">
               <div class="white_shd full margin_bottom_30">
                  <div class="full graph_head">
                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addSession">Add New</button>
                     <div class="heading1 margin_0">

                        <h2 class="text-primary">Session</h2>
                     </div>
                  </div>


                  <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                       <table class="table">
                          <thead>

                             <tr>
                                <th>#</th>
                                <th>Session</th>


                                <th>Action</th>

                             </tr>
                          </thead>
                          <tbody>
                              @php
                                  $i=1;
                              @endphp
                              @foreach ($sessions as $session )

                             <tr>
                            <td>{{$i}}</td>
                                <td>
                                {{-- <input type="hidden" name="subject_id" value="
                                {{$subject->id}}
                                "> --}}
                                {{$session->session}}

                              </td>
                            <td>
                                  <form action="{{route('admin.section.session.delete')}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <a href="javascript:void(0);" class="text-primary session_id_btn"  data-toggle="modal" data-target="#session" >
                                          <i class="fa fa-edit text-primary mr-2"></i>Edit </a>
                                          <input type="hidden" name="id" class="session_id" value="{{$session->id}}">
                                      <button type="submit" class="btn btn-danger ml-3 px-2"><i class="fa fa-trash  mr-2"></i>Delete</button>
                                  </form>
                                </td>

                                </tr>
                             @php
                                 $i++;
                             @endphp
                             @endforeach
                          </tbody>
                       </table>
                    </div>
                 </div>





{{-- modal for edit session --}}
<div class="modal fade" id="session" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Session - Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('admin.section.session')}}" method="post"  enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <div class="modal-body">

              <input type="hidden" id="session_id" name="id">
            <div class="form-group">
              <label for="Event-name" class="col-form-label">Session:</label>
              <input type="text" name="session" class="form-control" id="session_name">
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




         {{-- modal for session Add --}}
         <div class="modal fade" id="addSession" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Session - Add New</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{route('admin.section.session.add')}}" method="post"  enctype="multipart/form-data">
                    @csrf

                  <div class="modal-body">
{{--
                        <input type="hidden" id="session_id" name="session_id"> --}}
                      <div class="form-group">
                        <label for="Term-name" class="col-form-label">Session:</label>
                        <input type="text" name="session" class="form-control" >
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
// session edit
const session_id = document.getElementsByClassName('session_id');
let session;
const session_id_update=document.getElementById('session_id');

const session_id_btn = document.getElementsByClassName('session_id_btn');

for (let index = 0; index < session_id.length; index++) {
    // console.log(session_id_btn);
   session_id_btn[index].onclick=()=>{
    // console.log( session_id_btn[index]);
  session=session_id[index].value;
  session_id_update.value=session;

   }

}

});
</script>
