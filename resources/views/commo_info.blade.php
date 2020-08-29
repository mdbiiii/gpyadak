@extends('layout.master')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    @section('content')

            <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
                <div class="container">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="navbar-brand js-scroll-trigger" href="#page-top">MDBI


                            </a>
                        </li>

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
                    <div class="col-sm-8">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="https://placehold.it/800x400?text=IMAGE" alt="Image">
                                    <div class="carousel-caption">
                                        <h3>Sell $</h3>
                                        <p>Money Money.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="https://placehold.it/800x400?text=Another Image Maybe" alt="Image">
                                    <div class="carousel-caption">
                                        <h3>More Sell $</h3>
                                        <p>Lorem ipsum...</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="well">
                            <p>Some text..</p>
                        </div>
                        <div class="well">
                            <p>Upcoming Events..</p>
                        </div>
                        <div class="well">
                            <p>Visit Our Blog</p>
                        </div>
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


            </header>





            <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="https://placehold.it/800x400?text=IMAGE" alt="Image">
                                    <div class="carousel-caption">
                                        <h3>Sell $</h3>
                                        <p>Money Money.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="https://placehold.it/800x400?text=Another Image Maybe" alt="Image">
                                    <div class="carousel-caption">
                                        <h3>More Sell $</h3>
                                        <p>Lorem ipsum...</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="well">
                            <p>Some text..</p>
                        </div>
                        <div class="well">
                            <p>Upcoming Events..</p>
                        </div>
                        <div class="well">
                            <p>Visit Our Blog</p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>

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
                                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#mymodal{{$commodity->id}}l">
                                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#mymodal{{$commodity->id}}">
                                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                <div class="portfolio-item-caption-content text-center text-white">
                                                    <i class="fas fa-plus fa-3x"></i>
                                                </div>
                                            </div>

                                            <img    class="img-responsive  img-fluid img-thumbnail card-img-top" src="{{$commodity->image_url}}" alt="{{$commodity->name}}"/>
                                            <div class="card-body text-right">
                                                <h6  class="card-title">{{$commodity->name}}</h6>
                                                <p  class="card-text text-info">جهت دریافت اطلاعات بیشتر اینجا کلیک کنید یا با تماس بگیرید</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="portfolio-modal modal fade" id="mymodal{{$commodity->id}}" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal0Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                                            <div class="modal-body text-center">
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-8 align-items-center">
                                                            <!-- Portfolio Modal - Title-->
                                                            <h2 class="portfolio-modal-title text-secondary mb-0">{{$commodity->name}}</h2>
                                                            <!-- Icon Divider-->
                                                            <div class="divider-custom">
                                                                <div class="divider-custom-line"></div>
                                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                                <div class="divider-custom-line"></div>
                                                            </div>
                                                            <!-- Portfolio Modal - Image-->
                                                            <img class="img-responsive img-fluid rounded mb-2"  src="{{$commodity->image_url}}" alt="{{$commodity->name}}"/>
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
                </div>
            </section>

<div class="container">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="thumbnail text-center">
            <span class="mojod"></span>
            <a href="products?id=سنگ_در_پوش_DR05" target="_blank">
                <img class="img-responsive imglazyload" src="upload/1سنگ-آبچکان-دار.jpg" style="display: block; opacity: 0.99;">
            </a>
            <a href="products?id=سنگ_در_پوش_DR05" target="_blank">
                <h5 class="onvan">سنگ در پوش DR05</h5>
            </a> متر مربع <span class="text-success">40,000 تومان</span><br><br>
            <a href="products?id=سنگ_در_پوش_DR05" class="btn btn-success btn-sm" style="background-color: #ae703b;border-color: #ae703b;" target="_blank">
                <i class="fa fa-shopping-cart"></i> خرید</a>
            <a href="javascript:;" onclick="compare_add(2330);" class="btn btn-info btn-sm">
                <i class="fa fa-th-list"></i> مقایسه</a>
        </div>
    </div>

</div>

    @endsection





<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="https://placehold.it/800x400?text=IMAGE" alt="Image">
                        <div class="carousel-caption">
                            <h3>Sell $</h3>
                            <p>Money Money.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="https://placehold.it/800x400?text=Another Image Maybe" alt="Image">
                        <div class="carousel-caption">
                            <h3>More Sell $</h3>
                            <p>Lorem ipsum...</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="well">
                <p>Some text..</p>
            </div>
            <div class="well">
                <p>Upcoming Events..</p>
            </div>
            <div class="well">
                <p>Visit Our Blog</p>
            </div>
        </div>
    </div>
    <hr>
</div>
<div class="container text-center">
    <h3>What We Do</h3>
    <br>
    <div class="row">
        <div class="col-sm-3">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Current Project</p>
        </div>
        <div class="col-sm-3">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Project 2</p>
        </div>
        <div class="col-sm-3">
            <div class="well">
                <p>Some text..</p>
            </div>
            <div class="well">
                <p>Some text..</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="well">
                <p>Some text..</p>
            </div>
            <div class="well">
                <p>Some text..</p>
            </div>
        </div>
    </div>
    <hr>
</div>

<div class="container text-center">
    <h3>Our Partners</h3>
    <br>
    <div class="row">
        <div class="col-sm-2">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 1</p>
        </div>
        <div class="col-sm-2">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 2</p>
        </div>
        <div class="col-sm-2">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 3</p>
        </div>
        <div class="col-sm-2">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 4</p>
        </div>
        <div class="col-sm-2">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 5</p>
        </div>
        <div class="col-sm-2">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 6</p>
        </div>
    </div>
</div><br>

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
            <div class="col-lg-4">
                <h4 class="mb-4">ABOUT FREELANCER</h4>
                <table class="contact-table" width="100%" border="0" cellpadding="2">
                    <tbody>
                    <tr>
                        <th scope="row">دفتر فروش</th>
                        <td>
                            <a href="tel:02133979370">۰۲۱ - ۳۳ ۹۷ ۹۳ ۷۰</a>
                            <br>
                            <a href="tel:02133946788">۰۲۱ - ۳۳ ۹۴ ۶۷ ۸۸</a>
                            <br>
                            <a href="tel:02136619809">۰۲۱ - ۳۶۶ ۱۹ ۸۰۹</a>
                            <br>
                            <a href="tel:02136619432">۰۲۱ - ۳۶۶ ۱۹ ۴۳۲</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">موبایل</th>
                        <td>
                            <a href="tel:09120818355">۰۹۱۲ - ۰۸۱ ۸۳ ۵۵</a>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">تلگرام / واتس اپ<br><a class="contact-telegram" title="لینک تلگرام" href="https://telegram.me/YadakShop_support">

                                <img alt="telegram" title="تلگرام" src="https://yadak.shop/wp-content/uploads/2018/06/Telegram-logo.png"></a>
                            <a class="contact-telegram" title="لینک واتساپ" href="https://wa.me/989120818355">
                                <img alt="whatsapp" title="واتساپ" src="https://yadak.shop/wp-content/uploads/2018/06/Whatsapp-logo.png"></a>


                        </th>
                        <td><a title="لینک تلگرام" href="https://telegram.me/YadakShop_support">@YadakShop_support</a>

                            <br>
                            <a href="tel:09120818355">۰۹۱۲ - ۰۸۱ ۸۳ ۵۵</a>


                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</footer>
<section class="copyright py-4 text-center text-white">
    <div class="container"><small class="pre-wrap">Copyright © MDBI 2020</small></div>
</section>

