@extends('parent.dashboard.dashboard')
@section('content')
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2 class="text-primary">Profile</h2>
             </div>
          </div>
       </div>
       <!-- row -->
       <div class="row column1">
          <div class="col-md-2"></div>
          <div class="col-md-8">
             <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2 class="text-primary">User profile</h2>
                      </div>
                      <button  class="btn btn-active float-right" data-toggle="modal" data-target="#exampleModalLong">Edit</button>

                </div>
                <div class="full price_table padding_infor_info">
                   <div class="row">
                      <!-- user profile section -->
                      <!-- profile image -->
                      <div class="col-lg-12">
                         <div class="full dis_flex center_text">
                            <div class="profile_img"><img width="180" class="rounded-circle" src="{{asset('storage/'.auth()->guard('parents')->user()->passport)}}" alt="#" /></div>
                            <div class="profile_contant">
                               <div class="contact_inner">
                                  <h3> {{ ucwords(auth()->guard('parents')->user()->p_name)}}</h3>
                                  {{-- <p><strong>About: </strong>Frontend Developer</p> --}}
                                  <ul class="list-unstyled" style="line-height: 2em;">

                                    {{-- <li><span style="font-weight: bold">DOB:</span>  {{ ucwords(auth()->guard('parents')->user()->DOB)}}</li>
                                     <li><span style="font-weight: bold">Gender:</span> {{ ucwords(auth()->guard('parents')->user()->gender)}}</li> --}}
                                     <li><span style="font-weight: bold">Email:</span>   {{ ucwords(auth()->guard('parents')->user()->p_email)}}</li>
                                     <li><span style="font-weight: bold">Phone No:</span> {{ ucwords(auth()->guard('parents')->user()->Phone_no)}}  </li>

                                     {{-- <li><span style="font-weight: bold"> Home Address:</span> {{ ucwords(auth()->user()->home_address)}} </li>
                                    <li><span style="font-weight: bold">Nationality:</span> {{ ucwords(auth()->user()->nationality)}}</li>
            --}}

                                     {{-- <li><span style="font-weight: bold">Hobbies:</span> {{ ucwords(auth()->user()->hobby)}}</li> --}}

                                 </ul>
                                <!-- Button trigger modal -->


        <div class="modal fade bd-example-modal-lg" tabindex="-1" id="exampleModalLong" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="{{route('parent.profile.update')}}" method="post">
@csrf
<div class="row ">
    <div class="col-md-12 container ">
    <div class="wrapper rounded bg-white p-5">


        <div class="form">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ ucwords(auth()->guard('parents')->user()->name)}}" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>E-mail</label>
                    <input type="email" name="email" value="{{ ucwords(auth()->guard('parents')->user()->p_email)}}" class="form-control" required>
                </div>

            </div>
            {{-- <div class="row">
                {{-- <div class="col-md-6 mt-md-0 mt-3">
                    <label>Birthday</label>
                    <input type="date" value="{{ ucwords(auth()->user()->DOB)}}" class="form-control" required>
                </div> --}}
                {{-- <div class="col-md-6 mt-md-0 mt-3">
                    <label>Gender</label>
                    <div class="d-flex align-items-center mt-2">

                        <label class="option">

                            <input type="radio"
                            @if(auth()->guard('parents')->user()->gender == "male")
                             value="male"   checked @endif name="radio"  >Male
                            <span class="checkmark" >
                           </span>
                        </label>
                        <p></p>
                        <label class="option ms-4">
                            <input type="radio" name="radio" value="female"
                            @if(auth()->guard('parents')->user()->gender == "female")
                            checked @endif>Female
                     <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                {{-- <div class="col-md-6 mt-md-0 mt-3">
                    <label>Email</label>
                    <input type="email" value="{{auth()->guard('parents')->user()->p_email}}"
                    class="form-control" required>
                </div> --}}
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Phone Number</label>
                    <input type="tel" name="phone_no" value="{{auth()->guard('parents')->user()->Phone_no}}" class="form-control" required>
                </div>
            </div>
              {{-- <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Guardian's Name</label>
                    <input type="text" value="{{ ucwords(auth()->guard('parents')->user()->guardian_name) }}" class="form-control" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Guardian's Phone</label>
                    <input type="tel" value="{{ ucwords(auth()->user()->guardian_email) }}" class="form-control" required>
                </div></div> --}}


                {{-- <div class="row">
                 <div class="col-md-6 mt-md-0 mt-3">
                    <label>Guardian's Email</label>
                    <input type="email" class="form-control" required>
                </div>
                    <div class="col-md-6 mt-md-0 mt-3">
                    <label>Home Address</label>
                    <input type="email" class="form-control" required>
                </div>

            </div> --}}
               {{-- <div class="row">
                 <div class="col-md-6 mt-md-0 mt-3">
                    <label>Nationality</label>
                    <input type="text" class="form-control" required>
                </div>
                    <div class="col-md-6 mt-md-0 mt-3">
                    <label>Hobbies</label>
                    <input type="text" class="form-control" required>
                </div>
                   <div class="col-md-12 mt-md-0 mt-3">
                    <label>Club</label>
                    <input type="text" class="form-control" required>
                </div>

            </div> --}}


        </div>

    </div>

    </div>
</div>
                <div class="modal-footer">
                    <input type="hidden" name="parent_id" value="">
                   <a href="javascript:void(0)" class="btn btn-secondary" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                </div>
              </div>

            </div>
          </div>


                               </div>
                               {{-- <div class="user_progress_bar">
                                  <div class="progress_bar">
                                     <!-- Skill Bars -->
                                     <span class="skill" style="width:85%;">Web Applications <span class="info_valume">85%</span></span>
                                     <div class="progress skill-bar ">
                                        <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                        </div>
                                     </div>
                                     <span class="skill" style="width:78%;">Website Design <span class="info_valume">78%</span></span>
                                     <div class="progress skill-bar">
                                        <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                                        </div>
                                     </div>
                                     <span class="skill" style="width:47%;">Automation & Testing <span class="info_valume">47%</span></span>
                                     <div class="progress skill-bar">
                                        <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;">
                                        </div>
                                     </div>
                                     <span class="skill" style="width:65%;">UI / UX <span class="info_valume">65%</span></span>
                                     <div class="progress skill-bar">
                                        <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                        </div>
                                     </div>
                                  </div>
                               </div> --}}
                            </div>
                         </div>
                         <!-- profile contant section -->
                         {{-- <div class="full inner_elements margin_top_30">
                            <div class="tab_style2">
                               <div class="tabbar">
                                  <nav>
                                     <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                           <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#recent_activity" role="tab" aria-selected="true">Recent Activity</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#project_worked" role="tab" aria-selected="false">Projects Worked on</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#profile_section" role="tab" aria-selected="false">Profile</a>
                                     </div>
                                  </nav>
                                  <div class="tab-content" id="nav-tabContent">
                                     <div class="tab-pane fade show active" id="recent_activity" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="msg_list_main">
                                           <ul class="msg_list">
                                              <li>
                                                 <span><img src="images/layout_img/msg2.png" class="img-responsive" alt="#"></span>
                                                 <span>
                                                 <span class="name_user">Taison Jack</span>
                                                 <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                                 <span class="time_ago">12 min ago</span>
                                                 </span>
                                              </li>
                                              <li>
                                                 <span><img src="images/layout_img/msg3.png" class="img-responsive" alt="#"></span>
                                                 <span>
                                                 <span class="name_user">Mike John</span>
                                                 <span class="msg_user">On the other hand, we denounce.</span>
                                                 <span class="time_ago">12 min ago</span>
                                                 </span>
                                              </li>
                                           </ul>
                                        </div>
                                     </div>
                                     <div class="tab-pane fade" id="project_worked" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                           quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                                           qui ratione voluptatem sequi nesciunt.
                                        </p>
                                     </div>
                                     <div class="tab-pane fade" id="profile_section" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                           quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                                           qui ratione voluptatem sequi nesciunt.
                                        </p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div> --}}
                         <!-- end user profile section -->
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-2"></div>
          </div>
          <!-- end row -->

@endsection
