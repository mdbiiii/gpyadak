@extends('admin.master_admin')
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('ایجاد ماشین') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('create_cartype') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام ماشین') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror " name="name" value="{{ old('name') }}"  autofocus placeholder="نام ماشین را وارد نمایید">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نوع برند ماشین') }}</label>
                                        <div class="col-md-6">

                                            <select name="brand" class=" form-controls"  >
                                                <option ></option>
                                                @foreach(\App\Brand::all() as $brand)
                                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="info" class="col-md-4 col-form-label text-md-right">{{ __('اطلاعات ماشین') }}</label>

                                        <div class="col-md-6">
                                            <textarea name="info" id="info" cols="30" rows="10"  class="form-control @error('info') is-invalid @enderror" name="info" value=""></textarea>

{{--                                            <input id="info" type="text" class="form-control @error('info') is-invalid @enderror" name="info"  placeholder="اطلاعات ماشین را وارد نمایید">--}}

                                            @error('info')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('تصویر ماشین') }}</label>

                                        <div class="col-md-6">
                                            <input id="image" type="file" class="form-control @error('file') is-invalid @enderror" name="image"  placeholder="تصویر ماشین را وارد نمایید">

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

