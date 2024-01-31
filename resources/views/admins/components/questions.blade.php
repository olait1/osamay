@extends('admins.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2 class="text-primary">Question</h2>
             </div>
          </div>
       </div>


       <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
           <div class="full graph_head">
              <div class="heading1 margin_0">
                 <h2 class="text-primary">Upload Question</h2>
              </div>
           </div>
           @if(session('success'))
           <div class="alert alert-success">
               {{ session('success') }}
           </div>
       @endif

       {{-- @if(session('error'))
           <div class="alert alert-danger">
               {{ session('error') }}
           </div>
       @endif --}}
           <form action="{{route('admin.question.add')}}" method="post"  enctype="multipart/form-data">
            @csrf
          <div class="p-5">



       <div class="form-group">
        <label for="session" class="col-form-label">Exam Type:</label>
        <select name="exam" id="" class="form-control">
            @foreach ($exams as $exam)
            <option value="{{$exam->id}}">{{$exam->exam}}</option>
               @endforeach
        </select>
        </div>

              <div class="form-group">
            <label for="">Subject:</label>

            <select name="s_code" id="" class="form-control">

                    @foreach ($subjects as $subject)

                    <option value="{{$subject->course_code}}">{{$subject->sessions->session}} | {{$subject->course_name}} | {{ strtoupper($subject->levels->class_name)}} | {{$subject->terms->terms}} Term</option>
                       @endforeach
                </select>
              </div>



              <div class="form-group">
                <label for="Event-name" class="col-form-label">Question:</label>
                <textarea name="question" id="" class="form-control" cols="30" rows="5"></textarea>
              </div>

              <div class="form-group">
                <label for="Event-name" class="col-form-label">Option A:</label>
                <input type="text" name="a" class="form-control">
              </div>
              <div class="form-group">
                <label for="Event-name" class="col-form-label">Option B:</label>
                <input type="text" name="b" class="form-control">
              </div>
              <div class="form-group">
                <label for="Event-name" class="col-form-label">Option C:</label>
                <input type="text" name="c" class="form-control">
              </div>
              <div class="form-group">
                <label for="Event-name" class="col-form-label">Option D:</label>
                <input type="text" name="d" class="form-control">
              </div>

              <div class="form-group">
                <label for="Event-name" class="col-form-label">Answer:</label>
                <input type="text" name="ans" class="form-control">
              </div>


          </div>
          <div class="modal-footer">

            <button type="submit" class="btn btn-primary">Upload</button>
          </div>
        </form>


        </div>
       </div>











    </div>
</div>
@endsection
