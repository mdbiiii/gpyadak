@extends('layout.master')

@section('content')

    <header class="masthead bg-primary text-black-50 text-center">
        <div class="container d-flex align-items-center flex-column">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">{{ __('ورود') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ایمیل') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ایمیل را وارد نمایید">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمز عبور') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="رمز عبور را وارد نمایید">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>

{{--                                    <div class="form-group row mb-0">--}}
{{--                                        <div class="col-md-6 offset-md-4 mt-2" >--}}

{{--                                            <a class="btn btn-danger" href="{{ route('google-auth') }}">--}}
{{--                                                {{ __('ورود با اکانت گوگل') }}--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
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
