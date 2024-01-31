<?php

use App\Models\category;

?>
<x-guestLayout>
<!-- Registration Start -->
    <div class="row container-fluid " style="margin-top:0!important;"  >
   
                <div class="col-lg-5 mx-auto">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Edit Post </h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                        <form method="Post" action="/post/edit/{{$course->id}}" enctype="multipart/form-data">  
                               @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="name"
                                     value="{{ $course->name }}" placeholder="Lecture Title" required="required" />
                               
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-light">Tutoria (VIDEO | PDF)</label>
                                    <input type="file" class="form-control border-0 "   name="book"  />
                                  
                                   <!-- <input type="file" class=" form-control border-0 " name="book"  /> -->

                                </div>
                                @if ($course->format==1)
                                    
                               
                                <video width="220" height="140" class="mx-auto" controls>
                                <source src="{{asset('storage/'.$course->book)}}" type="video/mp4">
                                 <source src="{{asset('storage/'.$course->book)}}" type="video/ogg">
                                </video>
                                @else
                                <iframe src="{{asset('storage/'.$course->book)}}" width="220" height="140" frameborder="0">

                                </iframe>
                                @endif 
                                <div class="form-group mt-2">
                                    <?php
                                    $key_id=$course->category_id;
                                $cot=category::find($key_id);
                              
                                    ?>
                                    
                                    <select class="custom-select border-0 px-4" style="height: 47px;" name="category_id">
                                        <option selected value="{{$key_id}}">{{$cot->name}}</option>
                                    
                                            
                                        <?php 
                                        foreach ( $category as $cat){
                                        
                                        if ($cat->id == $key_id){
                                            continue;
                                        }else{
                                        ?>
                                        <option value="{{$cat->id}}">{{ $cat->name }}</option>
                                        <?php
                                        }}
                                        ?>
                                     
                                        
                                    </select>
                           
                                </div>
                                
                            
                                          
                                <div class="form-group">
                                    <select id="format" class="custom-select border-0 px-4" style="height: 47px;" name="format">
                                        <option value="@if ($course->format== 0)
                                        {{0}}    
                                        @elseif($course->format== 1)
                                        {{1}}
                                        @else
                                        ''
                                        @endif" selected>
                           
                                            @if ($course->format== 0)
                                                 PDF 
                                            @elseif ($course->format== 1)
                                                 VIDEO 
                                            @endif
                                        </option>
                                        <option value="<?php
                                        if ($course->format== 0) {
                                    
                                            echo '';
                                        }else{
                                            echo 0;
                                        }
                                        ?>"> @if ($course->format== 0)
                                               Select a format
                                               @else
                                               PDF
                                               
                                            @endif</option>
                                        <option value="<?php
                                        if ($course->format== 1) {
                                            # code...
                                            echo"";
                                        }else{
                                            echo 1;
                                        }
                                        ?>"> @if ($course->format== 1)
                                               Select a format
                                               @else
                                               VIDEO

                                            @endif
                                        </option>
                                    </select>
                               
                               
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Update</button>
                                </div>
                            </form>
                   
                        </div>
                    </div>

                </div>
            
       
    </div>
    </x-guestLayout>
    <script>
        var format=document.getElementById('format');
        format.onchange=function(){
        console.log(format.value,format);

        }
    </script>