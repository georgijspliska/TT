<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@lang('messages.title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li><a class="nav-link" href="/">@lang('messages.races')</a></li>
                      <li><a class="nav-link" href="/champs">@lang('messages.championships')</a></li>
                      <li><a class="nav-link" href="/tracks">@lang('messages.tracks')</a></li>
                      <li><a class="nav-link" href="/photos">@lang('messages.photos')</a></li>
                      <li><a class="nav-link" href="/lang/en">EN</a></li>
                      <li><a class="nav-link" href="/lang/ru">RU</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('messages.login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('messages.register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if ( !Auth::guest() && Auth::user()->IsAdmin() )
                                    <a  class="dropdown-item" href="{{ url('track/create') }}">@lang('messages.add_new_track')</a>
                                    <a  class="dropdown-item" href="{{ url('race/create') }}">@lang('messages.add_new_race')</a>
                                    <a  class="dropdown-item" href="{{ url('champ/create') }}">@lang('messages.add_new_championship')</a>
                                    <a  class="dropdown-item" href="{{ url('photo/create') }}">@lang('messages.add_new_photo')</a>
                                    <a  class="dropdown-item" href="{{ url('users') }}">@lang('messages.edit_users')</a>
                                    @endif
                                    @if ( !Auth::guest() && Auth::user()->IsApprove() )
                                    <a  class="dropdown-item" href="{{ url('track/create') }}">@lang('messages.add_new_track')</a>
                                    <a  class="dropdown-item" href="{{ url('race/create') }}">@lang('messages.add_new_race')</a>
                                    <a  class="dropdown-item" href="{{ url('champ/create') }}">@lang('messages.add_new_championship')</a>
                                    <a  class="dropdown-item" href="{{ url('photo/create') }}">@lang('messages.add_new_photo')</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('messages.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
