@extends('layout.master')
@section('login')
    <ul class="navbar-nav ml-auto">

        @if(auth()->check())
            <li class="nav-item mx-0 mx-lg-1 py-4">


                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button class="btn btn-danger">خروج</button>
                </form>

            </li>
        @else
            <li class="nav-item mx-0 mx-lg-1 py-4">
                <a href="{{route('login')}}" class="badge-light py-3 px-0 px-lg-3 rounded navbar-light">ورود</a>
            </li>
        @endif
    </ul>
@endsection
@section('content')

    <header class="masthead bg-primary text-black-50 text-center">
        <div class="container d-flex align-items-center flex-column">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">{{ __('ایجاد محصول') }}</div>

                            <div class="card-body">

                                <a href="{{route('commodity')}}" class="btn btn-dark">برای وارد کردن محصول جدید کلیک کنید</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">{{ __('ایجاد برند') }}</div>

                            <div class="card-body">

                                <a href="{{route('create_brand')}}" class="btn btn-dark">برای وارد کردن برند جدید کلیک کنید</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
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
    </header>



@endsection

@section('copyright')
    <section class="copyright py-4 text-center text-white">
        <div class="container"><small class="pre-wrap">Copyright © MDBI 2020</small></div>
    </section>
@endsection

