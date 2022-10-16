<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Login | Painel Administrativo - AdminApp') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashlite19ce.css?ver=3.0.3') }}" rel="stylesheet">
</head>
<body class="nk-body bg-white npc-default pg-auth" >
    <div class="nk-app-root">
        <div class="nk-main ">

            <!-- Authentication Links -->
            @guest
                <!-- nao logado -->
                <!--<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>-->
                <!--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>-->
                
            @else
                <!-- logado -->
                <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                <li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li>

                 {{ Auth::user()->name }}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>                




                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
            @endguest

            <main class="py-4">
                <div class="container">
                <!-- inicio do conteúdo -->
                @yield('content')
                <!-- fim do conteúdo -->
                </div>
            </main>

            <div class="nk-footer">
                <div class="container-fluid">
                    <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright"> &copy; 2022 DashLite. Template by <a href="https://softnio.com/" target="_blank">Softnio</a>
                        </div>
                        <div class="nk-footer-links">
                            <ul class="nav nav-sm">
                                <li class="nav-item dropup">
                                    <a href="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base" data-bs-toggle="dropdown" data-offset="0,10">
                                        <span>English</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <ul class="language-list">
                                            <li>
                                                <a href="#" class="language-item">
                                                <span class="language-name">English</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item">
                                                    <span class="language-name">Español</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item">
                                                    <span class="language-name">Français</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item">
                                                    <span class="language-name">Türkçe</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="modal" href="#region" class="nav-link">
                                        <em class="icon ni ni-globe"></em>
                                        <span class="ms-1">Select Region</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>    
    </div>
    <script src="{{ asset('js/bundle19ce.js?ver=3.0.3') }}></script>
    <script src="{{ asset('js/scripts19ce.js?ver=3.0.3') }}></script>
    <script src="{{ asset('js/demo-settings19ce.js?ver=3.0.3') }}></script>
    <script src="{{ asset('js/charts/chart-ecommerce19ce.js?ver=3.0.3') }}></script>    
</body>
</html>