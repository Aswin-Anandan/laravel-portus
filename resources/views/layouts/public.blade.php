<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Portus</title>

    <meta name="keywords" content="quality seafood - 9900, seafood wholesale - 6600, best seafood - 6600, Sea food, Aquaculture products, exports, Fish" />
    <meta name="description" content="Portus | Producers of high-quality Sea food & Aquaculture products">
    <meta name="author" content="brammait.com">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('home')}}/img/portus-logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('home')}}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('home')}}/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{asset('home')}}/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="{{asset('home')}}/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{asset('home')}}/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('home')}}/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('home')}}/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('home')}}/css/theme.css">
    <link rel="stylesheet" href="{{asset('home')}}/css/theme-elements.css">
    <link rel="stylesheet" href="{{asset('home')}}/css/theme-blog.css">
    <link rel="stylesheet" href="{{asset('home')}}/css/theme-shop.css">
    <link rel="stylesheet" href="{{asset('home')}}/css/layout.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{asset('home')}}/css/demos/demo-construction.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset('home')}}/css/skins/skin-construction.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('home')}}/css/custom.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Head Libs -->
    <script src="{{asset('home')}}/vendor/modernizr/modernizr.min.js"></script>

    
</head>
<body data-plugin-scroll-spy data-plugin-options="{'target': '#sidebar'}" class="main">

    <div class="body">
        <div class="top-bar">
 <header id="header1">
 <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand nav-link h-page" href="{{url('/')}}">
    <img class="logo-sticky m-logo" alt="Porto" width="123" height="48"
                                            src="{{asset('home')}}/img/portus-logo.png">
                                                    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link h-page" href="{{url('/')}}">
                                                    <img src="https://img.icons8.com/ios-filled/50/000000/home.png" style="width:30px; height:30px"/>
                                                    </a>
        </li>
        <li class="nav-item">
        <a class="nav-link ab-page" href="{{url('/about')}}">
                                                        About Us
                                                    </a>
        </li>
        <li>
        <div class="dropdown">
        <a class="dropbtn nav-link p-page" href="{{url('/products')}}"> Products</a>
        <div class="dropdown-content">
        <a href="{{url('/Crustaceans')}}">Crustaceans</a>
        <a href="{{url('/Cephalopodes')}}">Cephalopods</a>
        <a href="{{url('/Others')}}">Other Species</a>
        </div>
        </div>
        </li>

        <li class="nav-item">
        <a class="nav-link i-page" href="{{url('/import-and-export')}}">
                                                    Import & Export
                                                    </a>
        </li>
        <li class="nav-item">
        <a class="nav-link q-page" href="{{url('/quality-and-technology')}}">
                                                    Quality & Technology
                                                    </a>
        </li>
        <li class="nav-item">
        <a class="nav-link c-page" href="{{url('/contact-us')}}">
                                                        Team & Contacts
                                                    </a>
        </li>
        
        @if (Auth::guest())

@if (Route::has('orders.track_order'))
<li class="nav-item">
    <a class="nav-link tr-page"
        href="{{ route('login') }}">{{ __('Track') }}</a>
</li>
@endif
@else
<li>
    @if (Route::has('user.orders'))
<li class="nav-item">
    <a class="nav-link"
        href="{{route('user.orders') }}">{{ __('My Orders') }}</a>
</li>
@endif
<li class="nav-item">
    <a class="nav-link" onclick="event.preventDefault();
document.getElementById('logout-form').submit();" href="{{ route('logout')}}">{{ __('Logout') }}</a>
</li>

<form id="logout-form" action="{{route('logout')}}" method="POST"
    class="d-none">
    @csrf </form>
@endif

<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border d-none d-sm-flex ms-3 order-1 order-lg-2">
                                        <ul
                                            class="header-social-icons social-icons d-none d-sm-block social-icons-clean social-icons-medium ms-0">
                                            <li class="social-icons-facebook"><a href="http://www.facebook.com/"
                                                    target="_blank" title="Facebook"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li class="social-icons-twitter"><a href="http://www.twitter.com/"
                                                    target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/"
                                                    target="_blank" title="Linkedin"><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>



      </ul>
    </div>
  </div>
</nav>


</header>

