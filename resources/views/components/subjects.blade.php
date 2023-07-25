
<?php



?>
@props(['subject','course','cat','catNo'])


<div class="col-lg-3 col-md-6 mb-4">
     
            <x-cards >
          
                        <img class="img-fluid" src="{{ asset( $subject->image )}}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="/login?id={{$subject->id}}">
                            <h4 class="text-white font-weight-medium">{{$subject->name}}</h4>
                            <span>
               
                            </span>
                            @php
                                $cat_no=count($catNo);
                               
                            @endphp
                            {{ $cat_no }}
                            {{ $cat_no > 0 ? 'Courses' : 'Course'  }}
                            </span> 
                       
                        </a>
                    </x-cards>
                </div>
              
               