<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="'گانر پارت:قطعات یدکی هیوندا و کیا">
    <meta name="keywords" content="لوازم یدکی, هیوندا, کیا , قطعات یدکی">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('assets/img/Gunner-LOGO.png')}}" type="image/gif" sizes="16x16">


@yield('title')

    <!-- Font Awesome icons (free version)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset("/css/styles.css")}}" rel="stylesheet">

    <!-- Fonts CSS-->
    <link href="{{asset("/css/heading.css")}}" rel="stylesheet">
    <link href="{{asset("/css/body.css")}}" rel="stylesheet">
    <link href="{{asset("/css/font.css")}}" rel="stylesheet">
    <link href="{{asset("/css/theme.css")}}" rel="stylesheet">

</head>


<body id="page-top">
<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav" dir="rtl">
    <div class="container">
        <ul class="navbar-nav ml-auto">
            @yield('login')
            <li class="nav-item mx-0 mx-lg-1">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <img src="{{asset("/assets/img/Gunner-LOGO.png")}}" style="width: 125px;margin:auto;" >GunnerPart

                </a>
            </li>


        </ul>

        <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-secondary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('admin')}}">داشبورد</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('show_brand')}}">برند</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('show_cartype')}}">ماشین</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('show_commodity')}}">قطعه یدکی</a>
                </li>



            </ul>
        </div>
    </div>
</nav>
@yield('content')


@yield('copyright')

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="{{asset("/assets/mail/jqBootstrapValidation.js")}}"></script>
<script src="{{asset("/assets/mail/contact_me.js")}}"></script>
<!-- Core theme JS-->
<script src="{{asset("/js/scripts.js")}}"></script>
</body>

</html>
