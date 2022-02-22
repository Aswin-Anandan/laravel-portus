<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="{{env('APP_NAME')}}">
    <meta name="description"
        content="{{env('APP_NAME')}}">
    <meta name="robots" content="noindex,nofollow">
    <title>{{env('APP_NAME')}}</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('home')}}/img/portus-logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <!-- Custom CSS -->
    <link href="{{asset('admin-template')}}/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin-template')}}/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="{{asset('admin-template')}}/css/style.min.css" rel="stylesheet">


    <script src="{{asset('admin-template')}}/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <style>
 .sidebar-item: active {
      color: red;
   }
   #btn-h{
       display:none !important;
   }
   .sidebar-link.active{
       color:blue !important;
       font-weight:500 !important;
       background:#adb2ba;
   }
   .scroll-sidebar{
       overflow:hidden
    }
    .text-white {
        color:black !important;
    }
   
   .navbar-brand {
 width:150px;
   }
   .logo-icon{
       display:block;
       background: white;
       width:100px !important;
       height:60px;
       padding-top: 20px;
      
    
   }
   
   #portus-logo{
    display:block;
       background: white;
       width:100px !important;
    }
 
   
   @media(max-width:1169px){
  
   #btn-h{
       display:block !important;
   }
   
}
@media(max-width:767px){
   #portus-logo{
       display:block !important;
    
   }
   #btn-h{
       display:none !important;
   }
   
}
  

        </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="{{url('/dashboard')}}">
                        <!-- Logo icon -->
                        <b class="logo-icon" style="z-index: 3;" > 
                            <!-- Dark Logo icon -->
                            <img id="portus-logo" src="{{asset('home')}}/img/portus-logo.png" alt="homepage" >
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5" style="background:white; color:black;">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <li>
                            <a class="profile-pic" href="#">
                               <span class="text-white font-medium"> {{ Auth::user()->name }}</span></a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('dashboard')}}"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu" style="color:black">Dashboard</span>
                            </a>
                        </li>
                        <li class="p-1 sidebar-item {{ Request::routeIs('orders.list') ? 'active' : '' }}">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('orders.list')}}"
                                aria-expanded="false">
                                <i class="fa fa-cubes" aria-hidden="true"></i>
                                <span class="hide-menu" style="color:black">Orders</span>
                            </a>
                        </li>
                        <li class="p-2 sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('courier_service.list')}}"
                                aria-expanded="false">
                                <i class="fa fa-shipping-fast" aria-hidden="true"></i>
                                <span class="hide-menu" style="color:black">Courier Services</span>
                            </a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a 
                                class="btn d-grid btn-danger text-white"   href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                                </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <a id="btn-h"
                                class="btn d-grid btn-danger text-white"   href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                                </a>
<?php 
if(1==2){
?>


<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.html"
        aria-expanded="false">
        <i class="fa fa-table" aria-hidden="true"></i>
        <span class="hide-menu">Basic Table</span>
    </a>
</li>
<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="fontawesome.html"
        aria-expanded="false">
        <i class="fa fa-font" aria-hidden="true"></i>
        <span class="hide-menu">Icon</span>
    </a>
</li>
<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="map-google.html"
        aria-expanded="false">
        <i class="fa fa-globe" aria-hidden="true"></i>
        <span class="hide-menu">Google Map</span>
    </a>
</li>
<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.html"
        aria-expanded="false">
        <i class="fa fa-columns" aria-hidden="true"></i>
        <span class="hide-menu">Blank Page</span>
    </a>
</li>
<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="404.html"
        aria-expanded="false">
        <i class="fa fa-info-circle" aria-hidden="true"></i>
        <span class="hide-menu">Error 404</span>
    </a>
</li>
<li class="text-center p-20 upgrade-btn">
    <a href="https://www.wrappixel.com/templates/ampleadmin/"
        class="btn d-grid btn-danger text-white" target="_blank">
        Upgrade to Pro</a>
</li>
</ul>
<?php


}

?>

                        
</ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">@yield('app-title')</h4>
                    </div>
                   
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            @yield('content')
            <footer class="footer text-center"> {{date('Y')}} © {{env('COMPANY_NAME')}} 
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin-template')}}/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('admin-template')}}/js/app-style-switcher.js"></script>
    <script src="{{asset('admin-template')}}/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin-template')}}/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin-template')}}/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin-template')}}/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('admin-template')}}/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="{{asset('admin-template')}}/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="{{asset('admin-template')}}/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>