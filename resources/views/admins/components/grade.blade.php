@extends('admins.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title ">
                <h2 class="text-primary">Grade Marks</h2>
             </div>
          </div>
       </div>



       <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
           <div class="full graph_head">
              <div class="heading1 margin_0">
                 <h2 class="text-primary">Grade Records Marks</h2>
              </div>
           </div>



           <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
                <form action="{{route('admin.manage.grade.post')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                  <div class="modal-body">
                      <div class="form-group">
                        <label for="Class-name" class="col-form-label">Excellent:</label>
                        <input type="text" name="excellent" value="{{$grades->excellent}}" class="form-control" id="event_name">

                    </div>
                    <div class="form-group">
                        <label for="Class-name" class="col-form-label">Very Good:</label>
                        <input type="text" name="vgood" value="{{$grades->vgood}}" class="form-control" id="event_name">

                    </div>
                    <div class="form-group">
                        <label for="Class-name" class="col-form-label">Good:</label>
                        <input type="text" name="good" value="{{$grades->good}}" class="form-control" id="event_name">

                    </div>
                    <div class="form-group">
                        <label for="Class-name" class="col-form-label">Satisfactory:</label>
                        <input type="text" value="{{$grades->satisfactory}}" name="satisfactory" class="form-control" id="event_name">

                    </div>
                    <div class="form-group">
                        <label for="Class-name" class="col-form-label">Pass:</label>
                        <input type="text" value="{{$grades->pass}}" name="pass" class="form-control" id="event_name">
                    </div>
                    <div class="form-group">
                        <label for="Class-name" class="col-form-label">Fail:</label>
                        <input type="text"  value="{{$grades->fail}}"  placeholder="e.g. 0 < 40" name="fail" class="form-control" id="event_name">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>



            </div>
           </div>



        </div>
       </div>







    </div>
</div>
@endsection
