@extends('student.dashboard.dashboard')
@section('content')
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2 class="text-primary">Lecture - Video</h2>
                           </div>
                        </div>
                     </div>

    <!-- row -->
    <div class="row column4 graph">

    <div class="full gallery_section_inner padding_infor_info">
       <div class="row">




<!-- row -->
<div class="row column4 graph">

    <div class="full gallery_section_inner padding_infor_info">
       <div class="row">
        <div class=" col-md-11 px-5 margin_bottom_30">
            <div class="column  " >
            <video controls class="w-100">
              <source src="{{asset('storage/'.$video->l_path)}}" type="video/mp4">
              <source src="{{asset('storage/'.$video->l_path)}}" type="video/ogg">
            </video>
        </div>
        <div class="heading_section p-3 pb-5 ">
           <h5 class="text-white">{{$video->name}}</h5>
                  @php $rate_no= number_format ($rated_values) @endphp
                <span>{{ $rated_courses->count() }} Rating</span>
                @for ($i=1; $i <= $rate_no;$i++)
                <i class="fa fa-star-o  checked"></i>
                @endfor
               @for ($j=$rate_no; $j < 5; ++$j)
               <i class="fa fa-star-o "></i>
               @endfor
               <p class="card-text">Please rate every of our tutorial for improvement.
                <br/>
                Thanks.
                    </p>


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Rate Tutorial
                </button>

                </div>




            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
              <form action="{{ url('/rate/add')}}" method="POST">

              @csrf
              <input type="hidden" name="course_id" value="{{ $video->id}}">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Rate {{ $video->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                  <div class="rating-css">
                <div class="star-icon">
                  @if ($user_rate)

                @for ($i=1; $i <= $user_rate->star_rated;$i++)
                <input type="radio" value="{{$i}}" name="course_rating" checked id="rating{{$i}}">
                    <label for="rating{{$i}}" class="fa fa-star"></label>
                    @endfor
                    @for ($j=$user_rate->star_rated + 1; $j <= 5;$j++)
                    <input type="radio" value="{{$j}}" name="course_rating"  id="rating{{$j}}">
                    <label for="rating{{$j}}" class="fa fa-star"></label>

                    @endfor
                  @else
                    <input type="radio" value="1" name="course_rating" checked id="rating1">
                    <label for="rating1" class="fa fa-star-o"></label>
                    <input type="radio" value="2" name="course_rating" id="rating2">
                    <label for="rating2" class="fa fa-star-o"></label>
                    <input type="radio" value="3" name="course_rating" id="rating3">
                    <label for="rating3" class="fa fa-star-o"></label>
                    <input type="radio" value="4" name="course_rating" id="rating4">
                    <label for="rating4" class="fa fa-star-o"></label>
                    <input type="radio" value="5" name="course_rating" id="rating5">
                    <label for="rating5" class="fa fa-star-o"></label>

                    @endif
                  </div>
            </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit </button>
                  </div>
            </form>
                </div>
              </div>
            </div>



              </div>
              <a href="/post/{{$id}}/edit" class="text-info">Edit</a>
              <form action="/post/{{$id}}" method="post">
            @csrf
            @method('DELETE')
            <button  class="btn btn-outline-danger">delete</button>
              </form>

            </div>
              <div class="row container my-3">
                <div class="col-md-9">
                  <h3 class="mt-3 ">Comments</h3>
                  <form action="/comment" method="post">
                    @csrf
                    <input type="hidden" name="course_id" value="{{$id}}">
                    <textarea class="form-control mt-3" placeholder="comment something here..." name="comment" id="" cols="15" rows="5"></textarea>
                  <br>
                    <button type="submit" class="btn btn-primary">Comment</button>
                  </form>

            @if ( $comments->count() > 0 )


            <h3 class="mt-5">All Comments</h3>


            @foreach ( $comments as $comment )
            @if (  $comment->course_id == $id)



            <div class="d-flex bd-highlight" style="width:100% ">
                <div class="img_cont">
                    <img src="{{asset('storage/'.$comment->user->passport)}}" title="{{$comment->user->name}}" class="rounded-circle user_img">
                    <span class="online_icon offline"></span>
                </div>
                <div class="user_info " style="width:100% ">
                    <span class=" bg-info p-3 text-light w-50  rounded">{{$comment->comment}}</span>
                    <p>{{ ucwords($comment->user->name) }}</p>
                </div>
            </div>



            <a href="javascript::void(0);" class="text-info mt-5" onclick="reply(this)"  data-commentId='{{$comment->id}}'>Reply</a>

            @foreach ( $replies as $reply )
            @if ($comment->id == $reply->comment_id && $reply->course_id == $comment->course_id)



            <div class="d-flex bd-highlight reply ml-5" style="width:100% ">
                <div class="img_cont">
                    <img src="{{asset('storage/'.$reply->comment->user->passport)}}" title="{{$reply->comment->user->name}}" class="rounded-circle user_img">
                    <span class="online_icon offline"></span>
                </div>
                <div class="user_info " style="width:100% ">
                    <span class=" bg-info p-3 text-light w-50  rounded">{{$reply->reply}}</span>
                    <p>{{ ucwords($reply->comment->user->name) }} </p>
                </div>
            </div>

            @endif
            @endforeach

            @endif


            @endforeach

            @endif
            <div style="display: none;" class="replyDiv">

              <form action="/reply" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <input type="hidden" name="comment_id" id="commentId">
                <input type="hidden" name="course_id" value="{{$id}}">
              <textarea name="reply" id="" cols="10" class="form-control" rows="3" placeholder="make your comment here"></textarea>
            <br>
            <button type="submit" class="btn btn-info">Reply</button>
            <a href="javascript::void(0);" class="btn btn-danger " onclick=" $('.replyDiv').hide();">Close</a>
            </form>
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
    //reply
function reply(caller){
$('.replyDiv').insertAfter($(caller)).show();
document.getElementById('commentId').value=$(caller).attr('data-commentId');
$('.reply').show();
}

// scroll position

    document.addEventListener("DOMContentLoaded", function(event) {
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
</script>

