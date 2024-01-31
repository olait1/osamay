<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Osamay-Teacher</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
     <link rel="icon" href="{{asset('storage/logo/osamay logo.png')}}" type="image/x-icon" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('dashboard/css/bootstrap.min.css')}}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{asset('dashboard/style.css')}}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{asset('dashboard/css/responsive.css')}}" />
      <!-- color css -->

      <link rel="stylesheet" href="{{asset('dashboard/css/colors.css')}}" />

      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{asset('dashboard/css/bootstrap-select.css')}}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{asset('dashboard/css/perfect-scrollbar.css')}}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{asset('dashboard/css/custom.css')}}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>

.table-hover tbody tr:hover, .table-hover tbody tr:focus {
    background-color: #3c4de2 !important;
    color: #fff;
}
      </style>
   </head>
   @php
   use App\Models\chatNotification;
   $notify=  chatNotification::where('user_id',auth()->user()->id)->count();


                           @endphp

   <body class="dashboard dashboard_1">
   <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <!--
                           <a href="index.html"><img class="logo_icon img-responsive" src="{{asset('')}}" alt="#" /></a>
                         -->
                    </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img">
                            <img class="img-responsive" src="{{asset('storage/'.auth()->user()->passport)}}" alt="#" /></div>
                        <div class="user_info">
                           <h6> {{ ucwords(auth()->user()->name)}}</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Teacher</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="{{route('teacher.dashboard')}}" >
                           <i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        <!-- <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="dashboard.html">> <span>Default Dashboard</span></a>
                           </li>
                           <li>
                              <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                           </li>
                        </ul> -->
                     </li>
                     <li><a href="{{route('teacher.class')}}">
                        <i class="fa fa-group blue1_color"></i>
                     <span>Classes</span></a></li>
                     <li><a href="{{route('teacher.event')}}">
                        <i class="fa fa-briefcase  green_color"></i>
                     <span>Events</span></a></li>
                     <li>
                        <a href="{{route('teacher.profile')}}">
                            <i class="fa fa-user purple_color"></i> <span>Profile</span></a>
                     </li>
                     {{-- <li>
                        <a href="">
                            <i class="fa fa-credit-card yellow_color"></i> <span>Fees</span></a> --}}
                        {{-- <ul class="collapse list-unstyled" id="fee">
                           <li><a href="general_elements.html">> <span>Fee structure
                        </span></a></li>
                        <li><a href="media_gallery.html">> <span> Fee Dues report</span></a></li>
                           <li><a href="media_gallery.html">> <span>Fee payment details</span></a></li>

                        </ul> --}}
                     {{-- </li> --}}
                     <li>
                        <a href="#classwork" >
                            <i class="fa fa-book blue2_color"></i><span>Activities</span></a>
                        {{-- <ul class="collapse list-unstyled" id="classwork">
                           <li><a href="general_elements.html">> <span>Homework
                        </span></a></li>
                           <li><a href="media_gallery.html">> <span>Projects</span></a></li>
                           <li><a href="icons.html">> <span>Activities</span></a></li>

                        </ul> --}}
                     </li>
                     <li><a href="{{route('teacher.suggestion')}}">
                        <i class="fa fa-file orange_color"></i>
                     <span>Suggestion</span></a></li>
                    <li>
                        <li><a href="{{route('teacher.generalChat')}}">
                            <i class="fa fa-comments red_color"></i>
                         <span>General Chat</span></a></li>
                        <li>

                     <!-- <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="email.html">> <span>Email</span></a></li>
                           <li><a href="calendar.html">> <span>Calendar</span></a></li>
                           <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                        </ul>
                     </li> -->
                     <!-- <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
                     <li>
                        <a href="contact.html">
                        <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                     </li> -->
                     <!-- <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="profile.html">> <span>Profile</span></a>
                           </li>
                           <li>
                              <a href="project.html">> <span>Projects</span></a>
                           </li>
                           <li>
                              <a href="login.html">> <span>Login</span></a>
                           </li>
                           <li>
                              <a href="404_error.html">> <span>404 Error</span></a>
                           </li>
                        </ul>
                     </li> -->
                     <li><a href="/logout"><i class="fa fa-sign-out red_color2"></i> <span>Signout</span></a></li>
                     <!-- <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
                     <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
                   -->
                   </ul>
               </div>
            </nav>
            <!-- end sidebar -->


 <!-- right content -->
 <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                         <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="{{asset('storage/logo/osamay full logo.png')}}" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>

                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">5</span></a></li>

                               <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                               @if ($notify > 0)
                               <li><a href="{{route('teacher.generalChat')}}"><i class="fa fa-envelope-o"></i><span class="badge">{{$notify }}</span></a></li>
                               @else

                               <li><a href="{{route('teacher.generalChat')}}"><i class="fa fa-envelope-o"></i></a></li>
                               @endif

                              </ul>
                             <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{asset('storage/'.auth()->user()->passport)}}" alt="#" />
                                        <span class="name_user">{{ ucwords(auth()->user()->name)}}</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="{{route('teacher.profile')}}">My Profile</a>
                                       <a class="dropdown-item" href="{{route('teacher.setting')}}">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="/logout"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->




@yield('content')


               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
     <!-- jQuery -->
     <script src="{{asset('dashboard/js/jquery.min.js')}}"></script>
      <script src="{{asset('dashboard/js/popper.min.js')}}"></script>
      <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
      <!-- wow animation -->
      <script src="{{asset('dashboard/js/animate.js')}}"></script>
      <!-- select country -->
      <script src="{{asset('dashboard/js/bootstrap-select.js')}}"></script>
      <!-- owl carousel -->
      <script src="{{asset('dashboard/js/owl.carousel.js')}}"></script>
      <!-- chart js -->
      <script src="{{asset('dashboard/js/Chart.min.js')}}"></script>
      <script src="{{asset('dashboard/js/Chart.bundle.min.js')}}"></script>
      <script src="{{asset('dashboard/js/utils.js')}}"></script>
      <script src="{{asset('dashboard/js/analyser.js')}}"></script>
      <!-- nice scrollbar -->
      <script src="{{asset('dashboard/js/perfect-scrollbar.min.js')}}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{asset('dashboard/js/custom.js')}}"></script>
      <script src="{{asset('dashboard/js/chart_custom_style1.js')}}"></script>
   </body>
</html>
