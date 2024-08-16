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

<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Categories</span>
                    </div>
                    <ul>
                        <?php foreach ($kategori as $kategori): ?>
                            <li><a href="#">
                                    <?php echo $kategori['nama_kategori']; ?>
                                </a></li>
                        <?php endforeach; ?>
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
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div> 
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="<?php echo base_url('assets/admin/img/hero/banner.svg') ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Our Product</h2>
                </div>
                <!-- Categories Section Begin -->
                <section class="categories">
                    <div class="container">
                        <div class="row">
                            <div class="categories__slider owl-carousel">
                                <?php foreach ($latest_barang as $barang): ?>
                                    <div class="col-lg-3">
                                        <div class="categories__item set-bg" data-setbg="<?php echo $barang['gambar']; ?>">
                                            <h5><a href="#">
                                                    <?php echo $barang['nama_barang']; ?>
                                                </a></h5>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Categories Section End -->
            </div>
        </div>
</section>
<!-- Featured Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Rent Popular Outdoor</h2>
                </div>
                <!-- Categories Section Begin -->
                <section class="categories">
                    <div class="container">
                        <div class="row">
                            <div class="categories__slider owl-carousel">
                                <div class="col-lg-3">
                                    <div class="categories__item set-bg"
                                        data-setbg="<?php echo base_url('assets/uploads/barang/OspreyAetherAG70L.png') ?>">
                                        <h5><a href="#">Fresh Fruit</a></h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="categories__item set-bg"
                                        data-setbg="<?php echo base_url('assets/img/categories/cat-2.jpg') ?>">
                                        <h5><a href="#">Dried Fruit</a></h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="categories__item set-bg"
                                        data-setbg="<?php echo base_url('assets/img/categories/cat-3.jpg') ?>">
                                        <h5><a href="#">Vegetables</a></h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="categories__item set-bg"
                                        data-setbg="<?php echo base_url('assets/img/categories/cat-4.jpg') ?>">
                                        <h5><a href="#">drink fruits</a></h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="categories__item set-bg"
                                        data-setbg="<?php echo base_url('assets/img/categories/cat-5.jpg') ?>">
                                        <h5><a href="#">drink fruits</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Categories Section End -->
            </div>
        </div>
</section>
<!-- Featured Section End -->

<!-- Blog Section Begin -->
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>Ratings</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="<?php echo base_url('assets/img/blog/blog-1.jpg') ?>" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Cooking tips make cooking simple</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="<?php echo base_url('assets/img/blog/blog-2.jpg') ?>" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="<?php echo base_url('assets/img/blog/blog-3.jpg') ?>" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Visit the clean farm in the US</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->
  
<!-- Map Begin --> 
<div class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.088140304749!2d112.62473577500701!3d-7.989834292035673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6281b75ea5485%3A0x90fd5c6fcedf6acf!2sSMK%20Negeri%204%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1709096668514!5m2!1sid!2sid"
        height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <div class="map-inside">
        <i class="icon_pin"></i>
        <div class="inside-widget">
            <h4>SMK Negeri 4 Malang</h4>
            <ul>
                <li>Phone: +12-345-6789</li>
                <li>Add: 16 Creek Ave. Farmingdale, NY</li>
            </ul>
        </div>
    </div>
</div>
<!-- Map End -->