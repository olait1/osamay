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
      <title>Osamay-Admin</title>
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
                  <h4>Admin</h4>
                  <ul class="list-unstyled components">

                     <li class="active"><a href="{{route('admin.dashboard')}}">
                        <i class="fa fa-dashboard blue1_color"></i>
                     <span>Dashboard</span></a></li>
                     {{-- <li><a href="">
                        <i class="fa fa-group green_color"></i>
                     <span>Subject Teachers</span></a></li>--}}
                    <li>
                        <a href="{{route('admin.student')}}" >
                            <i class="fa fa-user purple_color"></i> <span>Students</span></a>

                     </li>
                     <li>
                        <a href="{{ route('admin.parent')}}" >
                            <i class="fa fa-users yellow_color"></i> <span>Parents</span></a>

                     </li>
                     <li>
                        <a href="{{route('admin.teacher')}}" >
                            <i class="fa fa-desktop red_color"></i> <span>Teachers</span></a>

                     </li>
                     <li>
                        <a href="{{route('admin.subject')}}" >
                            <i class="fa fa-tasks yellow_color"></i> <span>Subjects</span></a>

                     </li>
                     <li>
                        <a href="{{route('admin.section')}}" >
                            <i class="fa fa-ticket blue2_color"></i> <span>Sections</span></a>

                     </li>
                     <li>
                        <a href="{{route('admin.class')}}" >
                            <i class="fa fa-sitemap green_color"></i> <span>Class</span></a>

                     </li>
                     <li>
                        <a href="{{route('admin.timetable')}}" >
                            <i class="fa fa-calendar-o blue1_color"></i> <span>Timetable</span></a>

                     </li>

                    <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fa fa-graduation-cap yellow_color"></i> <span>Exams</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">

                            <li>
                              <a href="{{route('admin.exam')}}">> <span>Exam Schedule</span></a>
                           </li>
                           <li>
                              <a href="{{route('admin.question')}}">> <span>Post Questions</span></a>
                           </li>
                           <li>
                            <a href="{{route('admin.exam.result')}}">> <span>Post Result</span></a>
                         </li>

                        </ul>
                     </li>
                     {{-- <li>
                        <a href="" >
                            <i class="fa fa-graduation-cap yellow_color"></i> <span>Exams</span></a>

                     </li> --}}
                     <li class="active">
                        <a href="#mark" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fa fa-edit green_color"></i> <span>Manage Marks</span></a>
                        <ul class="collapse list-unstyled" id="mark">
                           <li>
                              <a href="{{route('admin.manage.mark')}}">> <span>Mark</span></a>
                           </li>
                           <li>
                              <a href="{{route('admin.grade')}}">> <span>Grade</span></a>
                           </li>

                        </ul>
                     </li>

                     <li>
                        <a href="#payment" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fa fa-credit-card purple_color"></i> <span>Payments </span></a>
                            <ul class="collapse list-unstyled" id="payment">
                                <li>
                                   <a href="{{route('admin.set.payment')}}">> <span>Set Payment</span></a>
                                </li>
                                <li>
                                    <a href="">> <span>Paid</span></a>
                                 </li>
                                <li>
                                   <a href="">> <span>Pending</span><span class="p-1 rounded-circle ml-1 bg-danger">10 </span></a>
                                </li>

                             </ul>
                     </li>

                     <li>
                        <a href="{{route("admin.video.lecture")}}" >
                            <i class="fa fa-video-camera red_color"></i> <span>Video Lecture</span></a>

                     </li>
                     <li>
                        <a href="{{route('admin.event')}}" >
                            <i class="fa fa-briefcase blue2_color"></i>
                            <span>Events</span></a>

                     </li>

                     <li><a href="{{ route('admin.profile') }}">
                        <i class="fa fa-user green_color"></i>
                        <span>Profile</span>
                    </a></li>





                                <li><a href="">
                                    <i class="fa fa-book red_color"></i>
                                 <span>Library</span></a></li>

                                    <li><a href="{{route('admin.chat')}}">
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
                                       <a class="dropdown-item" href=" ">My Profile</a>
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

        document.getElementById('times').innerHTML="Timeout"

                }
            }
        }






//         const scode = document.getElementsByClassName('s_code');
//    const scodeBtn = document.getElementsByClassName('scodeBtn');
//    console.log(scode.length);
// for (let index = 0; index < scodeBtn.length; index++) {

//     //  scodeBtn[index].onclick= ()=>{
//     //     alert();
//     //     console.log(scode[index]);
//     //  }

// }
//    console.log(scodeBtn);
//       console.log(scode.length);






//         //  question code
//         $(document).ready(()=> {
//             //declaration
//         const question_container =  $('.question-container');
//         const key=$('#key');

//         // key
//      index=1;
// const container_question_key = question_container[index].getAttribute('key');
// const next_btn = document.getElementById('next');
// const prev_btn = document.getElementById('prev');
// next_btn.onclick=(e)=>{
//     e.preventDefault();


// $('.question-container').eq(index).show(10000);
// $('.question-container').eq(0).hide(10000);

// index++;
//     }


//     prev_btn.onclick=(e)=>{
//     e.preventDefault();
// index=document.getElementsByClassName('question-container').length-1;
// index--;
// console.log(index);
// $('.question-container').eq(index).show(10000);
// if (index == 0) {
//     $('.question-container').eq(index).show(10000);
// }else{

// $('.question-container').eq(index).hide(10000);
// }
//     }





//         });





        </script>

    </body>
</html>
