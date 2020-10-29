<div style="font-family: 'Vazir',serif">


    @extends('layout.master')

    @section('title')
        <title>گانر پارت-صفحه اصلی</title>

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

{{-- kia and hyiona--}}
    <section class="page-section bg-light " id="kia" >
        <div class="row justify-content-center">
            <div class="col-lg-6 mr-auto">
                <section class="page-section" id="kia">
                    <div class="container">
                        <div class="text-right">
                            <a href="{{route('kia')}}"><h4 class=" text-secondary mb-0 d-inline-block"><img src="{{asset("/assets/img/Kia.png")}}">قطعات یدکی کیا</h4>
                            </a>

                        </div>
                        <hr style="color: #1a252f">
                        <div class="row">

                            @foreach($kia_commos as $kia_commo)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-1">
                                    <div class="thumbnail text-center">
                                        <span class="#"></span>
                                        <a href="{{asset("/commodity/{$kia_commo->id}")}}" target="_blank">
                                            <img class="img-responsive img-fluid imglazyload card-img-top" src="{{asset("$kia_commo->image_url")}}" style="display: block; opacity: 0.99;" alt="">
                                        </a>
                                        <div  style="width: auto; height: 75px; display: block"  >
                                            <a href="{{asset("/commodity/{$kia_commo->id}")}}" target="_blank">

                                                {{--                                                <p class="text-sm-center text-md-center text-lg-center text-xl-center  " >{{$commodity->name}}</p>--}}
                                                <h5 class=" mt-2" >{{$kia_commo->name}}</h5>

                                            </a>
                                        </div>
                                        <a href="{{asset("/commodity/{$kia_commo->id}")}}"><span class="text-success bg-light">جهت اطلاع از قیمت تماس بگیرید</span></a><br><br>
                                        <a href="#contact" class="btn btn-success btn-sm rounded js-scroll-trigger active" style="background-color: #ae703b;border-color: #ae703b;" target="_blank">
                                            <i class="fa fa-phone"></i>تماس</a>
                                        <a href="{{asset("/commodity/{$kia_commo->id}")}}" onclick="compare_add(2330);" class="btn btn-info btn-sm">
                                            <i class="fa fa-th-list"></i> اطلاعات</a>
                                        <hr>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="card-footer text-center">


                            <a style="color:#d02223; border: 1px solid; font-size: small" href="{{route('kia')}}">کیا</a>
                            <a style="color:#d02223; border: 1px solid; font-size: small" href="{{route('kia')}}">لوازم یدکی کیا</a>
                            <a style="color:#d02223; border: 1px solid; font-size: small" href="{{route('kia')}}">اسپورتیج</a>
                            <a style="color:#d02223; border: 1px solid; font-size: small" href="{{route('kia')}}">سراتو</a>
                            <a style="color:#d02223; border: 1px solid; font-size: small" href="{{route('kia')}}">سراتو</a>
                            <a style="color:#d02223; border: 1px solid; font-size: small" href="{{route('kia')}}">موهاوی</a>
                            <a style="color:#d02223; border: 1px solid; font-size: small" href="{{route('kia')}}">کادنزا</a>
                            <a style="color:#d02223; border: 1px solid; font-size: small" href="{{route('kia')}}">سورنتو</a>
                            <a style="color:#d02223; border: 1px solid; font-size: small" href="{{route('kia')}}">اپتیما</a>
                            <a style="color:#d02223; border: 1px solid; font-size: small" href="{{route('kia')}}">قطعات یدکی</a>
                        </div>

                    </div>
                </section>

            </div>
            <div class="col-lg-6 ml-auto">
                <section class="page-section" id="hyundai">
                    <div class="container">
                        <div class="text-right">
                            <a href="{{route('hyundai')}}"><h4 class=" text-secondary mb-0 d-inline-block"><img src="{{asset("/assets/img/Hyundai.png")}}">قطعات یدکی هیوندا</h4>
                            </a>
                        </div>
                        <hr style="color: #1a252f">
                        <div class="row">
                            @foreach($hyu_commos as $hyu_commo)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-1">
                                    <div class="thumbnail text-center">
                                        <span class="#"></span>
                                        <a href="{{asset("/commodity/{$hyu_commo->id}")}}" target="_blank">
                                            <img class="img-responsive img-fluid imglazyload card-img-top" src="{{asset("$hyu_commo->image_url")}}" style="display: block; opacity: 0.99;" alt="">
                                        </a>
                                        <div  style="width:auto; height: 75px; display: block ;" >
                                            <a href="{{asset("/commodity/{$hyu_commo->id}")}}" target="_blank">

