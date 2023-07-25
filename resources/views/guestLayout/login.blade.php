<?php 

  ?>
<x-guestLayout>
  
<div class="row container-fluid ">
<div class="col-lg-6 mx-auto mt-5">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Login</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form action="/user/login?id={{isset($id)? $id : ''}}" method="post">
                                
                                @csrf
                            <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;"  name="user">
                                        <option selected>Select a user </option>
                                        <option value="0" >Staff</option>
                                        <option value="1">Student</option>
                                        
                                    </select>
                                 
                      
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" value="{{ old('email')}}" name="email" placeholder="Your email" required="required" />
                               @error('email')
                                    <p class="text-light mt-3">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control border-0 p-4" value="{{ old('password')}}" name="password" placeholder="Your Password" required="required" />
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Login</button>
                                </div>
                            </form>
                            <p class="text-light">
                            Not yet have an account? <a href="/signup" class="text-light">SignUp</a> |
                            <a href="/password_retrieve" class="text-light">forget password</a>

                            </p>
                        </div>
                    </div>
                </div>
</div>
</x-guestLayout>