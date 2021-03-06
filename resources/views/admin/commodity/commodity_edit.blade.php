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
                            <div class="card-header">{{ __('ایجاد محصول') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('commodity') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام محصول') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror " name="name" value="{{ $commodity->name }}"  autofocus placeholder="نام محصول را وارد نمایید">

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
                                                    <option value="{{$cartype->id}}" {{($cartype->cartype_id === $cartype->id) ? 'Selected' : ''}}>{{$cartype->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="info" class="col-md-4 col-form-label text-md-right">{{ __('اطلاعات محصول') }}</label>

                                        <div class="col-md-6">
                                            <textarea name="info" id="info" cols="30" rows="10"  class="form-control @error('info') is-invalid @enderror" name="info" value="">{{$commodity->info}}</textarea>

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
                                            <div class="col-md-6">
                                                <img  class=" img-fluid img-thumbnail " src="{{\Illuminate\Support\Facades\URL::asset($commodity->image_url)}}">

                                                <p>
                                                    <input id="file" type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                                           value="#" onchange="loadFile(event)">
                                                    <img class=" img-fluid img-thumbnail " id="output"   alt=""/>
                                                </p>
                                                <script>
                                                    var loadFile = function(event) {
                                                        var image = document.getElementById('output');
                                                        image.src = URL.createObjectURL(event.target.files[0]);
                                                    };
                                                </script>
                                            @error('file')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tag" class="col-md-4 col-form-label text-md-right">{{ __('کلمات کلیدی:انتخاب بیش از یک مورد با نگه داشتن  Ctrl') }}</label>

                                        <div class="col-md-6">
                                            <select name="tags[]" multiple class="form-control" id="tag">
                                                @foreach(\App\Tag::all() as $tag)
                                                    <option value="{{ $tag->id }}" {{ in_array($tag->id , $commodity->tags()->pluck('id')->toArray()) ? 'selected' : '' }} >{{ $tag->name }}</option>

                                                @endforeach

                                            </select>

                                            @error('tag')
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

