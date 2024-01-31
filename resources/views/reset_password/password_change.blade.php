
<x-guestLayout>

    <body class="inner_page login">

     {{-- alert message for error --}}
     @if(session('message'))
     <div class="alert alert-success text-dark" id="alertDiv">
         <span class=" float-right" onclick="  document.getElementById('alertDiv').style.display = 'none';" style="cursor: pointer;">&times;</span>
         {{ session('message') }}

     </div>

 @endif

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
                          <form action="/reset_password" method="post">

                                @csrf

                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" style="background:#e8f0fe;" value="{{ old('email')}}" name="email" placeholder="Your email" required="required" />
                               @error('email')
                                    <p class="text-light mt-3">{{$message}}</p>
                                    @enderror
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
<script>

    // passing each scode to request
    document.addEventListener('DOMContentLoaded', function () {

          // alert div
      document.getElementById('alertDiv').style.display = 'block';

    // Set a timeout to hide the div after 10 seconds
    setTimeout(function() {
      document.getElementById('alertDiv').style.display = 'none';
    }, 5000);

    });

    </script>
