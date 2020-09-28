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
            <div class="container" >

                <div class="row justify-content-center" style="font-family: 'Vazir', sans-serif;">
                    <div class="col-md-auto">
                        <div class="card">
                            <div class="card-header">{{ __('نمایش محصولات') }}</div>
                            <div class="card-header">

                                <div class="card-tools d-flex">
                                    <form action="">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="search" class="form-control float-right" placeholder="جستجو" value="{{ request('search') }}">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="btn-group-sm mr-1">
                                        <a href="{{route('commodity')}}" class="btn btn-info">ایجاد محصول جدید</a>

                                    </div>
                                </div>
                            </div>


                            <div class="card-body">


                                <table class="table table-bordered table-hover table-responsive-sm">
                                    <thead>

                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">نام محصول</th>
                                        <th scope="colgroup">اطلاعات محصول</th>
                                        <th scope="col">تصویر محصول</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($commodities as $commodity)
                                    <tr>

                                            <th scope="row">{{$commodity->id}}</th>
                                            <td>{{$commodity->name}}</td>
                                            <td>{{$commodity->info}}</td>
                                            <td><img  class=" img-fluid img-thumbnail " src="{{\Illuminate\Support\Facades\URL::asset($commodity->image_url)}}">
                                                </td>
                                        <td>
                                            <a href="{{asset("/admin/commodity/{$commodity->id}/edit")}}" class="btn btn-info">ویرایش</a>
                                            <form action="{{asset("/admin/commodity/{$commodity->id}/delete")}}" method="POST">
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

                            <div class="card-footer">{{$commodities->render()}}</div>
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

