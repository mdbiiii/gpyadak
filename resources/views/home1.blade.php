@extends('layout.master')
@section('content')

    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
    <div class="container">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">MDBI

                    <img src="/assets/img/Hyundai.png">
                    <img src="/assets/img/Kia.png">
                </a>
            </li>
            @if(auth()->check())
                <li class="nav-item mx-0 mx-lg-1">
                    {{--                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">CONTACT</a>--}}
                    {{--                        <a href="{{route('index')}}"class="btn badge-light">داشبورد</a>--}}

                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="btn btn-danger">خروج</button>
                    </form>

                </li>
            @else
                <li class="nav-item mx-0 mx-lg-1">
                    <a href="{{route('login')}}" class="badge-light py-3 px-0 px-lg-3 rounded navbar-light">ورود</a>
                </li>
            @endif
        </ul>

        <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">محصولات</a>
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
    <header class="masthead bg-primary text-white text-center">
     <div class="row">
         <div class="col-lg-6 ml-auto">
             <div class="container d-flex align-items-center flex-column">
                 <!-- Masthead Heading-->
                 <h1 class="masthead-heading mb-0">گانر ‍‍ پارت</h1>
                 <!-- Icon Divider-->
                 <div class="divider-custom divider-light">
                     <div class="divider-custom-line"></div>
                     <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                     <div class="divider-custom-line"></div>
                 </div>
                 <!-- Masthead Subheading-->
                 <p class="pre-wrap masthead-subheading font-weight-bold btn btn-dark mb-0" >واردات مستقیم قطعات یدکی هیوندا و کیا</p>
                 <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                 <p class="pre-wrap masthead-subheading font-weight-bold btn btn-dark mb-0 " > تامین قطعات یدکی هیوندا و کیا </p>
                 <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                 <p class="pre-wrap masthead-subheading font-weight-bold btn btn-dark mb-0" > مشاوره رایگان از استعلام تا تحویل کالا</p>

             </div>
         </div>
         <div class="col-lg-6 mr-auto">
             <div class="container d-flex align-items-center flex-column">
                 <!-- Masthead Heading-->
                 <h1 class="masthead-heading mb-0">گانر ‍‍ پارت</h1>
                 <!-- Icon Divider-->
                 <div class="divider-custom divider-light">
                     <div class="divider-custom-line"></div>
                     <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                     <div class="divider-custom-line"></div>
                 </div>
                 <!-- Masthead Subheading-->
                 <p class="pre-wrap masthead-subheading font-weight-bold btn btn-dark mb-0" >واردات مستقیم قطعات یدکی هیوندا و کیا</p>
                 <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                 <p class="pre-wrap masthead-subheading font-weight-bold btn btn-dark mb-0 " > تامین قطعات یدکی هیوندا و کیا </p>
                 <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                 <p class="pre-wrap masthead-subheading font-weight-bold btn btn-dark mb-0" > مشاوره رایگان از استعلام تا تحویل کالا</p>

             </div>

         </div>
     </div>

    </header>
    <section   class="page-section portfolio" id="portfolio">
        <div  class="container">
            <!-- Portfolio Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary mb-0 d-inline-block">محصولات</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Items-->


                @foreach($commodities as $commodity)

                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card ">
{{--                         <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#mymodal{{$commodity->id}}l">--}}
                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#mymodal{{$commodity->id}}">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>

                              <img    class="img-responsive  img-fluid img-thumbnail card-img-top" src="{{$commodity->file_url}}" alt="{{$commodity->name}}"/>
                             <div class="card-body text-right">
                                 <h6  class="card-title">{{$commodity->name}}</h6>
                                 <p  class="card-text text-info">جهت دریافت اطلاعات بیشتر اینجا کلیک کنید یا با تماس بگیرید</p>
                             </div>
                         </div>
                        </div>
                    </div>

                    <div class="portfolio-modal modal fade" id="mymodal{{$commodity->id}}" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal0Label" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                                <div class="modal-body text-center">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <!-- Portfolio Modal - Title-->
                                                <h2 class="portfolio-modal-title text-secondary mb-0">{{$commodity->name}}</h2>
                                                <!-- Icon Divider-->
                                                <div class="divider-custom">
                                                    <div class="divider-custom-line"></div>
                                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                    <div class="divider-custom-line"></div>
                                                </div>
                                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="{{$commodity->file_url}}" alt="{{$commodity->name}}"/>
                                                <!-- Portfolio Modal - Text-->
                                                <p class="mb-5">{{$commodity->info}}</p>
                                                <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
    </section>
    <!-- Portfolio Modal-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading d-inline-block text-white">درباره ما</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="pre-wrap lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="pre-wrap lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary d-inline-block mb-0">تماس با ما</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Content-->
            <div class="row justify-content-center">
                <div class="col-lg-2">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-contact mb-3">
                            <i class="fab fa-telegram" aria-hidden="true"></i>
                        </div>
                        <div class="text-muted">تلگرام</div>
                        <div class="lead font-weight-bold">(555) 555-5555</div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-contact mb-3"><i class="fab fa-whatsapp" aria-hidden="true"></i></div>
                        <div class="text-muted">واتساپ</div><a class="lead font-weight-bold" href="mailto:name@example.com">name@example.com</a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-contact mb-3"><i class="fab fa-instagram"></i></div>
                        <div class="text-muted">اینستاگرام</div>
                        <div class="lead font-weight-bold">(555) 555-5555</div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-contact mb-3"><i class="far fa-envelope"></i></div>
                        <div class="text-muted">ایمیل</div><a class="lead font-weight-bold" href="mailto:name@example.com">name@example.com</a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-contact mb-3"><i class="fa fa-mobile-alt"></i></div>
                        <div class="text-muted">شماره تماس</div><a class="lead font-weight-bold" href="mailto:name@example.com">name@example.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">LOCATION</h4>
                    <p class="pre-wrap lead mb-0">2215 John Daniel Drive
                        Clark, MO 65243</p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">AROUND THE WEB</h4><a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/StartBootstrap"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.twitter.com/sbootstrap"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/startbootstrap"><i class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.dribble.com/startbootstrap"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="mb-4">ABOUT FREELANCER</h4>
                    <p class="pre-wrap lead mb-0">Freelance is a free to use, MIT licensed Bootstrap theme created by Start Bootstrap</p>
                </div>
            </div>
        </div>
    </footer>
    @endsection
@section('copyright')
    <section class="copyright py-4 text-center text-white">
        <div class="container"><small class="pre-wrap">Copyright © MDBI 2020</small></div>
    </section>
    @endsection
