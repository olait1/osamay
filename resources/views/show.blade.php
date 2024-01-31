<?php

?>
@extends('layout.layout')
@section('content')
 <!-- Category Start -->
 <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
                <h1>{{$single->name}}</h1>
            </div>
            <div class="row">
            
            <div class="col-md-6 mx-auto mb-4">
                  
           
                 
            
                    
            <x-cards >
                        
            
            <img class="img-fluid" src="{{ asset($single->img) }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" download="{{ $single->name }}.pdf" href="/{{$single->book}}">
                            <h4 class="text-white font-weight-medium">{{ $single->name }}</h4>
                          
                        </a>
            </x-cards>

            </div>
         
            </div>
            <div>
                {{ $courses->links() }}
            </div>
        </div>
    </div>
    <!-- Category Start -->
@endsection