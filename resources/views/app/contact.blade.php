@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="app/img/breadcrumb.jpg" style="background-image: url(&quot;app/img/breadcrumb.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>+62 822 4550 9682</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>Jl. Tanimbar nomor 22</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p>07:00 am to 21:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>weventura@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Tinggalkan Pesan</h2>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Nama">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Pesan"></textarea>
                        <button type="submit" class="site-btn">KIRIM PESAN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

     <!-- Map Begin -->
     <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.0881403050703!2d112.62473041023995!3d-7.98983429200248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6281b75ea5485%3A0x90fd5c6fcedf6acf!2sSekolah%20Menengah%20Kejuruan%20Negeri%204%20Malang!5e0!3m2!1sen!2sid!4v1726556283895!5m2!1sen!2sid" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>Rental Weventura</h4>
                <ul>
                    <li>Phone: +62 822 4550 9682</li>
                    <li>Add: Jl. Tanimbar nomor 22</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->


    @endsection