@extends('layout.master')

@section('content')

    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">MDBI</a>
            <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">PORTFOLIO</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead bg-primary text-black-50 text-center">
        <div class="container d-flex align-items-center flex-column">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('ایجاد محصول') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('commodity') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام محصول') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror " name="name" value="{{ old('name') }}"  autofocus placeholder="نام محصول را وارد نمایید">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نوع ماشین') }}</label>
                                        <div class="col-md-6">

                                        <select name="cartype" class=" form-controls"  >
                                            @foreach(\App\Cartype::all() as $cartype)
                                                <option value="{{$cartype->id}}">{{$cartype->name}}</option>
                                            @endforeach

                                        </select>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="info" class="col-md-4 col-form-label text-md-right">{{ __('اطلاعات محصول') }}</label>

                                        <div class="col-md-6">
                                            <textarea name="info" id="info" cols="30" rows="10"  class="form-control @error('info') is-invalid @enderror" name="info" value=""></textarea>

                                            {{--                                            <input id="info" type="text" class="form-control @error('info') is-invalid @enderror" name="info"  placeholder="اطلاعات محصول را وارد نمایید">--}}

                                            @error('info')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('تصویر محصول') }}</label>

                                        <div class="col-md-6">
                                            <input id="image" type="file" class="form-control @error('file') is-invalid @enderror" name="image"  placeholder="تصویر محصول را وارد نمایید">

                                            @error('file')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('ثبت') }}
                                            </button>

                                        </div>
                                    </div>
                                </form>
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