</div>

        @yield('content')

        <footer id="footer" class="overflow-hidden border-0 m-0"
            style="background-image: url({{asset('home')}}/img/demos/construction/backgrounds/background-2.jpg); background-repeat: no-repeat; background-position: center bottom;">
            <div class="container pt-5">
                <div class="row pt-4 mb-5 gy-4">
                    <div class="col-lg-2 align-self-center">
                        <a href="{{url('/')}}">
                            <img alt="Porto" class="img-fluid logo" width="123" height="48"
                                src="{{asset('home')}}/img/portus-logo.png">
                        </a>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <h4 class="mb-4-5 text-color-dark sub-head text-uppercase">Navigation</h4>
                        <ul class="list list-unstyled columns-lg-2">
                            <li>
                                <a href="/" class="text-color-hover-primary">
                                    Home
                                </a>
                            </li>
                            

                            <li>
                                <a href="/products" class="text-color-hover-primary">
                                    Products
                                </a>
                            </li>

                            <li>
                                <a href="/import-and-export" class="text-color-hover-primary">
                                Import & Export
                                </a>
                            </li>
                            <li>
                                <a href="/quality-and-technology" class="text-color-hover-primary">
                                Quality & Technology
                                </a>
                            </li>
                            <li>
                                <a href="/about" class="text-color-hover-primary">
                                    About Us
                                </a>
                            </li>

                            <li>
                                <a href="/contact-us" class="text-color-hover-primary">
                                    Team & Contacts
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <h4 class="mb-4-5 text-color-dark sub-head text-uppercase">Address</h4>
                        <ul class="list list-unstyled list-inline">
                            <li> US Office: 339 Bainbridge St, Philadelphia, PA 19147</li>
							<li class="mob list-inline-item d-inline-flex align-items-center ms-0 ms-sm-4 ms-lg-1 ms-xl-4">
                            <img width="23" height="23" src="{{asset('home')}}/img/demos/construction/icons/phone.svg"
                                alt="" data-icon
                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
                            <a href="tel:0123456789"
                                class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5 ms-2">+1
                                (609) 451-5148</a>
                           </li>
                            </li>
                            <li class="mob mob1 list-inline-item d-inline-flex align-items-center ms-0 ms-sm-4 ms-lg-1 ms-xl-4" style="position:relative; left:10px;">
                                <img width="23" height="23"
                                    src="{{asset('home')}}/img/demos/construction/icons/email.svg" alt="" data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
                                <a href="mailto:info@portus.com"
                                    class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5 ms-2" style="z-index:1;">info@portus.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr>

                <div class="footer-copyright bg-transparent pb-5 mt-5-5">
                    <div class="row pb-5">
                        <div class="col text-center mb-5">
                            <p class="text-color-grey text-3 mb-3">Portus © 2022. All Rights Reserved. </p>

                        </div>
                    </div>
                </div>

            </div>
            <div class="position-absolute left-100pct transform3dx-n50 top-0 ">
                <div class="appear-animation" data-appear-animation="fadeInLeftShorterPlus"
                    data-appear-animation-delay="1000" data-appear-animation-duration="1500ms">
                    <div class="custom-square-1 custom-square-1-big bg-dark mt-0 mb-5 me-5"></div>
                </div>
            </div>
        </footer>

    </div>

    <!-- Vendor -->
    <script src="{{asset('home')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('home')}}/vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="{{asset('home')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{asset('home')}}/vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="{{asset('home')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('home')}}/vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="{{asset('home')}}/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="{{asset('home')}}/vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="{{asset('home')}}/vendor/lazysizes/lazysizes.min.js"></script>
    <script src="{{asset('home')}}/vendor/isotope/jquery.isotope.min.js"></script>
    <script src="{{asset('home')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{asset('home')}}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('home')}}/vendor/vide/jquery.vide.min.js"></script>
    <script src="{{asset('home')}}/vendor/vivus/vivus.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('home')}}/js/theme.js"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{asset('home')}}/js/views/view.contact.js"></script>

    <!-- Theme Custom -->
    <script src="{{asset('home')}}/js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="{{asset('home')}}/js/theme.init.js"></script>
    <script>
        if(performance.navigation.type == 2){
   location.reload(true);
}
</script>

   
</body>

</html>