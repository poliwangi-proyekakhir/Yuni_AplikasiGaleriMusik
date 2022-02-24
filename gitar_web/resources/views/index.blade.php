@extends('layout.main')
@section('title', 'Web')

{{-- @yield('container') --}}

@section('container')
<!-- Begin Slider Area -->
<div class="slider-area">
    <!-- Main Slider -->
    <div class="swiper-container main-slider-2 swiper-arrow with-bg_white">
        <div class="swiper-wrapper">
            <div class="swiper-slide animation-style-02">
                <div class="slide-inner style-2" data-bg-image="assets/images/slider/bg/2-1.jpg">
                    <div class="slide-content text-black">
                        <h2 class="title">Stem <br> Your Guitar</h2>
                        <p class="short-desc">With various version and alto.</p>
                        <div class="btn-wrap">
                            <a class="btn btn-custom-size xl-size btn-pronia-primary" href="{{url('/gitar')}}">Discover Now</a>
                        </div>
                    </div>
                    <div class="slide-img">
                        <img src="assets/images/slider/slide-img/2-1-960x741.jpg" alt="Slide Image">
                        <div class="slide-count">
                            <span class="data-count" data-count="01">
                                <span class="forward-slash">/</span>
                                <span>01</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="swiper-slide animation-style-02">
                <div class="slide-inner style-2" data-bg-image="assets/images/slider/bg/2-1.jpg">
                    <div class="slide-content text-black">
                        <h2 class="title">Indoor <br> Planters</h2>
                        <p class="short-desc">Pronia, With 100% Natural, Organic & Plant Shop.</p>
                        <div class="btn-wrap">
                            <a class="btn btn-custom-size xl-size btn-pronia-primary" href="shop.html">Discover Now</a>
                        </div>
                    </div>
                    <div class="slide-img">
                        <img src="assets/images/slider/slide-img/2-3-960x741.jpg" alt="Slide Image">
                        <div class="slide-count">
                            <span class="data-count" data-count="03">
                                <span class="forward-slash">/</span>
                                <span>03</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

        <!-- Add Arrows -->
        <div class="slide-button-wrap">
            <div class="slide-button-prev">
                <i class="pe-7s-angle-left"></i>
            </div>
            <div class="slide-button-next">
                <i class="pe-7s-angle-right"></i>
            </div>
        </div>
    </div>

</div>
<!-- Slider Area End Here -->

<!-- Begin Banner Area -->
{{-- <div class="banner-area banner-style-2 section-space-top-100">
    <div class="container">
        <div class="row g-y-30">
            <div class="col-md-6">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img">
                        <img src="assets/images/banner/2-1-570x500.jpg" alt="Banner Image">
                    </div>
                    <div class="banner-content text-position-center">
                        <span class="collection text-white">Look up</span>
                        <h3 class="title text-white">To the gallery</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img">
                        <img src="assets/images/banner/2-2-570x500.jpg" alt="Banner Image">
                    </div>
                    <div class="banner-content text-position-center">
                        <span class="collection text-white">Tune up</span>
                        <h3 class="title text-white">Your guitar with various sound</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Banner Area End Here -->

<!-- Begin about Area -->
<div class="about-area section-space-top-95 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-content">
                    <h2 class="about-title">Apa itu  <span> GIM?</span></h2>
                    <p class="about-desc">GIM adalah aplikasi galeri instrumen musik gitar akustik yang 
                        menyajikan beragam informasi tentang gitar akustik, tentu saja dapat digunakan sebagai
                        referensi para pengguna gitar untuk mencari gitar akustik yang diinginkan. GIM juga 
                        terdapat fitur tuning gitar yang dapat mennyetem kunci dasar gitar akustik para pengguna
                        agar dapat mengetahui apakah gitar pengguna sudah sesuai atau tidak. Staytune.
                    </p>
                    <div class="about-signature">
                        <img src="assets/images/about/icon/2.png" alt="Signature">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End about Area -->

<!-- Begin Banner Area -->
<div class="banner-area mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-bg-image img-hover-effect" data-bg-image="assets/images/banner/4-1-1170x400.jpg">
                    <div class="inner-content">
                        {{-- <span class="offer">Tune Now!</span> --}}
                        {{-- <h2 class="title text-white">Tune up your guitar</h2> --}}
                        <h3 class="discount text-white">Tune up your <span>guitar</span></h3>
                        <div class="button-wrap">
                            <a class="btn btn-custom-size btn-pronia-primary" href="{{url('/stem')}}">Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End Here -->
{{-- 
<!-- Begin Testimonial Area -->
<div class="testimonial-area section-space-top-100 section-space-bottom-95">
    <div class="container-fluid px-10">
        <div class="section-title-wrap">
            <h2 class="section-title mb-7">What People Say</h2>
            <p class="section-desc mb-10">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                roots in a piece of classical Latin literature
            </p>
        </div>
    </div>
    <div class="container">
        <div class="swiper-container testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide testimonial-item">
                    <div class="user-info mb-3">
                        <div class="user-shape-wrap">
                            <div class="user-img">
                                <img src="assets/images/testimonial/user/1.png" alt="User Image">
                            </div>
                        </div>
                        <div class="user-content text-charcoal">
                            <h4 class="user-name mb-1">Phoenix Baker</h4>
                            <span class="user-occupation">Client</span>
                        </div>
                    </div>
                    <p class="user-comment mb-6">Lorem ipsum dolor sit amet, conse adipisic elit, sed do eiusmod
                        tempo
                        incididunt ut labore et dolore. magna
                    </p>
                </div>
                <div class="swiper-slide testimonial-item">
                    <div class="user-info mb-3">
                        <div class="user-shape-wrap">
                            <div class="user-img">
                                <img src="assets/images/testimonial/user/2.png" alt="User Image">
                            </div>
                        </div>
                        <div class="user-content text-charcoal">
                            <h4 class="user-name mb-1">Phoenix Baker</h4>
                            <span class="user-occupation">Client</span>
                        </div>
                    </div>
                    <p class="user-comment mb-6">Lorem ipsum dolor sit amet, conse adipisic elit, sed do eiusmod
                        tempo
                        incididunt ut labore et dolore. magna
                    </p>
                </div>
                <div class="swiper-slide testimonial-item">
                    <div class="user-info mb-3">
                        <div class="user-shape-wrap">
                            <div class="user-img">
                                <img src="assets/images/testimonial/user/3.png" alt="User Image">
                            </div>
                        </div>
                        <div class="user-content text-charcoal">
                            <h4 class="user-name mb-1">Phoenix Baker</h4>
                            <span class="user-occupation">Client</span>
                        </div>
                    </div>
                    <p class="user-comment mb-6">Lorem ipsum dolor sit amet, conse adipisic elit, sed do eiusmod
                        tempo
                        incididunt ut labore et dolore. magna
                    </p>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination without-absolute"></div>
        </div>
    </div>
</div> --}}
<!-- Testimonial Area End Here -->
@endsection