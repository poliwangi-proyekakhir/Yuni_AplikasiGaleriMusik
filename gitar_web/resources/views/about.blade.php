@extends('layout.main')
@section('title', 'Web')

{{-- @yield('container') --}}

@section('container')
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h1 class="breadcrumb-heading">About Us</h1>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Begin about Area -->
    <div class="about-area section-space-top-95 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        {{-- <h2 class="about-title">Apa itu gim?? <span> GIM?</span></h2>
                        <p class="about-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum. Sed ut perspiciatis</p> --}}
                        <div class="about-signature">
                            <img src="assets/images/about/icon/2.png" alt="Signature">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Begin about Area -->
    <div class="about-area section-space-top-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrap mt-4 mb-2">
                        <div class="contact-info text-white" data-bg-image="assets/images/banner/5-1-1980-1080.jpg"
                        style="background-image: url(&quot;assets/images/banner/5-1-1980-1080.jpg&quot;);">
                        <h2 class="" style="margin-top: -.5em">Hubungi Kami</h2>

                        <hr>
                        
                        <h5>Untuk lebih dekat  hubungi</h5>
                        <br>
                        <p><i class="fa fa-instagram"></i> galleryinstrumenmusik</p>
                        <p><i class="fa fa-whatsapp"></i> 081338922770</p>
                        <p><i class="fa fa-phone"></i> 081338922770</p>
                        
                    </div>
                        <form id="contact-form" class="contact-form">
                            <div style="overflow:hidden;resize:none;max-width:100%;width:100%;height:300px;">
                                <div id="display-googlemap" style="height:100%; width:100%;max-width:100%;"><iframe
                                        style="height:100%;width:100%;border:0;" frameborder="0"
                                        src="https://www.google.com/maps/embed/v1/place?q=banyuwangi&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                                </div><a class="codefor-google-map" rel="nofollow" href="https://www.embed-map.com"
                                    id="authorizemaps-data">https://www.embed-map.com</a>
                                <style>
                                    #display-googlemap img {
                                        max-width: none !important;
                                        background: none !important;
                                        font-size: inherit;
                                        font-weight: inherit;
                                    }
                                </style>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End about Area -->


</main>
@endsection