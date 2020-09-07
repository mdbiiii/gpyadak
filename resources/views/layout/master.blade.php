<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gunner</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet">
    <!-- Fonts CSS-->
    <link rel="stylesheet" href="/css/heading.css">
    <link rel="stylesheet" href="/css/body.css">
    <link rel="stylesheet" href="/css/font.css">
</head>


<body id="page-top">
<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav" dir="rtl">
    <div class="container">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <img src="/assets/img/PSD.png" style="width: 125px;margin:auto;" >GunnerPart
{{--                    <img src="/assets/img/gun.png" style="width: 45px;margin: -10px -3px 0 0;">--}}

{{--                    <img src="/assets/img/Hyundai.png">--}}
{{--                    <img src="/assets/img/Kia.png">--}}
                </a>
            </li>
            @yield('login')

        </ul>

        <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-secondary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#kia"><img src="/assets/img/Hyundai.png" style="width: 28px;margin: -10px -3px 0 0;">هیوندا </a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#kia"><img src="/assets/img/kia.png" style="width: 28px;margin: -10px -3px 0 0;">کیا </a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">قطعات یدکی</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">درباره ما</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">تماس با ما</a>
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
            <div class="col-lg-4 mb-5 mb-lg-0">

                <h3>آدرس ما
                    <i class="fas fa-map-marker-alt"></i></h3>


                <p class="pre-wrap lead mb-0">2215 John Daniel Drive
                    Clark, MO 65243</p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="mb-4">AROUND THE WEB</h4><a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/StartBootstrap"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.twitter.com/sbootstrap"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/startbootstrap"><i class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.dribble.com/startbootstrap"><i class="fab fa-fw fa-dribbble"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4" dir="rtl" >
                <h4 class="mb-4" dir="rtl">ABOUT FREELANCER</h4>
                <table class="table table-borderless bg-primary contact-table text-white">

                    <tbody>
                    <tr>
                        <th scope="row">دفتر فروش</th>
                        <td > <br>
                            {{english2persian("885698456-021")}} <br>
                            {{english2persian("885698456-021")}} <br>
                            {{english2persian("885698456-021")}}<br>
                            {{english2persian("885698456-021")}}
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">موبایل</th>
                        <td>{{english2persian("09126452317")}} <br>
                            {{english2persian("09126452317")}}
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">تلگرام</th>
                        <td>Jacob</td>

                    </tr>
                    <tr>
                        <th scope="row">واتساپ</th>
                        <td>Larry</td>

                    </tr>
                    </tbody>

                </table>
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
<script src="/assets/mail/jqBootstrapValidation.js"></script>
<script src="/assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="/js/scripts.js"></script>
</body>
</html>
