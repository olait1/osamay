
<x-guestLayout>
    <body class="inner_page login">
        <div class="full_container">
           <div class="container">
              <div class="center verticle_center full_height">
                 <div class="login_section">
                    <div class="logo_login">
                       <div class="center">
                          <img width="260" src="{{asset('storage/logo/OSAMAY full logo.png')}}" alt="#" />
                       </div>
                    </div>
                    <div class="login_form">
                        <form action="/user/login" class="mb-5" method="post">

                            @csrf
                          <fieldset>
                             <div class="field">
                <input type="hidden" name="user" value="1">

                             </div>
                             <div class="field">
                                <label class="label_field">Email Address</label>
                                <input type="email"value="{{ old('email')}}"  name="email" required="required"  placeholder="E-mail" />
                                @error('email')
                                <p class="text-danger mt-3">{{$message}}</p>
                                @enderror
                            </div>
                             <div class="field">
                                <label class="label_field">Password</label>
                                <input type="password" value="{{ old('password')}}" name="password" placeholder="Your Password" required="required"  />
                             </div>
                             <div class="field">
                                <p class="text-danger">
                                    {{-- Not yet have an account? <a href="{{route('student.signup')}}" class="text-danger">SignUp</a> | --}}
                                    <a href="/password_retrieve" class="text-danger">forget password</a>
                                    </p>
                             </div>
                             <div class="field margin_0">
                                <label class="label_field hidden">hidden label</label>
                                <button class="main_bt btn-block" type="submit">Login as Student</button>

                             </div>
                          </fieldset>
                       </form>
                       <p class=" text-center mb-3">------------------- or -------------------</p>
                       <form action="{{route('teacher.login')}}" method="get">
                        <button class="main_bt btn-block" type="submit">Login as Teacher</button>

                       </form>
                       <form action="{{route('parent.login')}}" method="get">
                        <button class="main_bt btn-block btn-outline-success my-3" type="submit">Login as Parent</button>

                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>



</x-guestLayout>
