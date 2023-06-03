@extends('layouts.auth')

@section('auth-content')

            <!-- sing in area start here  -->
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
                                <h3 class="cp-signin-title t-center">Connectez-vous à votre compte</h3>

                                <form action="#">
                                    <div class="cp-input-field">
                                        <label for="name" role="button">Adresse e-mail</label>
                                        <input type="text" required id="name" autofocus>
                                        <i class="far fa-user"></i>
                                    </div>
                                    <div class="cp-input-field">
                                        <label for="password" role="button">Mot de passe</label>
                                        <input type="password" required id="password">
                                        <i class="far fa-lock-alt"></i>
                                    </div>
                                    <div class="cp-input-field sign-flex checkbox d-flex align-items-center justify-content-between">
                                        <div class="cp-input">
                                            <input id="remember" type="checkbox">
                                            <label for="remember" role="button">Rester connecté</label>
                                        </div>
                                        <div class="cp-input-password">
                                            <a href="#" class="forgotpassword">Mot de passe oublié</a>
                                        </div>
                                    </div>

                                    <div class="cp-sign-btn mt-35 mb-35">
                                        <button type="submit" class="cp-border-btn w-100">
                                            Connexion
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
                                        <span>Vous n'avez pas de compte ? <a href="{{ route('register') }}">S'inscrire</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- sing in area end here  -->

@endsection