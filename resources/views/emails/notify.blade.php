@component('mail::message')
# Bonjour {{ $user->name }}

@component('mail::panel')
Vous avez une nouvel commance provenant du site.
Merci de vous connectez comme administrateur pour le voir.
@endcomponent
@component('mail::panel')
{{-- <table class="table">
    <thead>
        <tr>
            <th class="cp-cart-product-name">Nom du produit</th>
            <th class="cp-cart-product-quantity">Quantité</th>
            <th class="cp-cart-product-price">Prix unitaire</th>
            <th class="cp-cart-product-total">Prix total</th>
            <th class="cp-cart-product-total">Option</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($cmd as $pt)
        <tr>
            <td>
                <a href=""><img src="{{ asset('assets/img/product/'.$pt->produit->img2) }}"
                        alt="product">{{$pt->produit->nom }}</a>
            </td>

            <td class="product-quantity text-center">
                <div class="product-quantity mt-10 mb-10">
                    <div class="product-quantity-form cp-cart-quantity">
                        <form action="#">
                            @if ($pt->qte>1)
                            <button class="cart-minus" id="{{ $pt->produit->id }}"
                                onclick="addNbrCard(this,'moins')">
                                <i class="far fa-minus"></i></button>
                            @endif
                            <input class="cart-input" type="text" value="{{ $pt->qte }}">
                            <button class="cart-plus" id="{{ $pt->produit->id }}"
                                onclick="addNbrCard(this,'plus')"><i
                                    class="far fa-plus"></i></button>
                        </form>
                    </div>
                </div>
            </td>
            <td>{{ $pt->produit->prix." ".$pt->produit->monaie }}</td>
            <td>{{$pt->produit->prix*$pt->qte." ".$pt->produit->monaie}}</td>
            <td>
                <a href="#" alt="Rétirer du panier" id="{{ $pt->id }}"
                    onclick="deletTpCard(this)">
                    <i class="far fa-trash-alt" alt="Rétirer du panier"></i></a>
            </td>
        </tr>
        @empty
        <tr>

            <a href="{{ route('home') }}" class="cp-btn"
                style="background: red;margin-bottom: 10px;">Retourner vers l'accueil</a>

        </tr>

        @endforelse

    </tbody>
</table> --}}
@endcomponent

@component('mail::button', ['url' => config('app.url')])
Aller sur la partie admin
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
