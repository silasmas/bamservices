@extends('layouts.guest')

@section('guest-content')

            <!-- page title area start  -->
            <section class="page-title-area breadcrumb-spacing cp-bg-14">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-9">
                            <div class="page-title-wrapper t-center">
                                <h3 class="page-title mb-10">A propos de nous</h3>
                                <div class="breadcrumb-menu d-flex justify-content-center">
                                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                        <ul class="trail-items">
                                            <li class="trail-item trail-begin"><a href="{{ route('home') }}"><span>Accueil</span></a></li>
                                            <li class="trail-item trail-end"><span>A propos</span></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title area end  -->

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

            <!-- video area start here  -->
            <section class="cp-video-area mb-150">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="cp-video-title-wrap t-center mb-55 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                <div class="cp-section-title">
                                    <span class="cp-subtitle mb-15">voir la vidéo</span>
                                    <h2 class="cp-title mb-25">obtenir <span>des informations</span> à partir de <br> la vidéo</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cp-video-wrap wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="cp-video">
                            <video autoplay>
                                <source src="https://www.dropbox.com/s/jgeo7aa43ellilc/video.mp4?raw=1" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </section>
            <!-- video area end here  -->

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

            <!-- team area start here  -->
            <section class="cp-team-area p-relative fix white-bg pt-145 pb-150">
                <div class="container">
                    <div class="cp-team-title-wrap mb-65">
                        <div class="cp-section-title">
                            <span class="cp-subtitle mb-15 wow fadeInUp animated" data-wow-delay=".3s">Notre super équipe</span>
                            <h2 class="cp-title mb-25 wow fadeInUp animated" data-wow-delay=".4s">Découvrez l'équipe <span>MBA</span></h2>
                            <p class="mb-0 wow fadeInUp animated" data-wow-delay=".5s">
                                Impression pour ce qui est à venir. De plus, nous le faisons bien! Une <br> administration complète ; fond d'impression.
                            </p>
                        </div>
                        <div class="cp-team-btn line-height1 wow fadeInUp animated" data-wow-delay=".6s">
                            <a class="cp-btn" href="#">
                                Rejoindre notre équipe
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

                <div class="container-lg container-fluid">
                    <div class="cp-team-wrap">
                        <div class="cp-team-inner">
                            <div class="swiper-container cp-team-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="cp-team-item wow fadeInUp animated" data-wow-duration="1.5s">
                                            <div class="cp-team-social p-absolute">
                                                <a target="_blank" href="#"><i class="fab fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>
                                            </div>
                                            <div class="cp-team-img w-img mb-20">
                                                <a href="#"><img src="{{ asset('assets/img/team/team-11.png') }}" alt="team"></a>
                                            </div>
                                            <div class="cp-team-content">
                                                <h4 class="cp-team-name"><a href="#">Billy Murphy</a></h4>
                                                <span class="cp-team-position">Fondateur & PDG</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="cp-team-item wow fadeInUp animated" data-wow-duration="1.5s">
                                            <div class="cp-team-social p-absolute">
                                                <a target="_blank" href="#"><i class="fab fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>
                                            </div>
                                            <div class="cp-team-img w-img mb-20">
                                                <a href="#"><img src="{{ asset('assets/img/team/team-12.png') }}" alt="team"></a>
                                            </div>
                                            <div class="cp-team-content">
                                                <h4 class="cp-team-name"><a href="#">Mr Eli Bell</a></h4>
                                                <span class="cp-team-position">Designeur</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="cp-team-item wow fadeInUp animated" data-wow-duration="1.5s">
                                            <div class="cp-team-social p-absolute">
                                                <a target="_blank" href="#"><i class="fab fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>
                                            </div>
                                            <div class="cp-team-img w-img mb-20">
                                                <a href="#"><img src="{{ asset('assets/img/team/team-13.png') }}" alt="team"></a>
                                            </div>
                                            <div class="cp-team-content">
                                                <h4 class="cp-team-name"><a href="#">Harrison Walker</a></h4>
                                                <span class="cp-team-position">Marketeur</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="cp-team-item wow fadeInUp animated" data-wow-duration="1.5s">
                                            <div class="cp-team-social p-absolute">
                                                <a target="_blank" href="#"><i class="fab fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>
                                            </div>
                                            <div class="cp-team-img w-img mb-20">
                                                <a href="#"><img src="{{ asset('assets/img/team/team-14.png') }}" alt="team"></a>
                                            </div>
                                            <div class="cp-team-content">
                                                <h4 class="cp-team-name"><a href="#">Billy Murphy</a></h4>
                                                <span class="cp-team-position">Fondateur & PDG</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="cp-team-item wow fadeInUp animated" data-wow-duration="1.5s">
                                            <div class="cp-team-social p-absolute">
                                                <a target="_blank" href="#"><i class="fab fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>
                                            </div>
                                            <div class="cp-team-img w-img mb-20">
                                                <a href="#"><img src="{{ asset('assets/img/team/team-15.png') }}" alt="team"></a>
                                            </div>
                                            <div class="cp-team-content">
                                                <h4 class="cp-team-name"><a href="#">Mr Eli Bell</a></h4>
                                                <span class="cp-team-position">Designeur</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="cp-team-item wow fadeInUp animated" data-wow-duration="1.5s">
                                            <div class="cp-team-social p-absolute">
                                                <a target="_blank" href="#"><i class="fab fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>
                                            </div>
                                            <div class="cp-team-img w-img mb-20">
                                                <a href="#"><img src="{{ asset('assets/img/team/team-16.png') }}" alt="team"></a>
                                            </div>
                                            <div class="cp-team-content">
                                                <h4 class="cp-team-name"><a href="#">Harrison Walker</a></h4>
                                                <span class="cp-team-position">Marketeur</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="cp-team-item wow fadeInUp animated" data-wow-duration="1.5s">
                                            <div class="cp-team-social p-absolute">
                                                <a target="_blank" href="#"><i class="fab fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>
                                            </div>
                                            <div class="cp-team-img w-img mb-20">
                                                <a href="#"><img src="{{ asset('assets/img/team/team-17.png') }}" alt="team"></a>
                                            </div>
                                            <div class="cp-team-content">
                                                <h4 class="cp-team-name"><a href="#">Billy Murphy</a></h4>
                                                <span class="cp-team-position">Fondateur & PDG</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="cp-team-item wow fadeInUp animated" data-wow-duration="1.5s">
                                            <div class="cp-team-social p-absolute">
                                                <a target="_blank" href="#"><i class="fab fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>
                                            </div>
                                            <div class="cp-team-img w-img mb-20">
                                                <a href="#"><img src="{{ asset('assets/img/team/team-18.png') }}" alt="team"></a>
                                            </div>
                                            <div class="cp-team-content">
                                                <h4 class="cp-team-name"><a href="#">Billy Murphy</a></h4>
                                                <span class="cp-team-position">Fondateur & PDG</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cp-team-shape-img p-absolute m-img cp-bg-move-x">
                    <img src="{{ asset('assets/img/team/team-shape-1.png') }}" alt="team">
                </div>
            </section>
            <!-- team area end here  -->

@endsection
