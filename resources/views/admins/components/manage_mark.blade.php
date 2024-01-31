@extends('admins.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title ">
                <h2 class="text-primary">Manage Marks</h2>
             </div>


             <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                   <div class="full graph_head">
                      <div class="heading1 margin_0">
                         <h2 class="text-primary">Exam Pass Marks</h2>
                      </div>
                   </div>


                   <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <form action="{{route('admin.manage.mark.add')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                          <div class="modal-body">
                              <div class="form-group">
                                <label for="Class-name" class="col-form-label">Exam Pass Mark:</label>
                                <input type="text" name="post_score" class="form-control" id="event_name">
                            <input type="hidden" name="score_id" value="2">
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




             <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                   <div class="full graph_head">
                      <div class="heading1 margin_0">
                         <h2 class="text-primary">Test Pass Marks</h2>
                      </div>
                   </div>


                   <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">

                    <form action="{{route('admin.manage.mark.test')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                          <div class="modal-body">

                            <div class="form-group">
                                <label for="Class-name" class="col-form-label">Exam Pass Mark:</label>
                                <input type="text" name="post_score" class="form-control" id="event_name">
                            <input type="hidden" name="score_id" value="1">
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




             <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                   <div class="full graph_head">
                      <div class="heading1 margin_0">
                         <h2 class="text-primary">Quize Pass Marks</h2>
                      </div>
                   </div>


                   <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <form action="{{route('admin.manage.mark.add')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                          <div class="modal-body">
                              <div class="form-group">
                                <label for="Class-name" class="col-form-label">Quize Pass Mark:</label>
                                <input type="text" name="post_score" class="form-control" id="event_name">
                            <input type="hidden" name="score_id" value="3">
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




             <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                   <div class="full graph_head">
                      <div class="heading1 margin_0">
                         <h2 class="text-primary">Assignment Pass Marks</h2>
                      </div>
                   </div>


                   <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">

                    <form action="{{route('admin.manage.mark.assignment')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                          <div class="modal-body">

                            <div class="form-group">
                                <label for="Class-name" class="col-form-label">Assignment Pass Mark:</label>
                                <input type="text" name="post_score" class="form-control" id="event_name">
                            <input type="hidden" name="score_id" value="4">
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
    </div>
</div>
@endsection
