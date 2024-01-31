@extends('admins.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2 class="text-primary">Release Result</h2>
             </div>
          </div>
       </div>






       <div class="row column4 graph">
        <!-- Gallery section -->
        <div class="col-md-12">
           <div class="white_shd full margin_bottom_30">

              <div class="full gallery_section_inner padding_infor_info">
                {{-- alert message for message --}}
            @if(session('message'))
            <div class="alert alert-success text-dark" id="alertDiv">
                <span class=" float-right" onclick="  document.getElementById('alertDiv').style.display = 'none';" style="cursor: pointer;">&times;</span>
                {{ session('message') }}

            </div>

        @endif
              {{-- alert message for error --}}
              @if(session('error'))
              <div class="alert alert-danger text-dark" id="alertDiv">
                  <span class=" float-right" onclick="  document.getElementById('alertDiv').style.display = 'none';" style="cursor: pointer;">&times;</span>
                  {{ session('error') }}

              </div>

          @endif



                    <form action="{{route('admin.manage.grade.release.result')}}" method="post">
                        @csrf
            <h4  class="text-muted">Session:</h4>
                    <select name="session" class="form-control" style="border-top: none; border-left:none; border-right:none; " id="">
                    @foreach ($sessions as $session)
                        <option value="{{$session->id}}">{{$session->session}}</option>
                        @endforeach

                    </select>
                    <h4 class="text-muted mt-4">Term:</h4>
                    <select name="term" class="form-control" style="border-top: none; border-left:none; border-right:none; " id="">
                        @foreach ($terms as $term)
                        <option value="{{$term->id}}">{{$term->terms}}</option>
                        @endforeach

                    </select>
                    {{-- <h4 class="text-muted mt-4">Level:</h4>
                    <select name="level" class="form-control" style="border-top: none; border-left:none; border-right:none; " id="">
                       @foreach ($classes as $class )


                        <option value="{{$class->id}}">{{$class->class_name}}</option>

                        @endforeach
                    </select> --}}
                    <button type="submit" class="btn btn-primary float-right mt-3">Release Result</button>
                </form>
                <form action="{{route('admin.manage.grade.new.result')}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-success float-right mt-3 mx-3">New Result</button>

                </form>
                <p>click on new result to clear the previous released result</p>
              </div>
           </div>
        </div>
     </div>








    </div>
</div>
@endsection
