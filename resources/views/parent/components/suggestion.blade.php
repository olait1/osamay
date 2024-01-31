@extends('parent.dashboard.dashboard')
@section('content')
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2 class="text-primary">Suggestion</h2>
                           </div>
                        </div>
                     </div>








<form action="{{route('student.suggestionMessage')}}" method="post">
    @csrf

<textarea class="bg-active form-control" required name="message" id="" cols="30" rows="20"></textarea>
<button class="btn btn-primary float-right mt-3">Send</button>


</form>






                  </div>
</div>
@endsection

