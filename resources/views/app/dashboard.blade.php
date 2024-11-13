@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Peralatan Camping</a></li>
                            <li><a href="#">Perlengkapan Camping</a></li>
                            <li><a href="#">Perlengkapan Petualangan</a></li>
                            <li><a href="#">Pakaian Outdoor</a></li>
                            <li><a href="#">Alat Survival</a></li>
                            <li><a href="#">Alat Elektronik</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?" />
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+62 85331927565</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="app/img/hero/banner2.svg"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories mt-5 ">
        <div class="container">

            <div class="section-title ">
                <h2>Popular Rental</h2>
            </div>
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="app/img/categories/cat-1.png"
                            style="background-color: rgb(227, 236, 225); padding:30px">
                            <h5><a href="#">Nesting</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="app/img/categories/cat-2.png"
                            style="background-color: rgb(227, 236, 225); padding:30px">
                            <h5><a href="#">Sepatu Outdoor</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="app/img/categories/cat-3.png"
                            style="background-color: rgb(227, 236, 225); padding:30px">
                            <h5><a href="#">Carrier</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="app/img/categories/cat-4.png"
                            style="background-color: rgb(227, 236, 225); padding:30px">
                            <h5><a href="#">Tenda</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="app/img/categories/cat-5.png "
                            style="background-color: rgb(227, 236, 225); padding:30px">
                            <h5><a href="#">Trekking Pole</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="section-title">
                        <h2>Our Rental Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Camping</li>
                            <li data-filter=".fresh-meat">Pakaian</li>
                            <li data-filter=".vegetables">Alat</li>
                            <li data-filter=".fastfood">Olahraga</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="app/img/featured/feature-1.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="app/img/featured/feature-2.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="app/img/featured/feature-3.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                        <div v class="featured__item__pic set-bg" data-setbg="app/img/featured/feature-4.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="app/img/featured/feature-5.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="app/img/featured/feature-6.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="app/img/featured/feature-7.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="app/img/featured/feature-8.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Review Section Begin -->
        <section class="categories mt-4">
        <div class="categories mb-5">
        <div class="container">

            <div class="section-title ">
                <h2>Reviews</h2>
            </div>
            <div class="row">
                <div class="categories__slider owl-carousel">

                    <div class="review__card d-flex align-items-start">
                        <div class="review__profile me-3">
                            <img src="app/img/review/profile-pic-1.jpg" alt="Foto Profil" class="rounded-circle" width="50">
                        </div>
                        <div class="review__info">
                            <h5 class="review__name">Nama Pengguna 1</h5>
                            <p class="review__date">Tanggal: 2023-10-01</p>
                            <div class="rating mb-2">
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-muted">&#9733;</span>
                            </div>
                            <p class="review__text">Produk ini sangat memuaskan. Saya sangat merekomendasikannya!</p>
                        </div>
                    </div>

                    <div class="review__card d-flex align-items-start">
                        <div class="review__profile me-3">
                            <img src="app/img/review/profile-pic-2.jpg" alt="Foto Profil" class="rounded-circle" width="50">
                        </div>
                        <div class="review__info">
                            <h5 class="review__name">Nama Pengguna 2</h5>
                            <p class="review__date">Tanggal: 2023-10-01</p>
                            <div class="rating mb-2">
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                            </div>
                            <p class="review__text">Produk ini sangat memuaskan. Saya sangat merekomendasikannya!</p>
                        </div>
                    </div>

                    <div class="review__card d-flex align-items-start">
                        <div class="review__profile me-3">
                            <img src="app/img/review/profile-pic-3.jpg" alt="Foto Profil" class="rounded-circle" width="50">
                        </div>
                        <div class="review__info">
                            <h5 class="review__name">Nama Pengguna 3</h5>
                            <p class="review__date">Tanggal: 2023-10-01</p>
                            <div class="rating mb-2">
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-muted">&#9733;</span>
                            </div>
                            <p class="review__text">Produk ini sangat memuaskan. Saya sangat merekomendasikannya!</p>
                        </div>
                    </div>

                    <div class="review__card d-flex align-items-start">
                        <div class="review__profile me-3"> 
                            <img src="app/img/review/profile-pic-4.jpg" alt="Foto Profil" class="rounded-circle" width="50">
                        </div>
                        <div class="review__info">
                            <h5 class="review__name">Nama Pengguna 4</h5>
                            <p class="review__date">Tanggal: 2023-10-01</p>
                            <div class="rating mb-2">
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-muted">&#9733;</span>
                                <span class="text-muted">&#9733;</span>
                            </div>
                            <p class="review__text">Produk ini sangat memuaskan. Saya sangat merekomendasikannya!</p>
                        </div>
                    </div>

                    <div class="review__card d-flex align-items-start">
                        <div class="review__profile me-3">
                            <img src="app/img/review/profile-pic-5.jpg" alt="Foto Profil" class="rounded-circle" width="50">
                        </div>
                        <div class="review__info">
                            <h5 class="review__name">Nama Pengguna 5</h5>
                            <p class="review__date">Tanggal: 2023-10-01</p>
                            <div class="rating mb-2">
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-muted">&#9733;</span>
                            </div>
                            <p class="review__text">Produk ini sangat memuaskan. Saya sangat merekomendasikannya!</p>
                        </div>
                    </div>
                </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- Review Section End -->

    <script src="js/review.js"></script>

@endsection
