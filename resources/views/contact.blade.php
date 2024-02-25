@extends('layouts.guest')

@section('guest-content')

            <!-- page title area start  -->
            <section class="page-title-area breadcrumb-spacing cp-bg-14">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-9">
                            <div class="page-title-wrapper t-center">
                                <h3 class="page-title mb-10">Nous contacter</h3>
                                <div class="breadcrumb-menu d-flex justify-content-center">
                                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                        <ul class="trail-items">
                                            <li class="trail-item trail-begin"><a href="{{ route('home') }}"><span>Accueil</span></a></li>
                                            <li class="trail-item trail-end"><span>Contact</span></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title area end  -->

            <!-- contact us area start here  -->
            <section class="cp-contact-area pt-100 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cp-contact-content mb-70 wow fadeInUp animated" data-wow-duration="1.5s">
                                <h3 class="cp-contact-title mb-20">Parlons-nous.</h3>
                                <p class="cp-contact-text mb-50">
                                    Etiam convallis, felis quis dapibus dictum, libero mauris luctus nunc, <br> fringilla purus ligula non justo. Non fringilla purus ligula justo.
                                </p>
                                <div class="cp-contact-info mb-50">
                                    <ul>
                                        <li>
                                            <i class="far fa-phone-alt fs-5 text-primary"></i><a href="tel:+8801761111456"> +8801761111456 / +88017 45682 156</a>
                                        </li>
                                        <li><i class="fal fa-envelope fs-5 text-danger"></i><a href="mailto:info@example.com"> info@example.com</a></li>
                                        <li>
                                            <i class="fal fa-home-lg-alt fs-5 text-success"></i><a target="_blank" href="https://www.google.com/maps/@23.7739014,90.3640911,17z"> 23/6 Rupayan Shelford Tower,16th Floor, <br> Shyamoli, Dhaka</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="cp-contact-subtitle">Heures administratives</h4>
                                <p class="cp-contact-text mb-0">Nous sommes disponibles de 10h00 à 19h00 EST, <br> 05 jours par semaine.</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="cp-contact-form-wrap mb-70 wow fadeInUp animated" data-wow-duration="1.5s">
                                <h3 class="cp-contact-title mb-25">Envoyez-nous un message</h3>
                                <div class="cp-contact-form">
                                    <form action="#">
                                        <div class="cp-input-field">
                                            <label for="name">Votre nom (obligatoire)</label>
                                            <input type="text" required id="name" required>
                                            <i class="far fa-user"></i>
                                        </div>
                                        <div class="cp-input-field">
                                            <label for="email">Téléphone (obligatoire)</label>
                                            <input type="text" required id="phone" required>
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="cp-input-field">
                                            <label for="email">Votre e-mail (obligatoire)</label>
                                            <input type="text" required id="email" required>
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                        <div class="cp-input-field textarea">
                                            <label for="message">Tapez votre message</label>
                                            <textarea id="message" cols="30" rows="10" required></textarea>
                                            <i class="far fa-edit"></i>
                                        </div>
                                        <button type="submit" class="cp-border-btn mt-15">
                                            Envoyer message
                                            <span class="cp-border-btn__inner">
                                                <span class="cp-border-btn__blobs">
                                                    <span class="cp-border-btn__blob"></span>
                                                    <span class="cp-border-btn__blob"></span>
                                                    <span class="cp-border-btn__blob"></span>
                                                    <span class="cp-border-btn__blob"></span>
                                                </span>
                                            </span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact us area end here  -->

            <!-- contact map start here  -->
            <div class="et-contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3651.2558648718878!2d90.3640911!3d23.7739014!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1671686942444!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- contact map end here  -->

@endsection
