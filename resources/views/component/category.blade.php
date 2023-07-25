<style>
    .card {
  width: 100%;
  height:100%;
}
.card img{
    height:100px;
    width: 100%;
}
    </style>
    <!-- Category Start -->

 
                @auth




                <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Subjects</h5>
                <h1>Explore Top Subjects</h1>
            </div>
            <div class="row">
                <?php
       
               
                ?>
                @unless ( count($courses)==0)
                    @foreach ( $courses as $course)
                    @if ($course->format ==0)
                    <div class="col-lg-3 col-md-4 mb-4  jumbotron rounded-5 mx-1">
                       
                            <a class="cat-overlay text-light text-decoration-none"  rel="noopener noreferrer" target="_blank" href="{{$course->book}}">
                                <h4 class="text-light font-weight-medium">{{$course->name}}</h4>
                                
                            </a>
                    </div>   
                  @else
                    <div class="col-lg-3 col-md-4 mb-4   jumbotron " >
                            
                            <a class="cat-overlay text-light text-decoration-none" href="/tutoria{{$course->id}}">
                            <div class="card">
        <img class="card-img-top" src="https://picsum.photos/300/300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$course->name}}</h5>
           
        </div>
      </div>   
                           
                            </a>
                    </div>
                    @endif
                @endforeach
                @else
             <p>no course  is available</p>
                @endunless
                <div class="row">
                    <div class="col-12">

                    {{ $courses->links() }}
                    </div>
            </div>
            </div >
       
        </div>
    </div>

            @else
            <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Subjects</h5>
                <h1>Explore Top Subjects</h1>
            </div>
            <div class="row">
      
     
                @unless ( count($category)==0)
                    @foreach ( $category as $item )
             
                    @php
                    $cat_no=$item->course()->get();
                
                   
                    @endphp
                       <x-subjects :subject="$item" :category="$category" :catNo="$cat_no" :cat="$category" :courses="$courses" /> 
          
                @endforeach
                <div >
{{ $category->links() }}
            </div>
                @else
                
             <p>no subject category is available</p>
                @endunless
                
            </div >
       
        </div>
    </div>
    
    @endauth
    <script>
$(document).ready(function() {
  $('.card').hover(function() {
    $(this).find('.card-img-top').css('transform', 'scale(1.1)')
  }, function() {
    $(this).find('.card-img-top').css('transform', 'scale(1)')
  })
});
</script>