<x-guestLayout>
<!-- Registration Start -->
<body class="inner_page login">
    <div class="full_container ">
       <div class="container">
          <div class="center verticle_center full_height ">
             <div class="login_section">
                <div class="logo_login">
                   <div class="center">
                      <img width="260" src="{{asset('storage/logo/OSAMAY full logo.png')}}" alt="#" />
                   </div>
                </div>
                <div class="login_form">
                    <form method="post" action="/store" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group" enctype="multipart/form-data">
                                        <input type="text" style="background:#e8f0fe;" class="form-control border-0 p-4" name="name" value="{{ old('name') }}" placeholder="Your name" required="required" />
                                    @error('name')
                                       <p class="text-danger ">{{$message}}</p>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control border-0 p-4"  value="{{ old('email') }}" style="background:#e8f0fe;" name="email" placeholder="Your email" required="required" />
                                        @error('email')
                                       <p class="text-danger ">{{$message}}</p>
                                    @enderror
                                    </div>


                                </div>

                            </div>

<div class="row">
    <div class="col-md-6">

                                <div class="form-group">
                                    <label for="" class="text-dark">Gender:</label>
                                    <input type="radio"  name="gender" id="" value="male">
                                    <label for="" class="text-dark">Male</label>
                                    <input type="radio"  name="gender" id="" value="female">
                                    <label for="" class="text-dark">Female</label>
                                    @error('gender')
                                    <p class="text-danger ">{{$message}}</p>
                                 @enderror
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="text-dark">DOB:</label>
                                    <input type="date" style="background:#e8f0fe;" placeholder="DOB" class="form-control border-0 p-4"  value="{{ old('DOB') }}" name="DOB"  />
                                    @error('DOB')
                                   <p class="text-danger ">{{$message}}</p>
                                @enderror
                                </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">

                                <div class="form-group">

                                    <input type="text" style="background:#e8f0fe;" placeholder="Guardian's Name" class="form-control border-0 p-4" value="{{ old('guardian_name') }}"   name="guardian_name"  />
                                    @error('guardian_name')
                                    <p class="text-danger ">{{$message}}</p>
                                 @enderror
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">

                                    <input type="email" style="background:#e8f0fe;" value="{{ old('guardian_email') }}" placeholder="Guardian's E-mail" class="form-control border-0 p-4"   name="guardian_email"  />
                                    @error('guardian_email')
                                    <p class="text-danger ">{{$message}}</p>
                                 @enderror
                                </div>

    </div>
</div>

<div class="form-group">
    <input type="password"  style="background:#e8f0fe;" class="form-control border-0 p-4"  value="{{ old('password') }}" name="password" placeholder="Password" required="required" />
    @error('password')
   <p class="text-danger ">{{$message}}</p>
@enderror
</div>
                                <div class="form-group">
                                    <input type="password" style="background:#e8f0fe;" class="form-control border-0 p-4"  value="{{ old('password_confirmation') }}" name="password_confirmation" placeholder="Confirm password" required="required" />

                                </div>
{{--
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px; background:#e8f0fe;" name="course">
                                        <option selected>Select a course</option>
                                        @foreach ( $category as $cat)


                                        <option value="{{$cat->id}}">{{ $cat->name }}</option>
                                        @endforeach

                                    </select>
                                    @error('course')
                                   <p class="text-danger ">{{$message}}</p>
                                @enderror
                                </div> --}}
                                <div class="form-group">
                                    <label for="" class="text-dark">Passport</label>
                                    <br>
                                    <input type="file" class="form-control border-0 "   name="passport" style="background:#e8f0fe;" />

                                    @error('passport')
                                   <p class="text-danger ">{{$message}}</p>
                                @enderror
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Sign Up</button>
                                </div>
                            </form>
                            <p class="text-dark">
                            Already have an account? <a href="{{route('student.login')}}" class="text-dark">Login</a>
                            </p>
                        </div>
                    </div>
                 </div>
              </div>
           </div>

    </x-guestLayout>
