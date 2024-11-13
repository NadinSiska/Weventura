<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="WeVentura" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/png" href="{{ asset('app/img/logo_only.svg') }}">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/plugins/DataTables/datatables.min.css') }}" rel="stylesheet">

    <!-- Theme Styles -->
    <link href="{{ asset('admin/css/connect.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/dark_theme.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
</head>

<body>

    <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div>
    <div class="connect-container align-content-stretch d-flex flex-wrap">
        <div class="page-sidebar">
            <div class="logo-box"><a href="#" class="logo-text">WeVentura</a><a href="#"
                    id="sidebar-close"><i class="material-icons">close</i></a> <a href="#" id="sidebar-state"><i
                        class="material-icons">adjust</i><i
                        class="material-icons compact-sidebar-icon">panorama_fish_eye</i></a>
            </div>
            <div class="page-sidebar-inner slimscroll">
                <ul class="accordion-menu">

                    <li>
                        <a href="/admin/dashboard" class="active"><i
                                class="material-icons-outlined">dashboard</i>Dashboard</a>
                    </li>
                    <li>
                        <a href="/admin/user"><i class="material-icons-outlined">inbox</i>User</a>
                    </li>
                    <li>
                        <a href="/admin/log"><i class="material-icons-outlined">inbox</i>Log</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="page-container">
            <div class="page-header">
                <nav class="navbar navbar-expand">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item small-screens-sidebar-link">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">mail</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i
                                        class="material-icons-outlined">notifications</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" id="dark-theme-toggle"><i
                                        class="material-icons-outlined">brightness_2</i><i
                                        class="material-icons">brightness_2</i></a>
                            </li>
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset('admin/images/avatars/profile-image-1.png') }}"
                                        alt="profile image">
                                    <span>Nancy Moore</span><i
                                        class="material-icons dropdown-icon">keyboard_arrow_down</i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Calendar<span
                                            class="badge badge-pill badge-info float-right">2</span></a>
                                    <a class="dropdown-item" href="#">Settings &amp Privacy</a>
                                    <a class="dropdown-item" href="#">Switch Account</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>
            <div class="page-content">

                @yield('content')

            </div>
            <div class="page-footer">
                <div class="row">
                    <div class="col-md-12">
                        <span class="footer-text"> Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            by Nadin Wibian Siska
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{ asset('admin/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/js/connect.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/datatables.js') }}"></script>
</body>

</html>
