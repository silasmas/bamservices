
{!! banniereMenu("Nos services", "Détails ".titreService(request('id')), route('service')) !!}

<!-- service area start here  -->
<section class="cp-news-details-area white-bg pt-150 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">

            @switch(request('id'))
            @case(1)
                <div class="cp-news-details-wrap mb-60 pr-30">
                    <div class="wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3">
                        <div class="cp-news-details-img w-img p-relative">
                            <div class="cp-img-overlay wow"></div>
                            <img src="{{ asset('assets/img/service/s1.jpg') }}" height="500" alt="services">
                        </div>
                    </div>

                    <div class="cp-news-details-content mb-40">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cp-news-details-content mb-40">
                                <h2 class="cp-news2-title mb-25">Support papier et finissage :</h2>
                                <div class="cp-list mb-25">
                                    <ul>
                                        <li>Impression sur tout format, en diffèrent grammage - Autocollant;
                                        </li>
                                        <li>Travaux de ville (invitation, carte de visite, etc...);</li>
                                        <li>Travaux de fin d'étude, mémoire, etc...;</li>
                                        <li>Papier entête;</li>
                                        <li>Facturier autocopiant;</li>
                                        <li>Journaux de classe;</li>
                                        <li>Syllabus;</li>
                                        <li>Finition: reliure à cheval, lamination;</li>
                                    </ul>
                                </div>
                                <h2 class="cp-news2-title mb-25">Impression textile :</h2>
                                <div class="cp-list mb-25">
                                    <ul>
                                        <li>Sérigraphie sur t-shirt coton, polyester;</li>
                                        <li>Sublimation sur polyester;</li>
                                        <li>Flocage sur t-shirt coton, polyester;</li>
                                        <li>Casquette;</li>
                                        <li>Lanières;</li>
                                        <li>Drapelet;</li>
                                    </ul>
                                </div>
                                <h2 class="cp-news2-title mb-25">Impression gadget :</h2>
                                <div class="cp-list mb-25">
                                    <ul>
                                        <li>Tasse;</li>
                                        <li>Cristal;</li>
                                        <li>Cadre photo (simple et chevalet);</li>
                                        <li>Stylos;</li>
                                        <li>Pins;</li>
                                        <li>Porte clé;</li>
                                        <li>Trophet crystal;</li>
                                    </ul>
                                </div>
                                <h2 class="cp-news2-title mb-25">Impression grand format :</h2>
                                <div class="cp-list mb-25">
                                    <ul>
                                        <li>Bâche;</li>
                                        <li>Banderole;</li>
                                        <li>Drapeau - Vinyl;</li>
                                        <li>One way vision;</li>
                                        <li>Plexi;</li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            @break
            @case(2)
                <div class="cp-news-details-wrap mb-60 pr-30">
                    <div class="wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3">
                        <div class="cp-news-details-img w-img p-relative">
                            <div class="cp-img-overlay wow"></div>
                            <img src="{{ asset('assets/img/service/s2.jpg') }}" height="500" alt="services">
                        </div>
                        <div class="cp-news-details-content mb-40">
                            <div class="col-xl-8 col-lg-7">
                                    <h2 class="cp-news2-title mb-25">

                                    </h2>
                                    <p class="cp-news-details-text mb-0">
                                        Nous accompagnons votre projet de mariage, de l'élaboration de votre concept, passant la conception graphique jusqu'à la distribution des invitations aux participants.
                                        Gagnez entemps, et faites voséconomies. Nous sommes votre partenaire idéal.
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            @break
            @case(3)
            <div class="cp-news-details-wrap mb-60 pr-30">
                <div class="wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3">
                    <div class="cp-news-details-img w-img p-relative">
                        <div class="cp-img-overlay wow"></div>
                        <img src="{{ asset('assets/img/service/s4.jpg') }}" height="500" alt="services">
                    </div>
                </div>

                <div class="cp-news-details-content mb-40">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cp-news-details-content mb-40">
                            <h2 class="cp-news2-title mb-25">Solution digitales :</h2>
                            <div class="cp-list mb-25">
                                <ul>
                                    <li>Conception site web (statique et dynamique) avec mail professionnel;</li>
                                    <li>Community management (gestion de réseaux sociaux, pour la croissance de l'engagement des prospects);</li>
                                    <li>Accompagnement techniques (mise à jour des site internet);</li>
                                </ul>
                            </div>
                            <h2 class="cp-news2-title mb-25">Conceptions graphiques :</h2>
                            <div class="cp-list mb-25">
                                <ul>
                                    <li>Conception logo et charte graphique;</li>
                                    <li>Couverture visuelle des évènements;</li>
                                    <li>Conception support graphiques (affiche, dépliant, cartes de visites, invitations);</li>
                                    <li>Mise en page livres et magasine;</li>
                                    <li>Accompagnement wedding;</li>
                                </ul>
                            </div>
                            <h2 class="cp-news2-title mb-25">Autres supports :</h2>
                            <div class="cp-list mb-25">
                                <ul>
                                    <li>Carte ID PVC;</li>
                                    <li>Tampon (sceau);</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @break
            @case(4)
            <div class="cp-news-details-wrap mb-60 pr-30">
                <div class="wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3">
                    <div class="cp-news-details-img w-img p-relative">
                        <div class="cp-img-overlay wow"></div>
                        <img src="{{ asset('assets/img/service/s3.jpg') }}" height="500" alt="services">
                    </div>
                    <div class="cp-news-details-content mb-40">
                        <div class="col-xl-8 col-lg-7">
                                <h2 class="cp-news2-title mb-25">
Qualité et moindre coût
                                </h2>
                                <p class="cp-news-details-text mb-0">
                                    Nous sommes spécialisé en vente des T-shirt coton et Flex pour vos impressions de qualité.
                                </p>
                                <p class="cp-news-details-text mb-0">
                                    Nous Vendons aussi des consommables KONICA en outre les cartuches, les encres et toute pièce liée à cette machine Laser.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            @break
            @default

            @endswitch

            <div class="cp-news-details-content mb-40">
                <div class="cp-faq-wrap mb-60">
                    <h3 class="cp-news2-subtitle mb-25 wow fadeInUp animated" data-wow-delay="0.3s">Questions
                        courantes
                        pour le service.</h3>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item wow fadeInUp animated" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Le blanc est-il assez épais pour être porté seul ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Communications det, consec tetur adipiscing elit duis nec fringi
                                    communications
                                    company We build and activate brands through cultural insight, str vision,
                                    and.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp animated" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Nous fournissons une impression rapide à la demande
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Communications det, consec tetur adipiscing elit duis nec fringi
                                    communications
                                    company We build and activate brands through cultural insight, str vision,
                                    and.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp animated" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Activez les marques grâce à un aperçu culturel
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Communications det, consec tetur adipiscing elit duis nec fringi
                                    communications
                                    company We build and activate brands through cultural insight, str vision,
                                    and.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp animated" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    Quelle couleur est la plus foncée : vert persistant ou vert chasseur ?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Communications det, consec tetur adipiscing elit duis nec fringi
                                    communications
                                    company We build and activate brands through cultural insight, str vision,
                                    and.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-5">
                <div class="cp-news-sidebar mb-60">
                    <div class="cp-news-widget mb-40 wow fadeInUp animated" data-wow-duration="1.5s"
                        data-wow-delay="0.3">
                        <h4 class="cp-news-widget-title">Autres services</h4>
                        <div class="cp-news-widget-cat">
                            <ul>
                                <li><a href="{{ route('service.datas', ['id' => 1]) }}">Imprimerie<span><i
                                                class="fal fa-angle-right"></i></span></a></li>
                                <li><a href="{{ route('service.datas', ['id' => 2]) }}">Communication <span><i
                                                class="fal fa-angle-right"></i></span></a></li>
                                <li><a href="{{ route('service.datas', ['id' => 3]) }}">Evénementiel <span><i
                                                class="fal fa-angle-right"></i></span></a></li>
                                <li><a href="{{ route('service.datas', ['id' => 4]) }}">Ventes<span><i
                                                class="fal fa-angle-right"></i></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="cp-service-banner mb-40 wow fadeInUp animated" data-wow-duration="1.5s"
                        data-wow-delay="0.3">
                        <div class="cp-service-banner-img w-img">
                            <img src="{{ asset('assets/img/service/services-10.jpg') }}" alt="services">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service area end here  -->
