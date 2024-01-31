@extends('admins.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2 class="text-primary">Exams</h2>
             </div>
          </div>
       </div>



       <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
           <div class="full graph_head">
              <div class="heading1 margin_0">
                 <h2 class="text-primary">Exam Schedule</h2>
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
           <form action="{{route('admin.exam.add')}}" method="post"  enctype="multipart/form-data">
            @csrf
          <div class="modal-body">
              <div class="form-group">
                <label for="Event-name" class="col-form-label">Subject Name:</label>

                <select name="subject_name" class="form-control" id="">
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->course_code }}">{{ $subject->sessions->session }} | {{ $subject->course_name }} | {{ $subject->levels->class_name }} | {{ $subject->terms->terms }} Term</option>
                    @endforeach
                </select>

              </div>
              <div class="form-group">
                <label for="Event-name" class="col-form-label">Class Name:</label>

                <select name="level" class="form-control" id="">

                    @foreach ($levels as $level)

                        <option value="{{ $level->id }}">{{ $level->class_name }} </option>
                    @endforeach
                </select>

              </div>
              <div class="form-group">
                <label for="Event-name" class="col-form-label">Exam Type:</label>

                <select name="exam" class="form-control" id="">
                    @foreach ($exams as $exam)
                        <option value="{{ $exam->id }}">{{ $exam->exam }}</option>
                    @endforeach
                </select>

              </div>
              <div class="form-group">
                <label for="Event-name" class="col-form-label">Instruction:</label>
                <textarea name="instruction" id="" class="form-control" cols="30" rows="5"></textarea>
              </div>
              <div class="form-group">
                <label for="Event-name" class="col-form-label">Duration:</label>
                        <select name="duration" id="" class="form-control">
                            <option value="20">20 minutes</option>
                            <option value="30">30 minutes</option>
                            <option value="40">40 minutes</option>
                            <option value="50">50 minutes</option>
                            <option value="60">60 minutes</option>
                            <option value="70">70 minutes</option>
                            <option value="80">80 minutes</option>
                            <option value="90">90 minutes</option>
                            <option value="100">100 minutes</option>
                            <option value="110">110 minutes</option>
                            <option value="120">120 minutes</option>
                            <option value="130">130 minutes</option>
                        </select>
              </div>
              <div class="form-group">
                <label for="Event-time" class="col-form-label"> Time:</label>
                <input type="time" name="time" class="form-control" id="event_time">
              </div>
              <div class="form-group">
                <label for="Event-date" class="col-form-label">Date:</label>
                <input type="date" name="date" class="form-control" id="event_date">
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

