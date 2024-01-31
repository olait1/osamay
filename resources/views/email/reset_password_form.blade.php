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
                    <form method="post" action="/get_reset_data">
                                @csrf

                                <div class="form-group">
                                    <input type="hidden" class="form-control border-0 p-4"  value="{{ $_GET['token'] }}" name="token"  required="required" />

                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control border-0 p-4"  value="{{ $_GET['email'] }}" name="email"  required="required" />

                                </div>





                                <div class="form-group">
                                    <input type="password" style="background:#e8f0fe;"  class="form-control border-0 p-4"  value="{{ old('password') }}" name="password" placeholder="New Password" required="required" />
                                    @error('password')
                                   <p class="text-white ">{{$message}}</p>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" style="background:#e8f0fe;"  class="form-control border-0 p-4"  value="{{ old('password_confirmation') }}" name="password_confirmation" placeholder="Confirm Password" required="required" />

                                </div>

                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Reset Password</button>
                                </div>
                            </form>

                        </div>
                    </div>
                 </div>
              </div>
           </div>

    </x-guestLayout>
