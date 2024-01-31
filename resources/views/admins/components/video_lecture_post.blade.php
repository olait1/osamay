@extends('admins.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title ">
                <h2 class="text-primary">Video Lecture</h2>
             </div>

             <div class="row column4 graph">
                <!-- Gallery section -->
                <div class="col-md-12">
                   <div class="white_shd full margin_bottom_30">
                      <div class="full graph_head">
                         {{-- <div class="heading1 margin_0">
                            <h2 class="text-primary">Upcoming Events</h2>
                         </div> --}}


                         <form action="{{route('admin.video.lecture.post')}}" method="post"  enctype="multipart/form-data">
                            @csrf

                          <div class="modal-body">
                              <div class="form-group">
                                <label for="Event-name" class="col-form-label">Subject:</label>
                                <select name="subject" id="" class="form-control">
                                    @foreach ( $subjects as $subject)


                                    <option value=" {{$subject->id}}">
                                            {{$subject->course_name}}
                                    </option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="Event-time" class="col-form-label">Title:</label>
                                <input type="text" required name="title" class="form-control" >
                              </div>
                              <div class="form-group">
                                <label for="" class="col-form-label">Class:</label>
                                <select  name="class" id="" class="form-control">
                                    @foreach ( $classes as $class)


                                    <option value="{{$class->id}}">
                                            {{$class->class_name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                              <div class="form-group">
                                <label for="image" class="col-form-label">Video Lecture:</label>
                                <input required type="file" name="lecture" class="form-control" id="img">
                              </div>

                          </div>
                          <div class="modal-footer">

                            <button type="submit" class="btn btn-primary">Add</button>
                          </div>
                        </form>




                      </div>

                   </div>
                </div>
             </div>


          </div>

       </div>
    </div>
</div>
@endsection
