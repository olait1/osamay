@extends('layout.layout')
@section('content')

    
<div class="row container-fluid mt-5  ">

<div class="col-lg-8">



<div class="card" >
<video controls>
  <source src="{{asset('storage/'.$video->book)}}" type="video/mp4">
  <source src="{{asset('storage/'.$video->book)}}" type="video/ogg">

</video>
  <div class="card-body">
    <h5 class="card-title">{{ $video->name }}</h5>
    <p class="card-text">Please rate every of our tutorial for improvement.
</br>
Thanks.
    </p>
  
  
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
Rate Tutorial
</button>
<form action="{{ URL('/add_rating')}}" method="post">

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
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
        <input type="radio" value="1" name="course_rating" checked id="rating1">
        <label for="rating1" class="fa fa-star"></label>
        <input type="radio" value="2" name="course_rating" id="rating2">
        <label for="rating2" class="fa fa-star"></label>
        <input type="radio" value="3" name="course_rating" id="rating3">
        <label for="rating3" class="fa fa-star"></label>
        <input type="radio" value="4" name="course_rating" id="rating4">
        <label for="rating4" class="fa fa-star"></label>
        <input type="radio" value="5" name="course_rating" id="rating5">
        <label for="rating5" class="fa fa-star"></label>
    </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit </button>
      </div>
    </div>
  </div>
</div>
</form>


  </div>
</div>

 
</div>
<div class="col-lg-4 d-none d-md-block">
<h4>
    Related Video
  </h4>
<div class="row ">

  <div class="col-md-12 scroll" style="overflow-y: scroll; height:600px;">

  @foreach ($related_videos as $related_video )
    
 @if ( $related_video->id == $video->id)
   @php
     continue;
   @endphp
 @endif
  <div class="card mt-3" >
<video  loop muted autoplay>
  <source src="{{asset('storage/'.$related_video->book)}}" type="video/mp4">
  <source src="{{asset('storage/'.$related_video->book)}}" type="video/ogg">

</video>
  <div class="card-body">
    <h6 class="card-title">{{ $related_video->name }}</h6>




      <a href="/tutoria{{$related_video->id}}" class="btn btn-primary btn-md">watch</a>
  </div>
</div>

@endforeach
  </div>
</div>
</div>
</div>
<a href="/post/{{$id}}/edit" class="text-danger">Edit</a>
<?php
// dd($video->book);
?>

@endsection