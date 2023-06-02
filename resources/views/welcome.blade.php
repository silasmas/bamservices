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

            <!-- services area start here  -->
            <section class="cp-services-area pb-85 p-relative z-index-1 mt--140 py-5">
                <div class="cp-services-bottom-img p-absolute m-img cp-bg-move-x d-none d-xl-block">
                    <img src="{{ asset('assets/img/service/services-7.png') }}" alt="img not found">
                </div>
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-xl-6 col-lg-10 d-xl-none">
                            <div class="cp-services-title-wrap space cp-section-title mb-30 ml-30">
                                <span class="cp-subtitle mb-15">Nos Principaux Services</span>
                                <h2 class="cp-title mb-25"><span>Solutions d'impression</span> personnalisées à guichet unique</h2>
                                <p class="mb-50">
                                    BAM Services, une entreprise de communications graphiques axée sur les solutions, qui a réussi à connecter les marques aux consommateurs.
                                </p>

                                <div class="cp-services-btn lh-1">
                                    <a class="cp-btn" href="{{ route('service') }}">
                                        Voir Tous les Services
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

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="cp-services-item t-center mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <span class="cp-services-num">01</span>
                                <div class="cp-services-img w-img">
                                    <img src="{{ asset('assets/img/service/services-1.jpg') }}" alt="img not found">
                                </div>
                                <h4 class="cp-services-title"><a href="{{ route('service', ['id' => 1]) }}">Cartes de Voeux</a></h4>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="cp-services-item t-center mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay=".4s">
                                <span class="cp-services-num">02</span>
                                <div class="cp-services-img w-img">
                                    <img src="{{ asset('assets/img/service/services-2.jpg') }}" alt="img not found">
                                </div>
                                <h4 class="cp-services-title"><a href="{{ route('service', ['id' => 2]) }}">Impression t-shirt</a></h4>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="cp-services-item t-center mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay=".5s">
                                <span class="cp-services-num">03</span>
                                <div class="cp-services-img w-img">
                                    <img src="{{ asset('assets/img/service/services-3.jpg') }}" alt="img not found">
                                </div>
                                <h4 class="cp-services-title"><a href="{{ route('service', ['id' => 3]) }}">Autocollants et étiquettes</a></h4>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="cp-services-item t-center mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay=".6s">
                                <span class="cp-services-num">04</span>
                                <div class="cp-services-img w-img">
                                    <img src="{{ asset('assets/img/service/services-4.jpg') }}" alt="img not found">
                                </div>
                                <h4 class="cp-services-title"><a href="{{ route('service', ['id' => 4]) }}">Conception cartes de visite</a></h4>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="cp-services-item t-center mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.7">
                                <span class="cp-services-num">05</span>
                                <div class="cp-services-img w-img">
                                    <img src="{{ asset('assets/img/service/services-5.jpg') }}" alt="img not found">
                                </div>
                                <h4 class="cp-services-title"><a href="{{ route('service', ['id' => 5]) }}">Conception stationnaire</a></h4>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="cp-services-item t-center mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.8s">
                                <span class="cp-services-num">06</span>
                                <div class="cp-services-img w-img">
                                    <img src="{{ asset('assets/img/service/services-6.jpg') }}" alt="img not found">
                                </div>
                                <h4 class="cp-services-title"><a href="{{ route('service', ['id' => 6]) }}">Conception cartes de bannière</a></h4>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-10 d-none d-xl-block">
                            <div class="cp-services-title-wrap space cp-section-title mb-30 ml-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.9s">
                                <span class="cp-subtitle mb-15">Nos Principaux Services</span>
                                <h2 class="cp-title mb-25"><span>Solutions d'impression</span> personnalisées à guichet unique</h2>
                                <p class="mb-50">
                                    BAM Services, une entreprise de communications graphiques axée sur les solutions, qui a réussi à connecter les marques aux consommateurs.
                                </p>

                                <div class="cp-services-btn lh-1">
                                    <a class="cp-btn" href="{{ route('service') }}">
                                        Voir Tous les Services
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
                    </div>
                </div>
            </section>
            <!-- services area end here  -->

@endsection
