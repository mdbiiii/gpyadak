<div style="font-family: 'Vazir',serif">


    @extends('support.master')
    @section('meta')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="انتقادات و پیشنهادات">
        <meta name="author" content="">
        <title>گانر پارت:انتقادات و پیشنهادات</title>
    @endsection
    @section('content')



        <header class="masthead bg-primary text-white text-center cth">
            <section id="hero" class="d-flex justify-content-center align-items-center">
                <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="carousel-container">
                            <h2 class="animate__animated animate__fadeInDown text-white">گانر ‍‍ پارت </h2>
                            <div class="divider-custom divider-light">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <p class="animate__animated animate__fadeInUp"><span class="pre-wrap masthead-subheading   badge badge-pill badge-dark  mb-0" >واردات مستقیم قطعات یدکی هیوندا و کیا</span>
                            </p>
                            <p class="animate__animated animate__fadeInUp"><span class="pre-wrap masthead-subheading font-weight-bold badge badge-pill badge-dark  mb-0 " > ضمانت اصالت قطعات یدکی هیوندا و کیا </span>
                            </p>




                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <h2 class="animate__animated animate__fadeInDown text-white">تضمین اصالت کالا </h2>
                            <div class="divider-custom divider-light">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <p class="animate__animated animate__fadeInUp"><span class="pre-wrap masthead-subheading   badge badge-pill badge-dark  mb-0" >تقلبی نخرید! کالای اصلی را از ما بخواهید</span>
                            </p>
                            <a href="#contact">

                                <p class="animate__animated animate__fadeInUp"><span class="pre-wrap masthead-subheading font-weight-bold badge badge-pill badge-dark  mb-0 " > برای کسب اطلاعات و استعلام قیمت کافی است تماس بگیرید </span>
                                </p>
                            </a>

                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <h2 class="animate__animated animate__fadeInDown text-white">تحویل کالا در کمترین زمان </h2>
                            <div class="divider-custom divider-light">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <p class="animate__animated animate__fadeInUp"><span class="pre-wrap masthead-subheading font-weight-bold badge badge-pill badge-dark  mb-0 " > تحویل اکسپرس سریع کالا در سراسر کشور </span>
                            </p>
                            <p class="animate__animated animate__fadeInUp"><span class="pre-wrap masthead-subheading font-weight-bold badge badge-pill badge-dark  mb-0 " > مشاوره رایگان از استعلام تا تحویل کالا </span>
                            </p>

                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>




                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"><</span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </section>

            <!-- End Hero -->

            {{--            <div class="row">--}}
            {{--                <div class="col-lg-6 mr-auto">--}}
            {{--                    <div class="container d-flex align-items-center flex-column">--}}
            {{--                        <!-- Masthead Heading-->--}}
            {{--                        <h1 class="masthead-heading mb-0">گانر ‍‍ پارت</h1>--}}
            {{--                        <!-- Icon Divider-->--}}
            {{--                        <div class="divider-custom divider-light">--}}
            {{--                            <div class="divider-custom-line"></div>--}}
            {{--                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>--}}
            {{--                            <div class="divider-custom-line"></div>--}}
            {{--                        </div>--}}
            {{--                        <!-- Masthead Subheading-->--}}

            {{--                        <span class="pre-wrap masthead-subheading  font-weight-bold badge badge-pill badge-primary   mb-0" >واردات مستقیم قطعات یدکی هیوندا و کیا<img  src="{{asset("/assets/img/export2.png")}}" alt="کالای تقلبی" style="width: 60px"></span>--}}
            {{--                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>--}}
            {{--                        <span class="pre-wrap masthead-subheading font-weight-bold badge badge-pill badge-primary  mb-0 " > ضمانت اصالت قطعات یدکی هیوندا و کیا <img  src="{{asset("/assets/img/asl.png")}}" alt="کالای تقلبی" style="width: 60px"></span>--}}
            {{--                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>--}}
            {{--                        <span class="pre-wrap masthead-subheading font-weight-bold badge badge-pill badge-primary  mb-0" > تحویل اکسپرس سریع کالا در سراسر کشور <img  src="{{asset("/assets/img/delivery.png")}}" alt="کالای تقلبی" style="width: 60px"></span>--}}
            {{--                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>--}}
            {{--                        <span class="pre-wrap masthead-subheading font-weight-bold badge badge-pill badge-primary  mb-0" > مشاوره رایگان از استعلام تا تحویل کالا <img  src="{{asset("/assets/img/moshavere.png")}}" alt="کالای تقلبی" style="width: 50px"></span>--}}

            {{--                    </div>--}}

            {{--                </div>--}}
            {{--                <br>--}}
            {{--                <div class="col-lg-6 ">--}}
            {{--                    <div class="container d-flex align-items-center flex-column">--}}
            {{--                        <!-- Masthead Heading-->--}}
            {{--                        <div class="row" >--}}

            {{--                            <div>--}}
            {{--                                <div class=" card-img ">--}}
            {{--                                    <img class="img-responsive" src="{{asset("/assets/img/carpart.png")}}" alt="قطعات یدکی">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                        </div>--}}
            {{--                        <br>--}}
            {{--                        <div class="row">--}}
            {{--                            <p class="pre-wrap masthead-subheading font-weight-bold badge badge-pill badge-dark mb-0" >تقلبی نخرید! کالای اصلی را از ما بخواهید<img  src="{{asset("/assets/img/fake.png")}}" alt="کالای تقلبی" style="width: 60px"></p>--}}
            {{--                            <br>--}}

            {{--                        </div>--}}
            {{--                        <div class="row mt-2">--}}





            {{--                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact"><p class="pre-wrap masthead-subheading badge badge-pill badge-light mb-0" style="font-size: small" ><img  src="{{asset("/assets/img/call.png")}}" alt="تماس" style="width: 40px">برای کسب اطلاعات و استعلام قیمت کافی است تماس بگیرید</p></a>--}}




            {{--                        </div>--}}



            {{--                    </div>--}}
            {{--                </div>--}}

            {{--            </div>--}}

        </header>




        <!-- feedback-->
        <section class="page-section bg-dark text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading d-inline-block text-success">انتقادات و پیشنهادات</h2>
                </div>
                <hr>

                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-12 ml-auto" dir="rtl">
                        <p class="pre-wrap lead text-justify" >شما مشتریان و همراهان عزیز می توانید هرگونه انتقاد و پیشنهاد سازنده از مجموعه گانر پارت را از طریق راه های ارتباطی قسمت تماس با ما درمیان بگذارید.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- feedback-->

        <!-- contact-->
        <section class="page-section " id="contact">
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
                            <div class="icon-contact mb-2">
                                <i class="fab fa-telegram" aria-hidden="true"></i>
                            </div>
                            <div class="text-muted">تلگرام</div>
                            <div class="lead font-weight-bold"><hr><a class="contact-telegram" title="لینک تلگرام" href="https://telegram.me/Gunnerparts_support">

                                    Gunnerparts_support</a><br>
                                <a href="tel:09126761663">{{english2persian("09126761663")}}</a></div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-2"><i class="fab fa-whatsapp" aria-hidden="true"></i></div>
                            <div class="text-muted">واتساپ</div><a class="lead font-weight-bold" href="https://wa.me/989126761663"><hr>{{english2persian("09126452317")}}</a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-2"><i class="fab fa-instagram"></i></div>
                            <div class="text-muted">اینستاگرام</div>
                            <div class="lead font-weight-bold">
                                <link rel="stylesheet" href="https://www.instagram.com/gunnerparts"><hr>
                                <a class="lead font-weight-bold" href="https://www.instagram.com/gunnerparts">@gunnerparts</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-2"><i class="fa fa-mobile-alt"></i></div>
                            <div class="text-muted">شماره همراه</div>
                            <a class="lead font-weight-bold" href="tel:09126761663"><hr>{{english2persian("09126761663")}}</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-2"><i class="fas fa-phone"></i></div>
                            <div class="text-muted">دفتر فروش</div>
                            <a class="lead font-weight-bold" href="tel:02133966541"><hr>{{english2persian("33966541-021")}}</a><br>
                            <a class="lead font-weight-bold" href="tel:02136059430">{{english2persian("36059430-021")}}</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-->
    @endsection
    @section('copyright')
        <section class="copyright py-4 text-center text-white">
            <div class="container"><small>تمامی حقوق مادی و معنوی این سایت متعلق به  مجموعه گانرپارت است</small><br><small class="pre-wrap">Copyright © MDBI 2020</small></div>
        </section>
    @endsection

</div>
