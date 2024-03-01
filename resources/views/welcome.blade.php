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
                                                    BAM est une entreprise spécialisée en communication visuelle qui offre des solutions adaptées dans le domaine d’imprimerie, graphisme,  solutions digitales et affichage. Nous offrons les imprimés sur textile, papier, impression numérique grand format et gadgets
                                                </p>

                                                <div class="cp-banner2-btn" data-animation="fadeInUp" data-delay="0.5s">
                                                    <a href="#" class="cp-btn">
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
                                                        <img src="{{ asset('assets/images/galerie1.jpg') }}" alt="banner">
                                                    </div>
                                                    <div class="cp-banner2-img3 p-absolute w-img br-img-50 d-none d-sm-block">
                                                        <img src="{{ asset('assets/images/galerie2.jpg') }}" alt="banner">
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
                    <img src="{{ asset('assets/img/service/s7.png') }}" alt="img not found">
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
                        <div class="col-xl-6 col-lg-10 d-none d-xl-block">
                            <div class="cp-services-title-wrap space cp-section-title mb-30 ml-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.9s">
                                <span class="cp-subtitle mb-15">Nos Principaux Services</span>
                                <h2 class="cp-title mb-25"><span>Solutions d'impression</span> personnalisées à guichet unique</h2>
                                <p class="mb-50">
                                    Nous vous offrons un service personnalisé, adapté à vos besoins. Nous sommes conscient des exigences et de la compétitive professionnelle liées au délais, c'est pourquoi nous vous offrons un service rapide lors de l'exécution de vos projets.
                                    BAM c'est aussi de la créativité, de l'originalité dans la création graphique de chaque design.
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
                                    <img src="{{ asset('assets/img/service/s1.jpg') }}" alt="img not found">
                                </div>
                                <h4 class="cp-services-title"><a href="{{ route('service.datas', ['id' => 1]) }}">Imprimerie</a></h4>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="cp-services-item t-center mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay=".4s">
                                <span class="cp-services-num">02</span>
                                <div class="cp-services-img w-img">
                                    <img src="{{ asset('assets/img/service/s2.jpg') }}" alt="img not found">
                                </div>
                                <h4 class="cp-services-title"><a href="{{ route('service.datas', ['id' => 2]) }}">Communication</a></h4>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="cp-services-item t-center mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay=".5s">
                                <span class="cp-services-num">03</span>
                                <div class="cp-services-img w-img">
                                    <img src="{{ asset('assets/img/service/s4.jpg') }}" alt="img not found">
                                </div>
                                <h4 class="cp-services-title"><a href="{{ route('service.datas', ['id' => 3]) }}">Evénementiel</a></h4>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="cp-services-item t-center mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay=".6s">
                                <span class="cp-services-num">04</span>
                                <div class="cp-services-img w-img">
                                    <img src="{{ asset('assets/img/service/s3.jpg') }}" alt="img not found">
                                </div>
                                <h4 class="cp-services-title"><a href="{{ route('service.datas', ['id' => 4]) }}">Ventes</a></h4>
                            </div>
                        </div>

                        {{-- <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="cp-services-item t-center mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.7">
                                <span class="cp-services-num">05</span>
                                <div class="cp-services-img w-img">
                                    <img src="{{ asset('assets/img/service/services-5.jpg') }}" alt="img not found">
                                </div>
                                <h4 class="cp-services-title"><a href="{{ route('service.datas', ['id' => 5]) }}">Conception stationnaire</a></h4>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="cp-services-item t-center mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.8s">
                                <span class="cp-services-num">06</span>
                                <div class="cp-services-img w-img">
                                    <img src="{{ asset('assets/img/service/services-6.jpg') }}" alt="img not found">
                                </div>
                                <h4 class="cp-services-title"><a href="{{ route('service.datas', ['id' => 6]) }}">Conception cartes de bannière</a></h4>
                            </div>
                        </div> --}}


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
                                        <img src="{{ asset('assets/img/about/T-shirt1.jpg') }}" alt="about3">
                                        <img src="{{ asset('assets/img/about/T-shirt1.jpg') }}" alt="about3">
                                    </div>
                                    <div class="cp-about2-video p-absolute">
                                        <a class="popup-video play-btn" href="https://www.youtube.com/watch?v=ngmFMTeIl5A"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="cp-about2-img-sub zi-100 w-img p-absolute d-none d-sm-block">
                                    <img src="{{ asset('assets/images/250x190.jpg') }}" alt="about4">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-10">
                            <div class="cp-about2-content mb-60">
                                <div class="cp-section-title">
                                    <span class="cp-subtitle mb-15 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3s">A propos de nous</span>
                                    <h2 class="cp-title mb-25 wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0.4s">
                                        Qu'est-ce que <b>BAM</b>
                                        {{-- <span>à la demande et comment</span> ça marche ? --}}
                                    </h2>
                                </div>
                                <p class="cp-about2-text mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                    BAM Services, une entreprise de communications graphiques axée sur les solutions, qui a réussi à connecter les marques aux consommateurs.
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
                                                <img src="{{ asset('assets/images/330x439.jpg') }}" alt="choose">
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
                                                    <img src="{{ asset('assets/images/330x552.jpg') }}" alt="choose">
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
                                @forelse ($categorie as $cat)
                                <button data-filter="{{ ".".$cat->categorie }}">{{ $cat->categorie }}</button>
                                {{-- <button data-filter=".c2">T-Shirt Homme</button>
                                <button data-filter=".c3">T-Shirt Femme</button> --}}

                                @empty

                                @endforelse
                            </div>
                        </div>
                    </div>

                    <div class="cp-product-wrap mb-20 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div class="row grid">
                           @forelse ($prod as $p)
                           <div class="col-xl-3 col-lg-4 col-sm-6 {{ $p->categorie }} grid-item">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="{{ asset('assets/img/product/'.$p->img1) }}" data-bs-toggle="modal" data-bs-target="{{"#produit".$p->id}}" class="image">
                                        <img class="pic-1" src="{{ asset('assets/img/product/'.$p->img2) }}" alt="product">
                                        <img class="pic-2" src="{{ asset('assets/img/product/'.$p->img3) }}" alt="product">
                                    </a>
                                    <ul class="product-links">
                                        <li id="{{ $p->id }}" onclick="addToCard(this)"><a href="#" ><i class="fal fa-shopping-cart"></i></a></li>
                                        <li><a href="{{ asset('assets/img/product/'.$p->img1) }}" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                                        {{-- <li><a href="{{ route('cart') }}"><i class="fal fa-heart"></i></a></li> --}}
                                    </ul>
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">
                                        <a href="{{ asset('assets/img/product/'.$p->img1) }}" data-bs-toggle="modal" data-bs-target="#productModalId">{{ $p->nom }}</a>
                                    </h4>
                                    <div class="product-price">
                                        {{-- <span class="price-old">139.00$</span> --}}
                                        <span class="price-now">{{ $p->prix.''.$p->monaie }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                           @empty

                           @endforelse

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

           @include("parties.modale")

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
