<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Login | Painel Administrativo - AdminApp') }}</title>
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/dashlite.css?ver=3.0.4') }}" rel="stylesheet">
</head>

@guest
    <body class="nk-body bg-white npc-default pg-auth" >
@else
    <body class="nk-body bg-lighter npc-default has-sidebar ">
@endguest

    <div class="nk-app-root">
        <div class="nk-main ">

            <!-- Authentication Links -->
            @guest
                <!-- nao logado -->
                <!--<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>-->
                <!--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>-->
                
            @else
              <!-- logado -->

              <!-- menu -->
              <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                  <div class="nk-sidebar-brand">
                    <a href="index-2.html" class="logo-link nk-sidebar-logo">
                      <img class="logo-light logo-img" src="images/logo.png" srcset="/demo2/images/logo2x.png 2x" alt="logo">
                      <img class="logo-dark logo-img" src="images/logo-dark.png" srcset="/demo2/images/logo-dark2x.png 2x" alt="logo-dark">
                      <img class="logo-small logo-img logo-img-small" src="images/logo-small.png" srcset="/demo2/images/logo-small2x.png 2x" alt="logo-small">
                    </a>
                  </div>
                  <div class="nk-menu-trigger me-n2">
                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu">
                      <em class="icon ni ni-arrow-left"></em>
                    </a>
                    <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu">
                      <em class="icon ni ni-menu"></em>
                    </a>
                  </div>
                </div>
                <div class="nk-sidebar-element">
                  <div class="nk-sidebar-content">
                    <div class="nk-sidebar-menu" data-simplebar>
                      <ul class="nk-menu">
    
                        <li class="nk-menu-item has-sub">
                          <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon">
                              <em class="icon ni ni-users-fill"></em>
                            </span>
                            <span class="nk-menu-text">Usuários</span>
                          </a>
                          <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                              <a href="{{ route('users.index') }}" class="nk-menu-link">
                                <span class="nk-menu-text">Listagem</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a href="{{ route('roles.index') }}" class="nk-menu-link">
                                <span class="nk-menu-text">Permissões</span>
                              </a>
                            </li>
                          </ul>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="nk-wrap ">
                    <div class="nk-header nk-header-fixed is-light">
                      <div class="container-fluid">
                        <div class="nk-header-wrap">
                          <div class="nk-menu-trigger d-xl-none ms-n1">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu">
                              <em class="icon ni ni-menu"></em>
                            </a>
                          </div>
                          <div class="nk-header-brand d-xl-none">
                            <a href="index-2.html" class="logo-link">
                              <img class="logo-light logo-img" src="images/logo.png" srcset="/demo2/images/logo2x.png 2x" alt="logo">
                              <img class="logo-dark logo-img" src="images/logo-dark.png" srcset="/demo2/images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                          </div>
                          <div class="nk-header-search ms-3 ms-xl-0">
                            <!-- aqui pode acrescentar qualquer coisa -->
                          </div>
                          <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                              <li class="dropdown chats-dropdown hide-mb-xs">
                                <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                  <div class="icon-status icon-status-na">
                                    <em class="icon ni ni-comments"></em>
                                  </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                  <div class="dropdown-head">
                                    <span class="sub-title nk-dropdown-title">Recent Chats</span>
                                    <a href="#">Setting</a>
                                  </div>
                                  <div class="dropdown-body">
                                    <ul class="chat-list">
                                      <li class="chat-item">
                                        <a class="chat-link" href="apps-chats.html">
                                          <div class="chat-media user-avatar">
                                            <span>IH</span>
                                            <span class="status dot dot-lg dot-gray"></span>
                                          </div>
                                          <div class="chat-info">
                                            <div class="chat-from">
                                              <div class="name">Iliash Hossain</div>
                                              <span class="time">Now</span>
                                            </div>
                                            <div class="chat-context">
                                              <div class="text">You: Please confrim if you got my last messages.</div>
                                              <div class="status delivered">
                                                <em class="icon ni ni-check-circle-fill"></em>
                                              </div>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li class="chat-item is-unread">
                                        <a class="chat-link" href="apps-chats.html">
                                          <div class="chat-media user-avatar bg-pink">
                                            <span>AB</span>
                                            <span class="status dot dot-lg dot-success"></span>
                                          </div>
                                          <div class="chat-info">
                                            <div class="chat-from">
                                              <div class="name">Abu Bin Ishtiyak</div>
                                              <span class="time">4:49 AM</span>
                                            </div>
                                            <div class="chat-context">
                                              <div class="text">Hi, I am Ishtiyak, can you help me with this problem ?</div>
                                              <div class="status unread">
                                                <em class="icon ni ni-bullet-fill"></em>
                                              </div>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li class="chat-item">
                                        <a class="chat-link" href="apps-chats.html">
                                          <div class="chat-media user-avatar">
                                            <img src="images/avatar/b-sm.jpg" alt="">
                                          </div>
                                          <div class="chat-info">
                                            <div class="chat-from">
                                              <div class="name">George Philips</div>
                                              <span class="time">6 Apr</span>
                                            </div>
                                            <div class="chat-context">
                                              <div class="text">Have you seens the claim from Rose?</div>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li class="chat-item">
                                        <a class="chat-link" href="apps-chats.html">
                                          <div class="chat-media user-avatar user-avatar-multiple">
                                            <div class="user-avatar">
                                              <img src="images/avatar/c-sm.jpg" alt="">
                                            </div>
                                            <div class="user-avatar">
                                              <span>AB</span>
                                            </div>
                                          </div>
                                          <div class="chat-info">
                                            <div class="chat-from">
                                              <div class="name">Softnio Group</div>
                                              <span class="time">27 Mar</span>
                                            </div>
                                            <div class="chat-context">
                                              <div class="text">You: I just bought a new computer but i am having some problem</div>
                                              <div class="status sent">
                                                <em class="icon ni ni-check-circle"></em>
                                              </div>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li class="chat-item">
                                        <a class="chat-link" href="apps-chats.html">
                                          <div class="chat-media user-avatar">
                                            <img src="images/avatar/a-sm.jpg" alt="">
                                            <span class="status dot dot-lg dot-success"></span>
                                          </div>
                                          <div class="chat-info">
                                            <div class="chat-from">
                                              <div class="name">Larry Hughes</div>
                                              <span class="time">3 Apr</span>
                                            </div>
                                            <div class="chat-context">
                                              <div class="text">Hi Frank! How is you doing?</div>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li class="chat-item">
                                        <a class="chat-link" href="apps-chats.html">
                                          <div class="chat-media user-avatar bg-purple">
                                            <span>TW</span>
                                          </div>
                                          <div class="chat-info">
                                            <div class="chat-from">
                                              <div class="name">Tammy Wilson</div>
                                              <span class="time">27 Mar</span>
                                            </div>
                                            <div class="chat-context">
                                              <div class="text">You: I just bought a new computer but i am having some problem</div>
                                              <div class="status sent">
                                                <em class="icon ni ni-check-circle"></em>
                                              </div>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="dropdown-foot center">
                                    <a href="apps-chats.html">View All</a>
                                  </div>
                                </div>
                              </li>
                              <li class="dropdown notification-dropdown">
                                <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                  <div class="icon-status icon-status-info">
                                    <em class="icon ni ni-bell"></em>
                                  </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                  <div class="dropdown-head">
                                    <span class="sub-title nk-dropdown-title">Notifications</span>
                                    <a href="#">Mark All as Read</a>
                                  </div>
                                  <div class="dropdown-body">
                                    <div class="nk-notification">
                                      <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                          <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                          <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                          </div>
                                          <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                      </div>
                                      <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                          <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                          <div class="nk-notification-text">Your <span>Deposit Order</span> is placed </div>
                                          <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                      </div>
                                      <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                          <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                          <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                          </div>
                                          <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                      </div>
                                      <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                          <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                          <div class="nk-notification-text">Your <span>Deposit Order</span> is placed </div>
                                          <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                      </div>
                                      <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                          <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                          <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                          </div>
                                          <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                      </div>
                                      <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                          <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                          <div class="nk-notification-text">Your <span>Deposit Order</span> is placed </div>
                                          <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="dropdown-foot center">
                                    <a href="#">View All</a>
                                  </div>
                                </div>
                              </li>
                              <li class="dropdown user-dropdown">
                                <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                  <div class="user-toggle">
                                    <div class="user-avatar sm">
                                      <em class="icon ni ni-user-alt"></em>
                                    </div>
                                    <div class="user-info d-none d-xl-block">
                                      <div class="user-status user-status-unverified">Bem-vindo</div>
                                      <div class="user-name dropdown-indicator">{{ Auth::user()->name }}</div>
                                    </div>
                                  </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                  <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                    <div class="user-card">
                                      <div class="user-avatar">
                                        <span>AB</span>
                                      </div>
                                      <div class="user-info">
                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                        <span class="sub-text">info@softnio.com</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="dropdown-inner">
                                    <ul class="link-list">
                                      <li>
                                        <a href="user-profile-regular.html">
                                          <em class="icon ni ni-user-alt"></em>
                                          <span>View Profile</span>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="user-profile-setting.html">
                                          <em class="icon ni ni-setting-alt"></em>
                                          <span>Account Setting</span>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="user-profile-activity.html">
                                          <em class="icon ni ni-activity-alt"></em>
                                          <span>Login Activity</span>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="dropdown-inner">
                                    <ul class="link-list">
                                      <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                          <em class="icon ni ni-signout"></em>
                                          <span>Sair</span>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>


                @endguest

                <!-- inicio do conteúdo -->
                @yield('content')
                <!-- fim do conteúdo -->

                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 AdminApp Todos os direitos reservados.</div>
                        </div>
                    </div>
                </div><!--nk-footer-->
            </div><!--nk-wrap -->

        </div>    
    </div>
    <script src="{{ asset('js/bundle.js?ver=3.0.3') }}></script>
    <script src="{{ asset('js/scripts.js?ver=3.0.3') }}></script>
    <script src="{{ asset('js/demo-settings.js?ver=3.0.3') }}></script>
    <script src="{{ asset('js/charts/chart-ecommerce.js?ver=3.0.3') }}></script> 
 </body>
</html>