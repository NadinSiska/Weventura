@extends('layouts.app')

@section('title', 'Sewa')

@section('content')


</div>
<div class="humberger__open">
    <i class="fa fa-bars"></i>
</div>
</div>
</header>

<!-- Hero Section Begin -->
<section class="hero hero-normal">
        

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="app/img/breadcrumb.jpg" style="background-image: url(&quot;app/img/breadcrumb.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4 style="text-align: center;"> Detail Sewa</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="checkout__input">
                                <p>Nama Penyewa<span>*</span></p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Durasi Sewa<span>*</span></p>
                                <input type="text"> <!--placeholder="Alamat Jalan"-->
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Tanggal Sewa<span>*</span></p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Tanggal Kembali<span>*</span></p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="input-file">
                                <div class="checkout__input">
                                    <p>Kartu Identitas<span>*</span></p>
                                    <label for="kartu-identitas" class="btn-upload">Unggah Kartu Identitas</label>
                                    <input type="file" name="kartu-identitas" id="kartu-identitas" style="display: none;" />
                                    <span class="file-name" id="file-name">Belum ada file yang diunggah</span>
                                </div>
                            </div>  
                        </div> 
                        <!-- Submit Button -->
                    <div class="col-lg-8 col-md-6">
                        <button type="submit" class="btn-upload">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>   
                </form>
            </section>  
            <!-- Checkout Section End -->  
                           
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/file.js"></script> 

    @endsection