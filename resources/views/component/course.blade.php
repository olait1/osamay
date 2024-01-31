 
 <!-- Courses Start -->
 <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
                <h1>Our Popular Courses</h1>
            </div>
            <div class="row">
               @php
                   
               use App\Models\rating;
               $rated_courses=rating::all();
               $arr=[];
               @endphp
                @foreach ($max_records as $course_id)
                @php
                $course = DB::table('courses')->where('id', $course_id)->first();    
                $user= DB::table('ratings')->where('course_id', $course_id)->count();
                $rated_values=rating::where('course_id',$course_id)->sum('star_rated');



       if ($rated_courses->count() > 0) {
           # code...
         
          
           $stared=($rated_values) / ( $user);
         
    
       }else{
           $stared=0;
          
       }
                @endphp
            
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                    <video  loop muted autoplay height="250px">
  <source src="{{asset('storage/'.$course->book)}}" type="video/mp4">
  <source src="{{asset('storage/'.$course->book)}}" type="video/ogg">

</video>

                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>
                            {{ $user > 1 ? $user.' students' : $user.' student' }}   
                            </small>
    
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div>
                            <a class="h5" href="/tutoria{{$course->id}}">{{ $course->name }}</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>{{ number_format($stared) }}.0 </h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
    
            </div>
        </div>
    </div>
    <!-- Courses End -->
