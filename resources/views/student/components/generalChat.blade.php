
@extends('student.dashboard.dashboard')
@section('content')
<div class="midde_cont" style="margin-bottom: 17%;">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2 class="text-primary">General Chat room</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row ">

                        <div class="col-md-12">

@foreach ($chats as $chat )

@if ( $chat->user_id == auth()->user()->id)

                            <div class="d-flex  float-right  bd-highlight" style="width:60% ">
								<div class="img_cont">
									<img src="{{asset('storage/'.auth()->user()->passport)}}" title="You" class="rounded-circle user_img">
									<span class="online_icon offline"></span>
								</div>
								<div class="user_info" style="width:100% ">
									<span class=" bg-success p-3 text-light w-100  rounded" >{{$chat->message}}</span>

								</div>
							</div>
@else

@if ($chat->user_type == 0)


<div class="d-flex bd-highlight" style="width:100% ">
    <div class="img_cont">
        <img src="{{asset('storage/'.$chat->user->passport)}}" title="{{$chat->user->name}}" class="rounded-circle user_img">
        <span class="online_icon offline"></span>
    </div>
    <div class="user_info " style="width:100% ">
        <span class=" bg-dark p-3 text-light w-50  rounded">{{$chat->message}}</span>
        <p>{{$chat->user->name}} </p>
    </div>
</div>
@elseif($chat->user_type == 2)
<div class="d-flex bd-highlight" style="width:100% ">

    <div class="img_cont">
        <img src="{{($chat->parents->passport) ? asset('storage/'.$chat->parents->passport) : asset('storage/logo/osamay logo.png')}}" title="{{$chat->parents->p_name}}" class="rounded-circle user_img">
        <span class="online_icon offline"></span>
    </div>
    <div class="user_info " style="width:100% ">
        <span class=" bg-info p-3 text-light w-50  rounded">{{$chat->message}}</span>
        <p>{{$chat->parents->p_name}} </p>
    </div>
</div>
@elseif ($chat->user_type == 3)
<div class="d-flex bd-highlight" style="width:100% ">
    <div class="img_cont">
        <img src="{{asset('storage/'.$chat->user->passport)}}" title="{{$chat->user->name}}" class="rounded-circle user_img">
        <span class="online_icon offline"></span>
    </div>
    <div class="user_info " style="width:100% ">
        <span class=" bg-secondary p-3 text-light w-50  rounded">{{$chat->message}}</span>
        <p>{{$chat->user->name}} </p>
    </div>
</div>
@endif

@endif

                            @endforeach


                        </div>
                        </div>


                  </div></div>

                  <div class="row mt-5" style=" bottom:10px;">
                    <div class="row mt-5  mb-0  p-3" style="position:fixed; bottom:0px;background:#15283c; ">
                        <div class="col-md-12 container">
                        <form action="{{route('student.generalChatroom')}}" method="post">
                            @csrf
                            <div class="" style="width: 85%;">
                            <textarea  name="message" id=""  required  class="form-control  pl-4 py-1" style="border-radius: 30px;font-size:17px "></textarea>
  <input type="hidden" name="user_type" value="1">

                        <button class="btn btn-primary mt-2 float-right">send</button>
                            </div>
                    </form>
                    </div>
                </div>
                  </div>
                  @endsection
