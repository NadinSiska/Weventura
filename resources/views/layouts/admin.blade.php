<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="admin/plugins/DataTables/datatables.min.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="admin/css/connect.min.css" rel="stylesheet">
    <link href="admin/css/dark_theme.css" rel="stylesheet">
    <link href="admin/css/custom.css" rel="stylesheet">

<body>

    <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div>
    <div class="connect-container align-content-stretch d-flex flex-wrap">
        <div class="page-sidebar">
            <div class="logo-box"><a href="#" class="logo-text">WeVentura</a><a href="#" id="sidebar-close"><i
                        class="material-icons">close</i></a> <a href="#" id="sidebar-state"><i
                        class="material-icons">adjust</i><i
                        class="material-icons compact-sidebar-icon">panorama_fish_eye</i></a>
            </div>
            <div class="page-sidebar-inner slimscroll">
                <ul class="accordion-menu">

                    <li>
                        <a href="{{ route('dashboard') }}" class="active"><i
                                class="material-icons-outlined">dashboard</i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('user') }}"><i class="material-icons-outlined">inbox</i>User</a>
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
                    <ul class="navbar-nav">
                        <li class="nav-item small-screens-sidebar-link">
                            <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                        </li>
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="admin/images/avatars/profile-image-1.png" alt="profile image">
                                <span>Nancy Moore</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
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
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="material-icons-outlined">mail</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="material-icons-outlined">notifications</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="dark-theme-toggle"><i
                                    class="material-icons-outlined">brightness_2</i><i
                                    class="material-icons">brightness_2</i></a>
                        </li>
                    </ul>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Tasks</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Reports</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-search">
                        <form>
                            <div class="form-group">
                                <input type="text" name="search" id="nav-search" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="page-content">

                @yield('content')

            </div>
            <div class="page-footer">
                <div class="row">
                    <div class="col-md-12">
                        <span class="footer-text">2019 © stacks</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="admin/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="admin/plugins/bootstrap/popper.min.js"></script>
    <script src="admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="admin/plugins/DataTables/datatables.min.js"></script>
    <script src="admin/js/connect.min.js"></script>
    <script src="admin/js/pages/datatables.js"></script>
</body>

</html>