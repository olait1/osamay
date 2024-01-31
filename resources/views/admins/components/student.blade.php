@extends('admins.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title ">
                <h2 class="text-primary">Students</h2>
             </div>

                      <div class="page_title shadow" style="margin-top: -2.2em;">

                        <div class="input-group ">

                            <input type="search" name="search" class="form-control  rounded" id="mySearch" onkeyup="searchStudent()" placeholder="Search..." aria-label="Search" aria-describedby="search-addon" />

                        </div>

                          <p class="text-muted">search with student id, name or class</p>
                      </div>


  {{-- modal for Add --}}
  <div class="modal fade full" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Students - Add New</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="login_form">
            <form method="post" action="/store" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group" enctype="multipart/form-data">
                                <input type="hidden" name="user" value="1">
                                <input type="text" style="background:#e8f0fe;" class="form-control border-0 p-4" name="name" value="{{ old('name') }}" placeholder="Your name" required="required" />
                            @error('name')
                               <p class="text-danger ">{{$message}}</p>
                            @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4"  value="{{ old('email') }}" style="background:#e8f0fe;" name="email" placeholder="Your email" required="required" />
                                @error('email')
                               <p class="text-danger ">{{$message}}</p>
                            @enderror
                            </div>


                        </div>

                    </div>

<div class="row">
<div class="col-md-6">

                        <div class="form-group">
                            <label for="" class="text-dark">Gender:</label>
                            <input type="radio"  name="gender" id="" value="male">
                            <label for="" class="text-dark">Male</label>
                            <input type="radio"  name="gender" id="" value="female">
                            <label for="" class="text-dark">Female</label>
                            @error('gender')
                            <p class="text-danger ">{{$message}}</p>
                         @enderror
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="text-dark">DOB:</label>
                            <input type="date" style="background:#e8f0fe;" placeholder="DOB" class="form-control border-0 p-4"  value="{{ old('DOB') }}" name="DOB"  />
                            @error('DOB')
                           <p class="text-danger ">{{$message}}</p>
                        @enderror
                        </div>
</div>
</div>

                        <div class="row">
                        <div class="col-md-6">

                        <div class="form-group">

                            <input type="text" style="background:#e8f0fe;" placeholder="Guardian's Name" class="form-control border-0 p-4" value="{{ old('guardian_name') }}"   name="guardian_name"  />
                            @error('guardian_name')
                            <p class="text-danger ">{{$message}}</p>
                         @enderror
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">

                            <input type="email" style="background:#e8f0fe;" value="{{ old('guardian_email') }}" placeholder="Guardian's E-mail" class="form-control border-0 p-4"   name="guardian_email"  />
                            @error('guardian_email')
                            <p class="text-danger ">{{$message}}</p>
                         @enderror
                        </div>

</div>
</div>
<div class="row">
    <div class="col-md-12">

    <div class="form-group">
        <label for="">Class:</label>
<select style="background:#e8f0fe;" name="class" class="form-control" id="">
    <option value="1">Jss1</option>
    <option value="2">Jss2</option>
    <option value="3">Jss3</option>
    <option value="4">sss1</option>
    <option value="5">sss2</option>
    <option value="6">sss3</option>
</select>

        @error('class')
        <p class="text-danger ">{{$message}}</p>
     @enderror
    </div>
    </div>
</div>

<div class="form-group">
<input type="password"  style="background:#e8f0fe;" class="form-control border-0 p-4"  value="{{ old('password') }}" name="password" placeholder="Password" required="required" />
@error('password')
<p class="text-danger ">{{$message}}</p>
@enderror
</div>
                        <div class="form-group">
                            <input type="password" style="background:#e8f0fe;" class="form-control border-0 p-4"  value="{{ old('password_confirmation') }}" name="password_confirmation" placeholder="Confirm password" required="required" />

                        </div>

                        <div class="form-group">
                            <label for="" class="text-dark">Passport</label>
                            <br>
                            <input type="file" class="form-control border-0 "   name="passport" style="background:#e8f0fe;" />

                            @error('passport')
                           <p class="text-danger ">{{$message}}</p>
                        @enderror
                        </div>
                        <div>
                            <button class="btn btn-dark btn-block border-0 py-3" type="submit">Sign Up</button>
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


             <h2 class="text-primary">Students Details</h2>
          </div>
       </div>
       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
             <table class="table" id="table">
                <thead>



                   <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Class</th>
                      <th>Student Id</th>
                      <th>D.O.B</th>
                      <th>Address</th>

                      <th>Sex</th>
                      <th>Phone No</th>
                      <th>Nationality</th>
                      <th>Club</th>
                      <th>Hobby</th>
                      <th>Picture</th>
                   </tr>
                </thead>
                <tbody>
                    @php
$i=1;
                    @endphp
                    @foreach ($students as $student )

                   <tr class="tr">
                      <td>{{$i}}</td>

                      <td>{{$student->name}}</td>

                      <td>{{$student->student_id->classes->class_name}}</td>
                      <td>{{$student->student_id->student_id}}</td>
                      <td>{{$student->DOB}}</td>
                      <td>{{$student->home_address}}</td>
                      <td>{{$student->gender}}</td>
                      <td>{{$student->Phone_no}}</td>
                      <td>{{$student->nationality}}</td>
                      <td>{{$student->club}}</td>
                      <td>{{$student->hobby}}</td>
                      <td><img src="{{asset('storage/'.$student->passport)}}" height="50" alt="" srcset=""></td>
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











          </div>
       </div>





    </div>
</div>
@endsection
<script>
    function searchStudent(){
        var input,filter,table,tr,td,student_name,class_name,student_id;
        input = document.getElementById('mySearch');
        filter = input.value.toUpperCase();
        table = document.getElementById('table');
      tr= document.getElementsByClassName('tr');
      for (let index = 0; index < tr.length; index++) {
        td=tr[index].getElementsByTagName('td');
        student_name = td[1].innerHTML.toUpperCase();
        class_name =  td[2].innerHTML.toUpperCase();
        student_id =  td[3].innerHTML.toUpperCase();
if (student_name.indexOf(filter) > -1 || class_name.indexOf(filter) > -1  || student_id.indexOf(filter) > -1 ) {
    tr[index].style.display = "";
}else{
    tr[index].style.display = "none";
}

      }

    }
</script>