{{--                                                <p class="text-sm-center text-md-center text-lg-center text-xl-center  " >{{$commodity->name}}</p>--}}
                                                <h5 class="mt-2" >{{$hyu_commo->name}}</h5>

                                            </a>
                                        </div>
                                        <a href="{{asset("/commodity/{$hyu_commo->id}")}}"><span class="text-success bg-light">جهت اطلاع از قیمت تماس بگیرید</span></a><br><br>
                                        <a href="#contact" class="btn btn-success btn-sm rounded js-scroll-trigger active" style="background-color: #ae703b;border-color: #ae703b;" target="_blank">
                                            <i class="fa fa-phone"></i>تماس</a>
                                        <a href="{{asset("/commodity/{$hyu_commo->id}")}}" onclick="compare_add(2330);" class="btn btn-info btn-sm">
                                            <i class="fa fa-th-list"></i> اطلاعات</a>
                                        <hr>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="card-footer text-center">


                            <a style="color: #0277bd; border: 1px solid; font-size: small" href="{{route('hyundai')}}">هیوندا</a>
                            <a style="color: #0277bd; border: 1px solid; font-size: small" href="{{route('hyundai')}}">لوازم یدکی هیوندا</a>
                            <a style="color: #0277bd; border: 1px solid; font-size: small" href="{{route('hyundai')}}">سانتافه</a>
                            <a style="color: #0277bd; border: 1px solid; font-size: small" href="{{route('hyundai')}}">توسان</a>
                            <a style="color: #0277bd; border: 1px solid; font-size: small" href="{{route('hyundai')}}">آزرا</a>
                            <a style="color: #0277bd; border: 1px solid; font-size: small" href="{{route('hyundai')}}">آزرا گرنجور</a>
                            <a style="color: #0277bd; border: 1px solid; font-size: small" href="{{route('hyundai')}}">i20</a>
                            <a style="color: #0277bd; border: 1px solid; font-size: small" href="{{route('hyundai')}}">i30</a>
                            <a style="color: #0277bd; border: 1px solid; font-size: small" href="{{route('hyundai')}}">النترا</a>
                            <a style="color: #0277bd; border: 1px solid; font-size: small" href="{{route('hyundai')}}">آوانته</a>
                        </div>

                    </div>
                </section>
            </div>

        </div>
    </section>

        {{-- kia and hyiona--}}

    <!-- Portfolio Modal-->
        <section   class="page-section portfolio" id="portfolio">

            <div  class="container">

                <!-- Portfolio Section Heading-->
                <div class="text-right">
                    <h4 class=" text-secondary mb-0 d-inline-block">قطعات یدکی</h4>
                </div>
                <!-- Icon Divider-->
                <hr style="color: #1a252f">

                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center" style="background: snow">
                    <!-- Portfolio Items-->


                    @foreach($commodities as $commodity)

{{--                        <div class="col-md-6 col-lg-4 mb-5">--}}
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card border-secondary " >
                                {{--                         <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#mymodal{{$commodity->id}}l">--}}
                                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#mymodal{{$commodity->id}}">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white">
                                            <i class="fas fa-plus fa-1x"></i>
                                        </div>
                                    </div>

                                    <img    class="img-responsive  img-fluid  card-img-top" src="{{asset("$commodity->image_url")}}" alt="{{$commodity->name}}"/>
                                    <div class="card-body text-center">
                                        <a href="{{asset("/commodity/{$commodity->id}")}}">
                                            <h6  class="card-title">{{$commodity->name}}</h6>
                                            <hr>
                                            <h6 style="color: #0f6674"> جهت مشاهده اطلاعات بیشتر کلیک کنید</h6>
                                            <hr>
                                            <h6> جهت دریافت مشاوره تماس بگیرید</h6>
                                        </a>


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
                                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="{{asset("$commodity->image_url")}}" alt="{{$commodity->name}}"/>
                                                    <!-- Portfolio Modal - Text-->
                                                    <p class="mb-5">{{$commodity->info}}</p>
                                                    <button class="btn btn-primary" href="#contact" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>بستن</button>
                                                    <a href="tel:09126761663" class="btn btn-success btn-sm rounded js-scroll-trigger active" style="background-color: #ae703b;border-color: #ae703b;" target="_blank">
                                                        <i class="fa fa-phone"></i>تماس</a>
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

        <!-- about-->
        <section class="page-section bg-primary text-white mb-0 ctu" id="about">
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
                    <div class="col-lg-4 ml-auto" dir="rtl">
                        <p class="pre-wrap lead text-justify" >مجموعه گانر پارت سالهاست در زمینه واردات مستقیم و غیرمستقیم لوازم یدکی برندهای هیوندا و کیا فعالیت می کند. جهت رفاه حال مشتریان عزیز، این مجموعه وظیفه خود می داند تا با گسترش فعالیت های خود در بستر وب دسترسی راحت هم میهنان گرامی از سراسر کشور به قطعات یدکی را فراهم نماید  .</p>
                    </div>
                    <div class="col-lg-4 mr-auto text-justify" dir="rtl">
                        <p class="pre-wrap lead" >برای مجموعه گانر پارت اعتماد شما بزرگترین سرمایه مادی و معنوی می باشد. لذا در این راستا بر آن هستیم تا با تامین قطعات یدکی با بهترین کیفیت و نازلترین قیمت پاسخ اعتماد مشتریان عزیز را بدهیم. این مجموعه از لحظه سفارش تا تحویل و نصب قطعات همراه شماست.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-->

        <!-- contact-->
        <section class="page-section cta " id="contact">
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
                            <div class="text-muted">واتساپ</div><a class="lead font-weight-bold" href="https://wa.me/989126761663"><hr>{{english2persian("09126761663")}}</a>
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
                    <div class="col-lg-2">
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
