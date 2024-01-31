@extends('admins.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title ">
                <h2 class="text-primary">Parents</h2>
             </div>

                      <div class="page_title shadow" style="margin-top: -2.2em;">

                        <div class="input-group ">

                            <input type="search" name="search" id="mySearch" onkeyup="searchParent()" class="form-control  rounded" placeholder="Search..." aria-label="Search" aria-describedby="search-addon" />

                        </div>

                          <p class="text-muted">search with student id, parent name or class</p>
                      </div>



<!-- table section -->
<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
       <div class="full graph_head">

          <div class="heading1 margin_0">


             <h2 class="text-primary">Parents Details</h2>
          </div>
       </div>
       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
             <table class="table" id="table">
                <thead>
               <tr>
                      <th>#</th>
                      <th>Parent Name</th>
                    <th>Child Name</th>
                      <th>Student Id</th>

                      <th>Address</th>

                      <th>Parent Email</th>
                      <th>Phone No</th>
                      {{-- <th>Nationality</th>
                      <th>Club</th>
                      <th>Hobby</th> --}}
                      <th>Picture</th>
                   </tr>
                </thead>
                <tbody>
                    @php
                    $i=1;
                    @endphp
            @foreach ($parents as $parent )

                   <tr class="tr">
                      <td>{{$i}}</td>

                      <td>{{$parent->p_name}}</td>
                      {{-- @dd($parent->students->user->name) --}}
                      <td>{{$parent->students->user->name}}</td>
                      <td>{{$parent->students->student_id}}</td>

                      <td>{{$parent->students->user->home_address}}</td>
                      <td>{{$parent->p_email}}</td>
                    <td>{{$parent->phone_no}}</td>
                    {{--  <td>{{$student->nationality}}</td>
                      <td>{{$student->club}}</td>
                      <td>{{$student->hobby}}</td> --}}
                      <td><img src="{{asset('storage/'.$parent->passport)}}" height="50" alt="" srcset=""></td>
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
    function searchParent(){
        var input,filter,table,tr,td,teacher_email,teacher_name;
        input = document.getElementById('mySearch');
        filter = input.value.toUpperCase();
        table = document.getElementById('table');
      tr= document.getElementsByClassName('tr');

      for (let index = 0; index < tr.length; index++) {
        td=tr[index].getElementsByTagName('td');
        parent_name = td[1].innerHTML.toUpperCase();
        child_name =  td[2].innerHTML.toUpperCase();
        student_id =  td[3].innerHTML.toUpperCase();
if (parent_name.indexOf(filter) > -1 ||   child_name.indexOf(filter) > -1 || student_id.indexOf(filter) > -1  ) {
    tr[index].style.display = "";
}else{
    tr[index].style.display = "none";
}

      }

    }
</script>
