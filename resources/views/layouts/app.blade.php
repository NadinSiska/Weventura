<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="WeVentura" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/png" href="{{ asset('app/img/logo_only.svg') }}">

    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
        rel="stylesheet" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('app/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('app/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('app/css/elegant-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('app/css/nice-select.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('app/css/jquery-ui.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('app/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('app/css/slicknav.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('app/css/style.css') }}" type="text/css" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="app/img/logo.svg" alt="" /></a>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="app/img/language.png" alt="" />
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{ route('dashboard') }}">Beranda</a></li>
                <li><a href="{{ route('sewa') }}">Sewa</a></li>
                <li><a href="{{ route('pesan') }}">Pesanan</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i>weventura@gmail.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>weventura@gmail.com</li>
                                <li>Selamat Datang di Persewaan Weventura</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__auth">

                                @if (Route::has('login'))
                                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                        @auth
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="fa fa-user"></i> Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        @else
                                            <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                                        @endauth
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ url('/') }}"><img src="app/img/logo.svg" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul class="menu-header">
                            <li><a href="{{ url('/') }}">Beranda</a></li>
                            <li><a href="{{ route('sewa') }}">Sewa</a></li>
                            <li><a href="{{ route('pesan') }}">Pesanan</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="app/img/logo.svg" alt="" /></a>
                        </div>
                        <ul>
                            <li>Address: Jl. Tanimbar nomor 22</li>
                            <li>Phone: +62 82245509682</li>
                            <li>Email: weventura@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">

                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <p>
                            Get E-mail updates about our latest shop and special offers.
                        </p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail" />
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                by Nadin Wibian Siska
                            </p>
                        </div>
                        <div class="footer__copyright__payment">
                            <img src="app/img/payment-item.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('app/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('app/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('app/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('app/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('app/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('app/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('app/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('app/js/main.js') }}"></script>
</body>

</html>
