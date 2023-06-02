@extends('layouts.guest')

@section('guest-content')

            <!-- banner area start  -->
            <section class="cp-banner2-area p-relative fix">
                <div class="cp-banner2-shape-area">
                    <div class="cp-banner2-shape2 p-absolute cp-rotation"></div>
                    <div class="cp-banner2-shape3 p-absolute cp-rotation"></div>
                    <div class="cp-banner2-shape4 p-absolute zi-5 cp-bg-move-y d-none d-md-block">
                        <img src="{{ asset('assets/img/banner/banner-shape1.png') }}" alt="banner-shape1">
                    </div>
                    <div class="cp-banner2-shape5 p-absolute zi-5 cp-bg-move-x">
                        <img src="{{ asset('assets/img/banner/banner-shape2.png') }}" alt="banner-shape1">
                    </div>
                </div>

                <div class="swiper-container cp-banner2-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-banner d-flex align-items-center cp-bg-13 pt-110 pb-80">
                                <div class="container pos-rel">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="cp-banner2-content pr-60 mb-70">
                                                <h2 class="cp-banner2-title mb-40" data-animation="fadeInUp" data-delay=".3s">
                                                    Solution d'impression moderne et numérique.
                                                </h2>
                                                <p class="cp-banner2-text mb-50" data-animation="fadeInUp" data-delay="0.4s">
                                                    Nos portraits d'animaux personnalisés sont un cadeau unique pour tout amateur d'animaux, une belle façon de <br> se souvenir d'un ami à quatre pattes qui nous manque beaucoup.
                                                </p>

                                                <div class="cp-banner2-btn" data-animation="fadeInUp" data-delay="0.5s">
                                                    <a href="shop.html" class="cp-btn">
                                                        Commander Maintenant
                                                        <span class="cp-btn__inner">
                                                            <span class="cp-btn__blobs">
                                                                <span class="cp-btn__blob"></span>
                                                                <span class="cp-btn__blob"></span>
                                                                <span class="cp-btn__blob"></span>
                                                                <span class="cp-btn__blob"></span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="cp-banner2-img-wrap p-relative d-flex justify-content-xl-end mb-70" data-animation="fadeInUp" data-delay="0.5s">
                                                <div class="cp-banner2-img-inner p-relative">
                                                    <div class="cp-banner2-video">
                                                        <video autoplay>
                                                            <source src="https://www.dropbox.com/s/jgeo7aa43ellilc/video.mp4?raw=1" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="cp-banner2-img2 p-absolute w-img br-img-50 d-none d-sm-block">
                                                        <img src="{{ asset('assets/img/banner/banner-3.jpg') }}" alt="banner">
                                                    </div>
                                                    <div class="cp-banner2-img3 p-absolute w-img br-img-50 d-none d-sm-block">
                                                        <img src="{{ asset('assets/img/banner/banner-4.jpg') }}" alt="banner">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="single-banner d-flex align-items-center cp-bg-13 pt-110 pb-80">
                                <div class="container pos-rel">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="cp-banner2-content pr-60 mb-70">
                                                <h2 class="cp-banner2-title mb-40" data-animation="fadeInUp" data-delay=".3s">
                                                    Solution d'impression de qualité et durable.
                                                </h2>
                                                <p class="cp-banner2-text mb-50" data-animation="fadeInUp" data-delay="0.4s">
                                                    Nos portraits d'animaux personnalisés sont un cadeau unique pour tout amateur d'animaux, une belle façon de <br> se souvenir d'un ami à quatre pattes qui nous manque beaucoup.
                                                </p>

                                                <div class="cp-banner2-btn" data-animation="fadeInUp" data-delay="0.5s">
                                                    <a href="shop.html" class="cp-btn">
                                                        Commander Maintenant
                                                        <span class="cp-btn__inner">
                                                            <span class="cp-btn__blobs">
                                                                <span class="cp-btn__blob"></span>
                                                                <span class="cp-btn__blob"></span>
                                                                <span class="cp-btn__blob"></span>
                                                                <span class="cp-btn__blob"></span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="cp-banner2-img-wrap p-relative d-flex justify-content-xl-end mb-70" data-animation="fadeInUp" data-delay="0.5s">
                                                <div class="cp-banner2-img-inner p-relative">
                                                    <div class="cp-banner2-video">
                                                        <video src="{{ asset('assets/img/video/video.mp4') }}" loop="" muted="" autoplay="" playsinline=""></video>
                                                    </div>
                                                    <div class="cp-banner2-img2 p-absolute w-img br-img-50 d-none d-sm-block">
                                                        <img src="{{ asset('assets/img/banner/banner-3.jpg') }}" alt="banner">
                                                    </div>
                                                    <div class="cp-banner2-img3 p-absolute w-img br-img-50 d-none d-sm-block">
                                                        <img src="{{ asset('assets/img/banner/banner-4.jpg') }}" alt="banner">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="cp-banner2-nav">
                        <div class="cp-banner2-button cp-banner2-button-prev cp p-absolute">
                            <i class="far fa-angle-left"></i>
                        </div>
                        <div class="cp-banner2-button cp-banner2-button-next cp p-absolute">
                            <i class="far fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner area end  -->


@endsection
