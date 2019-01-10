
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{$title}}</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('backend/assets/img/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('backend/assets/img/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/assets/img/favicon-16x16.png')}}">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{asset('backend/assets/vendors/css/base/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/vendors/css/base/elisyam-1.5.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/css/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/css/owl-carousel/owl.theme.min.css')}}">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="{{asset('backend/assets/img/logo.png')}}" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page">
            <!-- Begin Header -->
            @include('inc.header')
            <!-- End Header -->

            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    @include('inc.navigation')
                    <!-- End Side Navbar -->
                </div>
                
                <!-- End Left Sidebar -->
                <div class="content-inner">
                    @include('inc.messages')
					
                    @yield('content')
                    
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
       
        
        <!-- Begin Vendor Js -->
        <script src="{{asset('backend/assets/vendors/js/base/jquery.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/js/base/core.min.js')}}"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="{{asset('backend/assets/vendors/js/nicescroll/nicescroll.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/js/chart/chart.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/js/progress/circle-progress.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/js/calendar/moment.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/js/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/js/app/app.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/js/datatables/datatables.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/js/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/js/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/js/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/js/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/js/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/js/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/js/app/app.min.js')}}"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="{{asset('backend/assets/js/dashboard/db-default.js')}}"></script>
        <script src="{{asset('backend/assets/js/components/tables/tables.js')}}"></script>
        <!-- End Page Snippets -->
    </body>
</html>