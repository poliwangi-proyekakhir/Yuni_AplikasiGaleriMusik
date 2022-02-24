@extends('layout.main')
@section('title', 'Web')

{{-- @yield('container') --}}

@section('container')
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ url('/') }}/assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h1 class="breadcrumb-heading">Detail</h1>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}/">Home</a>
                            </li>
                            <li>Gitar</li>
                            <li>{{$gitar['nama']}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product-area section-space-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="single-product-img">
                        <div class="swiper-container single-product-slider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                            <div class="swiper-wrapper" id="swiper-wrapper-746279ee4eff36a6" aria-live="polite" style="transform: translate3d(-3264px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="1 / 10" style="width: 544px;">
                                    <a href="#" class="single-img gallery-popup">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Image">
                                    </a>
                                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="2 / 10" style="width: 544px;">
                                    <a href="#" class="single-img gallery-popup">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Image">
                                    </a>
                                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" role="group" aria-label="3 / 10" style="width: 544px;">
                                    <a href="#" class="single-img gallery-popup">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Image">
                                    </a>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="4 / 10" style="width: 544px;">
                                    <a href="#" class="single-img gallery-popup">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Image">
                                    </a>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="5 / 10" style="width: 544px;">
                                    <a href="#" class="single-img gallery-popup">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Image">
                                    </a>
                                </div>
                                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" role="group" aria-label="6 / 10" style="width: 544px;">
                                    <a href="#" class="single-img gallery-popup">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Image">
                                    </a>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" role="group" aria-label="7 / 10" style="width: 544px;">
                                    <a href="#" class="single-img gallery-popup">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Image">
                                    </a>
                                </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" role="group" aria-label="8 / 10" style="width: 544px;">
                                <a href="#" class="single-img gallery-popup">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Image">
                                    </a>
                                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="9 / 10" style="width: 544px;">
                                    <a href="#" class="single-img gallery-popup">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Image">
                                    </a>
                                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="10 / 10" style="width: 544px;">
                                    <a href="#" class="single-img gallery-popup">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Image">
                                    </a>
                                </div></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div class="thumbs-arrow-holder">
                            <div class="swiper-container single-product-thumbs swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                <div class="swiper-wrapper" id="swiper-wrapper-3edbfdbf82c7fd17" aria-live="polite" style="transform: translate3d(-852px, 0px, 0px); transition-duration: 0ms;"><a href="#" class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="1 / 10" style="width: 122px; margin-right: 20px;">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Thumnail">
                                    </a><a href="#" class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="2 / 10" style="width: 122px; margin-right: 20px;">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Thumnail">
                                    </a><a href="#" class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" role="group" aria-label="3 / 10" style="width: 122px; margin-right: 20px;">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Thumnail">
                                    </a>
                                    <a href="#" class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="4 / 10" style="width: 122px; margin-right: 20px;">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Thumnail">
                                    </a>
                                    <a href="#" class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="5 / 10" style="width: 122px; margin-right: 20px;">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Thumnail">
                                    </a>
                                    <a href="#" class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" role="group" aria-label="6 / 10" style="width: 122px; margin-right: 20px;">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Thumnail">
                                    </a>
                                    <a href="#" class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" role="group" aria-label="7 / 10" style="width: 122px; margin-right: 20px;">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Thumnail">
                                    </a>
                                <a href="#" class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" role="group" aria-label="8 / 10" style="width: 122px; margin-right: 20px;">
                                    <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Thumnail">
                                    </a><a href="#" class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="9 / 10" style="width: 122px; margin-right: 20px;">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Thumnail">
                                    </a><a href="#" class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="10 / 10" style="width: 122px; margin-right: 20px;">
                                        <img class="img-full" src="{{url('/')}}/file_upload/img/{{$gitar['gambar']}}" alt="Product Thumnail">
                                    </a></div>
                                <!-- Add Arrows -->
                                <div class=" thumbs-button-wrap d-none d-md-block">
                                    <div class="thumbs-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-c345fe8e197e8a89" aria-disabled="false">
                                        <i class="pe-7s-angle-left"></i>
                                    </div>
                                    <div class="thumbs-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-c345fe8e197e8a89" aria-disabled="false">
                                        <i class="pe-7s-angle-right"></i>
                                    </div>
                                </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <div class="single-product-content">
                        <h2 class="title"> {{namanya('merks', $gitar['merk']) }} {{$gitar['nama']}} </h2>
                        <hr>
                        {{-- <p class="short-desc">{{$gitar['nama']}}</p> --}}
                        
                        <div class="product-category">
                            <span class="title">Merk:</span>
                            <ul>
                                <li>
                                    <a href="#">{{namanya('merks', $gitar['merk']) }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-category">
                            <span class="title">Jenis :</span>
                            <ul>
                                <li>
                                    <a href="#">Gitar {{namanya('jeniss', $gitar['jenis']) }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-category product-tags">
                            <span class="title">Tipe :</span>
                            <ul>
                                <li>
                                    <a href="#">{{$gitar['nama']}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-category product-tags">
                            <span class="title">Deskripsi :</span>
                            <ul>
                                <li>
                                    <a href="#">{{$gitar['harga']}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="container">
                            <div class="content-video">
                                <!-- Embed Video Youtube -->
                                @if($gitar['link'] != null)
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$gitar['link']}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                @else           
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  
                                @endif
                            </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection