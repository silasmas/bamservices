
            <!-- page title area start  -->
            <section class="page-title-area breadcrumb-spacing cp-bg-14">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-9">
                            <div class="page-title-wrapper t-center">
                                <h3 class="page-title mb-10">Nos services</h3>
                                <div class="breadcrumb-menu d-flex justify-content-center">
                                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                        <ul class="trail-items">
                                            <li class="trail-item trail-begin"><a href="{{ route('home') }}"><span>Accueil</span></a></li>
                                            <li class="trail-item trail-end"><span>Services</span></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title area end  -->

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
                    </div>
                </div>
            </section>
            <!-- services area end here  -->

            <!-- cta 2 area start  -->
            <section class="cp-cta2-area pt-130 pb-120 cp-video-overlay bg-fixed bg-css" data-background="{{ asset('assets/img/cta/cta-img2.jpg') }}" data-wow-duration="1.5s" data-wow-delay="0.3">
                <div class="container">
                    <div class="cp-cta2-wrap scene d-flex align-items-center justify-content-between wow fadeInUp animated" data-wow-duration="2.3s" data-wow-delay="0.3s">
                        <div class="cp-cta2-title mb-20">
                            <h3>Obtenez une consultation gratuite pour votre solution d'impression</h3>
                        </div>
                        <div class="cp-cta2-btn mb-20">
                            <a href="{{ route('contact') }}" class="cp-border-btn">
                                Demander&nbsp;un&nbsp;devis
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
            </section>
            <!-- cta 2 area end  -->

            <!-- brand area start here  -->
            <div class="cp-brand-area pt-150 pb-150">
                <div class="container">
                    <div class="row wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3">
                        <div class="col-xl-12">
                            <div class="cp-brand-wrap">
                                <div class="swiper-container cp-brand-active">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="cp-brand-img m-img">
                                                <img src="{{ asset('assets/img/brand/brand-1.png') }}" alt="brand">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="cp-brand-img m-img">
                                                <img src="{{ asset('assets/img/brand/brand-2.png') }}" alt="brand">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="cp-brand-img m-img">
                                                <img src="{{ asset('assets/img/brand/brand-3.png') }}" alt="brand">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="cp-brand-img m-img">
                                                <img src="{{ asset('assets/img/brand/brand-4.png') }}" alt="brand">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="cp-brand-img m-img">
                                                <img src="{{ asset('assets/img/brand/brand-5.png') }}" alt="brand">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand area end here  -->
