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
      <title>Osamay</title>
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
   </head>
   <body>


{{ $slot }}
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
