@extends('layout.master')
@section('title')
    <title>گانر پارت-قطعه یدکی</title>

@endsection

    @section('content')

            <header class="masthead bg-primary text-dark text-center">

                <section>
                    <div class="row ">
                        <div class="container">
                            <div class="card mb-3 m-5">
                                <img src="{{asset("$commodity->image_url")}}" class="card-img-top  img-fluid" alt="accent-gen1" >
                                <div class="row">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$commodity->name}}</h5>
                                        <p class="card-text m-4 text-justify "dir="rtl"> {{$commodity->info}}</p>
{{--                                        <p class="card-text"><small class="text-muted">Last updated {{$commodity->updated_at}}</small></p>--}}
                                    </div>


                                    <div class="container">
                                        <!-- Contact Section Heading-->
                                        <div class="text-right">
                                            <h2 class="page-section-heading text-secondary d-inline-block mb-0 mr-3">با ما تماس بگیرید</h2>
                                        </div>
                                        <!-- Icon Divider-->
                                        <hr>
                                        <br>

                                        <!-- Contact Section Content-->
                                        <!-- Contact Section Content-->

                                        <div class="row justify-content-center m-auto ml-3">
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

                                </div>
                                <div class="card-footer text-right">
                                    <h6> :کلمات کلیدی</h6>
                                    @foreach($tags as $tag)
                                        <a style="color: #0f6674; border: 1px solid; font-size: small" href="#">{{$tag->name}}</a>
                                    @endforeach
                                </div>


                            </div>
                        </div>


                    </div>

                </section>

            </header>






    @endsection

@section('copyright')
    <section class="copyright py-4 text-center text-white">
        <div class="container"><small class="pre-wrap">Copyright © MDBI 2020</small></div>
    </section>
@endsection


