<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{asset('public/assets/user/photo/logo1.png')}}" type="image/png" />
    <title>Krok: @yield('title')</title>
  </head>
  <body>
    <header>
      <nav>
        <ul class="menu-main">
           @yield('menu')
          <li>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('logout') }}">Выйти из аккаунта</a>
                    @else
                        <a href="{{ route('login') }}">Войти</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Регистрация</a>
                        @endif
                    @endauth
                </div>
            @endif
          </li>
        </ul>
      </nav>
    </header>

    @yield('content')

    
    <link rel="stylesheet" type="text/css" href="{{ asset('public\assets\user\styles\header.css')}}" />
  </body>
</html>
