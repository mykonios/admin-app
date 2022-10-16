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
                      <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Use-Case Preview</h6>
                      </li>
                      <li class="nk-menu-item">
                        <a href="ecommerce/index.html" class="nk-menu-link">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-bag"></em>
                          </span>
                          <span class="nk-menu-text">E-Commerce Panel</span>
                          <span class="nk-menu-badge">HOT</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="lms/index.html" class="nk-menu-link">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-book-read"></em>
                          </span>
                          <span class="nk-menu-text">LMS Panel</span>
                          <span class="nk-menu-badge">HOT</span>
                        </a>
                      </li>
                      <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboards</h6>
                      </li>
                      <li class="nk-menu-item">
                        <a href="index-2.html" class="nk-menu-link">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-cart-fill"></em>
                          </span>
                          <span class="nk-menu-text">Default</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="index-sales.html" class="nk-menu-link">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-activity-round-fill"></em>
                          </span>
                          <span class="nk-menu-text">Sales</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="index-analytics.html" class="nk-menu-link">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-growth-fill"></em>
                          </span>
                          <span class="nk-menu-text">Analytics</span>
                        </a>
                      </li>
                      <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Applications</h6>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-tile-thumb-fill"></em>
                          </span>
                          <span class="nk-menu-text">Projects</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="project-card.html" class="nk-menu-link">
                              <span class="nk-menu-text">Project Cards</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="project-list.html" class="nk-menu-link">
                              <span class="nk-menu-text">Project List</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-users-fill"></em>
                          </span>
                          <span class="nk-menu-text">User Manage</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="user-list-default.html" class="nk-menu-link">
                              <span class="nk-menu-text">User List - Default</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="user-list-regular.html" class="nk-menu-link">
                              <span class="nk-menu-text">User List - Regular</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="user-list-compact.html" class="nk-menu-link">
                              <span class="nk-menu-text">User List - Compact</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="user-details-regular.html" class="nk-menu-link">
                              <span class="nk-menu-text">User Details - Regular</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="user-profile-regular.html" class="nk-menu-link">
                              <span class="nk-menu-text">User Profile - Regular</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="user-card.html" class="nk-menu-link">
                              <span class="nk-menu-text">User Contact - Card</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-cc-alt2-fill"></em>
                          </span>
                          <span class="nk-menu-text">Orders</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="orders-default.html" class="nk-menu-link">
                              <span class="nk-menu-text">Order List - Default</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="orders-regular.html" class="nk-menu-link">
                              <span class="nk-menu-text">Order List - Regular</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="orders-sales.html" class="nk-menu-link">
                              <span class="nk-menu-text">Order List - Sales</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-grid-alt-fill"></em>
                          </span>
                          <span class="nk-menu-text">Applications</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="apps-messages.html" class="nk-menu-link">
                              <span class="nk-menu-text">Messages</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="apps-inbox.html" class="nk-menu-link">
                              <span class="nk-menu-text">Inbox / Mail</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="apps-file-manager.html" class="nk-menu-link">
                              <span class="nk-menu-text">File Manager</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="apps-chats.html" class="nk-menu-link">
                              <span class="nk-menu-text">Chats / Messenger</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="apps-calendar.html" class="nk-menu-link">
                              <span class="nk-menu-text">Calendar</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="apps-kanban.html" class="nk-menu-link">
                              <span class="nk-menu-text">Kanban Board</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-file-docs"></em>
                          </span>
                          <span class="nk-menu-text">Invoice</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="invoice-list.html" class="nk-menu-link">
                              <span class="nk-menu-text">Invoice List</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="invoice-details.html" class="nk-menu-link">
                              <span class="nk-menu-text">Invoice Details</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-card-view"></em>
                          </span>
                          <span class="nk-menu-text">Products</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="product-list.html" class="nk-menu-link">
                              <span class="nk-menu-text">Product List</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="product-card.html" class="nk-menu-link">
                              <span class="nk-menu-text">Product Card</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="product-details.html" class="nk-menu-link">
                              <span class="nk-menu-text">Product Details</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item">
                        <a href="pricing-table.html" class="nk-menu-link">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-view-col"></em>
                          </span>
                          <span class="nk-menu-text">Pricing Table</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="gallery.html" class="nk-menu-link">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-img"></em>
                          </span>
                          <span class="nk-menu-text">Image Gallery</span>
                        </a>
                      </li>
                      <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Misc Pages</h6>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-light-fill"></em>
                          </span>
                          <span class="nk-menu-text">Auth Pages</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="pages/auths/auth-login.html" class="nk-menu-link" target="_blank">
                              <span class="nk-menu-text">Login / Signin</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="pages/auths/auth-register.html" class="nk-menu-link" target="_blank">
                              <span class="nk-menu-text">Register / Signup</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="pages/auths/auth-reset.html" class="nk-menu-link" target="_blank">
                              <span class="nk-menu-text">Forgot Password</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="pages/auths/auth-success.html" class="nk-menu-link" target="_blank">
                              <span class="nk-menu-text">Success / Confirm</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                              <span class="nk-menu-text">Classic Version - v2</span>
                            </a>
                            <ul class="nk-menu-sub">
                              <li class="nk-menu-item">
                                <a href="pages/auths/auth-login-v2.html" class="nk-menu-link" target="_blank">
                                  <span class="nk-menu-text">Login / Signin</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="pages/auths/auth-register-v2.html" class="nk-menu-link" target="_blank">
                                  <span class="nk-menu-text">Register / Signup</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="pages/auths/auth-reset-v2.html" class="nk-menu-link" target="_blank">
                                  <span class="nk-menu-text">Forgot Password</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="pages/auths/auth-success-v2.html" class="nk-menu-link" target="_blank">
                                  <span class="nk-menu-text">Success / Confirm</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="nk-menu-item">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                              <span class="nk-menu-text">No Slider Version - v3</span>
                            </a>
                            <ul class="nk-menu-sub">
                              <li class="nk-menu-item">
                                <a href="pages/auths/auth-login-v3.html" class="nk-menu-link" target="_blank">
                                  <span class="nk-menu-text">Login / Signin</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="pages/auths/auth-register-v3.html" class="nk-menu-link" target="_blank">
                                  <span class="nk-menu-text">Register / Signup</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="pages/auths/auth-reset-v3.html" class="nk-menu-link" target="_blank">
                                  <span class="nk-menu-text">Forgot Password</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="pages/auths/auth-success-v3.html" class="nk-menu-link" target="_blank">
                                  <span class="nk-menu-text">Success / Confirm</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-files-fill"></em>
                          </span>
                          <span class="nk-menu-text">Error Pages</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="pages/errors/404-classic.html" target="_blank" class="nk-menu-link">
                              <span class="nk-menu-text">404 Classic</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="pages/errors/504-classic.html" target="_blank" class="nk-menu-link">
                              <span class="nk-menu-text">504 Classic</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="pages/errors/404-s1.html" target="_blank" class="nk-menu-link">
                              <span class="nk-menu-text">404 Modern</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="pages/errors/504-s1.html" target="_blank" class="nk-menu-link">
                              <span class="nk-menu-text">504 Modern</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-files-fill"></em>
                          </span>
                          <span class="nk-menu-text">Other Pages</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="_blank.html" class="nk-menu-link">
                              <span class="nk-menu-text">Blank / Startup</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="pages/faqs.html" class="nk-menu-link">
                              <span class="nk-menu-text">Faqs / Help</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="pages/terms-policy.html" class="nk-menu-link">
                              <span class="nk-menu-text">Terms / Policy</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="pages/regular-v1.html" class="nk-menu-link">
                              <span class="nk-menu-text">Regular Page - v1</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="pages/regular-v2.html" class="nk-menu-link">
                              <span class="nk-menu-text">Regular Page - v2</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Components</h6>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-layers-fill"></em>
                          </span>
                          <span class="nk-menu-text">Ui Elements</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="components/elements/alerts.html" class="nk-menu-link">
                              <span class="nk-menu-text">Alerts</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/accordions.html" class="nk-menu-link">
                              <span class="nk-menu-text">Accordions</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/avatar.html" class="nk-menu-link">
                              <span class="nk-menu-text">Avatar</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/badges.html" class="nk-menu-link">
                              <span class="nk-menu-text">Badges</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/buttons.html" class="nk-menu-link">
                              <span class="nk-menu-text">Buttons</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/buttons-group.html" class="nk-menu-link">
                              <span class="nk-menu-text">Button Group</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/breadcrumb.html" class="nk-menu-link">
                              <span class="nk-menu-text">Breadcrumb</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/cards.html" class="nk-menu-link">
                              <span class="nk-menu-text">Cards</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/carousel.html" class="nk-menu-link">
                              <span class="nk-menu-text">Carousel</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/list-dropdown.html" class="nk-menu-link">
                              <span class="nk-menu-text">List Dropdown</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/modals.html" class="nk-menu-link">
                              <span class="nk-menu-text">Modals</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/pagination.html" class="nk-menu-link">
                              <span class="nk-menu-text">Pagination</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/popover.html" class="nk-menu-link">
                              <span class="nk-menu-text">Popovers</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/progress.html" class="nk-menu-link">
                              <span class="nk-menu-text">Progress</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/spinner.html" class="nk-menu-link">
                              <span class="nk-menu-text">Spinner</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/tabs.html" class="nk-menu-link">
                              <span class="nk-menu-text">Tabs</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/toast.html" class="nk-menu-link">
                              <span class="nk-menu-text">Toasts</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/tooltip.html" class="nk-menu-link">
                              <span class="nk-menu-text">Tooltip</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/elements/typography.html" class="nk-menu-link">
                              <span class="nk-menu-text">Typography</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                              <span class="nk-menu-text">Utilities</span>
                            </a>
                            <ul class="nk-menu-sub">
                              <li class="nk-menu-item">
                                <a href="components/elements/util-border.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Border</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="components/elements/util-colors.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Colors</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="components/elements/util-display.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Display</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="components/elements/util-embeded.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Embeded</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="components/elements/util-flex.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Flex</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="components/elements/util-text.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Text</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="components/elements/util-sizing.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Sizing</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="components/elements/util-spacing.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Spacing</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="components/elements/util-others.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Others</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-dot-box-fill"></em>
                          </span>
                          <span class="nk-menu-text">Crafted Icons</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="components/misc/svg-icons.html" class="nk-menu-link">
                              <span class="nk-menu-text">SVG Icon - Exclusive</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/misc/nioicon.html" class="nk-menu-link">
                              <span class="nk-menu-text">Nioicon - HandCrafted</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item">
                        <a href="components/misc/icons.html" class="nk-menu-link">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-menu-circled"></em>
                          </span>
                          <span class="nk-menu-text">Icon Libraries</span>
                        </a>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-table-view-fill"></em>
                          </span>
                          <span class="nk-menu-text">Tables</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="components/tables/table-basic.html" class="nk-menu-link">
                              <span class="nk-menu-text">Basic Tables</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/tables/table-special.html" class="nk-menu-link">
                              <span class="nk-menu-text">Special Tables</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/tables/table-datatable.html" class="nk-menu-link">
                              <span class="nk-menu-text">DataTables</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-view-group-fill"></em>
                          </span>
                          <span class="nk-menu-text">Forms</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="components/forms/form-elements.html" class="nk-menu-link">
                              <span class="nk-menu-text">Form Elements</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/forms/checkbox-radio.html" class="nk-menu-link">
                              <span class="nk-menu-text">Checkbox Radio</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/forms/advanced-controls.html" class="nk-menu-link">
                              <span class="nk-menu-text">Advanced Controls</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/forms/input-group.html" class="nk-menu-link">
                              <span class="nk-menu-text">Input Group</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/forms/form-upload.html" class="nk-menu-link">
                              <span class="nk-menu-text">Form Upload</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/forms/datetime-picker.html" class="nk-menu-link">
                              <span class="nk-menu-text">Date &amp; Time Picker</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/forms/number-spinner.html" class="nk-menu-link">
                              <span class="nk-menu-text">Number Spinner</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/forms/nouislider.html" class="nk-menu-link">
                              <span class="nk-menu-text">noUiSlider</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/forms/form-layouts.html" class="nk-menu-link">
                              <span class="nk-menu-text">Form Layouts</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/forms/form-validation.html" class="nk-menu-link">
                              <span class="nk-menu-text">Form Validation</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                              <span class="nk-menu-text">Wizard</span>
                            </a>
                            <ul class="nk-menu-sub">
                              <li class="nk-menu-item">
                                <a href="components/forms/form-wizard.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Basic Demo</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="components/forms/wizard/create-project.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Create Project</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="components/forms/wizard/create-profile.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Create Profile</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="components/forms/wizard/two-factor-auth.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Two Factor Auth</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a target="_blank" href="components/forms/wizard/survey-v1.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Survey</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a target="_blank" href="components/forms/wizard/survey-v2.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Survey v2</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="nk-menu-item">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                              <span class="nk-menu-text">Rich Editor</span>
                            </a>
                            <ul class="nk-menu-sub">
                              <li class="nk-menu-item">
                                <a href="components/forms/form-summernote.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Summernote</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="components/forms/form-quill.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Quill</span>
                                </a>
                              </li>
                              <li class="nk-menu-item">
                                <a href="components/forms/form-tinymce.html" class="nk-menu-link">
                                  <span class="nk-menu-text">Tinymce</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-pie-fill"></em>
                          </span>
                          <span class="nk-menu-text">Charts</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="components/charts/chartjs.html" class="nk-menu-link">
                              <span class="nk-menu-text">Chart JS</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/charts/knob.html" class="nk-menu-link">
                              <span class="nk-menu-text">Knob JS</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-puzzle-fill"></em>
                          </span>
                          <span class="nk-menu-text">Widgets</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="components/widgets/cards.html" class="nk-menu-link">
                              <span class="nk-menu-text">Card Widgets</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/widgets/charts.html" class="nk-menu-link">
                              <span class="nk-menu-text">Chart Widgets</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/widgets/ratings.html" class="nk-menu-link">
                              <span class="nk-menu-text">Ratings Widgets</span>
                              <span class="nk-menu-badge">New</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-block-over"></em>
                          </span>
                          <span class="nk-menu-text">Miscellaneous</span>
                        </a>
                        <ul class="nk-menu-sub">
                          <li class="nk-menu-item">
                            <a href="components/misc/slick-sliders.html" class="nk-menu-link">
                              <span class="nk-menu-text">Slick Slider</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/misc/toastr.html" class="nk-menu-link">
                              <span class="nk-menu-text">Toastr</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/misc/sweet-alert.html" class="nk-menu-link">
                              <span class="nk-menu-text">Sweet Alert</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/misc/js-tree.html" class="nk-menu-link">
                              <span class="nk-menu-text">jsTree</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/misc/dual-listbox.html" class="nk-menu-link">
                              <span class="nk-menu-text">Dual Listbox</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/misc/dragula.html" class="nk-menu-link">
                              <span class="nk-menu-text">Dragula</span>
                              <span class="nk-menu-badge">New</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="components/misc/map.html" class="nk-menu-link">
                              <span class="nk-menu-text">Google Map</span>
                              <span class="nk-menu-badge">New</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item">
                        <a href="email-templates.html" class="nk-menu-link">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-tag-alt-fill"></em>
                          </span>
                          <span class="nk-menu-text">Email Template</span>
                        </a>
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
                          <em class="icon ni ni-search"></em>
                          <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
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
                                    <div class="user-status user-status-unverified">Unverified</div>
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
                                      <a href="#">
                                        <em class="icon ni ni-signout"></em>
                                        <span>Sign out</span>
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




                @endguest

                <!-- inicio do conteúdo -->
                @yield('content')
                <!-- fim do conteúdo -->

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
                </div><!--nk-footer-->
            </div><!--nk-wrap -->

        </div>    
    </div>
    <script src="{{ asset('js/bundle19ce.js?ver=3.0.3') }}></script>
    <script src="{{ asset('js/scripts19ce.js?ver=3.0.3') }}></script>
    <script src="{{ asset('js/demo-settings19ce.js?ver=3.0.3') }}></script>
    <script src="{{ asset('js/charts/chart-ecommerce19ce.js?ver=3.0.3') }}></script>    
</body>
</html>