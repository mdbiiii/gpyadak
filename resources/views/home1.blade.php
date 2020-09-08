<div style="font-family: 'Vazir',serif">


    @extends('layout.master')
    @section('content')



        <header class="masthead bg-primary text-white text-center">
            <div class="row">
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

                        <span class="pre-wrap masthead-subheading  font-weight-bold badge badge-pill badge-primary   mb-0" >واردات مستقیم قطعات یدکی هیوندا و کیا<img  src="/assets/img/export2.png" alt="کالای تقلبی" style="width: 60px"></span>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <span class="pre-wrap masthead-subheading font-weight-bold badge badge-pill badge-primary  mb-0 " > ضمانت اصالت قطعات یدکی هیوندا و کیا <img  src="/assets/img/asl.png" alt="کالای تقلبی" style="width: 60px"></span>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <span class="pre-wrap masthead-subheading font-weight-bold badge badge-pill badge-primary  mb-0" > تحویل اکسپرس سریع کالا در سراسر کشور <img  src="/assets/img/delivery.png" alt="کالای تقلبی" style="width: 60px"></span>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <span class="pre-wrap masthead-subheading font-weight-bold badge badge-pill badge-primary  mb-0" > مشاوره رایگان از استعلام تا تحویل کالا <img  src="/assets/img/moshavere.png" alt="کالای تقلبی" style="width: 50px"></span>

                    </div>

                </div>
                <br>
                <div class="col-lg-6 ">
                    <div class="container d-flex align-items-center flex-column">
                        <!-- Masthead Heading-->
                        <div class="row" >
{{--                            <div class="" style="background: #17a2b8 !important">--}}
{{--                                <div class=" card-img">--}}
{{--                                    <img class="img-responsive" src="/assets/img/fake.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="" style="background: #17a2b8 !important">
                                <div class=" card-img ">
                                    <img class="img-responsive" src="/assets/img/carpart.png" alt="قطعات یدکی">
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <p class="pre-wrap masthead-subheading font-weight-bold badge badge-pill badge-dark mb-0" >تقلبی نخرید! کالای اصلی را از ما بخواهید<img  src="/assets/img/fake.png" alt="کالای تقلبی" style="width: 60px"></p>
                            <br>

                        </div>
                        <div class="row mt-2">
                            <p class="pre-wrap masthead-subheading  badge badge-pill badge-light mb-0"  style="font-size: small">برای کسب اطلاعات و استعلام قیمت کافی است تماس بگیرید<img  src="/assets/img/call.png" alt="تماس" style="width: 60px"></p>


                        </div>



                    </div>
                </div>

            </div>

        </header>

{{-- kia and hyiona--}}
    <section class="page-section  " id="kia" >
        <div class="row justify-content-center">
            <div class="col-lg-6 mr-auto">
                <section class="page-section" id="kia">
                    <div class="container">
                        <div class="text-right">
                            <h4 class=" text-secondary mb-0 d-inline-block"><img src="/assets/img/Kia.png">قطعات یدکی کیا</h4>

                        </div>
                        <hr style="color: #1a252f">
                        <div class="row">
                            @foreach($kia_commos as $kia_commo)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-1">
                                    <div class="thumbnail text-center">
                                        <span class="#"></span>
                                        <a href="/commodity/{{$kia_commo->id}}" target="_blank">
                                            <img class="img-responsive img-fluid imglazyload card-img-top" src="{{$kia_commo->image_url}}" style="display: block; opacity: 0.99;" alt="">
                                        </a>
                                        <div  style="width: 180px; height: 75px; display: block" >
                                            <a href="/commodity/{{$kia_commo->id}}" target="_blank">

                                                {{--                                                <p class="text-sm-center text-md-center text-lg-center text-xl-center  " >{{$commodity->name}}</p>--}}
                                                <h5 class="mx-auto" >{{$kia_commo->name}}</h5>

                                            </a>
                                        </div>
                                        <a href="/commodity/{{$kia_commo->id}}"><span class="text-success">جهت اطلاع از قیمت تماس بگیرید</span></a><br><br>
                                        <a href="#contact" class="btn btn-success btn-sm rounded js-scroll-trigger active" style="background-color: #ae703b;border-color: #ae703b;" target="_blank">
                                            <i class="fa fa-phone"></i>تماس</a>
                                        <a href="/commodity/{{$kia_commo->id}}" onclick="compare_add(2330);" class="btn btn-info btn-sm">
                                            <i class="fa fa-th-list"></i> اطلاعات</a>
                                        <hr>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </section>

            </div>
            <div class="col-lg-6 ml-auto">
                <section class="page-section" id="hiyonda">
                    <div class="container">
                        <div class="text-right">
                            <h4 class=" text-secondary mb-0 d-inline-block"><img src="/assets/img/Hyundai.png">قطعات یدکی هیوندا</h4>

                        </div>
                        <hr style="color: #1a252f">
                        <div class="row">
                            @foreach($hyu_commos as $hyu_commo)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-1">
                                    <div class="thumbnail text-center">
                                        <span class="#"></span>
                                        <a href="/commodity/{{$hyu_commo->id}}" target="_blank">
                                            <img class="img-responsive img-fluid imglazyload card-img-top" src="{{$hyu_commo->image_url}}" style="display: block; opacity: 0.99;" alt="">
                                        </a>
                                        <div  style="width: 180px; height: 75px; display: block" >
                                            <a href="/commodity/{{$hyu_commo->id}}" target="_blank">

{{--                                                <p class="text-sm-center text-md-center text-lg-center text-xl-center  " >{{$commodity->name}}</p>--}}
                                                <h5 class="mx-auto" >{{$hyu_commo->name}}</h5>

                                            </a>
                                        </div>
                                        <a href="/commodity/{{$hyu_commo->id}}"><span class="text-success">جهت اطلاع از قیمت تماس بگیرید</span></a><br><br>
                                        <a href="#contact" class="btn btn-success btn-sm rounded js-scroll-trigger active" style="background-color: #ae703b;border-color: #ae703b;" target="_blank">
                                            <i class="fa fa-phone"></i>تماس</a>
                                        <a href="/commodity/{{$hyu_commo->id}}" onclick="compare_add(2330);" class="btn btn-info btn-sm">
                                            <i class="fa fa-th-list"></i> اطلاعات</a>
                                        <hr>
                                    </div>
                                </div>
                            @endforeach
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

                                    <img    class="img-responsive  img-fluid  card-img-top" src="{{$commodity->image_url}}" alt="{{$commodity->name}}"/>
                                    <div class="card-body text-center">
                                        <a href="admin/commodity/{{$commodity->id}}">
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
                                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="{{$commodity->image_url}}" alt="{{$commodity->name}}"/>
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

        <!-- about-->
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
                        <p class="pre-wrap lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source images including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <p class="pre-wrap lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-->

        <!-- contact-->
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
                            <div class="icon-contact mb-2">
                                <i class="fab fa-telegram" aria-hidden="true"></i>
                            </div>
                            <div class="text-muted">تلگرام</div>
                            <div class="lead font-weight-bold"><hr>@gunnerparts_support<br>
                                {{english2persian("09126452317")}}</div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-2"><i class="fab fa-whatsapp" aria-hidden="true"></i></div>
                            <div class="text-muted">واتساپ</div><a class="lead font-weight-bold" href="mailto:name@example.com"><hr>{{english2persian("09126452317")}}</a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-2"><i class="fab fa-instagram"></i></div>
                            <div class="text-muted">اینستاگرام</div>
                            <div class="lead font-weight-bold">
                                <link rel="stylesheet" href="https://www.instagram.com/mdbi"><hr>
                                {{--                            <a class="lead font-weight-bold" href="https://www.instagram.com/mdbi">--}}
                                @gunnerparts</div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-2"><i class="fa fa-mobile-alt"></i></div>
                            <div class="text-muted">شماره همراه</div>
                            <a class="lead font-weight-bold" href="#"><hr>{{english2persian("09126452317")}}</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-2"><i class="fas fa-phone"></i></div>
                            <div class="text-muted">دفتر فروش</div><a class="lead font-weight-normal" href="#">
                                <hr>{{english2persian("885698456-021")}}<br>{{english2persian("885698456-021")}}<br>{{english2persian("885698456-021")}}</a>
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
