<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="WRAPCODERS">
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Admin - @yield('title')</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/logo-ico.ico') }}">
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/daterangepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/jquery-jvectormap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/select2-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/jquery.time-to.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/theme.min.css') }}">
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
   <script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Navigation Manu !-->
    <!--! ================================================================ !-->
    <nav class="nxl-navigation">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="index.html" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="{{ asset('app/img/weventura.png') }}" alt="" class="logo logo-lg">
                    <img src="{{ asset('app/img/logo.png') }}" alt="" class="logo logo-sm">
                </a>
            </div>
            <div class="navbar-content">
                <ul class="nxl-navbar">
                    <li class="nxl-item nxl-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nxl-item">
                        <a href="{{ route('dashboard') }}" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-layout"></i></span>
                            <span class="nxl-mtext">Dashboards</span>
                        </a>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="bi bi-card-checklist"></i></span>
                            <span class="nxl-mtext">Booking List</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.waitinglist') }}">Waiting
                                    List</a>
                            </li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.booked') }}">Booked</a></li>
                    </li>
                </ul>
                </li>
                <li class="nxl-item">
                    <a href="{{ route('admin.item.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-briefcase"></i></span>
                        <span class="nxl-mtext">Item Stock</span>
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--! ================================================================ !-->
    <!--! [End]  Navigation Manu !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->
    <header class="nxl-header">
        <div class="header-wrapper">
            <!--! [Start] Header Left !-->
            <div class="header-left d-flex align-items-center gap-4">
                <!--! [Start] nxl-head-mobile-toggler !-->
                <a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
                    <div class="hamburger hamburger--arrowturn">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </a>
                <!--! [Start] nxl-head-mobile-toggler !-->
                <!--! [Start] nxl-navigation-toggle !-->
                <div class="nxl-navigation-toggle">
                    <a href="javascript:void(0);" id="menu-mini-button">
                        <i class="feather-align-left"></i>
                    </a>
                    <a href="javascript:void(0);" id="menu-expend-button" style="display: none">
                        <i class="feather-arrow-right"></i>
                    </a>
                </div>
                <!--! [End] nxl-navigation-toggle !-->
                <!--! [Start] nxl-lavel-mega-menu-toggle !-->
                <div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
                    <a href="javascript:void(0);" id="nxl-lavel-mega-menu-open">
                        <i class="feather-align-left"></i>
                    </a>
                </div>
                <!--! [End] nxl-lavel-mega-menu-toggle !-->
            </div>
            <!--! [End] Header Left !-->
            <!--! [Start] Header Right !-->
            <div class="header-right ms-auto">
                <div class="d-flex align-items-center">
                    <div class="nxl-h-item d-none d-sm-flex">
                        <div class="full-screen-switcher">
                            <a href="javascript:void(0);" class="nxl-head-link me-0"
                                onclick="$('body').fullScreenHelper('toggle');">
                                <i class="feather-maximize maximize"></i>
                                <i class="feather-minimize minimize"></i>
                            </a>
                        </div>
                    </div>
                    <div class="nxl-h-item dark-light-theme">
                        <a href="javascript:void(0);" class="nxl-head-link me-3 dark-button">
                            <i class="feather-moon"></i>
                        </a>
                        <a href="javascript:void(0);" class="nxl-head-link me-3 light-button" style="display: none">
                            <i class="feather-sun"></i>
                        </a>
                    </div>

                    <div class="dropdown nxl-h-item">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button"
                            data-bs-auto-close="outside">
                            <img src="{{ asset('admin/images/avatar/1.png') }}" alt="user-image"
                                class="img-fluid user-avtar me-0">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                            <div class="dropdown-header">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('admin/images/avatar/1.png') }}" alt="user-image"
                                        class="img-fluid user-avtar">
                                    <div>
                                        <h6 class="text-dark mb-0">Alexandra Della <span
                                                class="badge bg-soft-success text-success ms-1">PRO</span></h6>
                                        <span class="fs-12 fw-medium text-muted">alex.della@outlook.com</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--! [End] Header Right !-->
        </div>
    </header>
    <!--! ================================================================ !-->
    <!--! [End] Header !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">@yield('title')</h5>
                    </div>
                    @yield('header-right')
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                        @php
                            $segments = Request::segments();
                            array_shift($segments); // Remove 'admin' from segments
                            foreach ($segments as $segment) {
                                echo '<li class="breadcrumb-item">' . ucfirst($segment) . '</li>';
                            }
                        @endphp
                    </ul>
                </div>
            </div>
            <!-- [ page-header ] end -->
            @yield('content')
            <!-- [ Footer ] start -->
            <footer class="footer">
                <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                    <span>Copyright ©</span>
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    <span>by <strong>Nadin Wibian Siska</strong></span>
                </p>
                {{-- <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div> --}}
            </footer>
            <!-- [ Footer ] end -->
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->

    <!--! ================================================================ !-->
    <!--! Footer Script !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Vendors JS !-->
    <script src="{{ asset('admin/vendors/js/vendors.min.js') }}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>


    </script>
    <script src="{{ asset('admin/vendors/js/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/js/jquery.time-to.min.js') }} "></script>
    <script src="{{ asset('admin/vendors/js/circle-progress.min.js') }}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ asset('admin/js/common-init.min.js') }}"></script>
    <script src="{{ asset('admin/js/analytics-init.min.js') }}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ asset('admin/js/theme-customizer-init.min.js') }}"></script>
    <!--! END: Theme Customizer !-->
</body>

</html>
