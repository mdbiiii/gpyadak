@section('login')
    @if(auth()->check())
        <li class="nav-item mx-0 mx-lg-1">
            {{--                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">CONTACT</a>--}}
            {{--                        <a href="{{route('index')}}"class="btn badge-light">داشبورد</a>--}}

            <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="btn btn-danger">خروج</button>
            </form>

        </li>
    @else
        <li class="nav-item mx-0 mx-lg-1">
            <a href="{{route('login')}}" class="badge-light py-3 px-0 px-lg-3 rounded navbar-light">ورود</a>
        </li>
    @endif
@endsection
