@extends('frontend.layouts.app')

@section('title', __('Login'))

@section('content')
    <div class="container py-4">

        <h2 class="text-center py-3">
            @lang('Login') : Attention Espace réservée aux administrateurs
        </h2>
        <!--row-->
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6">
                <form action="{{ route('frontend.auth.login') }}" method="post">
                    @csrf
                    <div class="screen-1">
                        <img src="{{ asset('img/LogoFPI.png') }}" class="logo" />
                        <div class="email">
                            <label for="email">Adresse Email</label>
                            <div class="sec-2">
                                <ion-icon name="mail-outline"></ion-icon><input type="email" name="email"
                                    placeholder="user@exemple.com" value="{{ old('email') }}" maxlength="255" required
                                    autofocus autocomplete="email" />
                            </div>
                        </div>
                        <div class="password">
                            <label for="password">Mot de passe</label>
                            <div class="sec-2">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                                <input class="pas" type="password" name="password" placeholder="xxxxxxxx" />
                                <ion-icon class="show-hide" name="eye-outline"></ion-icon>
                            </div>
                        </div>
                        <button class="login" type="submit">Login </button>
                        <div class="footer"><span>
                                <x-utils.link :href="route('frontend.auth.password.request')" :text="__('Forgot Your Password?')" />
                            </span></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--container-->
@endsection
