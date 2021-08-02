{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <x-utils.link
            :href="route('frontend.index')"
            :text="appName()"
            class="navbar-brand" />

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="@lang('Toggle navigation')">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @if(config('boilerplate.locale.status') && count(config('boilerplate.locale.languages')) > 1)
                    <li class="nav-item dropdown">
                        <x-utils.link
                            :text="__(getLocaleName(app()->getLocale()))"
                            class="nav-link dropdown-toggle"
                            id="navbarDropdownLanguageLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false" />

                        @include('includes.partials.lang')
                    </li>
                @endif

                @guest
                    <li class="nav-item">
                        <x-utils.link
                            :href="route('frontend.auth.login')"
                            :active="activeClass(Route::is('frontend.auth.login'))"
                            :text="__('Login')"
                            class="nav-link" />
                    </li>

                    @if (config('boilerplate.access.user.registration'))
                        <li class="nav-item">
                            <x-utils.link
                                :href="route('frontend.auth.register')"
                                :active="activeClass(Route::is('frontend.auth.register'))"
                                :text="__('Register')"
                                class="nav-link" />

                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <x-utils.link
                            href="#"
                            id="navbarDropdown"
                            class="nav-link dropdown-toggle"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            v-pre
                        >
                            <x-slot name="text">
                                <img class="rounded-circle" style="max-height: 20px" src="{{ $logged_in_user->avatar }}" />
                                {{ $logged_in_user->name }} <span class="caret"></span>
                            </x-slot>
                        </x-utils.link>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if ($logged_in_user->isAdmin())
                                <x-utils.link
                                    :href="route('admin.dashboard')"
                                    :text="__('Administration')"
                                    class="dropdown-item" />
                            @endif

                            @if ($logged_in_user->isUser())
                                <x-utils.link
                                    :href="route('frontend.user.dashboard')"
                                    :active="activeClass(Route::is('frontend.user.dashboard'))"
                                    :text="__('Dashboard')"
                                    class="dropdown-item"/>
                            @endif

                            <x-utils.link
                                :href="route('frontend.user.account')"
                                :active="activeClass(Route::is('frontend.user.account'))"
                                :text="__('My Account')"
                                class="dropdown-item" />

                            <x-utils.link
                                :text="__('Logout')"
                                class="dropdown-item"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <x-slot name="text">
                                    @lang('Logout')
                                    <x-forms.post :action="route('frontend.auth.logout')" id="logout-form" class="d-none" />
                                </x-slot>
                            </x-utils.link>
                        </div>
                    </li>
                @endguest
            </ul>
        </div><!--navbar-collapse-->
    </div><!--container-->
</nav> --}}

<header class="header" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">
            <img src="{{ asset('img/logofpi.png') }}" class="img" /> Fiit Protection Internationale
        </a> 
        
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list grid">
                <li class="nav__item">
                    <a href="#home" class="nav__link active-link">
                        <i class="uil uil-estate nav__icon"></i> Accueil
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link">
                        <i class="uil uil-user nav__icon"></i> Agence
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#services" class="nav__link">
                        <i class="uil uil-briefcase nav__icon"></i> Nos Services
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link">
                        <i class="uil uil-message nav__icon"></i> Contactez-nous
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#portfolio" class="nav__link">
                        <i class="uil uil-scenery nav__icon"></i> Recrutement
                    </a>
                </li>
            </ul>
            <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>
        <div class="nav__btns">
            <!-- Theme change Button -->
            {{-- <i class="uil uil-moon change-theme" id="theme-button"></i> --}}

            <div class="nav__toggle" id="nav-toggle">
                <i class="uil uil-apps"></i>
            </div>
        </div>
    </nav>
</header>

@if (config('boilerplate.frontend_breadcrumbs'))
    @include('frontend.includes.partials.breadcrumbs')
@endif
