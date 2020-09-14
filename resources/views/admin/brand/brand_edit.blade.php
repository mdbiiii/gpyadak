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
            <div class="container" >

                <div class="row justify-content-center" style="font-family: 'Vazir', sans-serif;">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('بروزرسانی برند') }}</div>

                            <div class="card-body">
                                <form method="POST" action="/admin/brand/{{$brand->id}}/edit" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام برند') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror " name="name" value="{{$brand->name}}"  autofocus placeholder="نام برند را وارد نمایید">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="info" class="col-md-4 col-form-label text-md-right">{{ __('اطلاعات برند') }}</label>

                                        <div class="col-md-6">
{{--                                            <input id="info" type="textarea" class="form-control @error('info') is-invalid @enderror" name="info"  placeholder="اطلاعات برند را وارد نمایید"--}}
{{--                                            value="{{$brand->info}}">--}}
                                            <textarea name="info" id="info" cols="30" rows="10"  class="form-control @error('info') is-invalid @enderror" name="info" value="">{{$brand->info}}</textarea>

                                            @error('info')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('لوگوی برند') }}</label>

                                        <div class="col-md-6">
                                            <img  class=" img-fluid img-thumbnail " src="{{\Illuminate\Support\Facades\URL::asset($brand->logo_url)}}">

                                            <p>
                                                <input id="file" type="file" class="form-control @error('image') is-invalid @enderror" name="image"  placeholder="لوگو را وارد نمایید"
                                                       value="#" onchange="loadFile(event)">
                                                <img class=" img-fluid img-thumbnail " id="output"   alt=""/>
                                            </p>
                                            <script>
                                                var loadFile = function(event) {
                                                    var image = document.getElementById('output');
                                                    image.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                            </script>




                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('بروزرسانی') }}
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

    {{----}}

    {{--    --}}

@endsection

@section('copyright')
    <section class="copyright py-4 text-center text-white">
        <div class="container"><small class="pre-wrap">Copyright © MDBI 2020</small></div>
    </section>
@endsection

