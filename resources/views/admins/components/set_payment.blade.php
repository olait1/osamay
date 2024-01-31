@extends('admins.dashboard.dashboard')
@section('content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2 class="text-primary">Set Payment</h2>

            </div>
          </div>
       </div>



<!-- row -->
<div class="row column4 graph">
    <!-- Gallery section -->
    <div class="col-md-12">
       <div class="white_shd full margin_bottom_30">
          <div class="full graph_head">
             <div class="heading1 margin_0">
                <h2 class="text-primary">Payment</h2>
             </div>
          </div>

          <div class="full gallery_section_inner padding_infor_info">
             <div class="row">
                <div class="col-md-12">
                    <form class="form" action="{{route('admin.post.set.payment')}}" method="post">
                        @csrf
                        <div class="form-group">
                    <label for="">Description</label>
                <input type="text" name="description" id="" placeholder="e.g. School Fees" class="form-control" style="font-size: 16px;">
            </div>
            <div class="form-group">
                <label for="">Class</label>
                <select name="level" id="" class="form-control">
                    @foreach ( $levels as $level )

                    <option value="{{$level->id}}">{{$level->class_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Session</label>
                <select name="session" id="" class="form-control">
                    @foreach ( $sessions as $session )
                    <option value="{{$session->id}}">{{$session->session}}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="">Term</label>
                <select name="term" id="" class="form-control">
                    @foreach ($terms as $term )
                    <option value="{{$term->id}}">{{$term->terms}}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="">Amount</label>
                <input type="text" name="amount" id="" value="#" class="form-control">
            </div>
<div class="form-group">
    <input type="submit" value="Submit" class="btn btn-primary">
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
