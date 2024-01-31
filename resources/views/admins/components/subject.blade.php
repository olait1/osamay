@extends('admins.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title ">
                <h2 class="text-primary">Subjects</h2>
             </div>

                      <div class="page_title shadow" style="margin-top: -2.2em;">

                        <div class="input-group ">

                            <input type="search" name="search" class="form-control  rounded" id="mySearch" onkeyup="searchSubject()" placeholder="Search..." aria-label="Search" aria-describedby="search-addon" />

                        </div>

                          <p class="text-muted">search with student id, name or class</p>
                      </div>


  {{-- modal for Add --}}
  <div class="modal fade full" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Subjects - Add New</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="login_form">
            <form method="post" action="{{route('admin.subject.add')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group" enctype="multipart/form-data">


                                <input type="text" style="background:#e8f0fe;"
                                 class="form-control border-0 p-4" name="name" value="{{ old('name') }}" placeholder="Subject Name" required="required" />

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Session:</label>
                          <select name="session" value="1" style="background:#e8f0fe;" id="" class="form-control">
                            @foreach ($sessions as $session)
                            <option value="{{$session->id}}">{{$session->session}}</option>

                            @endforeach
                         </select>
                            </div>


                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Term:</label>
                          <select name="term" style="background:#e8f0fe;" id="" class="form-control">
                            @foreach ( $terms as $term )
                            <option value="{{$term->id}}">{{$term->terms}}</option>
                            @endforeach

                          </select>
                            </div>


                        </div>




    <div class="col-md-12">
        <div class="form-group">
            <label for="">Level:</label>
      <select name="level" style="background:#e8f0fe;" id="" class="form-control">
       @foreach ($classes as $level)
        <option value="{{$level->id}}">{{$level->class_name}}</option>
        @endforeach
      </select>
        </div>


    </div>
</div>


                        <div>
                            <button class="btn btn-dark btn-block border-0 py-3" type="submit">Add</button>
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
        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#add">Add New</button>

          <div class="heading1 margin_0">


             <h2 class="text-primary">Subject Details</h2>
          </div>
       </div>

       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
             <table class="table" id="table">
                <thead>

                   <tr>
                      <th>#</th>
                      <th>Subject Name</th>
                      <th>Subject Code</th>
                      <th>Session</th>
                      <th>Level</th>
                      <th>Term</th>
                      <th>Action</th>

                   </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($subjects as $subject )

                   <tr class="tr">

                      <td>
                        {{$i}}
                      <input type="hidden" name="subject_id" value="{{$subject->id}}">
                    </td>

                      <td>{{$subject->course_name}}</td>
                      <td>{{$subject->course_code}}</td>
                      <td>
                        {{$subject->sessions->session}}
                      </td>
                      <td> {{$subject->levels->class_name}}</td>
                    <td>
                        {{$subject->terms->terms}}
                       </td>
                       <td>
                        <form action="{{route('admin.subject.delete')}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="javascript:void(0);" class="text-primary event_id_btn"  onclick="edit();" data-toggle="modal" data-target="#events" >
                                <i class="fa fa-edit text-primary mr-2"></i>Edit </a>

                                <input type="hidden" name="id" class="event_id" value="{{$subject->id}}">
                            <button type="submit" class="btn btn-danger ml-3 px-2"><i class="fa fa-trash  mr-2"></i>Delete</button>
                        </form></td>

                      {{-- <td>{{$student->student_id->student_id}}</td>
                      <td>{{$student->DOB}}</td>
                      <td>{{$student->home_address}}</td>
                      <td>{{$student->gender}}</td> --}}
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



{{-- modal for edit --}}
<div class="modal fade" id="events" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Subject - Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="login_form">
            <form method="post" action="{{route('admin.subject.edit')}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-12">

                            <input type="hidden" id="event_id" name="id">
                  
                            <div class="form-group" enctype="multipart/form-data">

                                <input type="text" style="background:#e8f0fe;"
                                 class="form-control border-0 p-4" name="name" value="{{ old('name') }}" placeholder="Subject Name" required="required" />

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Session:</label>
                          <select name="session" style="background:#e8f0fe;" id="" class="form-control">
                    @foreach ($sessions as $session)

                    <option value="{{$session->id}}">{{$session->session}}</option>
                    @endforeach
                </select>
                            </div>


                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Term:</label>
                          <select name="term" style="background:#e8f0fe;" id="" class="form-control">
                            @foreach ( $terms as $term)


                            <option value="{{$term->id}}">{{$term->terms}}</option>
                            @endforeach
                          </select>
                            </div>


                        </div>




    <div class="col-md-12">
        <div class="form-group">
            <label for="">Level:</label>
      <select name="level" style="background:#e8f0fe;" id="" class="form-control">
        @foreach ($classes as $class)


        <option value="{{$class->id}}">{{$class->class_name}}</option>
        @endforeach
      </select>
        </div>


    </div>
</div>


                        <div>
                            <button class="btn btn-dark btn-block border-0 py-3" type="submit">Update</button>
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

});
</script>

<script>
    function searchSubject(){
        var input,filter,table,tr,td,s_code,session,level,term;
        input = document.getElementById('mySearch');
        filter = input.value.toUpperCase();
        table = document.getElementById('table');
      tr= document.getElementsByClassName('tr');

      for (let index = 0; index < tr.length; index++) {
        td=tr[index].getElementsByTagName('td');
        subject_name = td[1].innerHTML.toUpperCase();
        s_code =  td[2].innerHTML.toUpperCase();
        session =  td[3].innerHTML.toUpperCase();
        level =  td[4].innerHTML.toUpperCase();
        term = td[5].innerHTML.toUpperCase();
if (s_code.indexOf(filter) > -1 ||   subject_name.indexOf(filter) > -1 || session.indexOf(filter) > -1 || level.indexOf(filter) > -1 || term.indexOf(filter) > -1 ) {
    tr[index].style.display = "";
}else{
    tr[index].style.display = "none";
}

      }

    }
</script>
