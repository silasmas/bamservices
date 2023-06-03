@extends('layouts.guest')

@section('guest-content')

            <!-- page title area start  -->
            <section class="page-title-area breadcrumb-spacing cp-bg-14">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-9">
                            <div class="page-title-wrapper t-center">
                                <h3 class="page-title mb-10">Nos produits</h3>
                                <div class="breadcrumb-menu d-flex justify-content-center">
                                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                        <ul class="trail-items">
                                            <li class="trail-item trail-begin"><a href="{{ route('home') }}"><span>Accueil</span></a></li>
                                            <li class="trail-item trail-end"><span>Catalogue</span></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title area end  -->

            <!-- product area start  -->
            <div class="product-area pt-50">
                <div class="container border-bottom pb-65">
                    <div class="row justify-content-start">
                        <div class="col-lg-10">
                            <div class="cp-services2-title-wrap t-left mb-35">
                                <div class="cp-section-title">
                                    <span class="cp-subtitle mb-15 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3s">Nos produits classiques</span>
                                    <h2 class="cp-title mb-25 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                                        <span>Des produits haut de gamme que vous pouvez personnaliser et vendre.</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-start wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div class="col-xl-10">
                            <div class="cp-product-menu mb-60 t-left">
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
                                        <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId" class="image">
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
                                            <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId">T-shirts & débardeurs</a>
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
                                        <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId" class="image">
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
                                            <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId">T-shirt femme blanc</a>
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
                                        <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId" class="image">
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
                                            <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId">T-shirt tendance</a>
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
                                        <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId" class="image">
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
                                            <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId">T-shirt vert foncé</a>
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
                                        <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId" class="image">
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
                                            <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId">T-shirt blanc</a>
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
                                        <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId" class="image">
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
                                            <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId">Carte de visite</a>
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
                                        <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId" class="image">
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
                                            <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId">T-shirts hommes</a>
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
                                        <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId" class="image">
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
                                            <a href="{{ asset('assets/img/product/product-shop-1.jpg') }}" data-bs-toggle="modal" data-bs-target="#productModalId">T-shirts noirs</a>
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

@endsection
