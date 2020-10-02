<!DOCTYPE html>
<html lang="en" >
<head>
    @yield('meta')

    <link rel="icon" href="{{asset('assets/img/Gunner-LOGO.png')}}" type="image/gif" sizes="16x16">


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
                <a class="navbar-brand js-scroll-trigger" href="{{asset('/')}}">
                    <img src="{{asset("/assets/img/Gunner-LOGO.png")}}" style="width: 125px;margin:auto;" >GunnerPart

                </a>
            </li>


        </ul>

        <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-secondary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('home')}}">خانه</a>
                </li>


            </ul>
        </div>
    </div>
</nav>
@yield('content')

<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0"  dir="rtl">

                <h3>آدرس ما
                    <i class="fas fa-map-marker-alt text-right"></i></h3>
                <hr>


                <p class="pre-wrap lead mb-1">تهران، چراغ برق،خیابان نظامیه،بن بست ویژه</p>


                <a class="btn btn-success footer-map mb-1" href="https://www.google.com/maps/dir//%DA%AF%D8%A7%D9%86%D8%B1+%D9%BE%D8%A7%D8%B1%D8%AA%E2%80%AD%E2%80%AD/@35.7266795,51.3319966,12z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3f8e01a54f359601:0x3fbce593e7533f2f!2m2!1d51.4301955!2d35.6885692" title="آدرس گانر‍‍پارت در نقشه گوگل" target="_blank">
                    <img alt="Google Map" title="آدرس گانرپارت در نقشه گوگل"  src="{{asset("/assets/img/Google-Maps.png")}}">
                    مسیریابی گوگل

                    <i class="fas fa-arrow-circle-left"></i>
                </a>

                <a class="btn btn-info footer-map" href="https://www.waze.com/livemap/directions?to=ll.35.68814979%2C51.43029571&from=" title="آدرس گانر‍‍پارت در نقشه waze" target="_blank">
                    <img alt="Google Map" title="آدرس گانرپارت در نقشه waze"  src="{{asset("/assets/img/waze.png")}}">
                    مسیریابی ویز

                    <i class="fas fa-arrow-circle-left"></i>
                </a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4" dir="rtl" >
                <!-- Footer contact us-->
                <h4 class="mb-4" dir="rtl">تماس با ما <i class="fa fa-phone "></i>
                </h4>
                <hr>
                <table class="table table-borderless  contact-table text-white" style="background: #245064;color: #e2e3e5">

                    <tbody>
                    <tr>
                        <th scope="row">دفتر فروش</th>
                        <td > <br>
                            <a href="tel:02133966541">{{english2persian("33966541-021")}}</a><br>
                            <a href="tel:02136059430">{{english2persian("36059430-021")}}</a><br>

                            <hr>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">موبایل</th>
                        <td>
                            <a href="tel:09126761663">{{english2persian("09126761663")}}</a><br>
                            {{--                            <a href="tel:02136348512">{{english2persian("09126452317")}}</a>--}}
                            <hr>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">تلگرام</th>
                        <td><a class="contact-telegram" title="لینک تلگرام" href="https://telegram.me/Gunnerparts_support">

                                <img alt="telegram" title="تلگرام" src="{{asset("assets/img/Telegram-logo.png")}}">Gunnerparts_support</a>
                            <hr></td>

                    </tr>
                    <tr>
                        <th scope="row">واتساپ</th>
                        <td><a class="contact-telegram" title="لینک واتساپ" href="https://wa.me/989126761663">
                                <img alt="whatsapp" title="واتساپ" src="{{asset("assets/img/Whatsapp-logo.png")}}">{{english2persian("09126761663")}}</a>
                            <hr></td>

                    </tr>
                    </tbody>

                </table>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0 " dir="rtl">





                <h4 class="mb-4">پشتیبانی <i class="fas fa-headphones"></i></h4>
                <hr>


                <ul style="text-align: right ; color: #fffacc">
                    <li><a title="شرایط پرداخت برای سفارش ها" href="{{route('payment')}}" style="color: #e2e3e5">شرایط پرداخت</a></li>
                    <br>
                    <li><a title="شرایط ارسال کالا به سراسر ایران" href="{{route('shipment')}}" style="color: #e2e3e5">شرایط ارسال</a></li>
                    <br>
                    <li><a title="لطفا انتقادات و پیشنهادات خود را با ما در میان بزارید" href="{{route('feedback')}}" style="color: #e2e3e5">انتقادات و پیشنهادات</a></li>
                    <br>
                    {{--                    <li><a title="پاسخ به پرسش های متداول" href="#">سوالات متداول</a></li>--}}
                    {{--                    <br>--}}
                    <li><a title="سفارش خود را از اینجا پیگیری کنید" href="{{route('order_tracking')}}" style="color: #e2e3e5">پیگیری سفارش</a></li>

                </ul>




                {{--                <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/StartBootstrap"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.twitter.com/sbootstrap"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/startbootstrap"><i class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.dribble.com/startbootstrap"><i class="fab fa-fw fa-dribbble"></i></a>--}}
            </div>

        </div>
    </div>
</footer>
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
