@extends('admins.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2 class="text-primary">Class</h2>
                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#add">Add New</button>
            </div>
          </div>
       </div>

                {{-- modal for Add --}}
                <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Class - Add New</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="{{route('admin.class.add')}}" method="post"  enctype="multipart/form-data">
                            @csrf

                          <div class="modal-body">

                              <div class="form-group">
                                <label for="Class-name" class="col-form-label">Class Name:</label>
                                <input type="text" name="class_name" class="form-control" id="event_name">
                                                     </div>

                              <div class="form-group">
                                <label for="Class-name" class="col-form-label">Class Teacher:</label>
                              <select name="teacher" id="" class="form-control">
                                @foreach ($teachers as $teacher )
                                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                @endforeach
                              </select>
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
<!-- table section -->
<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
       <div class="full graph_head">

          <div class="heading1 margin_0">


             <h2 class="text-primary">Class Details</h2>
          </div>
       </div>
       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
                <table class="table">
                <thead>



               <tr>
                      <th>#</th>
                      <th>Class Name</th>
                    <th>Class Teacher</th>
                      <th>Class Population</th>
                      <th>Actions</th>

                   </tr>

                </thead>
                <tbody>
                    @php
                    $i=1;
                    @endphp

                    @foreach ( $classes as $class )
                   <tr>
                      <td>{{$i}}</td>
                      <td>{{$class->class_name}}</td>
                      <td>{{  isset($class->teacher->user->name) ? $class->teacher->user->name : ''}}
                        <input type="hidden" class="pre_teacher_id" value="{{ isset($class->teacher->user->id) ? $class->teacher->user->id : 'NAN'}}">
                    </td>
                      <td>{{count($class->student)}}</td>

                      <td>

                            <input type="hidden" class="event_id" value="{{$class->id}}">

                            <form action="/class/{{$class->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="javascript:void(0);" class="text-primary event_id_btn"  data-toggle="modal" data-target="#events" ><i class="fa fa-edit text-primary mr-2"></i>Edit </a>
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
    </div>
 </div>


    </div>
</div>
@endsection

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
        <form action="{{route('admin.class.edit')}}" method="post"  enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <div class="modal-body">

              <input type="hidden" id="event_id" name="class_id">
            <div class="form-group">
              <label for="Class-name" class="col-form-label">Class Name:</label>

              <select name="class_name" class="form-control" id="">
                @foreach ( $classes as $class)
                <option value="{{$class->class_name}}">{{$class->class_name}}</option>
                @endforeach
            </select>

            </div>

            <div class="form-group">
              <label for="Class-date" class="col-form-label">Class Teacher:</label>
              <input type="hidden" name="teacher_id" id="teacher_id">

              <select name="teacher" class="form-control" id="">
                        @foreach ( $teachers as $teacher)
                        <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                        @endforeach
                </select>
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
  <script>
  // passing each scode to request
  document.addEventListener('DOMContentLoaded', function () {
  const events_id = document.getElementsByClassName('event_id');
 let event;
  const event_id_update=document.getElementById('event_id');
  const teacher_id_update=document.getElementById('teacher_id');
  const events_id_btn = document.getElementsByClassName('event_id_btn');
  for (let index = 0; index < events_id.length; index++) {
     events_id_btn[index].onclick=()=>{
    event=events_id[index].value;

    event_id_update.value=event;

}}
  });

  </script>
