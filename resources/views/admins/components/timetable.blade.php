@extends('admins.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title ">
                <h2 class="text-primary">Timetable</h2>
             </div>





<!-- table section -->
<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
       <div class="full graph_head">
         <div class="heading1 margin_0">


             <h2 class="text-primary">Timetable</h2>
          </div>
       </div>

       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">





            <form method="post" action="{{route('admin.timetable.post')}}" enctype="multipart/form-data">
                @csrf
                <div class="row ">
                    <div class="col-md-12">

                        <div class="form-group" enctype="multipart/form-data">
                            <label for="">Period:</label>
                            <input type="text"  class="form-control " name="period" value=""  required="required" />

                        </div>
                    </div>


                </div>
                <div class="row ">
                    <div class="col-md-12">
                        @php
                            $days = ['Monday', 'Tuesday','Wednessday','Thursday','Friday']
                        @endphp
                        <div class="form-group" enctype="multipart/form-data">
                            <label for="">Day:</label>
       <select name="day" id="" class="form-control">
        @foreach ( $days as $key=>$day )
            <option value="{{$key+1}}">{{$day}}</option>
        @endforeach
       </select>
                        </div>
                    </div>
                </div>



<div class="row">
<div class="col-md-12">
<div class="form-group">
    <label for="" class="text-dark">Subject:</label>
    <select  name="subject" id="" class="form-control">
      @foreach ($subjects as $subject)
        <option value="{{$subject->id}}">
    {{$subject->sessions->session}} | {{$subject->course_name}} | {{$subject->levels->class_name}} | {{$subject->terms->terms}} term
        </option>
      @endforeach
    </select>
</div>
</div>
</div>
   <div>
                        <button class="btn btn-dark float-right border-0 py-3" type="submit">Add</button>
                    </div>
                </form>







        </div>
       </div>

    </div>
 </div>




 <!-- table section -->
 <div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
       <div class="full graph_head">
          <div class="heading1 margin_0">
             <h2 class="text-primary">Update Time Table</h2>
          </div>
       </div>
                {{-- modal for Add --}}
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit - Time Table</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('admin.timetable.edit')}}" method="post"  enctype="multipart/form-data">
@method('PUT')
            @csrf

          <div class="modal-body">

                <input type="hidden" id="event_id" name="event_id">


                <div class="form-group" enctype="multipart/form-data">
                    <label for="">Day:</label>
<select name="day" id="" class="form-control">
@foreach ( $days as $key=>$day )
    <option value="{{$key+1}}">{{$day}}</option>
@endforeach
</select>
                </div>
                <div class="form-group" enctype="multipart/form-data">
                    <label for="">Period:</label>
                    <input type="text"  class="form-control " name="period" value=""  required="required" />

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
       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
             <table class="table table-striped">
                <thead>
                   <tr>
                      <th>Subject</th>
                      <th>Period</th>
                      <th>Day</th>
                      <th>Level</th>
                      <th>Action</th>
                   </tr>
                </thead>
                <tbody>
             @php
    $day =['Mon','Tues',"Wed","Thurs","Fri"];
            @endphp
             @foreach ( $timetables as $timetable)


                   <tr>
                      <td>{{$timetable->subjects->course_name}}</td>
                      <td>{{$timetable->period}}</td>
                      @for ($i=0;$i< count($day);$i++)


                      @if ($timetable->day == 1)
                      <td>{{$day[0]}}</td>
                      @php
                          break;
                      @endphp
                      @elseif($timetable->day == 2)
                      <td>{{$day[1]}}</td>
                      @php
                      break;
                  @endphp
                      @elseif ($timetable->day == 3)
                      <td>{{$day[2]}}</td>
                      @php
                      break;
                  @endphp
                  @elseif($timetable->day == 4)
                  <td>{{$day[3]}}</td>
                  @php
                  break;
              @endphp
                  @elseif ($timetable->day == 5)
                  <td>{{$day[4]}}</td>
                  @php
                  break;
              @endphp

                      @endif
                      @endfor
                      <td>{{$timetable->levels->class_name}}</td>
                      <td>
                        <input type="hidden" class="event_id" value="{{$timetable->id}}">

                        <form action="/timetable/{{$timetable->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="javascript:void(0);" class="text-primary event_id_btn"  data-toggle="modal" data-target="#add" ><i class="fa fa-edit text-primary mr-2"></i>Edit </a>
                            <button type="submit" class="btn btn-danger ml-3 px-2"><i class="fa fa-trash  mr-2"></i>Delete</button>
                        </form>
                      </td>
                   </tr>
                 @endforeach
                </tbody>
             </table>
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


})

</script>
