@extends('layout.dashboard')
@section('content')
<div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Manage</h2>
                              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">New Category</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/category" method="post">
         @csrf
         
      <div class="modal-body">
       
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Category Name:</label>
            <input type="text" class="form-control" name="name" id="recipient-name">
          </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send </button>
      </div> 
        </form>
      
    </div>
  </div>
</div></div>
                        </div>
                     </div>

                     <div class="col-md-12 ">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Tutorial</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-striped">
                                       <thead>
                                          <tr>
                                             <th>s/n</th>
                                             <th>Name</th>
                                             <th>Type</th>
                                             <th>Actions</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @php
                                             $sn=1;
                                          @endphp
                                          @foreach ( $courses as $course )
                                             
                                          
                                          <tr>
                                             <td>{{ $sn }}</td>
                                             <td>{{$course->name}}</td>
                                             <td>{{$course->category->name}}</td>
                                             <td>
                                             <a href="/post/{{$course->id}}/edit" class="mx-2"> <i class="fa fa-pencil-square-o fa-lg text-info "></i> </a>  
                                             <form action="/delete/{{$course->id}}" method="post">
                                                @csrf
                                                @method('delete')
                                             <button  type="submit" style="cursor: pointer;" class="mx-2"><i class="fa fa-trash text-danger fa-lg "></i></td></button>
                                             </form>
                                             @php
                                            $sn++;
                                         @endphp
                                          </tr>
                                          @endforeach
                                      
                                       </tbody>
                                    </table>
                                    
                                 </div>
                              </div>
                             
                           </div>
                           <div>
                              {{ $courses->links() }}
                              </div>
                        </div>
                        <div class="col-md-12 mt-5">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Course Registered</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                 <table class="table table-striped">
   <thead>
      <tr>
         <th>s/n</th>
         <th>Name</th>
         <th>Course</th>
         <th>Actions</th>
      </tr>
   </thead>
   <tbody>
      @php
         $sn = 1;
      @endphp
      @foreach($students as $student)
      <tr>
         <td>{{ $sn }}</td>
         <td>{{ $student->user->name }}</td>
         <td>{{ $student->category->name }}</td>
         <td>
            <a href="/student/{{ $student->id }}/edit" class="mx-2">
               <i class="fa fa-pencil-square-o fa-lg text-info"></i>
            </a>
            <a href="/student/{{ $student->id }}" class="mx-2">
               <i class="fa fa-trash text-danger fa-lg"></i>
            </a>
         </td>
      </tr>
      @php
         $sn++;
      @endphp
      @endforeach
   </tbody>
</table>

                                    
                                 </div>
                              </div>
                             
                           </div>
                           <div>
                              {{ $students->links() }}
                              </div>
                        </div>
                        
</div>
@endsection