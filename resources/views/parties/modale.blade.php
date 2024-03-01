@forelse ($prod as $p)
     <!-- shop modal start -->
     <div class="modal fade" id="{{"produit".$p->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                <img src="{{ asset('assets/img/product/'.$p->img1) }}" alt="img not found">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('assets/img/product/'.$p->img2) }}" alt="img not found">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('assets/img/product/'.$p->img3) }}" alt="img not found">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('assets/img/product/'.$p->img4) }}" alt="img not found">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                                <img src="{{ asset('assets/img/product/'.$p->img1) }}" alt="img not found">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                                <img src="{{ asset('assets/img/product/'.$p->img2) }}" alt="img not found">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                                <img src="{{ asset('assets/img/product/'.$p->img3) }}" alt="img not found">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                                <img src="{{ asset('assets/img/product/'.$p->img4) }}" alt="img not found">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4>
                                        <a href="{{ route('pricing', ['id' =>$p->id]) }}">{{ $p->nom }}</a>
                                    </h4>
                                    <div class="product__modal-des mb-40">
                                        <p>
                                            {{  $p->description }}
                                        </p>
                                    </div>
                                    <div class="product__stock">
                                        <span>Disponibilité :</span>
                                        <span > {{  $p->qte>0?"En stock":"En ripture de stock" }}</span>
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
@empty

@endforelse
