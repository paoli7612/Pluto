<!doctype html>
<html>
@include('layouts.head')
<body>
    <nav class="navbar navbar-expand-lg container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Pluto') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-align-justify"></i>
        </button>

        <x-nb>
            <ul class="navbar-nav mr-auto">
                <x-nbi title="Home" link="/home" />
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">
                                    {{ __('Logout') }}
                                </button>
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </x-nb>


        </div>
    </nav>

    @yield('content')
</body>

</html>
