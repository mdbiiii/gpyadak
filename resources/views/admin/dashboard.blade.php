<!DOCTYPE html>
<html lang="en" style="font-family: 'Vazir', monospace" >
<head>
    <!-- Title -->
    <title>مدیریت وبسایت</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->



    <!-- DEMO CHARTS -->
    <link rel="stylesheet" href="{{asset("dashboard/demo/chartist.css")}}">
    <link rel="stylesheet" href="{{asset("dashboard/demo/chartist-plugin-tooltip.css")}}">

    <!-- Template -->
    <link rel="stylesheet" href="{{asset("dashboard/graindashboard/css/graindashboard.css")}}">
    <link rel="stylesheet" href="{{asset("/css/font.css")}}">


</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
<!-- Header -->
<header class="header bg-body">
    <nav class="navbar flex-nowrap p-0">
        <div class="navbar-brand-wrapper d-flex align-items-center col-auto">
            <!-- Logo For Mobile View -->
            <a class="navbar-brand navbar-brand-mobile" href="{{asset("/admin")}}">
                <img class=" img-fluid w-100" src="{{asset("/assets/img/PSD.png")}}" alt="Graindashboard" >

            </a>
            <!-- End Logo For Mobile View -->

            <!-- Logo For Desktop View -->
            <a class="navbar-brand navbar-brand-desktop" href="{{asset("/admin")}}">
                <img class="side-nav-show-on-closed" src="{{asset("/assets/img/PSD.png")}}" alt="Graindashboard" style="width: 70px; height: auto;">
                <img class="side-nav-hide-on-closed" src="{{asset("/assets/img/PSD.png")}}" alt="Graindashboard" style="width:100px; height: auto;">
            </a>
            <!-- End Logo For Desktop View -->
        </div>

        <div class="header-content col px-md-3">
            <div class="d-flex align-items-center">
                <!-- Side Nav Toggle -->
                <a  class="js-side-nav header-invoker d-flex mr-md-2" href="#"
                    data-close-invoker="#sidebarClose"
                    data-target="#sidebar"
                    data-target-wrapper="body">
                    <i class="gd-align-left"></i>
                </a>
                <!-- End Side Nav Toggle -->

                <!-- User Notifications -->
                <div class="dropdown ml-auto">


                </div>
                <!-- End User Notifications -->
                <!-- User Avatar -->
                <div class="dropdown mx-3 dropdown ml-2">
                    <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#profileMenu" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                        <!--img class="avatar rounded-circle mr-md-2" src="#" alt="John Doe"-->
                        <span class="mr-md-2 avatar-placeholder">{{substr(auth()->user()->name,0,1)}}</span>
                        <span class="d-none d-md-block">{{auth()->user()->name}}</span>
                        <i class="gd-angle-down d-none d-md-block ml-2"></i>
                    </a>

                    <ul id="profileMenu" class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4 unfold-css-animation unfold-hidden fadeOut" aria-labelledby="profileMenuInvoker" style="animation-duration: 300ms;">
                        <li class="unfold-item">
                            <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                    <span class="unfold-item-icon mr-3">
                      <i class="gd-user"></i>
                    </span>
                                My Profile
                            </a>
                        </li>
                        <li class="unfold-item unfold-item-has-divider">


                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button class="btn btn-danger embed-responsive" >
                                        <span class="unfold-item-icon mr-3">
                                             <i class="gd-power-off"></i>
                                         </span>
                                    خروج </button>
                            </form>


                        </li>
                    </ul>
                </div>
                <!-- End User Avatar -->
            </div>
        </div>
    </nav>
</header>
<!-- End Header -->

