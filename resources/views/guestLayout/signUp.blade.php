<x-guestLayout>
<!-- Registration Start -->
    <div class="row container-fluid " style="margin-top:0!important;"  >
   
                <div class="col-lg-5 mx-auto">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Sign Up</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form method="post" action="/store">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="name" value="{{ old('name') }}" placeholder="Your name" required="required" />
                                @error('name')
                                   <p class="text-white ">{{$message}}</p> 
                                @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4"  value="{{ old('email') }}" name="email" placeholder="Your email" required="required" />
                                    @error('email')
                                   <p class="text-white ">{{$message}}</p> 
                                @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control border-0 p-4"  value="{{ old('password') }}" name="password" placeholder="Password" required="required" />
                                    @error('password')
                                   <p class="text-white ">{{$message}}</p> 
                                @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control border-0 p-4"  value="{{ old('password_confirmation') }}" name="password_confirmation" placeholder="Confirm password" required="required" />
                                   
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;" name="course">
                                        <option selected>Select a course</option>
                                        @foreach ( $category as $cat)
                                            
                                        
                                        <option value="{{$cat->id}}">{{ $cat->name }}</option>
                                        @endforeach
                                        
                                    </select>
                                    @error('course')
                                   <p class="text-white ">{{$message}}</p> 
                                @enderror
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Sign Up</button>
                                </div>
                            </form>
                            <p class="text-light">
                            Already have an account? <a href="/login" class="text-light">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            
       
    </div>
    </x-guestLayout>