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
      <title>Osamay-Student</title>
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
        /* rating */
       .rating-css div {
           color: #ffe400;
           font-size: 30px;
           font-family: sans-serif;
           font-weight: 800;
           text-align: center;
           text-transform: uppercase;
           padding: 20px 0;
         }
         .rating-css input {
           display: none;
         }
         .rating-css input + label {
           font-size: 60px;
           text-shadow: 1px 1px 0 #8f8420;
           cursor: pointer;
         }
         .rating-css input:checked + label ~ label {
           color: #b4afaf;
         }
         .rating-css label:active {
           transform: scale(0.8);
           transition: 0.3s ease;
         }

       /* End of Star Rating */
       .checked{
           color:#ffe400;
       }


        .question-container {
            margin-bottom: 20px;
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

                           {{-- <a href="/">
                            <img class="logo_icon img-responsive" src="{{asset('storage/logo/osamay.png')}}" alt="#" /></a>
 --}}


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
                  <h4>Student</h4>
                  <ul class="list-unstyled components">
                     {{-- <li class="active">
                        <a href="" >
                           <i class="fa fa-dashboard yellow_color"></i> <span>Attendance</span></a> --}}
                        <!-- <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="dashboard.html">> <span>Default Dashboard</span></a>
                           </li>
                           <li>
                              <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                           </li>
                        </ul> -->
                     </li>
                     <li><a href="{{route('student.dashboard')}}">
                        <i class="fa fa-dashboard blue1_color"></i>
                     <span>Dashboard</span></a></li>
                     {{-- <li><a href="">
                        <i class="fa fa-group green_color"></i>
                     <span>Subject Teachers</span></a></li>--}}
                    <li>
                        <a href="{{route('student.fees')}}" >
                            <i class="fa fa-credit-card yellow_color"></i> <span>Payment</span></a>

                     </li>
                     <li>
                        <a href="{{route('student.event')}}" >
                            <i class="fa fa-briefcase blue2_color"></i><span>Events</span></a>

                     </li>
                     <li><a href="{{route('student.performance')}}">
                        <i class="fa fa-archive orange_color"></i>
                     <span>Performance</span></a></li>

                        <li><a href="{{route('student.profile')}}">
                            <i class="fa fa-user green_color"></i>
                         <span>Profile</span></a></li>
                         <li><a href="{{route('student.lecture')}}">
                            <i class="fa fa-video-camera purple_color"></i>
                         <span>Lecture</span></a></li>
                         <li><a href="{{route('student.course.registration')}}">
                            <i class="fa fa-lightbulb-o yellow_color"></i>
                         <span>Course Registration</span></a></li>
                            <li><a href="{{route('student.activity')}}">
                                <i class="fa fa-clone red_color"></i>
                             <span>Activities</span></a></li>

                                <li><a href="{{route('student.suggestion')}}">
                                    <i class="fa fa-comments-o purple_color"></i>
                                 <span>Sugestion</span></a></li>

                                    <li><a href="{{route('student.generalChat')}}">
                                        <i class="fa fa-comments blue2_color"></i>
                                     <span>General Chat</span></a></li>

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
                              <a href="404_error.html"> <span>404 Error</span></a>
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
                           <a href="/"><img class="img-responsive" src="{{asset('storage/logo/osamay full logo.png')}}" alt="#" /></a>
                        </div>

                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>

                            <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">3</span></a></li>

                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                            @if ($notify > 0)
                            <li><a href="{{route('student.generalChat')}}"><i class="fa fa-envelope-o"></i><span class="badge">{{$notify }}</span></a></li>
                            @else

                            <li><a href="{{route('student.generalChat')}}"><i class="fa fa-envelope-o"></i></a></li>
                            @endif

                              </ul>
                             <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{asset('storage/'.auth()->user()->passport)}}" alt="#" />
                                        <span class="name_user">{{ ucwords(auth()->user()->name)}}</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="/student/profile">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
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
      <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

      <script>

        //stopWatch code


        let minute = $('#duration').val()-1;
        let second = 59;


        window.addEventListener('load', function () {
            timer = true;
            stopWatch();
        });

        function stopWatch() {
            if (timer) {
                second--;

                if (second == 00) {
                    minute--;
                    second = 59;
                }
                let minString = minute;
                let secString = second;

                if (minute < 10) {
                    minString = "0" + minString;
                }

                if (second < 10) {
                    secString = "0" + secString;
                }


                document.getElementById('min').innerHTML = minString;
                document.getElementById('sec').innerHTML = secString;

                setTimeout(stopWatch, 1000);

              if ( minute < 0 )
                {
                    clearTimeout(stopWatch);


                document.getElementById('submit').style.display="block";


                }
            }
        }

        // document.getElementById('times').innerHTML="Timeout"
        // document.getElementById('next').;




        </script>

    </body>
</html>
