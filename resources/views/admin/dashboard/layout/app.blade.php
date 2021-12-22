<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | {{ env('APP_DESC') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-set/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chart.js/dist/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">
    <script src="./assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script>
    <header id="header"
        class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
        <div class="navbar-nav-wrap">
            <div class="navbar-brand-wrapper">
                <!-- Logo -->
                <a class="navbar-brand" href="./index.html" aria-label="Front">
                    <img class="navbar-brand-logo" src="{{ asset('assets/img/brand/logo-dark.svg') }}" alt="Logo">
                    <img class="navbar-brand-logo-mini" src="{{ asset('assets/img/brand/favi.svg') }}" alt="Logo">
                </a>
                <!-- End Logo -->
            </div>

            <div class="navbar-nav-wrap-content-left">
                <!-- Navbar Vertical Toggle -->
                <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
                    <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip"
                        data-placement="right" title="Collapse"></i>
                    <i class="tio-last-page navbar-vertical-aside-toggle-full-align"
                        data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                        data-toggle="tooltip" data-placement="right" title="Expand"></i>
                </button>
                <!-- End Navbar Vertical Toggle -->
            </div>

            <!-- Secondary Content -->
            <div class="navbar-nav-wrap-content-right">
                <!-- Navbar -->
                <ul class="navbar-nav align-items-center flex-row">
                    <li class="nav-item d-none d-sm-inline-block">
                        <!-- Notification -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                                href="javascript:;" data-hs-unfold-options='{
                       "target": "#notificationDropdown",
                       "type": "css-animation"
                     }'>
                                <i class="tio-notifications-on-outlined"></i>
                                <span class="btn-status btn-sm-status btn-status-success"></span>
                            </a>

                            <div id="notificationDropdown"
                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu"
                                style="width: 25rem;">
                                <!-- Header -->
                                <div class="card-header">
                                    <span class="card-title h4">Notifications</span>
                                </div>
                                <!-- End Header -->

                                <!-- Body -->
                                <div class="card-body-height">
                                    <!-- Tab Content -->
                                    <div class="tab-content" id="notificationTabContent">
                                        <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel"
                                            aria-labelledby="notificationNavOne-tab">
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                                <!-- End Body -->

                                <!-- Card Footer -->
                                <a class="card-footer text-center" href="#">
                                    View all notifications
                                    <i class="tio-chevron-right"></i>
                                </a>
                                <!-- End Card Footer -->
                            </div>
                        </div>
                        <!-- End Notification -->
                    </li>

                    <li class="nav-item">
                        <!-- Account -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;"
                                data-hs-unfold-options='{
                       "target": "#accountNavbarDropdown",
                       "type": "css-animation"
                     }'>
                                <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="{{ asset('assets/img/160x160/img1.jpg') }}"
                                        alt="Image Description">
                                    <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                </div>
                            </a>

                            <div id="accountNavbarDropdown"
                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account"
                                style="width: 16rem;">
                                <div class="dropdown-item-text">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-sm avatar-circle mr-2">
                                            <img class="avatar-img"
                                                src="{{ asset('assets/img/160x160/img1.jpg') }}"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <span class="card-title h5">{{ session('admin')->username }}</span>
                                            <span class="card-text">Super Admin</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Sign out</button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <aside
        class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
            <div class="navbar-vertical-footer-offset">
                <div class="navbar-brand-wrapper justify-content-between">
                    <a class="navbar-brand" href="./index.html" aria-label="Front">
                        <img class="navbar-brand-logo" src="{{ asset('assets/img/brand/logo-dark.svg') }}"
                            alt="Logo">
                        <img class="navbar-brand-logo-mini" src="{{ asset('assets/img/brand/favi.svg') }}"
                            alt="Logo">
                    </a>
                    <button type="button"
                        class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                        <i class="tio-clear tio-lg"></i>
                    </button>
                </div>
                <div class="navbar-vertical-content">
                    <ul class="navbar-nav navbar-nav-lg nav-tabs">
                        <li class="nav-item">
                            <small class="nav-subtitle" title="Layouts">Admin Overview</small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>

                        <li class="nav-item ">
                            <a class="js-nav-tooltip-link nav-link " href="{{ route('admin.dashboard.index') }}"
                                title="Layouts" data-placement="left">
                                <i class="tio-dashboard-vs-outlined nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <small class="nav-subtitle" title="Layouts">Users Management</small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>

                        <li class="nav-item ">
                            <a class="js-nav-tooltip-link nav-link " href="{{ route('admin.dashboard.users') }}"
                                title="Layouts" data-placement="left">
                                <i class="tio-group-senior nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">All
                                    Users</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="js-nav-tooltip-link nav-link " href="{{ route('admin.dashboard.addUsers') }}"
                                title="Layouts" data-placement="left">
                                <i class="tio-user-add nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Add
                                    Users</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <small class="nav-subtitle" title="Layouts">Card Management</small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>

                        <li class="nav-item ">
                            <a class="js-nav-tooltip-link nav-link " href="{{ route('admin.dashboard.cards.index') }}"
                                title="Layouts" data-placement="left">
                                <i class="tio-credit-cards nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">All Cards</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="js-nav-tooltip-link nav-link " href="{{ route('admin.dashboard.cards.create') }}"
                                title="Layouts" data-placement="left">
                                <i class="tio-credit-cards nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Add new Card</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <small class="nav-subtitle" title="Layouts">Orders Management</small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>


                        <li class="nav-item ">
                            <a class="js-nav-tooltip-link nav-link " href="{{ route('admin.dashboard.orders') }}"
                                title="Layouts" data-placement="left">
                                <i class="tio-dashboard-vs-outlined nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">All
                                    Orders</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="js-nav-tooltip-link nav-link " href="{{ route('admin.dashboard.shipping') }}"
                                title="Layouts" data-placement="left">
                                <i class="tio-dashboard-vs-outlined nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">All
                                    Users Shipping</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="js-nav-tooltip-link nav-link " href="{{ route('admin.dashboard.logout') }}"
                                title="Layouts" data-placement="left">
                                <i class="tio-sign-out nav-icon"></i>
                                <form action="{{ route('admin.dashboard.logout') }}" method="POST">
                                    @csrf
                                    <button class="bg-white border-0 text-truncate">Sign
                                        Out</button>
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Content -->
            </div>
        </div>
    </aside>



    <!-- End Navbar Vertical -->

    <main id="content" role="main" class="main pointer-event">
        <!-- Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <h1 class="page-header-title">@yield('title')</h1>
                    </div>

                    <div class="col-sm-auto">
                        <a class="btn btn-primary" href="{{ route('admin.dashboard.orders') }}">
                            <i class="tio-user mr-1"></i> Manage Orders
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->
            @yield('content')

            <div class="footer">
                <div class="row justify-content-between align-items-center">
                    <div class="col">
                        <p class="font-size-sm mb-0">&copy; {{ env('APP_NAME') }}. <span
                                class="d-none d-sm-inline-block">{{ date('Y') }}
                                {{ env('APP_DESC') }}.</span></p>
                    </div>
                </div>
            </div>
            <!-- End Footer -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- JS Global Compulsory  -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-unfold/dist/hs-unfold.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-form-search/dist/hs-form-search.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js.extensions/chartjs-extensions.js') }}"></script>
    <script src="{{ asset('assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net.extensions/select/select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/clipboard/dist/clipboard.min.js') }}"></script>


    <!-- JS Front -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {
          // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
          // =======================================================
          var sidebar = $('.js-navbar-vertical-aside').hsSideNav();
  
  
          // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
          // =======================================================
          $('.js-nav-tooltip-link').tooltip({ boundary: 'window' })
  
  
          // INITIALIZATION OF GO TO
          // =======================================================
          $('.js-go-to').each(function () {
            var goTo = new HSGoTo($(this)).init();
          });
  
  
          // INITIALIZATION OF NAV SCROLLER
          // =======================================================
          $('.js-nav-scroller').each(function () {
            new HsNavScroller($(this), {
              delay: 400,
            }).init()
          });
  
  
          // INITIALIZATION OF LISTJS COMPONENT
          // =======================================================
          var docsSearch = $.HSCore.components.HSList.init('#docsSearch');
  
  
          // GET JSON FILE RESULTS
          // =======================================================
          $.getJSON('../assets/json/docs-search.json', function(data) {
            docsSearch.add(data);
          });
        });
      </script>

    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write(
            '<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
</body>
<x-alert />
@yield('footer')

</html>