<main class="main">
    <!-- Sidebar Nav -->
    <aside id="sidebar" class="js-custom-scroll side-nav">
        <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
            <!-- Title -->
            <li class="sidebar-heading h6">GunnerParts</li>
            <!-- End Title -->

            <!-- Dashboard -->
            <li class="side-nav-menu-item active">
                <a class="side-nav-menu-link media align-items-center" href="{{asset("/admin")}}">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-dashboard"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">داشبورد مدیریتی</span>
                </a>
            </li>
            <!-- End Dashboard -->

            <!-- Documentation -->
        {{--            <li class="side-nav-menu-item">--}}
        {{--                <a class="side-nav-menu-link media align-items-center" href="documentation/" target="_blank">--}}
        {{--              <span class="side-nav-menu-icon d-flex mr-3">--}}
        {{--                <i class="gd-file"></i>--}}
        {{--              </span>--}}
        {{--                    <span class="side-nav-fadeout-on-closed media-body">Documentation</span>--}}
        {{--                </a>--}}
        {{--            </li>--}}
        <!-- End Documentation -->

            <!-- Title -->
            <li class="sidebar-heading h6">عملیات</li>
            <!-- End Title -->

            <!-- Brands -->
            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="#"
                   data-target="#subBrands">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="fa fa-car"></i>
                  </span>
                    <span class="side-nav-fadeout-on-closed media-body"> برند ماشین</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Brands: subBrands -->
                <ul id="subBrands" class="side-nav-menu side-nav-menu-second-level mb-0">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{route('show_brand')}}">نمایش برندهای ثبت شده</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{route('create_brand')}}">ایجاد برند جدید</a>
                    </li>
                </ul>
                <!-- End Brands: subBrands -->
            </li>
            <!-- End Brands -->

            <!-- Cars -->
            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="#"
                   data-target="#subCars">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="fa fa-car"></i>
                  </span>
                    <span class="side-nav-fadeout-on-closed media-body"> ماشین</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Cars: subCars -->
                <ul id="subCars" class="side-nav-menu side-nav-menu-second-level mb-0">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{route('show_cartype')}}">نمایش ماشین های ثبت شده</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{route('create_cartype')}}">ایجاد ماشین جدید</a>
                    </li>
                </ul>
                <!-- End Cars: subCars -->
            </li>
            <!-- End Cars -->

            <!-- Parts -->
            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="#"
                   data-target="#subParts">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="fa fa-car"></i>
                  </span>
                    <span class="side-nav-fadeout-on-closed media-body">قطعات یدکی</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Parts: subParts -->
                <ul id="subParts" class="side-nav-menu side-nav-menu-second-level mb-0">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{route('show_commodity')}}">نمایش قطعات ثبت شده</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{route('commodity')}}">ایجاد قطعه جدید</a>
                    </li>
                </ul>
                <!-- End Parts: subParts -->
            </li>
            <!-- End Parts -->

            <!-- Authentication -->
        {{--            <li class="side-nav-menu-item side-nav-has-menu">--}}
        {{--                <a class="side-nav-menu-link media align-items-center" href="#"--}}
        {{--                   data-target="#subPages">--}}
        {{--              <span class="side-nav-menu-icon d-flex mr-3">--}}
        {{--                <i class="gd-lock"></i>--}}
        {{--              </span>--}}
        {{--                    <span class="side-nav-fadeout-on-closed media-body">Authentication</span>--}}
        {{--                    <span class="side-nav-control-icon d-flex">--}}
        {{--                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>--}}
        {{--              </span>--}}
        {{--                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>--}}
        {{--                </a>--}}

        {{--                <!-- Pages: subPages -->--}}
        {{--                <ul id="subPages" class="side-nav-menu side-nav-menu-second-level mb-0">--}}
        {{--                    <li class="side-nav-menu-item">--}}
        {{--                        <a class="side-nav-menu-link" href="login.html">Login</a>--}}
        {{--                    </li>--}}
        {{--                    <li class="side-nav-menu-item">--}}
        {{--                        <a class="side-nav-menu-link" href="register.html">Register</a>--}}
        {{--                    </li>--}}
        {{--                    <li class="side-nav-menu-item">--}}
        {{--                        <a class="side-nav-menu-link" href="password-reset.html">Forgot Password</a>--}}
        {{--                    </li>--}}
        {{--                    <li class="side-nav-menu-item">--}}
        {{--                        <a class="side-nav-menu-link" href="password-reset-2.html">Forgot Password 2</a>--}}
        {{--                    </li>--}}
        {{--                    <li class="side-nav-menu-item">--}}
        {{--                        <a class="side-nav-menu-link" href="email-verification.html">Email Verification</a>--}}
        {{--                    </li>--}}
        {{--                </ul>--}}
        {{--                <!-- End Pages: subPages -->--}}
        {{--            </li>--}}
        <!-- End Authentication -->

            <!-- Settings -->
        {{--            <li class="side-nav-menu-item">--}}
        {{--                <a class="side-nav-menu-link media align-items-center" href="settings.html">--}}
        {{--              <span class="side-nav-menu-icon d-flex mr-3">--}}
        {{--                <i class="gd-settings"></i>--}}
        {{--              </span>--}}
        {{--                    <span class="side-nav-fadeout-on-closed media-body">Settings</span>--}}
        {{--                </a>--}}
        {{--            </li>--}}
        <!-- End Settings -->



        </ul>
    </aside>
    <!-- End Sidebar Nav -->

    <div class="content">



        <div class="py-4 px-3 px-md-4">

            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Dashboard</div>
            </div>



        </div>
        <div class="container d-flex align-items-center flex-column">
            <div class="container">

                <div class="row justify-content-center text-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">{{ __('ایجاد قطعه یدکی') }}</div>

                            <div class="card-body">

                                <a href="{{route('commodity')}}" class="btn btn-dark">برای وارد کردن قطعه جدید کلیک کنید</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">{{ __('ایجاد برند') }}</div>

                            <div class="card-body">

                                <a href="{{route('create_brand')}}" class="btn btn-dark">برای وارد کردن برند جدید کلیک کنید</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">{{ __('ایجاد ماشین') }}</div>

                            <div class="card-body">

                                <a href="{{route('create_cartype')}}" class="btn btn-dark">برای وارد کردن ماشین جدید کلیک کنید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    {{--        <div class="row">--}}
    {{--            @foreach($commodities as $commodity)--}}
    {{--                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-1">--}}
    {{--                    <div class="card">--}}
    {{--                        <div class="thumbnail text-center">--}}
    {{--                          <div class="card-img-top">--}}
    {{--                              <img class="img-responsive img-fluid imglazyload card-img-top" src="{{$commodity->image_url}}" style="display: block; opacity: 0.99;" alt="">--}}

    {{--                          </div>--}}
    {{--                            <div class="card-body">--}}
    {{--                                <p>--}}
    {{--                                    {{$commodity->info}}--}}
    {{--                                </p>--}}
    {{--                            </div>--}}


    {{--                            <hr>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                </div>--}}
    {{--            @endforeach--}}

    {{--        </div>--}}

    <!-- Footer -->
        <footer class="small p-3 px-md-4 mt-auto">
            <div class="row justify-content-between">
                <div class="col-lg text-center text-lg-right">
                    copyright &copy; 2020 MDBI
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
</main>


<script src="{{asset("dashboard/graindashboard/js/graindashboard.js")}}"></script>
<script src="{{asset("dashboard/graindashboard/js/graindashboard.vendor.js")}}"></script>

<!-- DEMO CHARTS -->
<script src="{{asset("dashboard/demo/resizeSensor.js")}}"></script>
<script src="{{asset("dashboard/demo/chartist.js")}}"></script>
<script src="{{asset("dashboard/demo/chartist-plugin-tooltip.js")}}"></script>
<script src="{{asset("dashboard/demo/gd.chartist-area.js")}}"></script>
<script src="{{asset("dashboard/demo/gd.chartist-bar.js")}}"></script>
<script src="{{asset("dashboard/demo/gd.chartist-donut.js")}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $.GDCore.components.GDChartistArea.init('.js-area-chart');
    $.GDCore.components.GDChartistBar.init('.js-bar-chart');
    $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
</script>
</body>
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
@include('sweet::alert')
</html>
