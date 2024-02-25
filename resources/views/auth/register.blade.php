@extends('layouts.auth')

@section('auth-content')

            <!-- sing up area start here  -->
            <section class="cp-signin-area pt-30 pb-30">
                <div class="container">
                    <div class="row pb-4 wow fadeInUp animated" data-wow-duration="1.5s">
                        <div class="col-lg-2 col-8 mx-auto">
                            <div class="bg-image">
                                <img src="{{ asset('assets/img/logo/logo-black.png') }}" alt="logo" class="img-fluid">
                                <div class="mask"><a href="{{ route('home') }}" class="stretched-link"></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center wow fadeInUp animated" data-wow-duration="1.5s">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="cp-signin-wrap">
                                <h3 class="cp-signin-title t-center">Créez votre compte</h3>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="cp-input-field">
                                                <label for="name" role="button">Votre nom</label>
                                                <input type="text" name="name" id="name" autofocus>
                                                <i class="far fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="cp-input-field">
                                                <label for="firstname" role="button">Votre prénom</label>
                                                <input type="text" name="prenom" id="firstname">
                                                <i class="far fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="cp-input-field">
                                                <label for="email" role="button">Votre e-mail</label>
                                                <input type="email" name="email" id="email">
                                                <i class="far fa-envelope-open"></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="cp-input-field">
                                                <label for="password" role="button">Mot de passe</label>
                                                <input type="password" name="password" id="password">
                                                <i class="far fa-lock-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="cp-input-field">
                                                <label for="confirm_password" role="button">Confirmer mot de passe</label>
                                                <input type="password" name="password_confirmation" id="confirm_password">
                                                <i class="far fa-lock-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-check">
                                                <input type="checkbox" id="aggree" class="form-check-input">
                                                <label for="aggree" role="button" class="form-check-label">J'accepte les conditions et la politique de confidentialité</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cp-signup-btn mt-30 mb-30">
                                        <button type="submit" class="cp-border-btn w-100">
                                            Inscription
                                            <span class="cp-border-btn__inner">
                                                <span class="cp-border-btn__blobs">
                                                    <span class="cp-border-btn__blob"></span>
                                                    <span class="cp-border-btn__blob"></span>
                                                    <span class="cp-border-btn__blob"></span>
                                                    <span class="cp-border-btn__blob"></span>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="no-account t-center">
                                        <span>Vous avez déjà un compte? <a href="{{ route('login') }}">Se connecter</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- sing up area end here  -->

@endsection