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
            <section class="cp-services-area pb-85 p-relative z-index-1 mt--140 mt-3 py-5">
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
                                <h4 class="cp-services-title"><a href="{{ route('service', ['id' => 1]) }}">Cartes de vœux</a></h4>
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

            <!-- about 2 area start  -->
            <section class="cp-about2-area pt-100 pb-30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-10">
                            <div class="cp-about2-img-wrap pr-15 p-relative mb-60 wow fadeInLeft animated" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                <div class="cp-about2-img-main w-img p-relative">
                                    <div class="cp-img-overlay wow"></div>
                                    <div class="cp-img-blur">
                                        <img src="{{ asset('assets/img/about/about3.jpg') }}" alt="about3">
                                        <img src="{{ asset('assets/img/about/about3.jpg') }}" alt="about3">
                                    </div>
                                    <div class="cp-about2-video p-absolute">
                                        <a class="popup-video play-btn" href="https://www.youtube.com/watch?v=ngmFMTeIl5A"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="cp-about2-img-sub zi-100 w-img p-absolute d-none d-sm-block">
                                    <img src="{{ asset('assets/img/about/about4.jpg') }}" alt="about4">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-10">
                            <div class="cp-about2-content mb-60">
                                <div class="cp-section-title">
                                    <span class="cp-subtitle mb-15 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3s">A propos de nous</span>
                                    <h2 class="cp-title mb-25 wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0.4s">
                                        Qu'est-ce que l'impression <span>à la demande et comment</span> ça marche ?
                                    </h2>
                                </div>
                                <p class="cp-about2-text mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                    Nous nous donnons pour mission de fournir à nos clients une présence Web créative, passionnante et adaptée à leur entreprise. Peu importe où se trouve votre entreprise, une forte présence sur le Web l'aidera à se développer.
                                </p>
                                <div class="cp-list mb-55 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.6s">
                                    <ul>
                                        <li>Impressions de qualité supérieure utilisant les dernières technologies ;</li>
                                        <li>Expédition dans le monde entier ;</li>
                                        <li>Imprimé localement, porté mondialement.</li>
                                    </ul>
                                </div>
                                <div class="cp-about2-btn wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.7s">
                                    <a href="{{ route('contact') }}" class="cp-border-btn">
                                        En savoir plus
                                        <span class="cp-border-btn__inner">
                                            <span class="cp-border-btn__blobs">
                                                <span class="cp-border-btn__blob"></span>
                                                <span class="cp-border-btn__blob"></span>
                                                <span class="cp-border-btn__blob"></span>
                                                <span class="cp-border-btn__blob"></span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about 2 area end  -->

            <!-- Why Choose Us area start  -->
            <section class="cp-choose-area cp-bg-14 pt-150 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-10">
                            <div class="cp-choose-content mb-60 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                <div class="cp-choose-title-wrap">
                                    <div class="cp-section-title">
                                        <span class="cp-subtitle mb-15">Pourquoi nous choisir ?</span>
                                        <h2 class="cp-title mb-30">Meilleurs tarifs d'expédition pour <span>l'impression à la demande.</span></h2>
                                    </div>
                                </div>
                                <p class="cp-choose-text mb-35">
                                    Organisation d'impression rapide, de dépliants et de brochures. Heureux de notre passé. <br>Impression pour ce qui est à venir.
                                </p>
                                <div class="cp-list mb-45">
                                    <ul>
                                        <li>Production interne ;</li>
                                        <li>Meilleure qualité d'impression avec tous les produits ;</li>
                                        <li>Conceptions de stock et excellent support client ;</li>
                                        <li>Imprimé localement, porté mondialement.</li>
                                    </ul>
                                </div>
                                <div class="cp-choose-btn">
                                    <a class="cp-border-btn" href="{{ route('contact') }}">
                                        Démarrer un projet
                                        <span class="cp-border-btn__inner">
                                            <span class="cp-border-btn__blobs">
                                                <span class="cp-border-btn__blob"></span>
                                                <span class="cp-border-btn__blob"></span>
                                                <span class="cp-border-btn__blob"></span>
                                                <span class="cp-border-btn__blob"></span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-10">
                            <div class="cp-choose-img-wrap mb-35">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="wow fadeInRight animated" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                            <div class="cp-choose-img-item p-relative w-img mb-25">
                                                <div class="cp-img-overlay wow"></div>
                                                <img src="{{ asset('assets/img/choose/choose-1.jpg') }}" alt="choose">
                                            </div>
                                        </div>
                                        <div class="cp-choose-img-item mb-25 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                                            <div class="cp-choose-experience">
                                                <div class="cp-choose-experience-icon p-relative m-img">
                                                    <img src="{{ asset('assets/img/choose/choose-experience-icon.png') }}" alt="experience">
                                                </div>
                                                <div class="cp-choose-experience-text">
                                                    <h3><span class="counter d-inline-block">12</span>+ Ans</h3>
                                                    <span>Découvrez toute l'équipe</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="cp-choose-img-right-wrap mt-65">
                                            <div class="wow fadeInRight animated" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                                <div class="cp-choose-img-item p-relative w-img mb-25">
                                                    <div class="cp-img-overlay wow"></div>
                                                    <img src="{{ asset('assets/img/choose/choose-2.jpg') }}" alt="choose">
                                                </div>
                                            </div>
                                            <div class="wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.6s">
                                                <div class="cp-choose-img-item p-relative w-img mb-25 ">
                                                    <div class="cp-img-overlay wow"></div>
                                                    <img src="{{ asset('assets/img/choose/choose-3.jpg') }}" alt="choose">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Why Choose Us area end  -->

            <!-- product area start  -->
            <div class="product-area pt-140">
                <div class="container border-bottom pb-65">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                            <div class="cp-services2-title-wrap t-center mb-35">
                                <div class="cp-section-title">
                                    <span class="cp-subtitle mb-15 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3s">Nos produits classiques</span>
                                    <h2 class="cp-title mb-25 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                                        <span>Des produits haut de gamme que vous pouvez</span> <br> personnaliser et vendre.
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div class="col-xl-10">
                            <div class="cp-product-menu mb-60 t-center">
                                <button class="active" data-filter="*">Tout</button>
                                <button data-filter=".c1">T-Shirt</button>
                                <button data-filter=".c2">T-Shirt Homme</button>
                                <button data-filter=".c3">T-Shirt Femme</button>
                            </div>
                        </div>
                    </div>

                    <div class="cp-product-wrap mb-20 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div class="row grid">
                            <div class="col-xl-3 col-lg-4 col-sm-6 c1 c2 c4 grid-item">
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <a href="{{ route('pricing', ['id' => 1]) }}" class="image">
                                            <img class="pic-1" src="{{ asset('assets/img/product/product-01.png') }}" alt="product">
                                            <img class="pic-2" src="{{ asset('assets/img/product/product-11.png') }}" alt="product">
                                        </a>
                                        <ul class="product-links">
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-shopping-cart"></i></a></li>
                                            <li><a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">
                                            <a href="{{ route('pricing', ['id' => 2]) }}">T-shirts & débardeurs</a>
                                        </h4>
                                        <div class="product-price">
                                            <span class="price-old">139.00$</span>
                                            <span class="price-now">100.00$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6 c2 c3 c4 grid-item">
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <span class="product-badge product-badge-new">new</span>
                                        <a href="{{ route('pricing', ['id' => 3]) }}" class="image">
                                            <img class="pic-1" src="{{ asset('assets/img/product/product-06.png') }}" alt="product">
                                            <img class="pic-2" src="{{ asset('assets/img/product/product-11.png') }}" alt="product">
                                        </a>
                                        <ul class="product-links">
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-shopping-cart"></i></a></li>
                                            <li><a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">
                                            <a href="{{ route('pricing', ['id' => 4]) }}">T-shirt femme blanc</a>
                                        </h4>
                                        <div class="product-price">
                                            <span class="price-now">120.00$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6 c2 c3 c4 grid-item">
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <span class="product-badge product-badge-new">nouveau</span>
                                        <a href="{{ route('pricing', ['id' => 5]) }}" class="image">
                                            <img class="pic-1" src="{{ asset('assets/img/product/product-10.png') }}" alt="product">
                                            <img class="pic-2" src="{{ asset('assets/img/product/product-09.png') }}" alt="product">
                                        </a>
                                        <ul class="product-links">
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-shopping-cart"></i></a></li>
                                            <li><a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">
                                            <a href="{{ route('pricing', ['id' => 6]) }}">T-shirt tendance</a>
                                        </h4>
                                        <div class="product-price">
                                            <span class="price-now">12.00$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6 c2 c3 c4 grid-item">
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <span class="product-badge product-badge-sale">vente</span>
                                        <a href="{{ route('pricing', ['id' => 7]) }}" class="image">
                                            <img class="pic-1" src="{{ asset('assets/img/product/product-07.png') }}" alt="product">
                                            <img class="pic-2" src="{{ asset('assets/img/product/product-09.png') }}" alt="product">
                                        </a>
                                        <ul class="product-links">
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-shopping-cart"></i></a></li>
                                            <li><a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">
                                            <a href="{{ route('pricing', ['id' => 8]) }}">T-shirt vert foncé</a>
                                        </h4>
                                        <div class="product-price">
                                            <span class="price-now">100.00$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6 c2 c3 c4 grid-item">
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <span class="product-badge product-badge-best">meilleure vente</span>
                                        <a href="{{ route('pricing', ['id' => 9]) }}" class="image">
                                            <img class="pic-1" src="{{ asset('assets/img/product/product-08.png') }}" alt="product">
                                            <img class="pic-2" src="{{ asset('assets/img/product/product-11.png') }}" alt="product">
                                        </a>
                                        <ul class="product-links">
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-shopping-cart"></i></a></li>
                                            <li><a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">
                                            <a href="{{ route('pricing', ['id' => 10]) }}">T-shirt blanc</a>
                                        </h4>
                                        <div class="product-price">
                                            <span class="price-old">120.00$</span>
                                            <span class="price-now">100.00$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6 c1 c3 c2 c4 grid-item">
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <a href="{{ route('pricing', ['id' => 13]) }}" class="image">
                                            <img class="pic-1" src="{{ asset('assets/img/product/product-04.png') }}" alt="product">
                                            <img class="pic-2" src="{{ asset('assets/img/product/product-02.png') }}" alt="product">
                                        </a>
                                        <ul class="product-links">
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-shopping-cart"></i></a></li>
                                            <li><a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">
                                            <a href="{{ route('pricing', ['id' => 14]) }}">Carte de visite</a>
                                        </h4>
                                        <div class="product-price">
                                            <span class="price-old">90.00$</span>
                                            <span class="price-now">70.00$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6 c2 c4 grid-item">
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <span class="product-badge product-badge-off">10% off</span>
                                        <a href="{{ route('pricing', ['id' => 15]) }}" class="image">
                                            <img class="pic-1" src="{{ asset('assets/img/product/product-07.png') }}" alt="product">
                                            <img class="pic-2" src="{{ asset('assets/img/product/product-10.png') }}" alt="product">
                                        </a>
                                        <ul class="product-links">
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-shopping-cart"></i></a></li>
                                            <li><a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">
                                            <a href="shop-details.html">T-shirts hommes</a>
                                        </h4>
                                        <div class="product-price">
                                            <span class="price-old">90.00$</span>
                                            <span class="price-now">70.00$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6 c1 c2 c3 c4 grid-item">
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <span class="product-badge product-badge-off">10% off</span>
                                        <a href="shop-details.html" class="image">
                                            <img class="pic-1" src="{{ asset('assets/img/product/product-12.png') }}" alt="product">
                                            <img class="pic-2" src="{{ asset('assets/img/product/product-06.png') }}" alt="product">
                                        </a>
                                        <ul class="product-links">
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-shopping-cart"></i></a></li>
                                            <li><a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                                            <li><a href="{{ route('cart') }}"><i class="fal fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">
                                            <a href="shop-details.html">T-shirts noirs</a>
                                        </h4>
                                        <div class="product-price">
                                            <span class="price-old">100.00$</span>
                                            <span class="price-now">90.00$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <div class="col-xl-6">
                            <div class="cp-product-view t-center mb-10">
                                <a href="{{ route('pricing') }}" class="cp-border-btn">
                                    Voir plus de produit
                                    <span class="cp-border-btn__inner">
                                        <span class="cp-border-btn__blobs">
                                            <span class="cp-border-btn__blob"></span>
                                            <span class="cp-border-btn__blob"></span>
                                            <span class="cp-border-btn__blob"></span>
                                            <span class="cp-border-btn__blob"></span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product area end  -->

            <!-- shop modal start -->
            <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                    <div class="modal-content">
                        <div class="product__modal-wrapper p-relative">
                            <div class="product__modal-close p-absolute">
                                <button data-bs-dismiss="modal">
                                    <i class="fal fa-times"></i>
                                </button>
                            </div>
                            <div class="product__modal-inner">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="product__modal-box">
                                            <div class="tab-content" id="modalTabContent">
                                                <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="{{ asset('assets/img/product/product-06.png') }}" alt="img not found">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="{{ asset('assets/img/product/product-07.png') }}" alt="img not found">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="{{ asset('assets/img/product/product-10.png') }}" alt="img not found">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="{{ asset('assets/img/product/product-12.png') }}" alt="img not found">
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                                        <img src="{{ asset('assets/img/product/product-06.png') }}" alt="img not found">
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                                        <img src="{{ asset('assets/img/product/product-07.png') }}" alt="img not found">
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                                        <img src="{{ asset('assets/img/product/product-10.png') }}" alt="img not found">
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                                        <img src="{{ asset('assets/img/product/product-12.png') }}" alt="img not found">
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="product__modal-content">
                                            <h4>
                                                <a href="{{ route('pricing', ['id' => 13]) }}">raifort citron vert</a>
                                            </h4>
                                            <div class="product__modal-des mb-40">
                                                <p>
                                                    Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt
                                                </p>
                                            </div>
                                            <div class="product__stock">
                                                <span>Disponibilité :</span>
                                                <span>En stock</span>
                                            </div>
                                            <div class="product__stock sku mb-30">
                                                <span>SKU :</span>
                                                <span>Juicera C49J89: £875, Debenhams Plus</span>
                                            </div>
                                            <div class="product__review d-sm-flex">
                                                <div class="rating rating__shop mb-15">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product__add-review mb-15">
                                                    <span><a href="{{ route('contact') }}">1 commentaire</a></span>
                                                    <span><a href="{{ route('contact') }}">Ajouter un commentaire</a></span>
                                                </div>
                                            </div>
                                            <div class="product__price">
                                                <span>$59.00</span>
                                            </div>
                                            <div class="product__modal-form">
                                                <div class="product-quantity-cart mb-30">
                                                    <div class="product-quantity-form">
                                                        <form action="#">
                                                            <button class="cart-minus">
                                                                <i class="far fa-minus"></i>
                                                            </button>
                                                            <input class="cart-input" type="text" value="1">
                                                            <button class="cart-plus">
                                                                <i class="far fa-plus"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <a href="{{ route('cart') }}" class="cp-border-btn">
                                                        Ajouter au panier
                                                        <span class="cp-border-btn__inner">
                                                            <span class="cp-border-btn__blobs">
                                                                <span class="cp-border-btn__blob"></span>
                                                                <span class="cp-border-btn__blob"></span>
                                                                <span class="cp-border-btn__blob"></span>
                                                                <span class="cp-border-btn__blob"></span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product__modal-links">
                                                <ul>
                                                    <li>
                                                        <a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Compare"><i class="far fa-sliders-h"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Print"><i class="fal fa-print"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Share"><i class="fal fa-share-alt"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shop modal end -->

            <!-- testimonial 2 area start here  -->
            <section class="cp-testimonial2-area pt-75 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-9">
                            <div class="cp-testimonial2-title-wrap mb-60 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                <div class="cp-section-title">
                                    <span class="cp-subtitle mb-15">Témoignage</span>
                                    <h2 class="cp-title mb-25">Ce que nos <span>clients</span> disent</h2>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-7">
                            <div class="cp-testimonial2-item-wrap mb-60 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.6s">
                                <div class="swiper-container cp-testimonial2-active">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="cp-testimonial2-item">
                                                <div class="cp-testimonial2-text p-relative">
                                                    <div class="cp-testimonial2-icon cp-testimonial2-icon1 p-absolute">
                                                        <i class="fas fa-quote-right"></i>
                                                    </div>
                                                    <div class="cp-testimonial2-icon cp-testimonial2-icon2 p-absolute">
                                                        <i class="fas fa-quote-right"></i>
                                                    </div>
                                                    <p>
                                                        Je travaille sur de nombreux projets, il dépasse toujours mes attentes avec son travail de qualité et son service rapide. Continuez ce bon travail.
                                                    </p>
                                                </div>
                                                <div class="cp-testimonial2-author">
                                                    <div class="cp-testimonial2-author-img">
                                                        <img src="{{ asset('assets/img/testimonial/testimonial-author-1.jpg') }}" alt="testimonial">
                                                    </div>
                                                    <div class="cp-testimonial2-author-text">
                                                        <h3>Marvin McKinney</h3>
                                                        <span>Fondateur & PDG</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="cp-testimonial2-item">
                                                <div class="cp-testimonial2-text p-relative">
                                                    <div class="cp-testimonial2-icon cp-testimonial2-icon1 p-absolute">
                                                        <i class="fas fa-quote-right"></i>
                                                    </div>
                                                    <div class="cp-testimonial2-icon cp-testimonial2-icon2 p-absolute">
                                                        <i class="fas fa-quote-right"></i>
                                                    </div>
                                                    <p>
                                                        L'impression à piqûre à cheval peut être utilisée à diverses fins, telles que l'auto-édition de votre propre architecture, recherche, maison, vente aux enchères.
                                                    </p>
                                                </div>
                                                <div class="cp-testimonial2-author ml-40">
                                                    <div class="cp-testimonial2-author-img">
                                                        <img src="{{ asset('assets/img/testimonial/testimonial-author-2.jpg') }}" alt="testimonial">
                                                    </div>
                                                    <div class="cp-testimonial2-author-text">
                                                        <h3>Jumble D. Dowson</h3>
                                                        <span>Foudateur</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-none d-sm-block">
                                    <div class="cp-testimonial2-nav cp-slider-round-button-wrap d-flex justify-content-end cp-test-space zi-5 p-relative">
                                        <div class="cp-slider-round-button cp-testimonial2-button-prev">
                                            <i class="fas fa-chevron-left"></i>
                                        </div>
                                        <div class="cp-slider-round-button cp-testimonial2-button-next">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial 2 area end here  -->

@endsection
