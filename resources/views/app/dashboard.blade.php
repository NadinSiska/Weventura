@extends('layouts.app')

@section('title', 'Dashboard')

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
          <div
            class="hero__item set-bg"
            data-setbg="app/img/hero/banner2.svg"
          ></div>
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
            <div
              class="categories__item set-bg"
              data-setbg="app/img/categories/cat-1.png" style="background-color: rgb(227, 236, 225); padding:30px"
            >
              <h5><a href="#">Nesting</a></h5>
            </div>
          </div>
          <div class="col-lg-3">
            <div
              class="categories__item set-bg"
              data-setbg="app/img/categories/cat-2.png" style="background-color: rgb(227, 236, 225); padding:30px"
            >
              <h5><a href="#">Sepatu Outdoor</a></h5>
            </div>
          </div>
          <div class="col-lg-3">
            <div
              class="categories__item set-bg"
              data-setbg="app/img/categories/cat-3.png" style="background-color: rgb(227, 236, 225); padding:30px"
            >
              <h5><a href="#">Carrier</a></h5>
            </div>
          </div>
          <div class="col-lg-3">
            <div
              class="categories__item set-bg"
              data-setbg="app/img/categories/cat-4.png" style="background-color: rgb(227, 236, 225); padding:30px"
            >
              <h5><a href="#">Tenda</a></h5>
            </div>
          </div> 
          <div class="col-lg-3">
            <div
              class="categories__item set-bg"
              data-setbg="app/img/categories/cat-5.png " style="background-color: rgb(227, 236, 225); padding:30px"
            >
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
            <div 
              class="featured__item__pic set-bg"
              data-setbg="app/img/featured/feature-1.jpg"
            >
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
            <div
              class="featured__item__pic set-bg"
              data-setbg="app/img/featured/feature-2.jpg"
            >
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
            <div
              class="featured__item__pic set-bg"
              data-setbg="app/img/featured/feature-3.jpg"
            >
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
            <div v  
              class="featured__item__pic set-bg"
              data-setbg="app/img/featured/feature-4.jpg"
            >
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
            <div
              class="featured__item__pic set-bg"
              data-setbg="app/img/featured/feature-5.jpg"
            >
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
            <div
              class="featured__item__pic set-bg"
              data-setbg="app/img/featured/feature-6.jpg"
            >
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
            <div
              class="featured__item__pic set-bg"
              data-setbg="app/img/featured/feature-7.jpg"
            >
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
            <div
              class="featured__item__pic set-bg"
              data-setbg="app/img/featured/feature-8.jpg"
            >
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

  <!-- Banner Begin -->
 
  <!-- Banner End -->

  <!-- Latest Product Section Begin --> 
  <!-- Latest Product Section End -->

  <!-- Blog Section Begin -->
  <section class="from-blog spad"> 
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title from-blog__title">
            <h2>Review </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="blog__item">
            <div class="blog__item__pic">
              <img src="app/img/blog/blog-1.jpg" alt="" />
            </div>
            <div class="blog__item__text">
              <ul>
                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                <li><i class="fa fa-comment-o"></i> 5</li>
              </ul>
              <h5><a href="#">Cooking tips make cooking simple</a></h5>
              <p>
                Sed quia non numquam modi tempora indunt ut labore et dolore
                magnam aliquam quaerat
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="blog__item">
            <div class="blog__item__pic">
              <img src="app/img/blog/blog-2.jpg" alt="" />
            </div>
            <div class="blog__item__text">
              <ul>
                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                <li><i class="fa fa-comment-o"></i> 5</li>
              </ul>
              <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
              <p>
                Sed quia non numquam modi tempora indunt ut labore et dolore
                magnam aliquam quaerat
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="blog__item">
            <div class="blog__item__pic">
              <img src="app/img/blog/blog-3.jpg" alt="" />
            </div>
            <div class="blog__item__text">
              <ul>
                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                <li><i class="fa fa-comment-o"></i> 5</li>
              </ul>
              <h5><a href="#">Visit the clean farm in the US</a></h5>
              <p>
                Sed quia non numquam modi tempora indunt ut labore et dolore
                magnam aliquam quaerat
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Section End -->

  @endsection