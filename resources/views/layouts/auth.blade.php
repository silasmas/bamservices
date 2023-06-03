<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('assets/css/fontAwesome5Pro.css') }}">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{ asset('assets/css/preloader.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/backToTop.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/ui-range-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/hover-reveal.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

        <title>
@if (Route::is('login'))
            Se connecter
@endif
@if (Route::is('register'))
            Inscription
@endif
        </title>
    </head>

    <body>
        <!-- preloader  -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="B" class="letters-loading">B</span>
                        <span data-text-preloader="A" class="letters-loading">A</span>
                        <span data-text-preloader="M" class="letters-loading">M</span>
                    </div>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"><span>Drag</span></div>

        <div class="offcanvas-overlay"></div>
        <div class="offcanvas-overlay-white"></div>

        <!-- Add your site or application content here -->
        <main>

@yield('auth-content')

            <!-- floating area start here  -->
            <div class="cp-floating-area d-none d-md-block zi-1100 p-relative ">
                <div class="cp-floating-action cp-bg-move-y">
                    <span class="cp-floating-btn cp-floating-phone-btn cp" data-bs-toggle="modal" data-bs-target="#phonePopup"><i class="fal fa-phone-alt"></i></span>
                    <span class="cp-floating-btn cp-floating-location-btn cp" data-bs-toggle="modal" data-bs-target="#locationPopup"><i class="fal fa-location-arrow"></i></span>
                    <span class="cp-floating-btn cp-floating-form-btn cp" data-bs-toggle="modal" data-bs-target="#formPopup"><i class="fal fa-envelope-open-text"></i></span>
                </div>

                <!-- phone Modal start -->
                <div class="modal fade cp-floating-model" id="phonePopup" data-bs-keyboard="false" tabindex="-1" aria-labelledby="phonePopupLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            <div class="cp-floating-item cp-phone-popup" id="phonePopupLabel">
                                <div class="cp-floating-left w-img">
                                    <img src="{{ asset('assets/img/cta/popup2.jpg') }}" alt="contact">
                                </div>
                                <div class="cp-floating-text">
                                    <h4 class="cp-floating-title">Nos <span>Heures Ouvrables</span></h4>
                                    <div class="cp-floating-text-inner">
                                        <span class="cp-floating-text-inner-icon">
                                            <i class="fal fa-calendar-day"></i>
                                        </span>
                                        <span class="cp-floating-text-inner-text">lundi - dimanche</span>
                                    </div>
                                    <div class="cp-floating-text-inner">
                                        <span class="cp-floating-text-inner-icon">
                                            <i class="fal fa-watch"></i>
                                        </span>
                                        <span class="cp-floating-text-inner-text">08h00' - 21h00'</span>
                                    </div>
                                    <div class="cp-floating-text-inner">
                                        <span class="cp-floating-text-inner-icon">
                                            <i class="far fa-phone-alt"></i>
                                        </span>
                                        <span class="cp-floating-text-inner-text"><a href="tel:+910265362003">+910265362003</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- phone Modal end -->
        
                <!-- location Modal start -->
                <div class="modal fade cp-floating-model" id="locationPopup" data-bs-keyboard="false" tabindex="-1" aria-labelledby="locationPopupLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="cp-floating-item cp-location-popup" id="locationPopupLabel">
                                <div class="cp-floating-left">
                                    <div class="cp-floating-location">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99370.14184006557!2d-77.0846156762382!3d38.89386718919168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sbd!4v1671881294236!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                                <div class="cp-floating-text">
                                    <h4 class="cp-floating-title">Concernant <span>nos adresses</span></h4>
                                    <div class="cp-floating-text-inner">
                                        <span class="cp-floating-text-inner-icon">
                                            <i class="fal fa-location-arrow"></i>
                                        </span>
                                        <span class="cp-floating-text-inner-text">
                                            <a target="_blank" href="https://www.google.com/maps/@38.8938672,-77.0846157,12z">1234, Av. Lorem, Q/ Ipsum</a>
                                        </span>
                                    </div>
                                    <div class="cp-floating-text-inner">
                                        <span class="cp-floating-text-inner-icon">
                                            <i class="fal fa-location-arrow"></i>
                                        </span>
                                        <span class="cp-floating-text-inner-text">
                                            <a target="_blank" href="https://www.google.com/maps/@1.952577,44.3912535,3z">5678, Av. Dolor, Q/ Sit amet</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- location Modal end -->

                <!-- form Modal start -->
                <div class="modal fade cp-floating-model" id="formPopup" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formPopupLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="cp-floating-item" id="formPopupLabel">
                                <div class="cp-floating-form-img w-img">
                                    <img src="{{ asset('assets/img/cta/cta-img.jpg') }}" alt="contact">
                                </div>
                                <div class="cp-floating-left cp-signup-popup">
                                    <h3 class="cp-floating-title">Avez-vous une question?</h3>
                                    <div class="cp-floating-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="cp-input-field">
                                                        <label for="name">Votre nom</label>
                                                        <input type="text" id="name">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="cp-input-field">
                                                        <label for="email">Votre E-mail</label>
                                                        <input type="email" id="email">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="cp-input-field">
                                                        <label for="message">Votre question</label>
                                                        <textarea id="message" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="cp-btn mt-20">
                                                Envoyer la question
                                                <span class="cp-btn__inner">
                                                    <span class="cp-btn__blobs">
                                                        <span class="cp-btn__blob"></span>
                                                        <span class="cp-btn__blob"></span>
                                                        <span class="cp-btn__blob"></span>
                                                        <span class="cp-btn__blob"></span>
                                                    </span>
                                                </span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- form Modal end -->
            </div>
            <!-- floating area end here  -->
        </main>

        <!-- footer area start  -->
        <footer>
            <div class="cp-footer2-area p-relative cp-bg-17 zi-1 pt-145">
                <div class="cp-footer2-shape one cp-bg-move-xy zi--1">
                    <img src="{{ asset('assets/img/footer/footer-shape-2.png') }}" alt="footer-shape">
                </div>
                <div class="cp-footer2-shape two cp-bg-move-xy zi--1">
                    <img src="{{ asset('assets/img/footer/footer-shape-3.png') }}" alt="footer-shape">
                </div>

                <div class="container">
                    <div class="cp-footer2-wrap mb-80">
                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                                <div class="cp-footer2-widget mb-60">
                                    <div class="logo mb-20">
                                        <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/logo-white.png') }}" alt="logo" width="200"></a>
                                    </div>

                                    <span class="cp-footer2-location">
                                        <i class="fal fa-map-marker-alt"></i>
                                        <a target="_blank" href="#">
                                            1234 Av. Lorem, Q/ Ipsum <br> Kinshasa/Sitamet
                                        </a>
                                    </span>
                                </div>
                            </div>

                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                                <div class="cp-footer2-widget mb-60">
                                    <h3 class="cp-footer2-widget-title">Intégration</h3>
                                    <div class="cp-footer2-widget-link">
                                        <ul>
                                            <li><a href="#">Vente en ligne</a></li>
                                            <li><a href="#">Lévée de fonds</a></li>
                                            <li><a href="#">Commandes perso</a></li>
                                            <li><a href="#">Pour les créateurs</a></li>
                                            <li><a href="#">Créateurs Youtube</a></li>
                                            <li><a href="#">Online stores</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                                <div class="cp-footer2-widget mb-60">
                                    <h3 class="cp-footer2-widget-title">Découvrir</h3>
                                    <div class="cp-footer2-widget-link">
                                        <ul>
                                            <li><a href="#">Nos maquettes</a></li>
                                            <li><a href="#">Frais de livraison</a></li>
                                            <li><a href="#">Demander un devis</a></li>
                                            <li><a href="{{ route('pricing') }}">Catalogue de produits</a></li>
                                            <li><a href="#">Pour les créateurs</a></li>
                                            <li><a href="#">Nouveauté</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                                <div class="cp-footer2-widget mb-60">
                                    <h3 class="cp-footer2-widget-title">SOCIETE</h3>
                                    <div class="cp-footer2-widget-link">
                                        <ul>
                                            <li><a href="{{ route('about') }}">A propos</a></li>
                                            <li><a href="{{ route('service') }}">Nos services</a></li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                            <li><a href="#">Commentaires</a></li>
                                            <li><a href="#">Carrières</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                                <div class="cp-footer2-widget mb-60">
                                    <h3 class="cp-footer2-widget-title">Newsletter</h3>
                                    <p class="mb-25">Recevez les dernières nouvelles, les événements et plus encore dans votre boîte de réception.</p>
                                    <div class="cp-footer2-subscribe p-relative mb-35">
                                        <form action="#">
                                            <input type="email" placeholder="Entrer votre e-mail">
                                            <button class="cp-footer2-subscribe-btn" type="submit"><i class="fas fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                    <div class="cp-footer2-social">
                                        <ul>
                                            <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a target="_blank" href="#"><i class="fab fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="cp-copy2-border">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="cp-copy2-text">
                                    <p>Copyright {{ date('Y') }} BAM Services | Design By <a target="_blank" href="#">SDEV</a></p>
                                </div>
                            </div>
                
                            <div class="col-lg-4">
                                <div class="cp-footer2-page text-lg-end mb-10">
                                    <ul>
                                        <li><a href="#">Confidentialité et conditions d'utilisation</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end  -->

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

        <!-- JavaSript -->
        <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
        <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
        <script src="{{ asset('assets/js/backToTop.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui-slider-range.js') }}"></script>
        <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
        <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/beforeafter.jquery-1.0.0.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.ez-plus.js') }}"></script>
        <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/hover-reveal.js') }}"></script>
        <script src="{{ asset('assets/js/tween-max.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
