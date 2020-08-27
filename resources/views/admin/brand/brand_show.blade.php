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
            <div class="container" >

                <div class="row justify-content-center" style="font-family: 'Vazir', sans-serif;">
                    <div class="col-md-auto">
                        <div class="card">
                            <div class="card-header">{{ __('بروزرسانی برند') }}</div>

                            <div class="card-body">


                                <table class="table table-bordered table-hover table-responsive-sm">
                                    <thead>

                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">نام برند</th>
                                        <th scope="colgroup">اطلاعات برند</th>
                                        <th scope="col">لوگوی برند</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($brands as $brand)
                                    <tr>

                                            <th scope="row">{{$brand->id}}</th>
                                            <td>{{$brand->name}}</td>
                                            <td>{{$brand->info}}</td>
                                            <td><img  class=" img-fluid img-thumbnail " src="{{\Illuminate\Support\Facades\URL::asset($brand->logo_url)}}">
                                                </td>
                                        <td>
                                            <a href="/admin/brand/{{$brand->id}}/edit" class="btn btn-info">ویرایش</a>
                                            <form action="/admin/brand/{{$brand->id}}/delete" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">حذف</button>
                                            </form>
                                        </td>





                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>


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

